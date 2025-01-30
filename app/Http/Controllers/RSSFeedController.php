<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Support\Facades\Response;

class RSSFeedController extends Controller
{
    //
    public function index()
    {
        // Fetch lastest Jobs
        $jobs = JobPost::where('is_public', 'active')
            ->orderBy('created_at', 'desc')
            ->limit(20)
            ->get();

        // created RSS FEED.

        // Create RSS feed structure
        $rssFeed = '<?xml version="1.0" encoding="UTF-8" ?>';
        $rssFeed .= '<rss version="2.0">';
        $rssFeed .= '<channel>';
        $rssFeed .= '<title>Job Board RSS Feed</title>';
        $rssFeed .= '<link>'.url('/').'</link>';
        $rssFeed .= '<description>Latest job posts</description>';

        foreach ($jobs as $job) {
            $rssFeed .= '<item>';
            $rssFeed .= '<title>'.htmlspecialchars($job->title).'</title>';
            $rssFeed .= '<link>'.url('/jobs/'.$job->id).'</link>';
            $rssFeed .= '<description>'.htmlspecialchars($job->description).'</description>';
            $rssFeed .= '<pubDate>'.$job->created_at->toRssString().'</pubDate>';
            $rssFeed .= '<category>'.htmlspecialchars($job->tags).'</category>';
            $rssFeed .= '</item>';
        }
        $rssFeed .= '</channel>';
        $rssFeed .= '</rss>';

        return Response::make($rssFeed, 200, ['Content-Type' => 'application/rss+xml']);
    }
}
