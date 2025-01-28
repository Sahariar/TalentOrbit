@extends('layouts.' . ($layout ?? 'dashboard')) <!-- Default to 'dashboard' layout -->

@section('content')
    <div class="page-content">
        <div class="container-fluid px-[0.625rem]">
            <div class="grid grid-cols-1 pb-6">
                <div class="md:flex items-center justify-between px-[2px]">
                    <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow dark:text-gray-100 mb-2 md:mb-0">Price Plan Dashboard</h4>
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
                                        class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Price Plan</a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 lg:col-span-9">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body ">
                            <div class="grid grid-cols-12 ">
                                <div class="col-span-9">
                                    <div class="flex flex-wrap items-center">
                                        <div class="mt-3 md:mt-0">
                                            <h5 class="text-gray-700 text-16 dark:text-gray-100">{{ $pricingplan->title }}
                                            </h5>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-3">
                                    <div class="flex flex-wrap items-center justify-end">
                                        <div class="relative">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="border-b card-body border-gray-50 dark:border-zinc-600">
                            <h5 class="text-gray-700 text-15 dark:text-gray-100">About</h5>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="pb-3">
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-12 md:col-span-10">
                                            <div class="text-gray-500 dark:text-zinc-100">
                                                <p class="mb-2">
                                                <div class="prose max-w-none">
                                                    {!! $pricingplan->description !!}
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div>

@endsection
