@extends('layouts.' . ($layout ?? 'app'))  <!-- Default to 'app' layout -->
@section('content')
<div class="main-content">
    <div class="page-content">

        <section class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.png')] bg-center bg-cover relative" >
            <div class="container mx-auto">
                <div class="grid">
                    <div class="col-span-12">
                        <div class="text-center text-white">
                            <h3 class="mb-4 text-[26px]">Candidate Grid</h3>
                            <div class="page-next">
                                <nav class="inline-block" aria-label="breadcrumb text-center">
                                    <ol class="flex flex-wrap justify-center text-sm font-medium uppercase">
                                        <li><a href="{{route('home')}}">Home</a></li>
                                        <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a href="{{ url()->previous() }}">Pages</a></li>
                                        <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i>Candidate Grid</li>
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
                    <div class="mt-5">
                        <div class="grid items-center grid-cols-12">
                            <div class="col-span-12 lg:col-span-8">
                                <h6 class="mb-0 text-gray-900 fs-16 dark:text-gray-50"> Showing {{ $candidates->firstItem() }} – {{ $candidates->lastItem() }} of {{ $candidates->total() }} results </h6>
                            </div>
                            <div class="col-span-12 lg:col-span-4">

                            </div>
                        </div>
                    </div>

                    <div class="mt-10">
                        <div class="grid grid-cols-12 gap-y-6 lg:gap-6">

                            @foreach ($candidates as $candidate)
                            <div class="col-span-12 lg:col-span-4">
                                <div class="relative p-5 border rounded-md border-gray-100/50 dark:border-neutral-600">

                                    <div class="flex mb-4">
                                        <div class="relative shrink-0">
                                            <img src="{{ url('storage/' . $candidate->image)  }}" alt="image" class="w-16 h-16 rounded">
                                            <span class="absolute h-3.5 w-3.5 rounded-full bg-green-500 border-2 border-white -top-1 -right-1 dark:border-neutral-700">
                                                <span class="hidden">active</span>
                                            </span>
                                        </div>
                                        <div class="ltr:ml-3 rtl:mr-3">
                                            <a href="{{route('candidate.show', $candidate)}}"><h5 class="mb-2 text-17 dark:text-white">{{$candidate->name}}</h5></a>
                                            <span class="text-13 bg-sky-500/20 text-sky-500 px-1.5 py-1 rounded">$800/month</span>
                                        </div>
                                    </div>

                                    <ul class="flex items-center justify-between">
                                        <li class="text-yellow-500 text-17">
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star-half-full"></i>
                                        </li>
                                        <li>
                                            <div class="h-8 w-8 bg-red-600 rounded text-white leading-[2.4] text-center">
                                                <a href="javascript:void(0)"><i class="text-lg uil uil-heart-alt"></i></a>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="mt-5 border rounded border-gray-100/50 dark:border-neutral-600">
                                        <div class="grid grid-cols-12">
                                            <div class="col-span-6">
                                                <div class="px-3 py-2 ltr:border-r rtl:border-l dark:border-neutral-600 border-gray-100/50">
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">Exp. : 0-3 Years</p>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-span-6">
                                                <div class="px-3 py-2">
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">Freelancers</p>
                                                </div>
                                            </div><!--end col-->
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <p class="text-gray-500 dark:text-gray-300">{{$candidate->description ?? "No discription added"}}</p>
                                    </div>

                                    <div class="mt-6">
                                        <a href="{{route('candidate.show', $candidate)}}" class="w-full mt-2 border-transparent btn group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500
                                            group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 hover:-translate-y-1 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=violet]:hover:text-white group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=sky]:hover:text-white group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=red]:hover:text-white group-data-[theme-color=green]:hover:bg-green-500
                                            group-data-[theme-color=green]:hover:text-white group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=pink]:hover:text-white group-data-[theme-color=blue]:hover:bg-blue-500 group-data-[theme-color=blue]:hover:text-white hover:ring group-data-[theme-color=violet]:hover:ring-violet-500/20 group-data-[theme-color=sky]:hover:ring-sky-500/20 group-data-[theme-color=red]:hover:ring-red-500/20 group-data-[theme-color=green]:hover:ring-green-500/20 group-data-[theme-color=pink]:hover:ring-pink-500/20
                                            group-data-[theme-color=blue]:hover:ring-blue-500/20"><i class="mdi mdi-eye"></i> View Profile</a>
                                    </div>

                                    <div class="absolute px-2 text-white bg-violet-500 top-2 ltr:right-0 rtl:left-0">
                                        <span class="relative text-xs font-medium uppercase">featured</span>
                                        <div class="after:contant[] ltr:after:border-r-[11px] rtl:after:border-l-[11px] after:absolute after:border-b-[12px] ltr:after:-left-[11px] rtl:after:-right-[11.5px] after:top-0 after:border-t-[11.5px] after:border-t-transparent after:border-violet-500 after:border-b-transparent"></div>
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
                                @if ($candidates->onFirstPage())
                                    <li class="w-12 h-12 text-center border rounded-full cursor-default border-gray-100/50 dark:border-gray-100/20">
                                        <span class="cursor-auto text-16 leading-[2.8] dark:text-white">
                                            <i class="mdi mdi-chevron-double-left"></i>
                                        </span>
                                    </li>
                                @else
                                    <li class="w-12 h-12 text-center border rounded-full border-gray-100/50 dark:border-gray-100/20">
                                        <a href="{{ $candidates->previousPageUrl() }}" class="flex items-center justify-center w-full h-full">
                                            <i class="mdi mdi-chevron-double-left text-16 leading-[2.8] dark:text-white"></i>
                                        </a>
                                    </li>
                                @endif

                                @foreach ($candidates->links()->elements as $element)
                                    @if (is_string($element))
                                        <li class="w-12 h-12 text-center text-gray-500 dark:text-gray-400">
                                            <span class="text-16 leading-[2.8]">{{ $element }}</span>
                                        </li>
                                    @endif

                                    @if (is_array($element))
                                        @foreach ($element as $page => $url)
                                            @if ($page == $candidates->currentPage())
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

                                @if ($candidates->hasMorePages())
                                    <li class="w-12 h-12 text-center border rounded-full border-gray-100/50 dark:border-gray-100/20">
                                        <a href="{{ $candidates->nextPageUrl() }}" class="flex items-center justify-center w-full h-full">
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
