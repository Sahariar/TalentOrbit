@extends('layouts.' . ($layout ?? 'dashboard'))  <!-- Default to 'dashboard' layout -->

@section('content')
    <div class="page-content">
        <div class="container-fluid px-[0.625rem]">
            <div class="grid grid-cols-1 pb-6">
                <div class="md:flex items-center justify-between px-[2px]">
                    <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow dark:text-gray-100 mb-2 md:mb-0">Companies Information Dashboard</h4>
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                            <li class="inline-flex items-center">
                                <a href="#" class="inline-flex items-center text-sm text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center rtl:mr-2">
                                    <i class="font-semibold text-gray-600 align-middle far fa-angle-right text-13 rtl:rotate-180 dark:text-zinc-100"></i>
                                    <a href="#" class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Companies</a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="p-6 space-y-6">
    {{-- companyProfile Details Card --}}
    <div class="bg-white rounded-lg shadow">
        <div class="p-4 sm:p-6 border-b">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    @if($companyProfile->image)
                        <img src="{{ Storage::url($companyProfile->image) }}" alt="{{ $companyProfile->name }}" class="w-20 h-20 rounded-lg object-cover">
                    @else
                        <div class="w-20 h-20 rounded-lg bg-gray-200 flex items-center justify-center">
                            <span class="text-gray-500">No Image</span>
                        </div>
                    @endif
                    <div>
                        <h1 class="text-2xl font-bold">{{ $companyProfile->name }}</h1>
                        <p class="text-gray-500">{{ $companyProfile->user->email }}</p>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    @if(!$companyProfile->is_approved)
                        <form action="{{ route('admin.companies.approve', $companyProfile) }}" method="POST">
                            @csrf
                            <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                                Approve Company
                            </button>
                        </form>
                    @else
                        <form action="{{ route('admin.companies.reject', $companyProfile) }}" method="POST">
                            @csrf
                            <button type="submit" class="px-4 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700">
                                Reject Company
                            </button>
                        </form>
                    @endif
                    <form action="{{ route('admin.companies.delete', $companyProfile) }}" method="POST" onsubmit="return confirm('Are you sure? This action cannot be undone.')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                            Delete Company
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="p-4 sm:p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h2 class="text-lg font-semibold mb-4">Company Information</h2>
                <dl class="space-y-3">
                    <div>
                        <dt class="text-sm font-medium text-gray-500">Status</dt>
                        <dd class="mt-1">
                            <span class="px-2 py-1 text-sm rounded-full {{ $companyProfile->is_approved ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                {{ $companyProfile->is_approved ? 'Approved' : 'Pending Approval' }}
                            </span>
                        </dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-gray-500">Website</dt>
                        <dd class="mt-1">
                            @if($companyProfile->url)
                                <a href="{{ $companyProfile->url }}" target="_blank" class="text-blue-600 hover:underline">
                                    {{ $companyProfile->url }}
                                </a>
                            @else
                                <span class="text-gray-400">Not provided</span>
                            @endif
                        </dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-gray-500">Location</dt>
                        <dd class="mt-1">{{ $companyProfile->location ?? 'Not provided' }}</dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-gray-500">Joined Date</dt>
                        <dd class="mt-1">{{ $companyProfile->created_at->format('F j, Y') }}</dd>
                    </div>
                </dl>
            </div>
            <div>
                <h2 class="text-lg font-semibold mb-4">Company Description</h2>
                <div class="prose max-w-none">
                    {!! $companyProfile->description ?? '<p class="text-gray-400">No description provided</p>' !!}
                </div>
            </div>
        </div>
    </div>

    {{-- companyProfile Jobs --}}
    <div class="bg-white rounded-lg shadow">
        <div class="p-4 border-b">
            <h2 class="text-lg font-semibold">Posted Jobs</h2>
        </div>
        <div class="overflow-x-auto">
            @if($companyProfile->job_posts->count() > 0)
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Posted Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Category</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($companyProfile->job_posts as $job)
                        <tr>
                            <td class="px-6 py-4">
                                <div>
                                    <p class="font-medium">{{ $job->title }}</p>
                                    <p class="text-sm text-gray-500">{{ Str::limit($job->description, 50) }}</p>
                                </div>
                            </td>
                            <td class="px-6 py-4">{{ $job->created_at->format('M j, Y') }}</td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 text-xs rounded-full {{ $job->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $job->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                    {{-- @foreach($job->category as $category)
                                        <span class="px-2 py-1 text-xs bg-gray-100 rounded-full">{{ $category->name }}</span>
                                    @endforeach --}}
                                    <div class="flex flex-wrap gap-1">
                                        <span class="px-2 py-1 text-xs bg-gray-100 rounded-full">{{ $job->category->name }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-2">
                                    <a href="{{ route('admin.jobs.show', $job) }}" class="text-blue-600 hover:text-blue-900">View</a>
                                    <form action="{{ route('admin.jobs.toggle-status', $job) }}" method="POST" class="inline">
                                        @csrf
                                        <button type="submit" class="text-yellow-600 hover:text-yellow-900">
                                            {{ $job->is_active ? 'Deactivate' : 'Activate' }}
                                        </button>
                                    </form>
                                    <form action="{{ route('admin.jobs.delete', $job) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="p-6 text-center text-gray-500">
                    No jobs posted yet.
                </div>
            @endif
        </div>
    </div>
</div>
        </div>
        </div>
    </div>

@endsection
