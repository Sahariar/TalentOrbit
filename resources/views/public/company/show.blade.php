@extends('layouts.' . ($layout ?? 'app'))  <!-- Default to 'app' layout -->
@section('content')

    <div class="main-content">
        <div class="page-content">

            <section class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.png')] bg-center bg-cover relative" >
                <div class="container mx-auto">
                    <div class="grid">
                        <div class="col-span-12">
                            <div class="text-center text-white">
                                <h3 class="mb-4 text-[26px]">Company Details</h3>
                                <div class="page-next">
                                    <nav class="inline-block" aria-label="breadcrumb text-center">
                                        <ol class="flex justify-center text-sm font-medium uppercase">
                                            <li><a href="{{route('home')}}">Home</a></li>
                                            <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a href="{{ url()->previous() }}">Pages</a></li>
                                            <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i>Company Details</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="assets/images/about/shape.png" alt="" class="absolute block bg-cover -bottom-0 dark:hidden">
                <img src="assets/images/about/shape-dark.png" alt="" class="absolute hidden bg-cover -bottom-0 dark:block">
            </section>

            <!-- Start grid -->
            <section class="py-20">
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-y-10 lg:gap-10">
                        <div class="col-span-12 lg:col-span-4">
                            <div class="border rounded border-gray-100/50 dark:border-neutral-600">
                                <div class="p-5 border-b border-gray-100/50 dark:border-neutral-600">
                                    <div class="text-center">
                                        <img src="{{ Storage::url('app/public/assets/images/featured-job/' . $id->image ) }}" alt="company image" class="w-20 h-20 mx-auto rounded-full">
                                        <h6 class="mt-4 mb-0 text-lg text-gray-900 dark:text-gray-50">{{$id->name}}</h6>
                                        <p class="mb-4 text-gray-500 dark:text-gray-300">Since {{$id->created_at->format('F, Y')}}</p>
                                        <ul class="flex flex-wrap justify-center gap-4">
                                            <li class="h-10 w-10 text-center leading-[2.2] bg-gray-50 rounded-full text-lg text-gray-500 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white cursor-pointer transition-all duration-300 ease-in dark:bg-neutral-700 dark:text-white dark:hover:bg-violet-500/20">
                                                <a href="javascript:void(0)" class="social-link"><i class="uil uil-twitter-alt"></i></a>
                                            </li>
                                            <li class="h-10 w-10 text-center leading-[2.2] bg-gray-50 rounded-full text-lg text-gray-500 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white cursor-pointer transition-all duration-300 ease-in dark:bg-neutral-700 dark:text-white dark:hover:bg-violet-500/20">
                                                <a href="https://wa.me/{{ $id->phone_number }}" class="social-link"><i class="uil uil-whatsapp"></i></a>
                                            </li>
                                            <li class="h-10 w-10 text-center leading-[2.2] bg-gray-50 rounded-full text-lg text-gray-500 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white cursor-pointer transition-all duration-300 ease-in dark:bg-neutral-700 dark:text-white dark:hover:bg-violet-500/20">
                                                <a href="javascript:void(0)" class="social-link"><i class="uil uil-phone-alt"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-5 border-b border-gray-100/50 dark:border-neutral-600">
                                    <h6 class="mb-5 font-semibold text-gray-900 text-17 dark:text-gray-50">Profile Overview</h6>
                                    <ul class="space-y-4">
                                        <li>
                                            <div class="flex flex-wrap">
                                                <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Owner Name</label>
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">{{$id->user->name}}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex flex-wrap">
                                                <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Employees</label>
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">1500 - 1850</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex flex-wrap">
                                                <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Location</label>
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">{{$id->location ?? 'Location not set'}}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex flex-wrap">
                                                <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Website</label>
                                                <div>
                                                    {{-- <p class="mb-0 text-gray-500 dark:text-gray-300">{{$id->url ?? "url is not set"}}</p> --}}
                                                    <a href="{{$id->url ?? "url is not set"}}" class="mb-0 text-gray-500 dark:text-gray-300">{{$id->url ?? "url is not set"}}</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex flex-wrap">
                                                <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Established</label>
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">{{$id->created_at->format("d, F, Y")}}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex flex-wrap">
                                                <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Views</label>
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">2574</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="mt-8">
                                        <a href="tell:{{$id->phone_number}}" class="btn w-full bg-red-600 border-transparent text-white hover:-translate-y-1.5"><i class="uil uil-phone"></i> Contact</a>
                                    </div>
                                </div>
                                <div class="p-5">
                                    <h6 class="mb-4 font-semibold text-gray-900 text-17 dark:text-gray-50">Company Location</h6>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1628067715234!5m2!1sen!2sin"
                                            style="width:100%"  height="250" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-8">
                            <div class="p-6 border rounded border-gray-100/50 dark:border-neutral-600">
                                <div>
                                    <h6 class="mb-3 text-gray-900 text-17 dark:text-gray-50">About Company</h6>
                                    <p class="mb-4 text-gray-500 dark:text-gray-300">{{$id->description ?? "No description set or null"}}</p>
                                </div>
                                <div class="pt-8">
                                    <h6 class="mb-5 text-gray-900 text-17 fw-bold dark:text-gray-50">Gallery</h6>
                                    <div class="grid grid-cols-12 gap-y-5 lg:gap-5">
                                        <div class="col-span-6">
                                            <div class="relative overflow-hidden rounded-md group/gallery">
                                                <img src="assets/images/blog/img-01.jpg" alt="" class="transition-all duration-300 ease-in-out group-hover/gallery:scale-110">
                                                <div class="transition-all duration-300 ease-in-out group-hover/gallery:bg-black/40 group-hover/gallery:absolute group-hover/gallery:inset-0"></div>
                                                <div class="absolute top-[50%] left-[50%] -translate-x-5 -translate-y-5 group-hover/gallery:block hidden transition-all duration-300 ease-in-out text-2xl">
                                                    <a href="assets/images/blog/img-01.jpg" class="text-white image-popup" data-title="Project Leader" data-description="There are many variations of passages of available, but the majority alteration in some form."><i class="uil uil-search-alt"></i></a>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-span-6">
                                            <div class="relative overflow-hidden rounded-md group/gallery">
                                                <img src="assets/images/blog/img-03.jpg" alt="" class="transition-all duration-300 ease-in-out group-hover/gallery:scale-110">
                                                <div class="transition-all duration-300 ease-in-out group-hover/gallery:bg-black/40 group-hover/gallery:absolute group-hover/gallery:inset-0"></div>
                                                <div class="absolute top-[50%] left-[50%] -translate-x-5 -translate-y-5 group-hover/gallery:block hidden transition-all duration-300 ease-in-out text-2xl">
                                                    <a href="assets/images/blog/img-03.jpg" class="text-white image-popup" data-title="Project Leader" data-description="There are many variations of passages of available, but the majority alteration in some form."><i class="uil uil-search-alt"></i></a>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-span-12">
                                            <div class="relative overflow-hidden rounded-md group/gallery">
                                                <img src="assets/images/blog/img-12.jpg" alt="" class="transition-all duration-300 ease-in-out group-hover/gallery:scale-110">
                                                <div class="transition-all duration-300 ease-in-out group-hover/gallery:bg-black/40 group-hover/gallery:absolute group-hover/gallery:inset-0"></div>
                                                <div class="absolute top-[50%] left-[50%] -translate-x-5 -translate-y-5 group-hover/gallery:block hidden transition-all duration-300 ease-in-out text-2xl">
                                                    <a href="assets/images/blog/img-12.jpg" class="text-white image-popup" data-title="Project Leader" data-description="There are many variations of passages of available, but the majority alteration in some form."><i class="uil uil-search-alt"></i></a>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                    </div>
                                </div>
                                <div class="pt-10">
                                    <h6 class="mb-0 text-gray-900 text-17 fw-bold dark:text-gray-50">{{ $id->job_posts_count }} Current Opening Job</h6>
                                    <div class="mt-5 space-y-5">
                                        

                                        @if($id->job_posts->isEmpty())
                                            <div class="p-6 bg-gray-100 rounded-lg text-center">
                                                <svg class="w-12 h-12 mx-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                                </svg>
                                                <p class="text-gray-600 text-lg font-semibold mt-4">No job posts available at the moment.</p>
                                                <p class="text-gray-500 mt-2">Check back later or explore other companies!</p>
                                            </div>
                                        @else
                                                @foreach($id->job_posts as $jobPost)
                                                    
                                                    <div class="relative overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                                        <div class="p-6">
                                                            <div class="grid grid-cols-12 gap-y-5 lg:gap-5">
                                                                <div class="col-span-12 lg:col-span-2">
                                                                    <div class="text-center">
                                                                        <a href="company-details.html"><img src="{{ Storage::url('app/public/assets/images/featured-job/' . $id->image ) }}" alt="job_image" class="md:mx-auto img-fluid rounded-3"></a>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-span-10">
                                                                    <h5 class="mb-1 fs-17"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">{{ $jobPost->title }}</a>
                                                                        <small class="font-normal text-gray-500 dark:text-gray-300">(0-2 Yrs Exp.)</small>
                                                                    </h5>
                                                                    <ul class="flex flex-wrap gap-3 mb-0">
                                                                        <li>
                                                                            <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">{{$id->name}}</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="mdi mdi-map-marker"></i> {{$jobPost->location}}</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="uil uil-wallet ltr:mr-2 rtl:ml-2"></i> {{$jobPost->salary_range}} / month</p>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="mt-4">
                                                                        <div class="flex flex-wrap gap-1.5">
                                                                            <span class="badge bg-green-500/20 text-green-500 text-11 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                                            <span class="badge bg-yellow-500/20 text-yellow-500 text-11 px-2 py-0.5 font-medium rounded">Urgent</span>
                                                                            <span class="badge bg-sky-500/20 text-sky-500 text-11 px-2 py-0.5 font-medium rounded">Private</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end row-->
                                                        </div>
                                                        <div class="px-4 py-3 bg-gray-50 dark:bg-neutral-700">
                                                            <div class="grid grid-cols-12">
                                                                <div class="col-span-12 lg:col-span-6">
                                                                    <ul class="flex flex-wrap gap-2 text-gray-700 dark:text-gray-50">
                                                                        <li><i class="uil uil-tag"></i> Keywords :</li>
                                                                        <li><a href="javascript:void(0)" class="primary-link text-muted">Ui designer</a>,</li>
                                                                        <li><a href="javascript:void(0)" class="primary-link text-muted">developer</a></li>
                                                                    </ul>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-span-12 mt-2 lg:col-span-6 lg:mt-0">
                                                                    <div class="ltr:lg:text-right rtl:lg:text-left dark:text-gray-50">
                                                                        <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                            </div>
                                                            <!--end row-->
                                                        </div>
                                                        <div class="absolute top-4 ltr:right-4 rtl:left-4">
                                                            <div class="w-8 h-8 text-center text-white bg-red-600 rounded">
                                                                <a href="javascript:void(0)"><i class="uil uil-heart-alt text-lg leading-[1.9]"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endforeach
                                        @endif

                                        <!--end job-->

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End grid -->



        </div>
    </div>

@endsection
