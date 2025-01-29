@extends('layouts.' . ($layout ?? 'dashboard')) <!-- Default to 'dashboard' layout -->

@section('content')
    <div class="page-content">
        <div class="container-fluid px-[0.625rem]">
            <div class="grid grid-cols-1 pb-6">
                <div class="md:flex items-center justify-between px-[2px]">
                    <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow dark:text-gray-100 mb-2 md:mb-0">Tag
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
                                        class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Tag</a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="p-6 space-y-6">
                {{-- tag Details Card --}}
                <div class="bg-white rounded-lg shadow">
                    <div class="p-4 sm:p-6 border-b">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <div>
                                    <h1 class="text-2xl font-bold">{{ $tag->title }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 sm:p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h2 class="text-lg font-semibold mb-4">Tag Information</h2>
                            <dl class="space-y-3">
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Created Date</dt>
                                    <dd class="mt-1">{{ $tag->created_at->format('F j, Y') }}</dd>
                                </div>
                            </dl>
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold mb-4">Tag Description</h2>
                            <div class="prose max-w-none">
                                {!! $tag->description ?? '<p class="text-gray-400">No description provided</p>' !!}
                            </div>
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
                            @if ($tag->job_posts->count() > 0)
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
                                                tag
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
                                        @foreach ($tag->job_posts as $job)
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
                                                    {{-- @foreach ($job->tag as $tag)
                        <span class="px-2 py-1 text-xs bg-gray-100 rounded-full">{{ $tag->name }}</span>
                    @endforeach --}}
                                                    <div class="flex flex-wrap gap-1">
                                                        <span
                                                            class="px-2 py-1 text-xs bg-gray-100 rounded-full">{{ $job->tag->name }}</span>
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
