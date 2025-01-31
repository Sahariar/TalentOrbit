@extends('layouts.' . ($layout ?? 'app'))  <!-- Default to 'app' layout -->
@section('content')

    <div class="main-content">
        <div class="page-content">

            <section class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.png')] bg-center bg-cover relative" >
                <div class="container mx-auto">
                    <div class="grid">
                        <div class="col-span-12">
                            <div class="text-center text-white">
                                <h3 class="mb-4 text-[26px]">Company List</h3>
                                <div class="page-next">
                                    <nav class="inline-block" aria-label="breadcrumb text-center">
                                        <ol class="flex flex-wrap justify-center text-sm font-medium uppercase">
                                            <li><a href="{{route('home')}}">Home</a></li>
                                            <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a href="{{ url()->previous() }}">Pages</a></li>
                                            <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i>Company List</li>
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
                    <div class="grid items-center grid-cols-12 mb-4">
                        <div class="col-span-12 lg:col-span-8">
                            <div class="mb-3 mb-lg-0">
                                <h6 class="text-gray-900 text-16 dark:text-gray-50"> Showing {{ $companies->firstItem() }} – {{ $companies->lastItem() }} of {{ $companies->total() }} results </h6>
                            </div>
                        </div><!--end col-->

                        <div class="col-span-12 lg:col-span-4">
                            <div class="candidate-list-widgets">

                            </div><!--end candidate-list-widgets-->
                        </div><!--end col-->
                    </div>

{{--                    ---------- main thing start ------------}}
                    <div class="mt-8">
                        <div class="grid grid-cols-12 gap-8">

                            @foreach ($companies as $company)
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="relative px-6 py-12 border rounded-md border-gray-100/50 dark:border-neutral-600">
                                        <img src=" {{ url('storage/' . $company->image ) }}" alt="company_image" class="mx-auto">
                                        <div class="mt-5 text-center">
                                            <a href=" {{ route('company.show', $company) }} ">
                                                <h6 class="mb-3 text-lg text-gray-900 dark:text-white">{{ $company->name }}</h6>
                                            </a>
                                            <p class="mb-6 text-gray-500 dark:text-gray-300">{{ $company->location ?? 'Dhaka'}}</p>

                                            <a href=" {{ route('company.show', $company) }} "
                                               class="text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 focus:ring focus:ring-custom-500/30">
                                                {{ $company->job_posts_count }} Job posts
                                            </a>
                                        </div>
                                        <div class="absolute px-2 text-white bg-violet-500 top-3 ltr:right-0 rtl:left-0">
                                            <span class="relative text-xs font-medium uppercase">
                                                {{ $company->rating }} <i class="mdi mdi-star-outline"></i>
                                            </span>
                                            <div class="after:contant[] ltr:after:border-r-[11px] rtl:after:border-l-[11px] after:absolute after:border-b-[11px] ltr:after:-left-[11px] rtl:after:-right-[11px] after:top-0 after:border-t-[11px] after:border-t-transparent after:border-violet-500 after:border-b-transparent"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>


                    {{-- ------- next page link ------- --}}
                    <div class="grid grid-cols-12">
                        <div class="col-span-12">
                            <ul class="flex justify-center gap-2 mt-8">
                                @if ($companies->onFirstPage())
                                    <li class="w-12 h-12 text-center border rounded-full cursor-default border-gray-100/50 dark:border-gray-100/20">
                                        <span class="cursor-auto text-16 leading-[2.8] dark:text-white">
                                            <i class="mdi mdi-chevron-double-left"></i>
                                        </span>
                                    </li>
                                @else
                                    <li class="w-12 h-12 text-center border rounded-full border-gray-100/50 dark:border-gray-100/20">
                                        <a href="{{ $companies->previousPageUrl() }}" class="flex items-center justify-center w-full h-full">
                                            <i class="mdi mdi-chevron-double-left text-16 leading-[2.8] dark:text-white"></i>
                                        </a>
                                    </li>
                                @endif

                                @foreach ($companies->links()->elements as $element)
                                    @if (is_string($element))
                                        <li class="w-12 h-12 text-center text-gray-500 dark:text-gray-400">
                                            <span class="text-16 leading-[2.8]">{{ $element }}</span>
                                        </li>
                                    @endif

                                    @if (is_array($element))
                                        @foreach ($element as $page => $url)
                                            @if ($page == $companies->currentPage())
                                                <li class="w-12 h-12 text-center text-white border border-transparent rounded-full cursor-pointer group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">
                                                    <a class="flex items-center justify-center w-full h-full" href="javascript:void(0)">
                                                        {{ $page }}
                                                    </a>
                                                </li>
                                            @else
                                                <li class="w-12 h-12 text-center border rounded-full cursor-pointer border-gray-100/50 dark:border-gray-100/20">
                                                    <a href="{{ $url }}" class="flex items-center justify-center w-full h-full dark:text-white">
                                                        {{ $page }}
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach

                                    @if ($companies->hasMorePages())
                                        <li class="w-12 h-12 text-center border rounded-full border-gray-100/50 dark:border-gray-100/20">
                                            <a href="{{ $companies->nextPageUrl() }}" class="flex items-center justify-center w-full h-full">
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
                    {{-- ------- next page link end ------- --}}

                </div>
            </section>
            <!-- End grid -->

        </div>
    </div>

@endsection
