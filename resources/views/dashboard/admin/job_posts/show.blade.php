@extends('layouts.' . ($layout ?? 'dashboard')) <!-- Default to 'dashboard' layout -->

@section('content')
    <div class="page-content">
        <div class="container-fluid px-[0.625rem]">
            <div class="grid grid-cols-1 pb-6">
                <div class="md:flex items-center justify-between px-[2px]">
                    <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow dark:text-gray-100 mb-2 md:mb-0">Job Posts
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
                                        class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Job
                                        Posts</a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="grid grid-cols-1 ">

                <div class="grid grid-cols-1 gap-x-3 lg:grid-cols-12">

                    <div class="col-span-12 lg:col-span-8">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <div class="mb-3 text-center">
                                    <h4 class="text-gray-700 text-21 dark:text-gray-100">
                                        {{$job->title }}
                                    </h4>
                                </div>
                                <div class="mb-4">
                                    @if ($job->image)
                                    <img src="{{ Storage::url($job->image) }}" alt="{{ $job->name }}"
                                        class="p-1 mx-auto border border-gray-100 rounded dark:border-zinc-600 dark:bg-zinc-700">
                                @else
                                    <div class="p-1 h-48 mx-auto border rounded border-zinc-600 bg-zinc-500">
                                        <span class="text-gray-50 text-center">No Image</span>
                                    </div>
                                @endif

                                </div>

                                <div class="grid grid-cols-12 gap-5">
                                    <div class="col-span-12 md:col-span-3">
                                        <div class="text-center">
                                            <h6 class="mb-2 text-gray-700 dark:text-gray-100">Categories</h6>
                                            <p class="mb-3 text-gray-500 dark:text-zinc-100 text-15">Project</p>
                                        </div>
                                    </div>
                                    <div class="col-span-12 md:col-span-3">
                                        <div class="text-center">
                                            <h6 class="mb-2 text-gray-700 dark:text-gray-100">Post Date</h6>
                                            <p class="mb-3 text-gray-500 dark:text-zinc-100 text-15">{{ $job->created_at->format('F j, Y') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-span-12 md:col-span-3">
                                        <div class="text-center">
                                            <h6 class="mb-2 text-gray-700 dark:text-gray-100">Experation Date</h6>
                                            <p class="mb-3 text-gray-500 dark:text-zinc-100 text-15">{{ $job->expiration_date }}</p>
                                        </div>
                                    </div>
                                    <div class="col-span-12 md:col-span-3">
                                        <div class="text-center">
                                            <p class="mb-2 text-gray-500 dark:text-zinc-100">Post by</p>
                                            <h5 class="mb-3 text-gray-700 text-15 dark:text-gray-100">
                                                {{ $job->company_profile->name }}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4 border-gray-100 dark:border-zinc-600">

                                <div class="mt-4">
                                    <div class="text-gray-500 dark:text-zinc-100 text-14">
                                        {{ $job->description }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 lg:col-span-4">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body">
                                <div class="mt-8">
                                    <h5 class="text-gray-700 dark:text-gray-100">Job Information</h5>
                                        <div class="px-2 font-medium list-unstyled mt-6">
                                            <dl class="space-y-3">
                                                <div>
                                                    <dt class="text-sm font-medium text-gray-500">Status</dt>
                                                    <dd class="mt-1">
                                                        <span
                                                            class="px-2 py-1 text-sm rounded-full {{ $job->is_approved ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                                            {{ $job->is_approved ? 'Approved' : 'Pending Approval' }}
                                                        </span>
                                                    </dd>
                                                </div>
                                                <div>
                                                    <dt class="text-sm font-medium text-gray-500">Location</dt>
                                                    <dd class="mt-1">{{ $job->location ?? 'Not provided' }}</dd>
                                                </div>
                                                <div>
                                                    <dt class="text-sm font-medium text-gray-500">Salary Range </dt>
                                                    <dd class="mt-1">
                                                        <p class="">
                                                            ${{ $job->salary_range }} Per Year
                                                        </p>
                                                    </dd>
                                                </div>
                                                <div>
                                                    <dt class="text-sm font-medium text-gray-500">View Count</dt>
                                                    <dd class="mt-1">
                                                        <p>
                                                            {{ $job->view_count }}
                                                        </p>
                                                    </dd>
                                                </div>
                                            </dl>
                                        </div>

                                    </div>
                                <div class="mt-12">
                                    <h5 class="mb-4 font-medium text-gray-700 dark:text-gray-100">Categories</h5>
                                    <ul class="px-2 font-medium list-unstyled">
                                        <li><a href="#" class="block pb-4 text-gray-700 border-b border-gray-50 dark:text-gray-100 dark:border-zinc-600">Design<span class="bg-sky-500/40 text-black-500 ltr:ml-1 rtl:mr-1 ltr:float-right rtl:float-left text-xs py-0.5 px-2.5   rounded-full">02</span></a></li>
                                        <li><a href="#" class="block py-4 text-gray-700 border-b border-gray-50 dark:text-gray-100 dark:border-zinc-600">Development <span class="bg-sky-500/40 text-black-500 rounded-full ltr:ml-1 rtl:mr-1 ltr:float-right rtl:float-left ms-1 text-xs py-0.5 px-2.5   ">04</span></a></li>
                                        <li><a href="#" class="block py-4 text-gray-700 border-b border-gray-50 dark:text-gray-100 dark:border-zinc-600">Business<span class="bg-sky-500/40 text-black-500 rounded-full ltr:ml-1 rtl:mr-1 ltr:float-right rtl:float-left text-xs py-0.5 px-2.5   ">12</span></a></li>
                                        <li><a href="#" class="block py-4 text-gray-700 border-b border-gray-50 dark:text-gray-100 dark:border-zinc-600">Project<span class="bg-sky-500/40 text-black-500 rounded-full ltr:ml-1 rtl:mr-1 ltr:float-right rtl:float-left text-xs py-0.5 px-2.5   ">08</span></a></li>
                                        <li><a href="#" class="block pt-4 pb-0 text-gray-700 dark:text-gray-100 dark:border-zinc-600">Travel<span class="bg-sky-500/40 text-black-500 rounded-full ltr:ml-1 rtl:mr-1 ltr:float-right rtl:float-left text-xs py-0.5 px-2.5   ">10</span></a></li>
                                    </ul>
                                </div>
                                {{-- <div class="mt-8">
                                    <h5 class="text-gray-700 dark:text-gray-100">Popular Post</h5>
                                    <div class="list-group list-group-flush">
                                        <a href="javascript: void(0);" class="px-2 pt-0 pb-3 list-group-item text-muted">
                                            <div class="flex items-center">
                                                <div class=" ltr:mr-4 rtl:ml-4">
                                                    <img src="./assets/images/img-3.jpg" alt="" class="w-20 h-auto rounded">
                                                </div>
                                                <div class="flex-grow">
                                                    <h5 class="text-gray-700 text-13 dark:text-gray-100">Beautiful Day with Friends</h5>
                                                    <p class="mt-1 mb-0 text-gray-500 dark:text-zinc-100">10 Apr, 2022</p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript: void(0);" class="px-2 py-3 list-group-item text-muted">
                                            <div class="flex items-center">
                                                <div class=" ltr:mr-4 rtl:ml-4">
                                                    <img src="./assets/images/img-4.jpg" alt="" class="w-20 h-auto rounded">
                                                </div>
                                                <div class="flex-grow">
                                                    <h5 class="text-gray-700 text-13 dark:text-gray-100">Drawing a sketch</h5>
                                                    <p class="mt-1 mb-0 text-gray-500 dark:text-zinc-100">24 May, 2022</p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript: void(0);" class="px-2 py-3 list-group-item text-muted">
                                            <div class="flex items-center">
                                                <div class=" ltr:mr-4 rtl:ml-4">
                                                    <img src="./assets/images/img-1.jpg" alt="" class="w-20 h-auto rounded">
                                                </div>
                                                <div class="flex-grow">
                                                    <h5 class="text-gray-700 text-13 dark:text-gray-100">Coffee with friends</h5>
                                                    <p class="mt-1 mb-0 text-gray-500 dark:text-zinc-100">15 June, 2022</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div> --}}
                                {{-- <div class="mt-12">
                                    <h5 class="mb-4 font-medium text-gray-700 dark:text-gray-100">Tag Clouds</h5>
                                    <div class="flex flex-wrap gap-2 px-2">
                                        <a href="#" class="text-13"><span class="bg-sky-500/40 text-black-500 px-1 py-0.5 rounded font-medium  ">Design</span></a>
                                        <a href="#" class="text-13"><span class="bg-sky-500/40 text-black-500 px-1 py-0.5 rounded font-medium  ">Development</span></a>
                                        <a href="#" class="text-13"><span class="bg-sky-500/40 text-black-500 px-1 py-0.5 rounded font-medium  ">Wordpress</span></a>
                                        <a href="#" class="text-13"><span class="bg-sky-500/40 text-black-500 px-1 py-0.5 rounded font-medium  ">HTML</span></a>
                                        <a href="#" class="text-13"><span class="bg-sky-500/40 text-black-500 px-1 py-0.5 rounded font-medium  ">Project</span></a>
                                        <a href="#" class="text-13"><span class="bg-sky-500/40 text-black-500 px-1 py-0.5 rounded font-medium  ">Business</span></a>
                                        <a href="#" class="text-13"><span class="bg-sky-500/40 text-black-500 px-1 py-0.5 rounded font-medium  ">Travel</span></a>
                                        <a href="#" class="text-13"><span class="bg-sky-500/40 text-black-500 px-1 py-0.5 rounded font-medium  ">Photography</span></a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
