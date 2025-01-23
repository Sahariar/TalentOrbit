@extends('layouts.' . ($layout ?? 'dashboard')) <!-- Default to 'dashboard' layout -->

@section('content')
    <div class="page-content">
        <div class="container-fluid px-[0.625rem]">
            <div class="grid grid-cols-1 pb-6">
                <div class="md:flex items-center justify-between px-[2px]">
                    <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow dark:text-gray-100 mb-2 md:mb-0">Companies
                        Information Dashboard</h4>
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                            <li class="inline-flex items-center">
                                <a href="#"
                                    class="inline-flex items-center text-sm text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center rtl:mr-2">
                                    <i
                                        class="font-semibold text-gray-600 align-middle far fa-angle-right text-13 rtl:rotate-180 dark:text-zinc-100"></i>
                                    <a href="#"
                                        class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Companies</a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 lg:col-span-9">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body ">
                            <div class="grid grid-cols-12 ">
                                <div class="col-span-9">
                                    <div class="flex flex-wrap items-center">
                                        <div class="w-20 h-20 ltr:mr-1 rtl:ml-1">
                                            @if ($companyProfile->image)
                                                <img src="{{ Storage::url($companyProfile->image) }}"
                                                    alt="{{ $companyProfile->name }}"
                                                    class="w-20 h-20 rounded-lg object-cover">
                                            @else
                                                <div
                                                    class="w-20 h-20 rounded-lg bg-gray-200 flex items-center justify-center">
                                                    <span class="text-gray-500">No Image</span>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="md:ml-3 mt-3 md:mt-0">
                                            <h5 class="text-gray-700 text-16 dark:text-gray-100">{{ $companyProfile->name }}
                                            </h5>
                                            <p class="mb-4 text-gray-500 dark:text-zinc-100 text-13">
                                                {{ $companyProfile->user->email }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-3">
                                    <div class="flex flex-wrap items-center justify-end">
                                        <div class="relative">
                                            <div class="flex gap-2">
                                                @if (!$companyProfile->is_approved)
                                                    <form action="{{ route('admin.companies.approve', $companyProfile) }}"
                                                        method="POST" class="inline">
                                                        @csrf
                                                        @method('PATCH')
                                                        <x-approvebtn>
                                                            {{ __('Approve') }}
                                                        </x-approvebtn>
                                                    </form>
                                                @else
                                                    <form action="{{ route('admin.companies.reject', $companyProfile) }}"
                                                        method="POST" class="inline">
                                                        @csrf
                                                        @method('PATCH')
                                                        <x-rejectbtn>
                                                            {{ __('Reject') }}
                                                        </x-rejectbtn>

                                                    </form>
                                                @endif
                                                <form action="{{ route('admin.companies.delete', $companyProfile) }}"
                                                    method="POST" class="inline"
                                                    onsubmit="return confirm('Are you sure?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <x-deletebtn>{{ __('Delete') }}
                                                    </x-deletebtn>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nav-tabs border-b-tabs">

                                <ul class="flex flex-wrap w-full text-sm font-medium text-center text-black-500 nav  border-t border-gray-50 pt-5  mt-6 dark:border-zinc-600"
                                    id="pills-tab" role="tablist">
                                    <li>
                                        <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="tab-full-u-home"
                                            class="px-3 pt-5 pb-[1.4rem] font-medium active">Overview</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="border-b card-body border-gray-50 dark:border-zinc-600">
                            <h5 class="text-gray-700 text-15 dark:text-gray-100">About</h5>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="pb-3">
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-12 md:col-span-10">
                                            <div class="text-gray-500 dark:text-zinc-100">
                                                <p class="mb-2">
                                                <div class="prose max-w-none">
                                                    {!! $companyProfile->description ?? '<p class="text-gray-400">No description provided</p>' !!}
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-span-12 lg:col-span-3">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body">
                            <h5 class="mb-4 text-gray-700 text-15 dark:text-gray-100">Company Information</h5>
                            <dl class="space-y-3">
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Status</dt>
                                    <dd class="mt-1">
                                        <span
                                            class="px-2 py-1 text-sm rounded-full {{ $companyProfile->is_approved ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                            {{ $companyProfile->is_approved ? 'Approved' : 'Pending Approval' }}
                                        </span>
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
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body">
                            <h5 class="mb-4 text-gray-700 text-15 dark:text-gray-100">Portfolio</h5>
                            <ul class="mb-0 list-unstyled">
                                <li class="py-2">
                                    @if ($companyProfile->url)
                                        <a href="{{ $companyProfile->url }}" target="_blank"
                                            class="text-gray-600 hover:underline">
                                            <i class="mdi mdi-web text-black-500 ltr:mr-1 rtl:ml-1"></i> Website</a>
                                        </a>
                                    @else
                                        <span class="text-gray-400">Not provided</span>
                                    @endif
                                </li>
                                <li class="py-2">
                                    @if ($companyProfile->url)
                                        <a href="{{ $companyProfile->linkedin_url }}" target="_blank"
                                            class="text-gray-600 hover:underline">
                                            <i class="mdi mdi-linkedin text-black-500 ltr:mr-1 rtl:ml-1"></i> Linkdin</a>
                                        </a>
                                    @else
                                        <span class="text-gray-400">Not provided</span>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="grid grid-cols-12 gap-6 py-5">
                <div class="col-span-9">
                    {{-- companyProfile Jobs --}}
                    <div class="bg-white rounded-lg shadow">
                        <div class="p-4 border-b">
                            <h2 class="text-lg font-semibold">Posted Jobs</h2>
                        </div>
                        <div class="overflow-x-auto">
                            @if ($companyProfile->job_posts->count() > 0)
                                <table class="w-full">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                Title
                                            </th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                Posted
                                                Date</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                Status
                                            </th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                Category
                                            </th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                Totale View
                                            </th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200">
                                        @foreach ($companyProfile->job_posts as $job)
                                            <tr>
                                                <td class="px-6 py-4">
                                                    <div>
                                                        <div class="flex items-center">
                                                            @if ($job->image)
                                                                <img src="{{ Storage::url($job->image) }}"
                                                                    class="w-20 h-20">
                                                            @else
                                                                <div
                                                                    class="w-20 h-20 bg-gray-200 flex justify-center items-center">
                                                                    <p>
                                                                        No Image
                                                                    </p>

                                                                </div>
                                                            @endif
                                                            <div class="ml-3">
                                                                <p class="font-medium">{{ $job->title }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">{{ $job->created_at->format('M j, Y') }}</td>
                                                <td class="px-6 py-4">
                                                    <span
                                                        class="px-2 py-1 text-xs rounded-full {{ $job->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                        {{ $job->is_active ? 'Active' : 'Inactive' }}
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{-- @foreach ($job->category as $category)
                        <span class="px-2 py-1 text-xs bg-gray-100 rounded-full">{{ $category->name }}</span>
                    @endforeach --}}
                                                    <div class="flex flex-wrap gap-1">
                                                        <span
                                                            class="px-2 py-1 text-xs bg-gray-100 rounded-full">{{ $job->category->name }}</span>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">

                                                    <div class="flex flex-wrap gap-1">
                                                        <span
                                                            class="px-2 py-1 text-sm rounded-full">
                                                            <i class="mdi mdi-eye text-black-500 ltr:mr-1 rtl:ml-1"></i>
                                                            {{ $job->view_count }}</span>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="flex space-x-2">
                                                        <x-viewbtn href="{{ route('admin.job_posts.show', $job) }}">
                                                            {{ __('View') }}
                                                        </x-viewbtn>
                                                        <form action="{{ route('admin.job_posts.toggle-status', $job) }}"
                                                            method="POST" class="inline">
                                                            @csrf
                                                            @method('PATCH')
                                                            <x-approvebtn>
                                                                {{ $job->is_active ? 'Deactivate' : 'Activate' }}
                                                            </x-approvebtn>
                                                        </form>
                                                        <form action="{{ route('admin.job_posts.delete', $job) }}"
                                                            method="POST" class="inline"
                                                            onsubmit="return confirm('Are you sure?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <x-deletebtn>
                                                                {{ __('Delete') }}
                                                            </x-deletebtn>
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
    </div>

@endsection
