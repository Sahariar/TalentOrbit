@extends('layouts.' . ($layout ?? 'dashboard'))  <!-- Default to 'dashboard' layout -->

@section('content')
    <div class="page-content">
        <div class="container-fluid px-[0.625rem]">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 xl:col-span-12">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Post <strong>{{ $job_post->title }}</strong></h6>
                        </div>
                        <div class="card-body">
                            <div class="relative overflow-x-auto w-full">
                                <table class="w-full text-sm text-left text-gray-500 ">
                                    <thead class="text-sm text-gray-700 dark:text-gray-100 bg-gray-50 dark:bg-zinc-600">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Column Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Column Value
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-white border-b border-gray-50 dark:bg-zinc-700 dark:border-zinc-600">
                                            <th scope="row" class="px-6 py-3.5 font-medium text-gray-900 whitespace-nowrap dark:text-zinc-100">
                                                Job Title
                                            </th>
                                            <td class="px-6 py-3.5 dark:text-zinc-100">
                                                {{ $job_post->title }}
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-gray-50 dark:bg-zinc-700 dark:border-zinc-600">
                                            <th scope="row" class="px-6 py-3.5 font-medium text-gray-900 whitespace-nowrap dark:text-zinc-100">
                                                Job Description
                                            </th>
                                            <td class="px-6 py-3.5 dark:text-zinc-100">
                                                {{ str($job_post->description)->limit(30) }}
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-gray-50 dark:bg-zinc-700 dark:border-zinc-600">
                                            <th scope="row" class="px-6 py-3.5 font-medium text-gray-900 whitespace-nowrap dark:text-zinc-100">
                                                Apply Link
                                            </th>
                                            <td class="px-6 py-3.5 dark:text-zinc-100">
                                                {{ $job_post->apply_link }}
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-gray-50 dark:bg-zinc-700 dark:border-zinc-600">
                                            <th scope="row" class="px-6 py-3.5 font-medium text-gray-900 whitespace-nowrap dark:text-zinc-100">
                                                Job Expiration Date
                                            </th>
                                            <td class="px-6 py-3.5 dark:text-zinc-100">
                                                {{ $job_post->expiration_date }}
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-gray-50 dark:bg-zinc-700 dark:border-zinc-600">
                                            <th scope="row" class="px-6 py-3.5 font-medium text-gray-900 whitespace-nowrap dark:text-zinc-100">
                                                Is Job Public?
                                            </th>
                                            <td class="px-6 py-3.5 dark:text-zinc-100">
                                                {{ $job_post->is_public ? 'Yes' : 'No' }}
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-gray-50 dark:bg-zinc-700 dark:border-zinc-600">
                                            <th scope="row" class="px-6 py-3.5 font-medium text-gray-900 whitespace-nowrap dark:text-zinc-100">
                                                Is Job Available?
                                            </th>
                                            <td class="px-6 py-3.5 dark:text-zinc-100">
                                                {{ $job_post->is_available ? 'Yes' : 'No' }}
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-gray-50 dark:bg-zinc-700 dark:border-zinc-600">
                                            <th scope="row" class="px-6 py-3.5 font-medium text-gray-900 whitespace-nowrap dark:text-zinc-100">
                                                Job Location
                                            </th>
                                            <td class="px-6 py-3.5 dark:text-zinc-100">
                                                {{ $job_post->location }}
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-gray-50 dark:bg-zinc-700 dark:border-zinc-600">
                                            <th scope="row" class="px-6 py-3.5 font-medium text-gray-900 whitespace-nowrap dark:text-zinc-100">
                                                Job Salary Range
                                            </th>
                                            <td class="px-6 py-3.5 dark:text-zinc-100">
                                                {{ $job_post->salary_range }}
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-gray-50 dark:bg-zinc-700 dark:border-zinc-600">
                                            <th scope="row" class="px-6 py-3.5 font-medium text-gray-900 whitespace-nowrap dark:text-zinc-100">
                                                Is Job Active?
                                            </th>
                                            <td class="px-6 py-3.5 dark:text-zinc-100">
                                                {{ $job_post->is_active ? 'Yes' : 'No' }}
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-gray-50 dark:bg-zinc-700 dark:border-zinc-600">
                                            <th scope="row" class="px-6 py-3.5 font-medium text-gray-900 whitespace-nowrap dark:text-zinc-100">
                                                Job Application Count
                                            </th>
                                            <td class="px-6 py-3.5 dark:text-zinc-100">
                                                {{ $job_post->apply_count }}
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-gray-50 dark:bg-zinc-700 dark:border-zinc-600">
                                            <th scope="row" class="px-6 py-3.5 font-medium text-gray-900 whitespace-nowrap dark:text-zinc-100">
                                                Job View Count
                                            </th>
                                            <td class="px-6 py-3.5 dark:text-zinc-100">
                                                {{ $job_post->view_count }}
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-gray-50 dark:bg-zinc-700 dark:border-zinc-600">
                                            <th scope="row" class="px-6 py-3.5 font-medium text-gray-900 whitespace-nowrap dark:text-zinc-100">
                                                Job Featured Image
                                            </th>
                                            <td class="px-6 py-3.5 dark:text-zinc-100">
                                                {{ url('storage/' . $job_post->featured_image) ?? ('No Image') }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection