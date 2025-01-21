@extends('layouts.' . ($layout ?? 'dashboard'))  <!-- Default to 'dashboard' layout -->

@section('content')
    <div class="page-content">
        <div class="container-fluid px-[0.625rem]">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 xl:col-span-12">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Job Posts Table of This Company</h6>
                        </div>
                        <div class="card-body">
                            <div class="relative overflow-x-auto">
                                <div class="grid grid-cols-3 gap-4 p-4">
                                    <div class="pb-4 bg-white dark:bg-transparent text-left">
                                        <label for="table-search" class="sr-only">Search</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <i class="pt-1 text-lg text-gray-400 mdi mdi-magnify"></i>
                                            </div>
                                            <input type="text" id="table-search-users" class="block p-2 pl-10 text-sm text-gray-900 border rounded border-gray-50 w-80 bg-gray-50/20 focus:ring-0 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100" placeholder="Search for users">
                                        </div>
                                    </div>
                                    <div></div>
                                    <div class="text-right">
                                        <a href="{{ route('company.job-posts.create') }}" role="button" class="text-white btn bg-violet-500 border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600">
                                            Create Job Post
                                        </a>
                                    </div>
                                </div>                                  
                                <table class="w-full text-sm text-left text-gray-500">
                                    <thead class="text-xs text-gray-700 uppercase dark:text-gray-100 bg-gray-50/50 dark:bg-zinc-700">
                                        <tr>
                                            <th scope="col" class="p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-all" type="checkbox" class="w-4 h-4 border-gray-100 rounded focus:ring-0 focus:outline-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-500 dark:checked:bg-violet-500">
                                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                                </div>
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Job Title
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Apply Link
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Expiration Date
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Is Available?
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Apply Count
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jobPosts as $jobPost)
                                            <tr class="bg-white border-b border-gray-50 hover:bg-gray-50/50 dark:bg-zinc-700/50 dark:border-zinc-600">
                                                <td class="w-4 p-4">
                                                    <div class="flex items-center">
                                                        <input id="checkbox-all" type="checkbox" class="w-4 h-4 border-gray-100 rounded focus:ring-0 focus:outline-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-500 dark:checked:bg-violet-500">
                                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 dark:text-zinc-100/80">
                                                    {{ $jobPost->title }}
                                                </td>
                                                <td class="px-6 py-4 dark:text-zinc-100/80">
                                                    {{ $jobPost->apply_link }}
                                                </td>
                                                <td class="px-6 py-4 dark:text-zinc-100/80">
                                                    {{ $jobPost->expiration_date }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="flex items-center dark:text-zinc-100/80">
                                                        @if ($jobPost->is_available)
                                                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 ltr:mr-2 rtl:ml-2"></div> 
                                                            {{ 'Yes' }}
                                                        @else
                                                            <div class="h-2.5 w-2.5 rounded-full bg-red-500 ltr:mr-2 rtl:ml-2"></div> 
                                                            {{ 'No' }}
                                                        @endif
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 dark:text-zinc-100/80">
                                                    {{ $jobPost->apply_count }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    <a href="#" class="font-medium text-blue-600 hover:underline">View</a>
                                                    <a href="{{ route('company.job-posts.edit',$jobPost->id) }}" class="font-medium text-blue-600 hover:underline">Edit</a>
                                                    <form action="{{ route('company.job-posts.destroy',$jobPost->id) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn text-red-800">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <br>
                                {{ $jobPosts->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection