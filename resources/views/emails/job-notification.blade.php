<!DOCTYPE html>
<html>
<head>
    <title>Job Notification</title>
</head>
<body>
    <h1>New Job Posted in Your Category {{ category }}</h1>
    <p>Dear {{ $candidate->name }},</p>
    <p>We have a new job posted in the category you are subscribed to.</p>
    <p>Job Title: {{ $job->title }}</p>
    <p>Job Description: {!! $job->description !!}</p>
    <p>Click <a href="{{ $job->apply_link }}">here</a> to apply.</p>
</body>
</html>
