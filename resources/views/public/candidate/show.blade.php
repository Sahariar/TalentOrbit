@extends('layouts.' . ($layout ?? 'app'))  <!-- Default to 'app' layout -->
@section('content')

    <div class="main-content">
        <div class="page-content">

            <section class="pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.png')] bg-center bg-cover relative" >
                <div class="container mx-auto">
                    <div class="grid">
                        <div class="col-span-12">
                            <div class="text-center text-white">
                                <h3 class="mb-4 text-[26px]">Candidate Details</h3>
                                <div class="page-next">
                                    <nav class="inline-block" aria-label="breadcrumb text-center">
                                        <ol class="flex justify-center text-sm font-medium uppercase">
                                            <li><a href="index.html">Home</a></li>
                                            <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a href="javascript:void(0)">Pages</a></li>
                                            <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i>Candidate Details</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('storage/images/about/shape.png') }}" alt="" class="absolute block bg-cover -bottom-0 dark:hidden">
            </section>

            <!-- Start grid -->
            <section class="py-20">
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-y-10 lg:gap-10">
                        <div class="col-span-12 lg:col-span-4">
                            <div class="border rounded border-gray-100/50 dark:border-neutral-600">
                                <div class="p-5 border-b border-gray-100/50 dark:border-neutral-600">
                                    <div class="text-center">
                                        <img src="{{ url('storage/' . $candidate->image) }}" alt="profile_image" class="w-20 h-20 mx-auto rounded-full">
                                        <h6 class="mt-4 mb-0 text-lg text-gray-900 dark:text-gray-50">{{ $candidate->name }}</h6>
                                        <p class="mb-4 text-gray-500 dark:text-gray-300">Creative Designer</p>
                                        <ul class="flex justify-center gap-4">
                                            <li class="h-10 w-10 text-center leading-[2.2] bg-gray-50 rounded-full text-lg text-gray-500 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white cursor-pointer transition-all duration-300 ease-in dark:bg-neutral-700 dark:text-white dark:hover:bg-violet-500/20">
                                                <a href="javascript:void(0)" class="social-link"><i class="uil uil-twitter-alt"></i></a>
                                            </li>
                                            <li class="h-10 w-10 text-center leading-[2.2] bg-gray-50 rounded-full text-lg text-gray-500 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white cursor-pointer transition-all duration-300 ease-in dark:bg-neutral-700 dark:text-white dark:hover:bg-violet-500/20">
                                                <a href="https://wa.me/{{ $candidate->phone_number }}" class="social-link"><i class="uil uil-whatsapp"></i></a>
                                            </li>
                                            <li class="h-10 w-10 text-center leading-[2.2] bg-gray-50 rounded-full text-lg text-gray-500 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white cursor-pointer transition-all duration-300 ease-in dark:bg-neutral-700 dark:text-white dark:hover:bg-violet-500/20">
                                                <a href="tell:{{$candidate->phone_number}}" class="social-link"><i class="uil uil-phone-alt"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-5 border-b border-gray-100/50 dark:border-neutral-600">
                                    <h6 class="mb-5 font-semibold text-gray-900 text-17 dark:text-gray-50">Profile Overview</h6>
                                    <ul class="space-y-4">
                                        <li>
                                            <div class="flex">
                                                <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Categories</label>
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">Accounting / Finance</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex">
                                                <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Offered Salary</label>
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">$450 per hour</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex">
                                                <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Languages</label>
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">English, Turkish, Japanese</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex">
                                                <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Experience</label>
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">3 Years</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex">
                                                <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Qualification</label>
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">Associate Degree</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex">
                                                <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Views</label>
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">2574</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="mt-8">
                                        <a href="tell:{{$candidate->phone_number}}" class="btn w-full bg-red-600 border-transparent text-white hover:-translate-y-1.5"><i class="uil uil-phone"></i> Contact Me</a>
                                        <a href="javascript:void(0)" class="btn w-full mt-3 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border-transparent text-white hover:-translate-y-1.5 hover:ring group-data-[theme-color=violet]:hover:ring-violet-500/30 group-data-[theme-color=sky]:hover:ring-sky-500/30 group-data-[theme-color=red]:hover:ring-red-500/30 group-data-[theme-color=green]:hover:ring-green-500/30 group-data-[theme-color=pink]:hover:ring-pink-500/30 group-data-[theme-color=blue]:hover:ring-blue-500/30"><i class="uil uil-import"></i> Download CV</a>
                                    </div>
                                    <ul class="flex items-center justify-between mt-5">
                                        <li class="text-yellow-500 text-16">
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star-half-full"></i>
                                        </li>
                                        <div class="border border-gray-100/50 rounded h-8 w-8 text-center leading-[2.4] text-gray-500 hover:bg-red-500 hover:text-white transition-all duration-500 ease-out hover:border-transparent dark:border-neutral-600">
                                            <a href="javascript:void(0)"><i class="text-lg uil uil-heart-alt"></i></a>
                                        </div>
                                    </ul>
                                </div>
                                <div class="p-5 border-b border-gray-100/50 dark:border-neutral-600">
                                    <h6 class="mb-3 font-semibold text-gray-900 text-17 dark:text-gray-50">Professional Skills</h6>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="px-2 py-1 font-medium text-green-500 rounded bg-green-400/20 text-13">User Interface Design</span>
                                        <span class="px-2 py-1 font-medium text-green-500 rounded bg-green-400/20 text-13">Web Design</span>
                                        <span class="px-2 py-1 font-medium text-green-500 rounded bg-green-400/20 text-13">Responsive Design</span>
                                        <span class="px-2 py-1 font-medium text-green-500 rounded bg-green-400/20 text-13">Mobile App Design</span>
                                        <span class="px-2 py-1 font-medium text-green-500 rounded bg-green-400/20 text-13">UI Design</span>
                                    </div>
                                </div>
                                <div class="p-5">
                                    <h6 class="mb-3 font-semibold text-gray-900 text-17 dark:text-gray-50">Contact Details</h6>
                                    <ul>
                                        <li>
                                            <div class="flex items-center mt-4">
                                                <div class="group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-11 w-11 text-xl text-center leading-[2.3] rounded-full group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">
                                                    <i class="uil uil-envelope-alt"></i>
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3">
                                                    <h6 class="mb-1 text-gray-900 text-14 dark:text-gray-50">Email</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">{{$candidate->user->email}}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center mt-4">
                                                <div class="group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-11 w-11 text-xl text-center leading-[2.3] rounded-full group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">
                                                    <i class="uil uil-map-marker"></i>
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3">
                                                    <h6 class="mb-1 text-gray-900 text-14 dark:text-gray-50">Address</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">Dodge City, Louisiana</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center mt-4">
                                                <div class="group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-11 w-11 text-xl text-center leading-[2.3] rounded-full group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">
                                                    <i class="uil uil-phone"></i>
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3">
                                                    <h6 class="mb-1 text-gray-900 text-14 dark:text-gray-50">Phone</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">{{$candidate->phone_number}}</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-8">
                            <div class="p-6 border rounded border-gray-100/50 dark:border-neutral-600">
                                <div>
                                    <h6 class="mb-3 text-gray-900 text-17 dark:text-gray-50">Candidate details</h6>
                                    <p class="mb-2 text-gray-500 dark:text-gray-300">{!! $candidate->description !!}</p>
                                </div>
                                <div class="pt-10">
                                    <h6 class="mb-0 text-gray-900 text-17 fw-bold dark:text-gray-50">Clients Feedback</h6>
                                    <div class="mt-4 ">
                                        <div class="grid grid-cols-12 gap-5">
                                            <div class="col-span-4">
                                                <div class="relative overflow-hidden rounded-md group/project">
                                                    <img src="{{ asset('storage/images/blog/img-01.jpg') }}" alt="" class="transition-all duration-300 ease-in-out group-hover/project:scale-110">
                                                    <div class="transition-all duration-300 ease-in-out group-hover/project:bg-black/40 group-hover/project:absolute group-hover/project:inset-0"></div>
                                                    <div class="absolute top-[50%] left-[50%] -translate-x-5 -translate-y-5 group-hover/project:block hidden transition-all duration-300 ease-in-out text-2xl">
                                                        <a href="assets/images/blog/img-01.jpg" class="text-white image-popup" data-title="The Coding Awards" data-description="There are many variations of passages of available, but the majority alteration in some form."><i class="uil uil-search-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-4">
                                                <div class="relative overflow-hidden rounded-md group/project">
                                                    <img src="assets/images/blog/img-02.jpg" alt="" class="transition-all duration-300 ease-in-out group-hover/project:scale-110">
                                                    <div class="transition-all duration-300 ease-in-out group-hover/project:bg-black/40 group-hover/project:absolute group-hover/project:inset-0"></div>
                                                    <div class="absolute top-[50%] left-[50%] -translate-x-5 -translate-y-5 group-hover/project:block hidden transition-all duration-300 ease-in-out text-2xl">
                                                        <a href="assets/images/blog/img-02.jpg" class="text-white image-popup" data-title="Project Explained" data-description="There are many variations of passages of available, but the majority alteration in some form."><i class="uil uil-search-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-4">
                                                <div class="relative overflow-hidden rounded-md group/project">
                                                    <img src="assets/images/blog/img-03.jpg" alt="" class="transition-all duration-300 ease-in-out group-hover/project:scale-110">
                                                    <div class="transition-all duration-300 ease-in-out group-hover/project:bg-black/40 group-hover/project:absolute group-hover/project:inset-0"></div>
                                                    <div class="absolute top-[50%] left-[50%] -translate-x-5 -translate-y-5 group-hover/project:block hidden transition-all duration-300 ease-in-out text-2xl">
                                                        <a href="assets/images/blog/img-03.jpg" class="text-white image-popup" data-title="Social Geek Made" data-description="There are many variations of passages of available, but the majority alteration in some form."><i class="uil uil-search-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-3 mt-4">
                                    <div class="sm:flex">
                                        <div class="shrink-0">
                                            <img class="w-16 h-16 p-1 border-2 rounded-full border-gray-100/50" src=" {{ asset('storage/images/user/img-04.jpg') }} " alt="img">
                                        </div>
                                        <div class="grow ltr:ml-3 rtl:mr-3">
                                            <div>
                                                <p class="mb-2 text-sm text-gray-500 ltr:float-right rtl:float-left dark:text-gray-300">Jun 23, 2021</p>
                                                <h6 class="text-gray-900 dark:text-gray-50">Michelle Durant</h6>
                                                <div class="text-yellow-500 text-17">
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star-half-full"></i>
                                                </div>
                                                <p class="mt-3 italic text-gray-500 dark:text-gray-300">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <form action="#">
                                        <h6 class="font-semibold text-gray-900 text-17 dark:text-gray-50">Add a review</h6>
                                        <p class="mb-5 text-gray-500 dark:text-gray-300">Your Rating for this listing</p>
                                        <div class="grid grid-cols-12 gap-4">
                                            <div class="col-span-12">
                                                <div class="mb-3">
                                                    <label for="inputname" class="text-sm text-gray-900 dark:text-gray-50">Your Name</label>
                                                    <input type="text" class="w-full mt-1 rounded border-gray-100/50 placeholder:text-13 placeholder:text-gray-200 dark:bg-transparent dark:border-neutral-600 dark:text-gray-300 focus:ring-0 focus:ring-offset-0" id="inputname" placeholder="Enter your name">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-span-12 lg:col-span-6">
                                                <div class="mb-3">
                                                    <label for="inputemail" class="text-sm text-gray-900 dark:text-gray-50">Email</label>
                                                    <input type="email" class="w-full mt-1 rounded border-gray-100/50 placeholder:text-13 placeholder:text-gray-200 dark:bg-transparent dark:border-neutral-600 dark:text-gray-300 focus:ring-0 focus:ring-offset-0" id="inputemail" placeholder="Enter your email">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-span-12 lg:col-span-6">
                                                <div class="mb-3">
                                                    <label for="inputsubject" class="text-sm text-gray-900 dark:text-gray-50">Subject</label>
                                                    <input type="text" class="w-full mt-1 rounded border-gray-100/50 placeholder:text-13 placeholder:text-gray-200 dark:bg-transparent dark:border-neutral-600 dark:text-gray-300 focus:ring-0 focus:ring-offset-0" id="inputsubject" placeholder="Subject">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-span-12">
                                                <div class="mb-3">
                                                    <label for="inputcoment" class="text-sm text-gray-900 dark:text-gray-50">Review</label>
                                                    <textarea class="w-full mt-1 rounded border-gray-100/50 placeholder:text-13 placeholder:text-gray-200 dark:bg-transparent dark:border-neutral-600 dark:text-gray-300 focus:ring-0 focus:ring-offset-0" id="inputcoment" rows="3" placeholder="Add your review"></textarea>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                        <div class="text-end">
                                            <button type="submit" class="text-white transition-all duration-500 ease-in-out border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 hover:-translate-y-2">Submit Review <i class="uil uil-angle-right-b"></i></button>
                                        </div>
                                    </form>
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
