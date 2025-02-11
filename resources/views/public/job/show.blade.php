@extends('layouts.' . ($layout ?? 'app'))  <!-- Default to 'app' layout -->
@section('content')



<div class="main-content">
    <div class="page-content">
        <section class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.png')] bg-center bg-cover relative" >
            <div class="container mx-auto">
                <div class="grid">
                    <div class="col-span-12">
                        <div class="text-center text-white">
                            <h3 class="mb-4 text-[26px]">Job Details</h3>
                            <div class="page-next">
                                <nav class="inline-block" aria-label="breadcrumb text-center">
                                    <ol class="flex flex-wrap justify-center text-sm font-medium uppercase">
                                        <li><a href="index.html">Home</a></li>
                                        <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a href="javascript:void(0)">Job</a></li>
                                        <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i>Job Details </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ url('storage/images/about/shape.png')}}" alt="" class="absolute block bg-cover -bottom-0">
        </section>

        <!-- Start grid -->
            <section class="py-16">
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-y-10 lg:gap-10">
                        <div class="col-span-12 lg:col-span-8">
                            <div class="border rounded-md border-gray-100/30 dark:border-neutral-600/80">
                                <div class="relative">
                                    <img src="{{ url('storage/images/'. $jobPost->featured_image) }}" alt="post_featured_image" class="rounded-md img-fluid mb-7">

                                    <div class="absolute z-20 -bottom-7 left-7">
                                        <img src="{{ url('storage/'. $jobPost->company_profile->image) }}" alt="company_image" class="rounded-md img-fluid  w-12 h-12">
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-12 lg:col-span-8">
                                            <div class="relative">
                                                <h5 class="mb-1 text-gray-900 dark:text-gray-50"><h1>{{ $jobPost->title }}</h1></h5>
                                                <ul class="flex gap-4 text-gray-500 dark:text-gray-300">
                                                    <li>
                                                        <i class="mdi mdi-account"></i> 8 Vacancy
                                                    </li>
                                                    <li class="text-yellow-500">
                                                        <span class="px-2 py-1 text-white bg-yellow-500 rounded text-13">4.8</span> <i class="align-middle mdi mdi-star"></i><i class="align-middle mdi mdi-star"></i><i class="align-middle mdi mdi-star"></i><i class="align-middle mdi mdi-star"></i><i class="align-middle mdi mdi-star-half-full"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-4">
                                            <div class="flex gap-3 md:justify-end">
                                                <div class="w-8 h-8 text-center text-gray-100 transition-all duration-300 bg-transparent border rounded cursor-pointer border-gray-100/50 hover:bg-red-600 hover:text-white hover:border-transparent dark:border-zinc-700">
                                                    <a href="javascript:void(0)"><i class="uil uil-heart-alt text-lg leading-[1.8]"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-12 mt-8 gap-y-3 lg:gap-3">
                                        <div class="col-span-12 lg:col-span-4">
                                            <div class="p-4 border rounded border-gray-100/50 dark:border-neutral-600/80">
                                                <p class="mb-1 text-gray-500 dark:text-gray-300 text-13">Experience</p>
                                                <p class="font-medium text-gray-900 dark:text-gray-50">Minimum 1 Year</p>
                                            </div>
                                        </div>

                                        <div class="col-span-12 lg:col-span-4">
                                            <div class="p-4 border rounded border-gray-100/50 dark:border-neutral-600/80">
                                                <p class="mb-1 text-gray-500 dark:text-gray-300 text-13">Position</p>
                                                <p class="font-medium text-gray-900 dark:text-gray-50">Senior</p>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-4">
                                            <div class="p-4 border rounded border-gray-100/50 dark:border-neutral-600/80">
                                                <p class="mb-1 text-gray-500 dark:text-gray-300 text-13">Offer Salary</p>
                                                <p class="font-medium text-gray-900 dark:text-gray-50">${{$jobPost->salary_range}} Month</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <h2 class="mb-3 text-gray-900 dark:text-gray-50"><strong>Job Description</strong></h2>
                                        <div>
                                            <p class="mb-0 text-gray-500 dark:text-gray-300">{!! $jobPost->description !!}</p>
                                        </div>
                                    </div>
                                    <div class="mt-4 gap-2 flex">
                                        @foreach($jobPost->tags as $tag)
                                        <x-tagl
                                            href="#">
                                            {{ __($tag->title) }}
                                            </x-tagl>
                                        @endforeach

                                    </div>

                                    <div class="pt-3 mt-4">
                                        <ul class="flex flex-wrap items-center gap-3 mb-0">
                                            <li class="mt-1 dark:text-gray-50">
                                                Share this job:
                                            </li>
                                            <li class="mt-1">
                                                <a href="javascript:void(0)" class="btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border-transparent text-white hover:-translate-y-1.5"><i class="uil uil-facebook-f"></i> Facebook</a>
                                            </li>
                                            <li class="mt-1">
                                                <a href="javascript:void(0)" class="btn bg-red-600 border-transparent text-white hover:-translate-y-1.5"><i class="uil uil-google"></i> Google+</a>
                                            </li>
                                            <li class="mt-1">
                                                <a href="javascript:void(0)" class="btn bg-green-500 border-transparent text-white hover:-translate-y-1.5"><i class="uil uil-linkedin-alt"></i> linkedin</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <!-- ---------  job start --------- -->
                            <div class="mt-10 space-y-8">
                                <h5 class="text-gray-900 dark:text-gray-50">Related Jobs</h5>
                                @if ($relatedPosts->isEmpty())
                                    <p>No posts found</p>
                                @else
                                @foreach($relatedPosts as $post)
                                <div class="relative overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group dark:border-neutral-600">
                                    <div class="p-6">
                                        <div class="grid grid-cols-12 gap-5">
                                            <div class="col-span-12 lg:col-span-1">
                                                <div class="mb-4 text-center mb-md-0">
                                                    <a href="{{ route('jobs.show',$post->id) }}"><img src="{{ url('storage/images/' . $post->featured_image) }}" alt="post_image" class="mx-auto img-fluid rounded-3"></a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-12 lg:col-span-10">
                                                <h5 class="mb-1 text-gray-900 fs-17"><a href="{{ route('jobs.show',$post->id) }}" class="dark:text-gray-50">{{ $post->title }}</a>

                                                </h5>
                                                <ul class="flex flex-wrap gap-3 mb-0">
                                                    <li>
                                                        <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">
                                                            {{$post->company_profile->name}}
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="mdi mdi-map-marker"></i> {{$post->location}}</p>
                                                    </li>
                                                    <li>
                                                        <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="uil uil-wallet"></i> ${{$post->salary_range}}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 dark:bg-neutral-700">
                                        <div class="grid grid-cols-12">
                                            <div class="col-span-12 lg:col-span-6">

                                            </div>
                                            <!--end col-->
                                            <div class="col-span-12 mt-2 lg:col-span-6 lg:mt-0">
                                                <div class="ltr:lg:text-end rtl:lg:text-start dark:text-gray-50">
                                                    <a href="{{ route('jobs.apply', $jobPost->id) }}" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="absolute top-4 ltr:right-4 rtl:left-4">
                                        <div class="w-8 h-8 text-center text-gray-100 transition-all duration-300 bg-transparent border rounded border-gray-100/50 hover:bg-red-600 hover:text-white hover:border-transparent dark:border-zinc-700">
                                            <a href="javascript:void(0)"><i class="uil uil-heart-alt text-lg leading-[1.8]"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                @endif
                                <div class="mt-4 text-center">
                                    <a href="{{route('jobs')}}" class="text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">View More Jobs <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- ---------  job end --------- -->
                        </div>

                        <!-- -------- job Overview right side panel start --------- -->
                        <div class="col-span-12 space-y-6 lg:col-span-4">
                            <div class="border rounded border-gray-100/30 dark:border-neutral-600/80">
                                <div class="p-6">
                                    <h6 class="text-gray-900 text-17 dark:text-gray-50">Job Overview</h6>

                                    <ul>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-user icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Job Title</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">{{$jobPost->title}}</p>

                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-star-half-alt icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Experience</h6>
                                                    <p class="text-gray-500 dark:text-gray-300"> 0-3 Years</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-location-point icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Location</h6>
                                                    <p class="text-gray-500 dark:text-gray-300"> {{$jobPost->location}} </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-usd-circle icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Offered Salary</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">${{$jobPost->salary_range}} Month</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-graduation-cap icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Qualification</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">Bachelor Degree</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-building icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Industry</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">Private</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-history icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Date Posted</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">Posted {{$jobPost->created_at->diffForHumans() }} </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="mt-8 space-y-2">
                                        <a href="{{ route('jobs.apply', $jobPost->id) }}" data-bs-toggle="modal" class="btn w-full group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border-transparent text-white hover:-translate-y-1.5">Apply Now <i class="uil uil-arrow-right"></i></a>

                                    </div>
                                    <br>
                                    @if (request()->session()->has('msg'))
                                        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                                            {{ session('msg') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <!-- ----------- job company details start ----------- -->
                            <div class="border rounded border-gray-100/30 dark:border-neutral-600/80">
                                <div class="p-6">
                                    <div>
                                        <img src="assets/images/featured-job/img-02.png" alt="" class="mx-auto img-fluid">

                                        <div class="mt-4 text-center">
                                            <h6 class="text-gray-900 text-17 dark:text-gray-50">{{$jobPost->company_profile->name}}</h6>
                                            <p class="text-gray-500 dark:text-gray-300">Since {{$jobPost->company_profile->created_at->format('F, Y') }}</p>
                                        </div>

                                        <ul class="mt-4 space-y-4">
                                            <li>
                                                <div class="flex">
                                                    <i class="text-xl uil uil-phone-volume group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <h6 class="mb-1 text-sm text-gray-900 dark:text-gray-50">Phone</h6>
                                                        <p class="text-sm text-gray-500 dark:text-gray-300">{{$jobPost->company_profile->phone_number}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mt-3">
                                                <div class="flex">
                                                    <i class="text-xl uil uil-envelope group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <h6 class="mb-1 text-sm text-gray-900 dark:text-gray-50">Email</h6>
                                                        <p class="text-sm text-gray-500 dark:text-gray-300">pixltechnology@info.com</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mt-3">
                                                <div class="flex">
                                                    <i class="text-xl uil uil-globe group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <h6 class="mb-1 text-sm text-gray-900 dark:text-gray-50">Website</h6>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300 fs-14 text-break"><a href="{{$jobPost->company_profile->url}}">{{$jobPost->company_profile->url}}</a></p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mt-3">
                                                <div class="flex">
                                                    <i class="text-xl uil uil-map-marker group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <h6 class="mb-1 text-sm text-gray-900 dark:text-gray-50">Location</h6>
                                                        <p class="text-sm text-gray-500 dark:text-gray-300">Oakridge Lane Richardson.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="mt-6">
                                            <a href="{{ route('company.show', $jobPost->company_profile_id) }}" class="w-full text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500"><i class="mdi mdi-eye"></i> View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <h6 class="mb-3 text-16 dark:text-gray-50">Job location</h6>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1628067715234!5m2!1sen!2sin" style="width:100%" height="250" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- End grid -->

    </div>
</div>

@endsection
