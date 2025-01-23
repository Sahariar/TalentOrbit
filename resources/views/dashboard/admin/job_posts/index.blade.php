@extends('layouts.' . ($layout ?? 'dashboard')) <!-- Default to 'dashboard' layout -->

@section('content')
    <div class="page-content">
        <div class="container-fluid px-[0.625rem]">
            <div class="grid grid-cols-1 pb-6">
                <div class="md:flex items-center justify-between px-[2px]">
                    <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow dark:text-gray-100 mb-2 md:mb-0">Job Post
                        List</h4>
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
                                        class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Job
                                        Posts</a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <div class="">
                                <div class="relative overflow-x-auto">
                                    <div>
                                        <table class="w-full">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                        Job Title</th>
                                                        <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                        Company Name
                                                    </th>
                                                        <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                        Salary Range
                                                    </th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                        Expiration Date
                                                    </th>

                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                        Status</th>
                                                    <th
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                        Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200">
                                                @foreach ($jobs as $job)
                                                    <tr
                                                        class="text-sm text-gray-700 transition-all duration-200 border-b dark:text-gray-100 border-gray-50 dark:border-zinc-600 hover:bg-gray-50/50">
                                                        <td class="px-6 py-4">
                                                            <div class="flex items-center">
                                                                @if ($job->image)
                                                                    <img src="{{ Storage::url($job->image) }}"
                                                                        class="w-20 h-20">
                                                                @else
                                                                    <div class="w-20 h-20 bg-gray-200 flex justify-center items-center">
                                                                        <p>
                                                                            No Image
                                                                        </p>

                                                                    </div>
                                                                @endif
                                                                <div class="ml-3">
                                                                    <p class="font-medium">{{ $job->title }}</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <a href="{{ route('admin.companies.show', $job->company_profile->id) }}" class="text-sky-500 hover:text-sky-800">{{ $job->company_profile->name }}</a>

                                                        </td>
                                                        <td class="px-6 py-4">
                                                        ${{ $job->salary_range }} Per Year
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            {{ $job->expiration_date }}
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <span
                                                                class="px-2 py-1 text-xs rounded-full {{ $job->is_approved ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                                                {{ $job->is_approved ? 'Approved' : 'Pending' }}
                                                            </span>
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <div class="flex space-x-2">
                                                                <x-viewbtn
                                                                href="{{ route('admin.job_posts.show', $job->company_profile) }}">
                                                                {{ __('View') }}
                                                                </x-viewbtn>
                                                                @if (!$job->is_approved)
                                                                    <form
                                                                        action="{{ route('admin.companies.approve', $job) }}"
                                                                        method="POST" class="inline">
                                                                        @csrf
                                                                        @method('PATCH')
                                                                        <x-approvebtn>
                                                                            {{ __('Approve') }}
                                                                        </x-approvebtn>

                                                                    </form>
                                                                @else
                                                                    <form
                                                                        action="{{ route('admin.companies.reject', $job) }}"
                                                                        method="POST" class="inline">
                                                                        @csrf
                                                                        @method('PATCH')
                                                                        <x-rejectbtn>
                                                                            {{ __('Reject') }}
                                                                            </x-rejectbtn>

                                                                    </form>
                                                                @endif
                                                                <form action="{{ route('admin.companies.delete', $job) }}"
                                                                    method="POST" class="inline"
                                                                    onsubmit="return confirm('Are you sure?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <x-deletebtn>{{ __('Delete') }}
                                                                    </x-deletebtn>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="p-4">
                                {{ $jobs->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
