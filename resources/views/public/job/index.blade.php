@extends('layouts.' . ($layout ?? 'app'))  <!-- Default to 'app' layout -->
@section('content')

    <div class="page-content">

        <section class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.png')] bg-center bg-cover relative">
            <div class="container mx-auto">
                <div class="grid">
                    <div class="col-span-12">
                        <div class="text-center text-white">
                            <h3 class="mb-4 text-[26px]">Job List</h3>
                            <div class="page-next">
                                <nav class="inline-block" aria-label="breadcrumb text-center">
                                    <ol class="flex flex-wrap justify-center text-sm font-medium uppercase">
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a href="javascript:void(0)">Company</a></li>
                                        <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i> Job List </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('storage/images/about/shape.png') }}" alt="" class="absolute block bg-cover -bottom-0 dark:hidden">
        </section>

        <!-- Start team -->
        <section class="py-16">
            <div class="container mx-auto">
                <div class="grid grid-cols-12 gap-y-10 lg:gap-10">
                    <div class="col-span-12 xl:col-span-9">

                        <div>
                            <h6 class="mb-4 text-gray-900 dark:text-gray-50">Popular</h6>
                            <ul class="flex flex-wrap gap-3">
                                @foreach ($categories as $category)
                                    <li class="border p-[6px] border-gray-100/50 rounded group/joblist dark:border-gray-100/20">
                                        <div class="flex items-center">
                                            <div class="h-8 w-8 text-center group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 leading-[2.4] rounded group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 text-sm font-medium">
                                                {{ $category->job_posts->count() }}
                                            </div>
                                            <a href="{{ route('category.jobs',$category->id) }}" class="text-gray-900 ltr:ml-2 rtl:mr-2 dark:text-gray-50">
                                                <h6 class="mb-0 transition-all duration-300 fs-14 group-data-[theme-color=violet]:group-hover/joblist:text-violet-500 group-data-[theme-color=sky]:group-hover/joblist:text-sky-500 group-data-[theme-color=red]:group-hover/joblist:text-red-500 group-data-[theme-color=green]:group-hover/joblist:text-green-500 group-data-[theme-color=pink]:group-hover/joblist:text-pink-500 group-data-[theme-color=blue]:group-hover/joblist:text-blue-500">{{ $category->name }}</h6>
                                            </a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>


{{--                            ---------- job list start 1 ------------}}
                        <div class="mt-14">
                        @foreach ($jobPosts as $jobPost)

                            <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/job group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/job:bg-violet-500 group-data-[theme-color=sky]:group-hover/job:bg-sky-500 group-data-[theme-color=red]:group-hover/job:bg-red-500 group-data-[theme-color=green]:group-hover/job:bg-green-500 group-data-[theme-color=pink]:group-hover/job:bg-pink-500 group-data-[theme-color=blue]:group-hover/job:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                    <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                </div>
                                <div class="p-4">
                                    <div class="grid items-center grid-cols-12">
                                        <div class="col-span-12 lg:col-span-2">
                                            <div class="mb-4 text-center mb-md-0">
                                                {{-- <a href="company-details.html"><img src="{{ asset('storage/images/featured-job/img-01.png') }}" alt="" class="mx-auto img-fluid rounded-3"></a> --}}
                                                <a href="company-details.html"><img src="{{ url('storage/images/' . $jobPost->featured_image) }}" alt="post_image" class="mx-auto img-fluid rounded-3"></a>
                                            </div>
                                        </div>

                                        <!--end col-->
                                        <div class="col-span-12 lg:col-span-3">
                                            <div class="mb-2 mb-md-0">
                                                <h5 class="mb-1 fs-18"><a href="{{ route('jobs.show',$jobPost->id) }}" class="text-gray-900 dark:text-gray-50">{{ $jobPost->title }}</a>
                                                </h5>
                                                <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">{{ $jobPost->company_profile->name ?? 'N/A' }}</p>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-span-12 lg:col-span-3">
                                            <div class="mb-2 lg:flex">
                                                <div class="flex-shrink-0">
                                                    <i class="mr-1 mdi mdi-map-marker group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                </div>
                                                <p class="mb-0 text-gray-500 dark:text-gray-300">{{ $jobPost->location }}</p>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-span-12 lg:col-span-2">
                                            <div>
                                                <p class="mb-0 text-gray-500 dark:text-gray-300"> <i class="mr-1 uil uil-clock-three group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">
                                                    </i> {{ $jobPost->created_at->diffForHumans() }}</p>
                                            </div>
                                        </div>
                                        <!--end col-->

                                    </div>
                                    <!--end row-->

                                </div>
                                <div class="px-4 py-3 bg-gray-50 dark:bg-neutral-700">
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-12 lg:col-span-6">
                                            <div>
                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="font-medium text-gray-900 dark:text-gray-50">Experience :</span> 1
                                                    - 2 years</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-span-12 mt-2 lg:col-span-6 lg:mt-0">
                                            <div class="ltr:lg:text-right rtl:lg:text-left dark:text-gray-50">
                                                <a href="{{ route('jobs.apply',$jobPost->id) }}" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                        @endforeach
                    </div>
{{--                            ---------- job list end 1 ------------}}

                        <div class="grid grid-cols-12">
                            <div class="col-span-12">
                                <ul class="flex justify-center gap-2 mt-8">
                                    <!-- Previous Page Link -->
                                    @if ($jobPosts->onFirstPage())
                                        <li class="w-12 h-12 text-center border rounded-full cursor-default border-gray-100/50 dark:border-gray-100/20">
                                            <span class="cursor-auto text-16 leading-[2.8] dark:text-white">
                                                <i class="mdi mdi-chevron-double-left"></i>
                                            </span>
                                        </li>
                                    @else
                                        <li class="w-12 h-12 text-center border rounded-full border-gray-100/50 dark:border-gray-100/20">
                                            <a href="{{ $jobPosts->previousPageUrl() }}" class="flex items-center justify-center w-full h-full">
                                                <i class="mdi mdi-chevron-double-left text-16 leading-[2.8] dark:text-white"></i>
                                            </a>
                                        </li>
                                    @endif

                                    <!-- Pagination Links -->
                                    @foreach ($jobPosts->links()->elements as $element)
                                        @if (is_string($element))
                                            <!-- "..." Separator -->
                                            <li class="w-12 h-12 text-center text-gray-500 dark:text-gray-400">
                                                <span class="text-16 leading-[2.8]">{{ $element }}</span>
                                            </li>
                                        @endif

                                        @if (is_array($element))
                                            @foreach ($element as $page => $url)
                                                @if ($page == $jobPosts->currentPage())
                                                    <!-- Active Page -->
                                                    <li class="w-12 h-12 text-center text-white border border-transparent rounded-full cursor-pointer group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">
                                                        <a class="flex items-center justify-center w-full h-full" href="javascript:void(0)">
                                                            {{ $page }}
                                                        </a>
                                                    </li>
                                                @else
                                                    <!-- Other Pages -->
                                                    <li class="w-12 h-12 text-center border rounded-full cursor-pointer border-gray-100/50 dark:border-gray-100/20">
                                                        <a href="{{ $url }}" class="flex items-center justify-center w-full h-full dark:text-white">
                                                            {{ $page }}
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach

                                    <!-- Next Page Link -->
                                    @if ($jobPosts->hasMorePages())
                                        <li class="w-12 h-12 text-center border rounded-full border-gray-100/50 dark:border-gray-100/20">
                                            <a href="{{ $jobPosts->nextPageUrl() }}" class="flex items-center justify-center w-full h-full">
                                                <i class="mdi mdi-chevron-double-right text-16 leading-[2.8] dark:text-white"></i>
                                            </a>
                                        </li>
                                    @else
                                        <li class="w-12 h-12 text-center border rounded-full cursor-default border-gray-100/50 dark:border-gray-100/20">
                                            <span class="cursor-auto text-16 leading-[2.8] dark:text-white">
                                                <i class="mdi mdi-chevron-double-right"></i>
                                            </span>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-span-12 space-y-5 lg:col-span-3">
                        <form action="{{ route('jobs.filter') }}" method="GET">
                            <!-- Location -->
                            <div data-tw-accordion="collapse">
                                <div class="text-gray-700 accordion-item">
                                    <h6>
                                        <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 active">
                                            <span class="text-gray-900 dark:text-gray-50">Location</span>
                                            <i class="mdi mdi-chevron-down text-xl group-[.active]:rotate-180 text-gray-900 dark:text-gray-50"></i>
                                        </button>
                                    </h6>

                                    <div class="block accordion-body">
                                        <div class="p-5">
                                            <div class="mb-3">
                                                <div class="relative">
                                                    <input name="location" class="border rounded-md border-gray-100/50 placeholder:text-13 placeholder:text-gray-300 dark:bg-neutral-700 dark:border-gray-100/20 dark:text-gray-300" type="search" placeholder="Search...">
                                                    <button class="absolute bg-transparent border-0 top-3 ltr:right-0 rtl:left-0 ltr:mr-2 rtl:ml-2" type="button"><span class="text-gray-500 mdi mdi-magnify"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Salary Range -->
                            <div data-tw-accordion="collapse">
                                <div class="text-gray-700 accordion-item">
                                    <h6>
                                        <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 active">
                                            <span class="text-gray-900 dark:text-gray-50">Salary Range</span>
                                            <i class="mdi mdi-chevron-down text-xl group-[.active]:rotate-180 text-gray-900 dark:text-gray-50"></i>
                                        </button>
                                    </h6>

                                    <div class="block accordion-body">
                                        <div class="p-5">
                                            <div class="area-range">
                                                <div class="mb-3 form-label dark:text-gray-300">Salary Range: 
                                                    <span class="mt-2 example-val" id="slider1-span">
                                                        <input type="hidden" name="salary_range" value="" id="input-value">
                                                    </span> $</div>
                                                <div id="slider1" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tags -->
                            <div data-tw-accordion="collapse">
                                <div class="text-gray-700 accordion-item dark:text-gray-300">
                                    <h6>
                                        <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group active">
                                            <span class="text-gray-900 text-15 dark:text-gray-50">Tags</span>
                                            <i class="mdi mdi-chevron-down text-xl group-[.active]:rotate-180 text-gray-900 dark:text-gray-50"></i>
                                        </button>
                                    </h6>
                                    <div class="block accordion-body">
                                        <div class="flex flex-wrap gap-2 p-5">
                                            <select name="tag_id" class="w-full px-3 py-2 border rounded-md border-gray-100/50 dark:bg-neutral-700 dark:border-gray-100/20 dark:text-gray-300">
                                                <option value="">Select a tag</option>
                                                @foreach ($tags as $tag)
                                                    <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                                                @endforeach
                                            </select>
                                            {{-- @foreach ($tags as $tag)
                                                <input type="hidden" name="tag_id" value="{{ $tag->id }}">
                                                <button type="button" class="bg-gray-50 text-13 rounded px-2 py-0.5 font-medium text-gray-500 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white transition-all duration-300 ease-in-out dark:text-gray-50 dark:bg-neutral-600/40">{{ $tag->title }}</button>
                                            @endforeach --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Filter Button-->
                            <div class="col-span-12 xl:col-span-3">
                                <input type="hidden" name="salary_range" value="" id="input-value">
                                <button type="submit" class="w-full text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 focus:ring focus:ring-custom-500/30">
                                    <i class="uil uil-filter"></i> Filter
                                </button>
                            </div>
                            <!--Filter Button End-->
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End team -->



    </div>


@endsection
