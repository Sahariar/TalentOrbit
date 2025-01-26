@extends('layouts.' . ($layout ?? 'app'))  <!-- Default to 'app' layout -->
@section('content')

<div class="main-content">
    <div class="page-content">

        <section class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.png')] bg-center bg-cover relative" >
            <div class="container mx-auto">
                <div class="grid">
                    <div class="col-span-12">
                        <div class="text-center text-white">
                            <h3 class="mb-4 text-[26px]">Jobs Categories</h3>
                            <div class="page-next">
                                <nav class="inline-block" aria-label="breadcrumb text-center">
                                    <ol class="flex flex-wrap justify-center text-sm font-medium uppercase">
                                        <li><a href="index.html">Home</a></li>
                                        <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a href="javascript:void(0)">Company</a></li>
                                        <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i>Jobs Categories </li>
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
                        <div class="col-span-12 lg:col-span-6 lg:col-start-4">
                           <div class="mb-5 text-center">
                                <p class="inline px-2 py-1 text-sm font-medium text-white bg-yellow-500 rounded">Jobs Live Today</p>
                                <h4 class="mt-2 text-gray-900 text-22 dark:text-white">Browse Job By Categories</h4>
                                <p class="mt-2 text-gray-500 dark:text-gray-300">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                            </div>
                        </div>
                    </div>
{{--                    editing code start--}}
{{--                    <div class="grid grid-cols-12 gap-y-5 md:gap-8">--}}
{{--                        <div class="col-span-12 md:col-span-6 xl:col-span-4">--}}
{{--                            <div class="mt-10 rounded bg-gray-50 dark:bg-neutral-700">--}}
{{--                                <div class="p-6">--}}
{{--                                    <ul class="space-y-4">--}}
{{--                                        <li class="px-4 py-2 bg-white rounded dark:bg-neutral-600">--}}
{{--                                            <a href="job-list.html" class="text-gray-900 dark:text-white">Accounting &amp; Finance <span class="px-2 py-1 rounded bg-sky-500/20 text-11 text-sky-500 ltr:float-right rtl:float-left">25</span></a>--}}
{{--                                        </li>--}}
{{--                                        <li class="px-4 py-2 bg-white rounded dark:bg-neutral-600">--}}
{{--                                            <a href="job-list.html" class="text-gray-900 dark:text-white">Bank Jobs <span class="px-2 py-1 rounded bg-sky-500/20 text-11 text-sky-500 ltr:float-right rtl:float-left">10</span></a>--}}
{{--                                        </li>--}}
{{--                                        <li class="px-4 py-2 bg-white rounded dark:bg-neutral-600">--}}
{{--                                            <a href="job-list.html" class="text-gray-900 dark:text-white">Data Entry Job <span class="px-2 py-1 rounded bg-sky-500/20 text-11 text-sky-500 ltr:float-right rtl:float-left">71</span></a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-span-12 md:col-span-6 xl:col-span-4">--}}
{{--                            <div class="mt-10 rounded bg-gray-50 dark:bg-neutral-700">--}}
{{--                                <div class="p-6">--}}
{{--                                    <ul class="space-y-4">--}}
{{--                                        <li class="px-4 py-2 bg-white rounded dark:bg-neutral-600">--}}
{{--                                            <a href="job-list.html" class="text-gray-900 dark:text-white">Government Jobs <span class="px-2 py-1 rounded bg-sky-500/20 text-11 text-sky-500 ltr:float-right rtl:float-left">25</span></a>--}}
{{--                                        </li>--}}
{{--                                        <li class="px-4 py-2 bg-white rounded dark:bg-neutral-600">--}}
{{--                                            <a href="job-list.html" class="text-gray-900 dark:text-white">Defence Jobs <span class="px-2 py-1 rounded bg-sky-500/20 text-11 text-sky-500 ltr:float-right rtl:float-left">10</span></a>--}}
{{--                                        </li>--}}
{{--                                        <li class="px-4 py-2 bg-white rounded dark:bg-neutral-600">--}}
{{--                                            <a href="job-list.html" class="text-gray-900 dark:text-white">Teaching Jobs <span class="px-2 py-1 rounded bg-sky-500/20 text-11 text-sky-500 ltr:float-right rtl:float-left">71</span></a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-span-12 md:col-span-6 xl:col-span-4">--}}
{{--                            <div class="mt-10 rounded bg-gray-50 dark:bg-neutral-700">--}}
{{--                                <div class="p-6">--}}
{{--                                    <ul class="space-y-4">--}}
{{--                                        <li class="px-4 py-2 bg-white rounded dark:bg-neutral-600">--}}
{{--                                            <a href="job-list.html" class="text-gray-900 dark:text-white">It / Software Jobs <span class="px-2 py-1 rounded bg-sky-500/20 text-11 text-sky-500 ltr:float-right rtl:float-left">25</span></a>--}}
{{--                                        </li>--}}
{{--                                        <li class="px-4 py-2 bg-white rounded dark:bg-neutral-600">--}}
{{--                                            <a href="job-list.html" class="text-gray-900 dark:text-white">Logistics / Transportation <span class="px-2 py-1 rounded bg-sky-500/20 text-11 text-sky-500 ltr:float-right rtl:float-left">10</span></a>--}}
{{--                                        </li>--}}
{{--                                        <li class="px-4 py-2 bg-white rounded dark:bg-neutral-600">--}}
{{--                                            <a href="job-list.html" class="text-gray-900 dark:text-white">Sports Jobs <span class="px-2 py-1 rounded bg-sky-500/20 text-11 text-sky-500 ltr:float-right rtl:float-left">71</span></a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="grid grid-cols-12 gap-y-5 md:gap-8">--}}
{{--                        @foreach ($categories->chunk(ceil($categories->count() / 3)) as $chunk)--}}
{{--                            <div class="col-span-12 md:col-span-6 xl:col-span-4">--}}
{{--                                <div class="mt-10 rounded bg-gray-50 dark:bg-neutral-700">--}}
{{--                                    <div class="p-6">--}}
{{--                                        <ul class="space-y-4">--}}
{{--                                            @foreach ($chunk as $category)--}}
{{--                                                <li class="px-4 py-2 bg-white rounded dark:bg-neutral-600">--}}
{{--                                                    <a href="job-list.html" class="text-gray-900 dark:text-white">--}}
{{--                                                        {{ $category->name }}--}}
{{--                                                        <span class="px-2 py-1 rounded bg-sky-500/20 text-11 text-sky-500 ltr:float-right rtl:float-left">{{ $category->count }}</span>--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                            @endforeach--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}


{{--                    editing code start--}}
                </div>
            </section>
        <!-- End grid -->

        <!-- start cta -->
            <section class="pb-20">
                <div class="container mx-auto">
                    <div class="grid grid-cols-12">
                        <div class="col-span-12 lg:col-span-8 lg:col-start-3">
                            <div class="text-center">
                                <h3 class="text-3xl text-gray-900 dark:text-white">See everything about your employee at one place.</h3>
                                <p class="mt-8 text-gray-500 dark:text-gray-300">Start working with Jobcy that can provide everything you need to generate awareness, <br>  drive traffic, connect.</p>
                                <div class="flex justify-center gap-3 mt-8">
                                    <a href="javascript:void(0)" class="btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border-transparent text-white hover:-translate-y-1.5"><i class="uil uil-rocket"></i> Get Started Now</a>
                                    <a href="javascript:void(0)" class="btn border group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 group-data-[theme-color=violet]:border-violet-500 group-data-[theme-color=sky]:border-sky-500 group-data-[theme-color=red]:border-red-500 group-data-[theme-color=green]:border-green-500 group-data-[theme-color=pink]:border-pink-500 group-data-[theme-color=blue]:border-blue-500 hover:-translate-y-1.5 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 group-data-[theme-color=violet]:hover:text-white group-data-[theme-color=sky]:hover:text-white group-data-[theme-color=red]:hover:text-white group-data-[theme-color=green]:hover:text-white group-data-[theme-color=pink]:hover:text-white group-data-[theme-color=blue]:hover:text-white hover:ring group-data-[theme-color=violet]:hover:ring-violet-500/20 group-data-[theme-color=sky]:hover:ring-sky-500/20 group-data-[theme-color=green]:hover:ring-green-500/20 group-data-[theme-color=pink]:hover:ring-pink-500/20 group-data-[theme-color=blue]:hover:ring-blue-500/20"><i class="uil uil-capsule"></i> Free Trial</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- end cta -->

    </div>
</div>

@endsection
