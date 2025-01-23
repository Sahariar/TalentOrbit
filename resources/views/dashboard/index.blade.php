@extends('layouts.' . ($layout ?? 'dashboard'))  <!-- Default to 'dashboard' layout -->

@section('content')
    <div class="page-content">
        <div class="container-fluid px-[0.625rem]">
            <div class="grid grid-cols-1 pb-6">
                <div class="md:flex items-center justify-between px-[2px]">
                    <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow dark:text-gray-100 mb-2 md:mb-0">Dashboard</h4>
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                            <li class="inline-flex items-center">
                                <a href="#" class="inline-flex items-center text-sm text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                    Dashboard
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
                                    <span class="text-gray-700 dark:text-zinc-100">Total Companies</span>
                                    <h4 class="my-4 font-medium text-gray-800 text-21 dark:text-gray-100">
                                        <span class="counter-value" data-target="{{ $stats['total_companies'] }}">{{ $stats['total_companies'] }}</span>
                                    </h4>
                                </div>
                                <div class="col-span-6">
                                    <div id="mini-chart1" data-colors='["#5156be"]' class="mb-2 apex-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center mt-1">
                            <span class="text-[10px] py-[1px] px-1 bg-green-500/40 text-green-500 rounded font-medium dark:bg-green-500/30">+2</span>
                            <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">Since last week</span>
                        </div>
                    </div>
                </div>
                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body">
                        <div>
                            <div class="grid items-center grid-cols-12 gap-6">
                                <div class="col-span-6">
                                    <span class="text-gray-700 dark:text-zinc-100">Pending Companies</span>
                                    <h4 class="my-4 font-medium text-gray-800 text-21 dark:text-gray-100">
                                        <span class="counter-value" data-target="{{ $stats['pending_companies'] }}">{{ $stats['pending_companies'] }}</span>
                                    </h4>
                                </div>
                                <div class="col-span-6">
                                    <div id="mini-chart2" data-colors='["#5156be"]' class="mb-2 apex-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center mt-1">
                            <span class="text-[10px] py-[1px] px-1 bg-red-500/40 text-red-500 rounded font-medium dark:bg-red-500/30"> {{ $stats['pending_companies'] }}</span>
                            <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">Since last week</span>
                        </div>
                    </div>
                </div>
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
                                    <div id="mini-chart3" data-colors='["#5156be"]' class="mb-2 apex-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center mt-1">
                            <span class="text-[10px] py-[1px] px-1 bg-green-500/40 text-green-500 rounded font-medium dark:bg-green-500/30">+ 10</span>
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
                                    <div id="mini-chart4" data-colors='["#5156be"]' class="mb-2 apex-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <span class="text-[10px] py-[1px] px-1 bg-green-500/40 text-green-500 rounded font-medium dark:bg-green-500/30">{{ $stats['active_jobs'] }}</span>
                            <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">Since last week</span>
                        </div>
                    </div>
                </div>
                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body">
                        <div>
                            <div class="grid items-center grid-cols-12 gap-6">
                                <div class="col-span-6">
                                    <span class="text-gray-700 dark:text-zinc-100">Total Candidates</span>
                                    <h4 class="my-4 font-medium text-gray-800 text-21 dark:text-gray-100">
                                        <span class="counter-value" data-target="{{ $stats['total_candidates'] }}">{{ $stats['total_candidates'] }}</span>
                                    </h4>
                                </div>
                                <div class="col-span-6">
                                    <div id="mini-chart4" data-colors='["#5156be"]' class="mb-2 apex-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <span class="text-[10px] py-[1px] px-1 bg-green-500/40 text-green-500 rounded font-medium dark:bg-green-500/30">{{ $stats['total_candidates'] }}</span>
                            <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">Since last week</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-y-6">
                {{-- Recent Activity --}}
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    {{-- Recent Companies --}}
                    <div class="bg-white rounded-lg shadow">
                        <div class="p-4 border-b">
                            <h2 class="text-lg font-semibold">Recent Companies</h2>
                        </div>
                        <div class="p-4">
                            <div class="space-y-4">
                                @foreach($recent_companies as $company)
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        @if($company->image)
                                            <img src="{{ Storage::url($company->image) }}" class="w-10 h-10 rounded-full">
                                        @else
                                            <div class="w-10 h-10 rounded-full bg-gray-200"></div>
                                        @endif
                                        <div class="ml-3">
                                            <p class="font-medium">{{ $company->name }}</p>
                                            <p class="text-sm text-gray-500">{{ $company->user->email }}</p>
                                        </div>
                                    </div>
                                    <span class="px-2 py-1 text-xs rounded-full {{ $company->is_approved ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                        {{ $company->is_approved ? 'Approved' : 'Pending' }}
                                    </span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- Recent Jobs --}}
                    <div class="bg-white rounded-lg shadow">
                        <div class="p-4 border-b">
                            <h2 class="text-lg font-semibold">Recent Jobs</h2>
                        </div>
                        <div class="p-4">
                            <div class="space-y-4">
                                @foreach($recent_jobs as $job)
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="font-medium">{{ $job->title }}</p>
                                        <p class="text-sm text-gray-500">{{ $job->company_profile->name }}</p>
                                    </div>
                                    <span class="px-2 py-1 text-xs rounded-full {{ $job->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                        {{ $job->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow">
                        <div class="p-4 border-b">
                            <h2 class="text-lg font-semibold">Recent Candidate</h2>
                        </div>
                        <div class="p-4">
                            <div class="space-y-4">
                                @foreach($recent_candidates as $candidate)
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        @if($candidate->image)
                                            <img src="{{ Storage::url($candidate->image) }}" class="w-10 h-10 rounded-full">
                                        @else
                                            <div class="w-10 h-10 rounded-full bg-gray-200"></div>
                                        @endif
                                        <div class="ml-3">
                                            <p class="font-medium">{{ $candidate->name }}</p>
                                            <p class="text-sm text-gray-500">{{ $candidate->user->email }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
