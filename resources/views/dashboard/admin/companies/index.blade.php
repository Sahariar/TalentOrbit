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
                                    <a href="#" class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Companies</a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-6 gap-y-0 2xl:gap-6 md:grid-cols-2 2xl:grid-cols-4">
                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body">
                        <div>
                            <div class="grid items-center grid-cols-12 gap-6">
                                <div class="col-span-6">
                                    <span class="text-gray-700 dark:text-zinc-100">My Wallet</span>
                                    <h4 class="my-4 font-medium text-gray-800 text-21 dark:text-gray-100">
                                        $<span class="counter-value" data-target="865.2">865.2</span>
                                        k
                                    </h4>
                                </div>
                                <div class="col-span-6">
                                    <div id="mini-chart1" data-colors='["#5156be"]' class="mb-2 apex-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center mt-1">
                            <span class="text-[10px] py-[1px] px-1 bg-green-500/40 text-green-500 rounded font-medium dark:bg-green-500/30">+ $20.9k</span>
                            <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">Since last week</span>
                        </div>
                    </div>
                </div>
                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body">
                        <div>
                            <div class="grid items-center grid-cols-12 gap-6">
                                <div class="col-span-6">
                                    <span class="text-gray-700 dark:text-zinc-100">Number of Trades</span>
                                    <h4 class="my-4 font-medium text-gray-800 text-21 dark:text-gray-100">
                                        <span class="counter-value" data-target="865.2">6258</span>
                                    </h4>
                                </div>
                                <div class="col-span-6">
                                    <div id="mini-chart2" data-colors='["#5156be"]' class="mb-2 apex-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center mt-1">
                            <span class="text-[10px] py-[1px] px-1 bg-red-500/40 text-red-500 rounded font-medium dark:bg-red-500/30">- 29 Trades</span>
                            <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">Since last week</span>
                        </div>
                    </div>
                </div>
                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body">
                        <div>
                            <div class="grid items-center grid-cols-12 gap-6">
                                <div class="col-span-6">
                                    <span class="text-gray-700 dark:text-zinc-100">Invested Amount</span>
                                    <h4 class="my-4 font-medium text-gray-800 text-21 dark:text-gray-100">
                                        $<span class="counter-value" data-target="865.2">4.32</span>M
                                    </h4>
                                </div>
                                <div class="col-span-6">
                                    <div id="mini-chart3" data-colors='["#5156be"]' class="mb-2 apex-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center mt-1">
                            <span class="text-[10px] py-[1px] px-1 bg-green-500/40 text-green-500 rounded font-medium dark:bg-green-500/30">+ $2.8k</span>
                            <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">Since last week</span>
                        </div>
                    </div>
                </div>
                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body">
                        <div>
                            <div class="grid items-center grid-cols-12 gap-6">
                                <div class="col-span-6">
                                    <span class="text-gray-700 dark:text-zinc-100">Profit Ration</span>
                                    <h4 class="my-4 font-medium text-gray-800 text-21 dark:text-gray-100">
                                        <span class="counter-value" data-target="865.2">12.57%</span>
                                    </h4>
                                </div>
                                <div class="col-span-6">
                                    <div id="mini-chart4" data-colors='["#5156be"]' class="mb-2 apex-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <span class="text-[10px] py-[1px] px-1 bg-green-500/40 text-green-500 rounded font-medium dark:bg-green-500/30">+ 2.95%</span>
                            <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">Since last week</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Company</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jobs</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($companies as $company)
                        <tr>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    @if($company->image)
                                        <img src="{{ Storage::url($company->image) }}" class="w-10 h-10 rounded-full">
                                    @else
                                        <div class="w-10 h-10 rounded-full bg-gray-200"></div>
                                    @endif
                                    <div class="ml-3">
                                        <p class="font-medium">{{ $company->name }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">{{ $company->user->email }}</td>
                            <td class="px-6 py-4">{{ $company->jobs_count }}</td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 text-xs rounded-full {{ $company->is_approved ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                    {{ $company->is_approved ? 'Approved' : 'Pending' }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-2">
                                    <a href="{{ route('admin.companies.show', $company) }}" class="text-blue-600 hover:text-blue-900">View</a>
                                    @if(!$company->is_approved)
                                        <form action="{{ route('admin.companies.approve', $company) }}" method="POST" class="inline">
                                            @csrf
                                            <button type="submit" class="text-green-600 hover:text-green-900">Approve</button>
                                        </form>
                                    @else
                                        <form action="{{ route('admin.companies.reject', $company) }}" method="POST" class="inline">
                                            @csrf
                                            <button type="submit" class="text-yellow-600 hover:text-yellow-900">Reject</button>
                                        </form>
                                    @endif
                                    <form action="{{ route('admin.companies.delete', $company) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="p-4">
                {{ $companies->links() }}
            </div>
        </div>
        </div>
    </div>

@endsection
