@extends('layouts.' . ($layout ?? 'dashboard'))  <!-- Default to 'dashboard' layout -->

@section('content')
    <div class="page-content">
        <div class="container-fluid px-[0.625rem]">
            <div class="grid grid-cols-1 pb-6">
                <div class="md:flex items-center justify-between px-[2px]">
                    <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow dark:text-gray-100 mb-2 md:mb-0">Company Dashboard</h4>
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                            <li class="inline-flex items-center">
                                <a href="#" class="inline-flex items-center text-sm text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                Company Dashboard
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center rtl:mr-2">
                                    <i class="font-semibold text-gray-600 align-middle far fa-angle-right text-13 rtl:rotate-180 dark:text-zinc-100"></i>
                                    <a href="#" class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Dashboard</a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-6 gap-y-0 2xl:gap-6 md:grid-cols-2 2xl:grid-cols-3">
                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body">
                        <div>
                            <div class="grid items-center grid-cols-12 gap-6">
                                <div class="col-span-6">
                                    <span class="text-gray-700 dark:text-zinc-100">Total Jobs</span>
                                    <h4 class="my-4 font-medium text-gray-800 text-21 dark:text-gray-100">
                                        <span class="counter-value" data-target="{{ $stats['total_jobs'] }}">{{ $stats['total_jobs'] }}</span>
                                    </h4>
                                </div>
                                <div class="col-span-6">
                                    <div id="mini-chart1" data-colors='["#5156be"]' class="mb-2 apex-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center mt-1">
                            <span class="text-[10px] py-[1px] px-1 bg-green-500/40 text-green-500 rounded font-medium dark:bg-green-500/30">{{ $stats['total_jobs'] }}</span>
                            <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">Since last week</span>
                        </div>
                    </div>
                </div>
                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body">
                        <div>
                            <div class="grid items-center grid-cols-12 gap-6">
                                <div class="col-span-6">
                                    <span class="text-gray-700 dark:text-zinc-100">Active Jobs</span>
                                    <h4 class="my-4 font-medium text-gray-800 text-21 dark:text-gray-100">
                                        <span class="counter-value" data-target="{{ $stats['active_jobs'] }}">{{ $stats['active_jobs'] }}</span>
                                    </h4>
                                </div>
                                <div class="col-span-6">
                                    <div id="mini-chart2" data-colors='["#5156be"]' class="mb-2 apex-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <span class="text-[10px] py-[1px] px-1 bg-green-500/40 text-green-500 rounded font-medium dark:bg-green-500/30">{{ $stats['active_jobs'] }}</span>
                            <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">Since last week</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
