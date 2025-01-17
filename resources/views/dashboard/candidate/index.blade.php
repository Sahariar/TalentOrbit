@extends('layouts.' . ($layout ?? 'dashboard'))  <!-- Default to 'dashboard' layout -->

@section('content')
    <div class="page-content">
        <div class="container-fluid px-[0.625rem]">
            <div class="grid grid-cols-1 pb-6">
                <div class="md:flex items-center justify-between px-[2px]">
                    <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow dark:text-gray-100 mb-2 md:mb-0">Candidate Dashboard</h4>
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                            <li class="inline-flex items-center">
                                <a href="#" class="inline-flex items-center text-sm text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                    Candidate  Dashboard
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

            {{-- <div class="grid grid-cols-1 gap-6 gap-y-0 2xl:gap-6 lg:grid-cols-12">
                <div class="col-span-12 2xl:col-span-5">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600 card-h-100">
                        <div class="card-body">
                            <div class="flex flex-wrap items-center mb-6">
                                <h5 class="mr-2 font-medium text-gray-800 text-15 dark:text-gray-100">Wallet Balance</h5>
                                <div class="flex gap-1 ltr:ml-auto rtl:mr-auto">
                                    <button type="button" class="px-2 py-1 font-medium text-gray-500 border-transparent btn text-[12.25px] bg-gray-50/50 hover:bg-gray-50/50 dark:hover:bg-zinc-600/800 hover:text-white focus:bg-gray-500 focus:text-white dark:bg-gray-500/10 dark:text-zinc-100 hover:bg-gray-500 dark:hover:bg-gray-200 dark:hover:text-gray-800">ALL</button>
                                    <button type="button" class="px-2 py-1 font-medium border-transparent btn text-[12.25px] bg-violet-50/50 text-sky-500 hover:bg-sky-500 hover:text-white focus:bg-sky-500 focus:text-white dark:bg-sky-500/20 dark:text-violet-300 dark:hover:bg-sky-500 dark:hover:text-white">1M</button>
                                    <button type="button" class="px-2 py-1 font-medium text-gray-500 border-transparent btn text-[12.25px] bg-gray-50/50 hover:bg-gray-50/50 dark:hover:bg-zinc-600/800 hover:text-white focus:bg-gray-500 focus:text-white dark:bg-gray-500/10 dark:text-zinc-100 hover:bg-gray-500 dark:hover:bg-gray-200 dark:hover:text-gray-800">6M</button>
                                    <button type="button" class="px-2 py-1 font-medium text-gray-500 border-transparent btn text-[12.25px] bg-gray-50/50 hover:bg-gray-50/50 dark:hover:bg-zinc-600/800 hover:text-white focus:bg-gray-500 focus:text-white dark:bg-gray-500/10 dark:text-zinc-100 hover:bg-gray-500 dark:hover:bg-gray-200 dark:hover:text-gray-800">1Y</button>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 2xl:gap-6 justify-items-stretch">
                                <div class="items-center col-span-12 mr-2 md:col-span-6 justify-self-center 2xl:mr-0">
                                    <div id="wallet-balance" data-colors='["#777aca", "#5156be", "#a8aada"]' class="apex-charts"></div>
                                </div>
                                <div class="col-span-12 md:col-span-6">
                                    <div class="text-center mt-sm-0 md:text-left">
                                        <div>
                                            <p class="mb-2 dark:text-zinc-100">
                                                <i class="mr-2 text-green-500 align-middle mdi mdi-circle text-10 "></i> Bitcoin
                                            </p>
                                            <h6 class="text-gray-800 dark:text-gray-100">0.4412 BTC =
                                                <span class="font-normal text-gray-700 dark:text-zinc-100 text-14">$ 4025.32</span>
                                            </h6>
                                        </div>
                                        <div class="pt-2 mt-6">
                                            <p class="mb-2 dark:text-zinc-100">
                                                <i class="mr-2 align-middle mdi mdi-circle text-10 text-sky-500 "></i> Ethereum
                                            </p>
                                            <h6 class="text-gray-800 dark:text-gray-100">4.5701 ETH =
                                                <span class="font-normal text-gray-700 dark:text-zinc-100 text-14">$ 1123.64</span>
                                            </h6>
                                        </div>
                                        <div class="pt-2 mt-6">
                                            <p class="mb-2 dark:text-zinc-100">
                                                <i class="mr-2 align-middle mdi mdi-circle text-10 text-sky-500"></i> Litecoin
                                            </p>
                                            <h6 class="text-gray-800 dark:text-gray-100">35.3811 LTC =
                                                <span class="font-normal text-gray-700 dark:text-zinc-100 text-14">$ 2263.09</span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 2xl:col-span-7">
                    <div class="grid grid-cols-12 2xl:gap-6">
                        <div class="col-span-12 2xl:col-span-8">
                            <div class="card dark:bg-zinc-800 dark:border-zinc-600 card-h-100">
                                <div class="card-body">
                                    <div class="flex flex-wrap items-center mb-6">
                                        <h5 class="mr-2 text-gray-800 text-15 dark:text-gray-100 ">Invested Overview</h5>
                                        <div class="ltr:ml-auto rtl:mr-auto">
                                            <select class="py-0 form-select form-select-sm ltr:pl-4 rtl:pr-4 border-gray-50 bg-gray-50/20 dark:border-zinc-600 dark:text-gray-100 dark:bg-zinc-700">
                                                <option value="MAY" selected="">May</option>
                                                <option value="AP">April</option>
                                                <option value="MA">March</option>
                                                <option value="FE">February</option>
                                                <option value="JA">January</option>
                                                <option value="DE">December</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12 2xl:gap-6">
                                        <div class="col-span-12 mr-3 md:col-span-6 2xl:mr-0 justify-self-center">
                                            <div id="invested-overview" data-colors='["#5156be", "#34c38f"]' class="apex-charts"></div>
                                        </div>
                                        <div class="col-span-12 md:col-span-6">
                                            <div>
                                                <p class="mb-1 text-gray-700 dark:text-zinc-100">Invested Amount</p>
                                                <h4 class="mb-2 text-gray-800 text-21 dark:text-gray-100">$ 6134.39</h4>
                                                <p class="mb-6 text-gray-700 dark:text-zinc-100"> + 0.0012.23 ( 0.2 % )
                                                    <i class="ml-1 text-green-500 mdi mdi-arrow-up"></i>
                                                </p>
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-6">
                                                        <div>
                                                            <p class="mb-2 text-gray-600 dark:text-zinc-100 uppercase text-11 leading-[16.5px]">Income</p>
                                                            <h5 class="mb-2 text-gray-800 dark:text-gray-100">$ 2632.46</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-6">
                                                        <div>
                                                            <p class="mb-2 text-gray-600 dark:text-zinc-100 uppercase text-11 leading-[16.5px]">Expenses</p>
                                                            <h5 class="mb-2 text-gray-800 dark:text-gray-100">-$ 924.38</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <a href="#" class="btn py-1.5 px-2.5 text-xs bg-sky-500 text-white shadow-md shadow-violet-100 border-transparent hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50/50 dark:shadow-zinc-600">View more
                                                        <i class="mdi mdi-arrow-right ms-1"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12 2xl:col-span-4">
                            <div class="relative overflow-hidden border-transparent shadow card card-h-100 bg-sky-500 shadow-violet-100 dark:shadow-zinc-800">
                                <div class="relative text-center card-body">
                                    <div class="absolute -top-2 -right-2">
                                        <i class="mdi mdi-bitcoin widget-box-1-icon text-7xl text-white/10"></i>
                                    </div>
                                    <div dir="ltr" class="swiper login-slider bitcon-news">
                                        <div class="swiper-wrapper">
                                            <div class="mb-8 swiper-slide">
                                                <div class="w-12 h-12 mx-auto text-center rounded-full bg-white/30">
                                                    <span class="text-2xl text-white">
                                                        <i class="leading-loose mdi mdi-currency-btc"></i>
                                                    </span>
                                                </div>
                                                <h4 class="mt-4 text-white lh-base fw-normal text-21">
                                                    <span>Bitcoin</span>
                                                    <span class="font-normal">News</span>
                                                </h4>
                                                <p class="mt-2 mb-4 text-white/50 text-13 ">
                                                    Bitcoin prices fell sharply amid the global sell-off in equities. Negative news
                                                    over the Bitcoin past week has dampened Bitcoin basics
                                                    sentiment for bitcoin.
                                                </p>

                                                <button type="button" href="apps-invoices-list.html" class="btn py-1.5 px-2.5 text-xs border-transparent bg-white dark:bg-gray-800 dark:text-gray-100 shadow shadow-white/20"><i class="ml-1 mdi mdi-arrow-right"></i> View details</button>
                                            </div>
                                            <div class="mb-8 swiper-slide">
                                                <div class="w-12 h-12 mx-auto text-center rounded-full bg-white/30">
                                                    <span class="text-2xl text-white">
                                                        <i class="leading-loose mdi mdi-currency-btc"></i>
                                                    </span>
                                                </div>
                                                <h4 class="mt-4 text-white lh-base fw-normal text-21">
                                                    <span>ETH</span>
                                                    <span class="font-normal">News</span>
                                                </h4>
                                                <p class="mt-2 mb-4 text-white/50 text-13 ">
                                                    Bitcoin prices fell sharply amid the global sell-off in equities. Negative news
                                                    over the Bitcoin past week has dampened Bitcoin basics
                                                    sentiment for bitcoin.
                                                </p>

                                                <button type="button" href="apps-invoices-list.html" class="btn py-1.5 px-2.5 text-xs border-transparent bg-white dark:bg-gray-800 dark:text-gray-100 shadow shadow-white/20"> <i class="ml-1 mdi mdi-arrow-right"></i> View details</button>
                                            </div>
                                            <div class="mb-8 swiper-slide">
                                                <div class="w-12 h-12 mx-auto text-center rounded-full bg-white/30">
                                                    <span class="text-2xl text-white">
                                                        <i class="leading-loose mdi mdi-currency-btc"></i>
                                                    </span>
                                                </div>
                                                <h4 class="mt-4 text-white lh-base fw-normal text-21">
                                                    <span>Bitcoin</span>
                                                    <span class="font-normal">News</span>
                                                </h4>
                                                <p class="mt-2 mb-4 text-white/50 text-13 ">
                                                    Bitcoin prices fell sharply amid the global sell-off in equities. Negative news
                                                    over the Bitcoin past week has dampened Bitcoin basics
                                                    sentiment for bitcoin.
                                                </p>

                                                <button type="button" href="apps-invoices-list.html" class="btn py-1.5 px-2.5 text-xs border-transparent bg-white dark:bg-gray-800 dark:text-gray-100 shadow shadow-white/20"><i class="ml-1 mdi mdi-arrow-right"></i> View details </button>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-6 gap-y-0 2xl:gap-6">
                <div class="col-span-12 lg:col-span-8">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600 card-h-100">
                        <div class="card-body">
                            <div>
                                <div class="flex flex-wrap items-center mb-6">
                                    <h5 class="mr-2 text-gray-800 text-15 dark:text-gray-100 ">Market Overview</h5>
                                    <div class="flex gap-1 ltr:ml-auto rtl:mr-auto">
                                        <button type="button" class="px-2 py-1 border-transparent btn text-13 bg-violet-50/50 text-sky-500 hover:bg-sky-500 hover:text-white focus:bg-sky-500 focus:text-white dark:bg-sky-500/20 dark:text-violet-200 dark:hover:bg-sky-500 dark:hover:text-white">ALL</button>
                                        <button type="button" class="px-2 py-1 text-gray-500 border-transparent btn text-13 bg-gray-50/50 hover:bg-gray-500 dark:hover:bg-zinc-600/800 hover:text-white focus:bg-gray-500 focus:text-white dark:bg-gray-500/10 dark:text-gray-100 dark:hover:bg-gray-500 dark:hover:text-white">1M</button>
                                        <button type="button" class="px-2 py-1 text-gray-500 border-transparent btn text-13 bg-gray-50/50 hover:bg-gray-500 dark:hover:bg-zinc-600/800 hover:text-white focus:bg-gray-500 focus:text-white dark:bg-gray-500/10 dark:text-gray-100 dark:hover:bg-gray-500 dark:hover:text-white">6M</button>
                                        <button type="button" class="px-2 py-1 text-gray-500 border-transparent btn text-13 bg-gray-50/50 hover:bg-gray-500 dark:hover:bg-zinc-600/800 hover:text-white focus:bg-gray-500 focus:text-white dark:bg-gray-500/10 dark:text-gray-100 dark:hover:bg-gray-500 dark:hover:text-white">1Y</button>
                                    </div>
                                </div>
                            </div>
                            <div class="grid items-center grid-cols-12 gap-6">
                                <div class="col-span-12 lg:col-span-8">
                                    <div id="market-overview" data-colors='["#5156be", "#34c38f"]' class="apex-charts dark:border-zinc-700"></div>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="p-6 space-y-4">
                                        <div class="flex items-center">
                                            <div class="w-8 h-8 text-center rounded-full bg-gray-50/30 dark:bg-zinc-700 dark:text-gray-100">
                                                <span class="leading-loose text-16">1</span>
                                            </div>
                                            <div class="flex-grow ltr:ml-3 rtl:mr-3">
                                                <span class="text-gray-700 text-16 dark:text-gray-100">Coinmarketcap</span>
                                            </div>
                                            <div class="">
                                                <span class="text-xs bg-green-500/40 text-green-500 py-0.5 px-2 rounded-full font-medium dark:bg-green-500/20 ">+2.5%</span>
                                            </div>
                                        </div>

                                        <div class="flex items-center">
                                            <div class="w-8 h-8 text-center rounded-full bg-gray-50/30 dark:bg-zinc-700 dark:text-gray-100">
                                                <span class="leading-loose text-16">2</span>
                                            </div>
                                            <div class="flex-grow ltr:ml-3 rtl:mr-3">
                                                <span class="text-gray-700 text-16 dark:text-gray-100">Binance</span>
                                            </div>
                                            <div class="">
                                                <span class="text-xs bg-green-500/40 text-green-500 py-0.5 px-2 rounded-full font-medium dark:bg-green-500/20 ">+8.3%</span>
                                            </div>
                                        </div>

                                        <div class="flex items-center">
                                            <div class="w-8 h-8 text-center rounded-full bg-gray-50/30 dark:bg-zinc-700 dark:text-gray-100">
                                                <span class="leading-loose text-16">3</span>
                                            </div>
                                            <div class="flex-grow ltr:ml-3 rtl:mr-3">
                                                <span class="text-gray-700 text-16 dark:text-gray-100">Coinbase</span>
                                            </div>
                                            <div class="">
                                                <span class="text-xs bg-red-500/40 text-red-500 py-0.5 px-2 rounded-full font-medium dark:bg-red-500/20 ">-3.6%</span>
                                            </div>
                                        </div>

                                        <div class="flex items-center">
                                            <div class="w-8 h-8 text-center rounded-full bg-gray-50/30 dark:bg-zinc-700 dark:text-gray-100">
                                                <span class="leading-loose text-16">4</span>
                                            </div>
                                            <div class="flex-grow ltr:ml-3 rtl:mr-3">
                                                <span class="text-gray-700 text-16 dark:text-gray-100">Yobit</span>
                                            </div>
                                            <div class="">
                                                <span class="text-xs bg-green-500/40 text-green-500 py-0.5 px-2 rounded-full font-medium dark:bg-green-500/20 ">+7.1%</span>
                                            </div>
                                        </div>

                                        <div class="flex items-center">
                                            <div class="w-8 h-8 text-center rounded-full bg-gray-50/30 dark:bg-zinc-700 dark:text-gray-100">
                                                <span class="leading-loose text-16">5</span>
                                            </div>
                                            <div class="flex-grow ltr:ml-3 rtl:mr-3">
                                                <span class="text-gray-700 text-16 dark:text-gray-100">Bitfinex</span>
                                            </div>
                                            <div class="">
                                                <span class="text-xs bg-red-500/40 text-red-500 py-0.5 px-2 rounded-full font-medium dark:bg-red-500/20 ">-0.9%</span>
                                            </div>
                                        </div>

                                        <div class="pt-2 mt-4">
                                            <a href="" class="w-full font-medium text-white border-transparent shadow-md btn bg-sky-500 shadow-violet-100 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50/50 dark:shadow-zinc-600">See All Balances <i class="mdi mdi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <div class="w-full card dark:bg-zinc-800 dark:border-zinc-600 card-h-100">
                        <div class="card-body">
                            <div class="flex flex-wrap items-center mb-6">
                                <h5 class="mr-2 text-gray-800 text-15 dark:text-gray-100 ">Sales by Locations</h5>
                                <div class="ltr:ml-auto rtl:mr-auto">
                                    <div class="dropdown">
                                        <a class="p-0 border-0 cursor-pointer btn dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-xs text-gray-600 dark:text-gray-100">Sort By:</span> <span class="font-medium dark:text-gray-100">World<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>

                                        <ul class="absolute z-50 hidden float-left py-2 text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu min-w-max bg-clip-padding" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap dark:text-zinc-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80/50" href="#">Action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap dark:text-zinc-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80/50" href="#">Another action</a>
                                            </li>
                                            <li><a class="block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap dark:text-zinc-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80/50" href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="sales-by-locations" class="w-full" data-colors='["#5156be"]' style="height: 250px"></div>
                            <div class="px-2 py-2">
                                <p class="mb-1 text-gray-700 dark:text-zinc-100">USA <span class="float-right">75%</span></p>
                                <div class="mt-2 rounded-full bg-gray-50 dark:bg-zinc-700" style="height: 6px;">
                                    <div class="bg-sky-500 progress-bar-striped h-[6px] ltr:rounded-l rtl:rounded-r overflow-hidden" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                    </div>
                                </div>

                                <p class="mt-3 mb-1 dark:text-zinc-100">Russia <span class="float-right">55%</span></p>
                                <div class="mt-2 rounded-full bg-gray-50 dark:bg-zinc-700" style="height: 6px;">
                                    <div class="bg-sky-500 progress-bar-striped h-[6px] ltr:rounded-l rtl:rounded-r overflow-hidden" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="55">
                                    </div>
                                </div>

                                <p class="mt-3 mb-1 dark:text-zinc-100">Australia <span class="float-right">85%</span></p>
                                <div class="mt-2 rounded-full bg-gray-50 dark:bg-zinc-700" style="height: 6px;">
                                    <div class="bg-sky-500 progress-bar-striped h-[6px] ltr:rounded-l rtl:rounded-r overflow-hidden" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-6 mb-3 gap-y-0 2xl:gap-6 lg:grid-cols-2 2xl:grid-cols-3">
                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="nav-tabs border-b-tabs">
                        <div class="flex pb-0 border-b card-body border-gray-50 dark:border-zinc-700">
                            <h5 class="flex-grow mr-2 text-gray-800 text-15 dark:text-gray-100">Trading</h5>
                            <div class="">
                                <ul class="flex nav" role="tablist">
                                    <li class="nav-item">
                                        <a class="inline-block px-4 pb-3 font-medium dark:text-gray-100 active" href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="buy-tab" role="tab">Buy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="inline-block px-4 pb-3 font-medium dark:text-gray-100" href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="sell-tab" role="tab">Sell</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="block tab-pane" id="buy-tab" role="tabpanel">
                                    <div class="ltr:float-right rtl:float-left ms-2">
                                        <h5 class="text-sm text-gray-700 dark:text-zinc-100"><i class="mr-1 align-middle bx bx-wallet text-sky-500 text-16"></i> <a href="#!" class="underline text-reset underline-offset-2">$4335.23</a></h5>
                                    </div>
                                    <h5 class="mb-6 text-sm text-gray-700 dark:text-gray-100">Buy Coins</h5>
                                    <div>
                                        <div class="mb-3 form-group">
                                            <label class="block mb-2 font-medium text-gray-700 dark:text-zinc-100">Payment method :</label>
                                            <select class="w-full border-gray-100 rounded rtl:pr-3 selection:text-10 py-1.5 focus:border-violet-100 focus:ring focus:ring-violet-50/50 dark:border-zinc-600 dark:bg-zinc-700 dark:text-zinc-100 dark:focus:ring-gray-500/10">
                                                <option>Direct Bank Payment</option>
                                                <option>Credit / Debit Card</option>
                                                <option>Paypal</option>
                                                <option>Payoneer</option>
                                                <option>Stripe</option>
                                            </select>
                                        </div>

                                        <div class="mt-4">
                                            <label class="block mb-2 font-medium dark:text-gray-100 ">Add Amount :</label>
                                            <div class="flex mb-3 border border-gray-100 rounded dark:border-zinc-600 dark:text-zinc-100 ">
                                                <label class="px-3 py-2 border-gray-100 ltr:border-r rtl:border-l dark:bg-zinc-700 dark:border-zinc-600">Amount</label>
                                                <select class="border-0 ltr:pl-1.5 rtl:pr-1.5 overflow-hidden focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:border-zinc-600 dark:bg-zinc-700 dark:text-zinc-100 dark:focus:ring-gray-500/10" style="max-width: 90px;">
                                                    <option value="BT" selected="">BTC</option>
                                                    <option value="ET">ETH</option>
                                                    <option value="LT">LTC</option>
                                                </select>
                                                <input type="text" class=" border-0 w-full py-1.5 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:bg-zinc-700 dark:placeholder:text-gray-200 dark:focus:ring-gray-500/10" placeholder="0.00121255">
                                            </div>

                                            <div class="flex mb-3 border border-gray-100 rounded dark:border-zinc-600 dark:text-zinc-100 ">
                                                <label class="px-3 py-2 border-gray-100 ltr:border-r rtl:border-l dark:bg-zinc-700 dark:border-zinc-600">Price</label>
                                                <input type="text" class="w-full  py-1.5 border-0 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:bg-zinc-700 dark:placeholder:text-gray-200 dark:focus:ring-gray-500/10 dark:text-gray-100" placeholder="$58,245">
                                                <label class="px-3 py-2 border-gray-100 ltr:border-l rtl:border-r dark:bg-zinc-700 dark:border-zinc-600">$</label>
                                            </div>

                                            <div class="flex mb-3 border border-gray-100 rounded dark:border-zinc-600 dark:text-zinc-100 ">
                                                <label class="px-3 py-2 border-gray-100 ltr:border-r rtl:border-l dark:bg-zinc-700 dark:border-zinc-600">Total</label>
                                                <input type="text" class="w-full  py-1.5 border-0 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:bg-zinc-700 dark:placeholder:text-gray-200 dark:focus:ring-gray-500/10 dark:text-gray-100" placeholder="$36,854.25">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="button" class="px-6 text-white bg-green-500 border-transparent shadow-md btn shadow-green-100 hover:bg-green-600 focus:bg-green-600 focus:ring focus:ring-green-50 dark:shadow-zinc-600">Buy Coin</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="hidden tab-pane" id="sell-tab" role="tabpanel">
                                    <div class="ltr:float-right rtl:float-left ltr:ml-2 rtl:mr-2">
                                        <h5 class="text-sm text-gray-700 dark:text-zinc-100"><i class="mr-1 align-middle bx bx-wallet text-sky-500 text-16"></i> <a href="#!" class="underline text-reset underline-offset-2">$4335.23</a></h5>
                                    </div>
                                    <h5 class="mb-6 text-sm text-gray-700 dark:text-gray-100">Sell Coins</h5>

                                    <div>
                                        <div class="mb-3 form-group">
                                            <label class="block mb-2 font-medium text-gray-700 dark:text-zinc-100">Wallet ID :</label>
                                            <input type="email" class="w-full placeholder:text-sm py-1.5 border-gray-100 rounded  dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder:text-gray-200 dark:text-gray-100 focus:ring focus:ring-violet-50/60 dark:focus:ring-gray-500/10 focus:ring-offset-0" placeholder="1cvb254ugxvfcd280ki">
                                        </div>

                                        <div class="mt-4">
                                            <label class="block mb-2 font-medium dark:text-gray-100 ">Add Amount :</label>
                                            <div class="flex mb-3 border border-gray-100 rounded dark:border-zinc-600 dark:text-zinc-100 ">
                                                <label class="px-3 py-2 border-gray-100 ltr:border-r rtl:border-l dark:bg-zinc-700 dark:border-zinc-600">Amount</label>
                                                <select class=" border-0  ltr:pl-1.5 rtl:pr-1.5 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:border-zinc-600 dark:bg-zinc-700 dark:text-zinc-100 dark:focus:ring-gray-500/10" style="max-width: 90px;">
                                                    <option value="BT" selected="">BTC</option>
                                                    <option value="ET">ETH</option>
                                                    <option value="LT">LTC</option>
                                                </select>
                                                <input type="text" class=" border-0 w-full py-1.5 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:bg-zinc-700 dark:placeholder:text-gray-200 dark:focus:ring-gray-500/10" placeholder="0.00121255">
                                            </div>

                                            <div class="flex mb-3 border border-gray-100 rounded dark:border-zinc-600 dark:text-zinc-100 ">
                                                <label class="px-3 py-2 border-gray-100 ltr:border-r rtl:border-l dark:bg-zinc-700 dark:border-zinc-600">Price</label>
                                                <input type="text" class="w-full  py-1.5 border-0 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:bg-zinc-700 dark:placeholder:text-gray-200 dark:focus:ring-gray-500/10 dark:text-gray-100" placeholder="$58,245">
                                                <label class="px-3 py-2 border-gray-100 ltr:border-l rtl:border-r dark:bg-zinc-700 dark:border-zinc-600">$</label>
                                            </div>

                                            <div class="flex mb-3 border border-gray-100 rounded dark:border-zinc-600 dark:text-zinc-100 ">
                                                <label class="px-3 py-2 border-r border-gray-100 dark:bg-zinc-700 dark:border-zinc-600">Total</label>
                                                <input type="text" class="w-full  py-1.5 border-0 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:bg-zinc-700 dark:placeholder:text-gray-200 dark:focus:ring-gray-500/10 dark:text-gray-100" placeholder="$36,854.25">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="button" class="px-6 text-white bg-red-500 border-transparent shadow-md btn shadow-red-100 hover:bg-red-600 focus:bg-red-600 focus:ring focus:ring-red-50 dark:shadow-zinc-600">Sell Coin</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="nav-tabs border-b-tabs">
                        <div class="flex pb-0 border-b card-body border-gray-50 dark:border-zinc-700">
                            <h5 class="flex-grow mr-2 text-gray-800 text-15 dark:text-gray-100">Transactions</h5>
                            <div class="">
                                <ul class="flex nav" role="tablist">
                                    <li class="nav-item">
                                        <a class="inline-block px-4 pb-3 font-medium active " href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="all-tab1" role="tab">All</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="inline-block px-4 pb-3 font-medium" href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="buy-tab1" role="tab">Sell</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="inline-block px-4 pb-3 font-medium" href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="sell-tab1" role="tab">Buy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="py-3">
                            <div class="tab-content">
                                <div class="block tab-pane" id="all-tab1" role="tabpanel">
                                    <div class="px-3" data-simplebar style="max-height: 352px;">
                                        <table class="table w-full">
                                            <tbody>
                                                <tr>
                                                    <td class="p-3" style="width: 50px;">
                                                        <div class="text-green-500 text-22">
                                                            <i class="bx bx-down-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div>
                                                            <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">Buy BTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">14 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">0.016 BTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">$125.20</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Amount</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="p-3">
                                                        <div class="text-red-500 text-22">
                                                            <i class="bx bx-up-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div>
                                                            <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">Sell ETH</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">15 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">0.56 ETH</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">$112.34</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Amount</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="p-3">
                                                        <div class="text-green-500 text-22">
                                                            <i class="bx bx-down-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div>
                                                            <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">Buy LTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">16 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">1.88 LTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">$94.22</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Amount</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="p-3">
                                                        <div class="text-green-500 text-22">
                                                            <i class="bx bx-down-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div>
                                                            <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">Buy ETH</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">17 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">0.42 ETH</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">$84.32</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Amount</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="p-3">
                                                        <div class="text-red-500 text-22">
                                                            <i class="bx bx-up-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div>
                                                            <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">Sell BTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">18 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">0.018 BTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">$145.80</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Amount</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="p-3">
                                                        <div class="text-green-500 text-22">
                                                            <i class="bx bx-down-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div>
                                                            <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">Buy BTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">14 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">0.016 BTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">$125.20</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Amount</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="p-3">
                                                        <div class="text-red-500 text-22">
                                                            <i class="bx bx-up-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div>
                                                            <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">Sell ETH</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">15 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">0.56 ETH</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">$112.34</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Amount</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="hidden tab-pane" id="buy-tab1" role="tabpanel">
                                    <div class="px-3" data-simplebar style="max-height: 352px;">
                                        <table class="table w-full">
                                            <tbody>
                                                <tr>
                                                    <td class="p-3" style="width: 50px;">
                                                        <div class="text-green-500 text-22">
                                                            <i class="bx bx-down-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div>
                                                            <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">Buy BTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">14 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">0.016 BTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">$125.20</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Amount</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="p-3">
                                                        <div class="text-green-500 text-22">
                                                            <i class="bx bx-down-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div>
                                                            <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">Buy BTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">18 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">0.018 BTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">$145.80</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Amount</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="p-3">
                                                        <div class="text-green-500 text-22">
                                                            <i class="bx bx-down-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div>
                                                            <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">Buy LTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">16 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">1.88 LTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">$94.22</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Amount</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="p-3">
                                                        <div class="text-green-500 text-22">
                                                            <i class="bx bx-down-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div>
                                                            <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">Buy ETH</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">15 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">0.56 ETH</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">$112.34</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Amount</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="p-3">
                                                        <div class="text-green-500 text-22">
                                                            <i class="bx bx-down-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div>
                                                            <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">Buy ETH</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">17 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">0.42 ETH</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">$84.32</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Amount</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="p-3">
                                                        <div class="text-green-500 text-22">
                                                            <i class="bx bx-down-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div>
                                                            <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">Buy ETH</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">15 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">0.56 ETH</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">$112.34</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Amount</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="p-3">
                                                        <div class="text-green-500 text-22">
                                                            <i class="bx bx-down-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div>
                                                            <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">Buy BTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">14 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">0.016 BTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">$125.20</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Amount</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="hidden tab-pane" id="sell-tab1" role="tabpanel">
                                    <div class="px-3" data-simplebar style="max-height: 352px;">
                                        <table class="table w-full">
                                            <tbody>
                                                <tr>
                                                    <td class="p-3" style="width: 50px;">
                                                        <div class="text-red-500 text-22">
                                                            <i class="bx bx-up-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div>
                                                            <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">Sell ETH</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">14 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">0.56 ETH</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">$112.34</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Amount</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="p-3">
                                                        <div class="text-red-500 text-22">
                                                            <i class="bx bx-up-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div>
                                                            <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">Sell BTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">18 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">0.016 BTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">$125.20</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Amount</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="p-3">
                                                        <div class="text-red-500 text-22">
                                                            <i class="bx bx-up-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div>
                                                            <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">Sell BTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">16 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">0.018 BTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">$145.80</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Amount</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="p-3">
                                                        <div class="text-red-500 text-22">
                                                            <i class="bx bx-up-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div>
                                                            <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">Sell ETH</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">15 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">0.56 ETH</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">$112.34</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Amount</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="p-3">
                                                        <div class="text-red-500 text-22">
                                                            <i class="bx bx-up-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div>
                                                            <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">Sell LTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">17 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">1.88 LTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">$94.22</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Amount</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="p-3">
                                                        <div class="text-red-500 text-22">
                                                            <i class="bx bx-up-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div>
                                                            <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">Sell ETH</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">15 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">0.42 ETH</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">$84.32</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Amount</p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="p-3">
                                                        <div class="text-red-500 text-22">
                                                            <i class="bx bx-up-arrow-circle d-block"></i>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div>
                                                            <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">Sell BTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">14 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-700 dark:text-gray-100 whitespace-nowrap">0.016 BTC</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="mb-0 text-sm text-gray-500 dark:text-zinc-100">$125.20</h5>
                                                            <p class="mb-0 text-xs text-gray-600 dark:text-zinc-100 whitespace-nowrap">Amount</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div>
                        <div class="border-b border-gray-50 card-body dark:border-zinc-700">
                            <div class="flex flex-wrap items-center">
                                <h5 class="mr-2 text-gray-800 text-15 dark:text-gray-100">Recent Activity</h5>
                                <div class="ltr:ml-auto rtl:mr-auto">
                                    <select class="form-select form-select-md rounded py-0.5 ltr:pl-3 rtl:pr-3 border-gray-50 bg-gray-50/20 dark:border-zinc-600 dark:text-gray-100 dark:bg-zinc-700">
                                        <option value="Today" selected="">Today</option>
                                        <option value="Yesterday">Yesterday</option>
                                        <option value="Last Week">Last Week</option>
                                        <option value="Last Month">Last Month</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 card-body" data-simplebar style="max-height: 370px;">
                            <div class="table w-full">
                                <ul>
                                    <li class="relative flex">
                                        <div class="relative pb-7 pl-14 grow">
                                            <div class="absolute top-0 z-40 left-2">
                                                <div class="w-10 h-10 text-center rounded-full bg-yellow-50 dark:bg-yellow-500/20 ">
                                                    <i class="text-2xl leading-relaxed text-yellow-500 bx bx-bitcoin"></i>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="ml-2 mr-4 overflow-hidden grow lg:w-60">
                                                    <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">24/05/2021, 18:24:56</h5>
                                                    <p class="overflow-hidden text-gray-500 text-13 text-ellipsis whitespace-nowrap dark:text-zinc-100">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                                </div>
                                            </div>

                                            <div class="after:contant-[] after:absolute after:top-0 after:h-20 after:border-l-2 after:border-dashed after:border-gray-100 after:left-7 after:z-0 dark:after:border-zinc-600"></div>

                                        </div>


                                        <div class="shrink-0">
                                            <div class="w-20 mr-1 shrink-0 text-end">
                                                <h6 class="mb-1 font-medium text-gray-700 dark:text-gray-100">+0.5 BTC</h6>
                                                <div class="text-13 dark:text-zinc-100">$178.53</div>
                                            </div>
                                        </div>

                                        <div class="shrink-0">
                                            <div class="relative dropdown">
                                                <a href="#!" class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 dark:text-gray-100" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Action</a>
                                                    </li>
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Another action</a>
                                                    </li>
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Something else here</a>
                                                    </li>
                                                    <hr class="border-gray-50 my-1.5 dark:border-zinc-600">
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Separated link</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>

                                    <li class="relative flex">
                                        <div class="relative pb-7 pl-14 grow">
                                            <div class="absolute top-0 z-40 left-2">
                                                <div class="w-10 h-10 text-center rounded-full bg-violet-50 dark:bg-sky-500/20">
                                                    <i class="text-2xl leading-relaxed mdi mdi-ethereum text-sky-500"></i>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="ml-2 mr-4 overflow-hidden grow lg:w-60">
                                                    <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">24/05/2021, 18:24:56</h5>
                                                    <p class="overflow-hidden text-gray-500 text-13 text-ellipsis whitespace-nowrap dark:text-zinc-100">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                                </div>
                                            </div>

                                            <div class="after:contant-[] after:absolute after:top-0 after:h-20 after:border-l-2 after:border-dashed after:border-gray-100 after:left-7 after:z-0 dark:after:border-zinc-600"></div>
                                        </div>


                                        <div class="shrink-0">
                                            <div class="w-20 mr-1 shrink-0 text-end">
                                                <h6 class="mb-1 font-medium text-gray-700 dark:text-gray-100">-20.5 ETH</h6>
                                                <div class="text-13 dark:text-zinc-100">$3541.45</div>
                                            </div>
                                        </div>

                                        <div class="shrink-0">
                                            <div class="relative dropdown">
                                                <a href="#!" class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 dark:text-gray-100" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Action</a>
                                                    </li>
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Another action</a>
                                                    </li>
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Something else here</a>
                                                    </li>
                                                    <hr class="border-gray-50 my-1.5 dark:border-zinc-600">
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Separated link</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>

                                    <li class="relative flex">
                                        <div class="relative pb-7 pl-14 grow">
                                            <div class="absolute top-0 z-40 left-2">
                                                <div class="w-10 h-10 text-center rounded-full bg-yellow-50 dark:bg-yellow-500/20 " >
                                                    <i class="text-2xl leading-relaxed text-yellow-500 bx bx-bitcoin"></i>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="ml-2 mr-4 overflow-hidden grow lg:w-60">
                                                    <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">24/05/2021, 18:24:56</h5>
                                                    <p class="overflow-hidden text-gray-500 text-13 text-ellipsis whitespace-nowrap dark:text-zinc-100">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                                </div>
                                            </div>

                                            <div class="after:contant-[] after:absolute after:top-0 after:h-20 after:border-l-2 after:border-dashed after:border-gray-100 after:left-7 after:z-0 dark:after:border-zinc-600"></div>
                                        </div>


                                        <div class="shrink-0">
                                            <div class="w-20 mr-1 shrink-0 text-end">
                                                <h6 class="mb-1 font-medium text-gray-700 dark:text-gray-100">+0.5 BTC</h6>
                                                <div class="text-13 dark:text-zinc-100">$5791.45</div>
                                            </div>
                                        </div>

                                        <div class="shrink-0">
                                            <div class="relative dropdown">
                                                <a href="#!" class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 dark:text-gray-100" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Action</a>
                                                    </li>
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Another action</a>
                                                    </li>
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Something else here</a>
                                                    </li>
                                                    <hr class="border-gray-50 my-1.5 dark:border-zinc-600">
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Separated link</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>

                                    <li class="relative flex">
                                        <div class="relative pb-7 pl-14 grow">
                                            <div class="absolute top-0 z-40 left-2">
                                                <div class="w-10 h-10 text-center rounded-full bg-violet-50 dark:bg-sky-500/20">
                                                    <i class="text-2xl leading-relaxed mdi mdi-litecoin text-sky-500"></i>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="ml-2 mr-4 overflow-hidden grow lg:w-60">
                                                    <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">24/05/2021, 18:24:56</h5>
                                                    <p class="overflow-hidden text-gray-500 text-13 text-ellipsis whitespace-nowrap dark:text-zinc-100">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                                </div>
                                            </div>

                                            <div class="after:contant-[] after:absolute after:top-0 after:h-20 after:border-l-2 after:border-dashed after:border-gray-100 after:left-7 after:z-0 dark:after:border-zinc-600"></div>
                                        </div>


                                        <div class="shrink-0">
                                            <div class="w-20 mr-1 shrink-0 text-end">
                                                <h6 class="mb-1 font-medium text-gray-700 dark:text-gray-100">-1.5 LTC</h6>
                                                <div class="text-13 dark:text-zinc-100">$5791.45</div>
                                            </div>
                                        </div>

                                        <div class="shrink-0">
                                            <div class="relative dropdown">
                                                <a href="#!" class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 dark:text-gray-100" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Action</a>
                                                    </li>
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Another action</a>
                                                    </li>
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Something else here</a>
                                                    </li>
                                                    <hr class="border-gray-50 my-1.5 dark:border-zinc-600">
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Separated link</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>

                                    <li class="relative flex">
                                        <div class="relative pb-7 pl-14 grow">
                                            <div class="absolute top-0 z-40 left-2">
                                                <div class="w-10 h-10 text-center rounded-full bg-yellow-50  " >
                                                    <i class="text-2xl leading-relaxed text-yellow-500 bx bx-bitcoin"></i>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="ml-2 mr-4 overflow-hidden grow lg:w-60">
                                                    <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">24/05/2021, 18:24:56</h5>
                                                    <p class="overflow-hidden text-gray-500 text-13 text-ellipsis whitespace-nowrap dark:text-zinc-100">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                                </div>
                                            </div>

                                            <div class="after:contant-[] after:absolute after:top-0 after:h-20 after:border-l-2 after:border-dashed after:border-gray-100 after:left-7 after:z-0 dark:after:border-zinc-600"></div>
                                        </div>


                                        <div class="shrink-0">
                                            <div class="w-20 mr-1 shrink-0 text-end">
                                                <h6 class="mb-1 font-medium text-gray-700 dark:text-gray-100">+0.5 BTC</h6>
                                                <div class="text-13 dark:text-zinc-100">$5791.45</div>
                                            </div>
                                        </div>

                                        <div class="shrink-0">
                                            <div class="relative dropdown">
                                                <a href="#!" class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 dark:text-gray-100" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Action</a>
                                                    </li>
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Another action</a>
                                                    </li>
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Something else here</a>
                                                    </li>
                                                    <hr class="border-gray-50 my-1.5 dark:border-zinc-600">
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Separated link</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>

                                    <li class="relative flex">
                                        <div class="relative pl-14 grow">
                                            <div class="absolute top-0 z-40 left-2">
                                                <div class="w-10 h-10 text-center rounded-full bg-violet-50 dark:bg-sky-500/20">
                                                    <i class="text-2xl leading-relaxed mdi mdi-litecoin text-sky-500"></i>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="ml-2 mr-4 overflow-hidden grow lg:w-60">
                                                    <h5 class="mb-1 text-sm font-medium text-gray-700 dark:text-gray-100">24/05/2021, 18:24:56</h5>
                                                    <p class="overflow-hidden text-gray-500 text-13 text-ellipsis whitespace-nowrap dark:text-zinc-100">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="shrink-0">
                                            <div class="w-20 mr-1 shrink-0 text-end">
                                                <h6 class="mb-1 font-medium text-gray-700 dark:text-gray-100">+.55 LTC</h6>
                                                <div class="text-13 dark:text-zinc-100">$91.45</div>
                                            </div>
                                        </div>

                                        <div class="shrink-0">
                                            <div class="relative dropdown">
                                                <a href="#!" class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 dark:text-gray-100" type="button" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <ul class="absolute top-auto z-50 hidden w-40 py-1.5 text-left list-none bg-white border border-gray-50/50 rounded shadow-lg dropdown-menu ltr:!right-0 ltr:!left-auto rtl:!left-0 rtl:!right-auto dark:bg-zinc-700 dark:border-zinc-600 bg-clip-padding" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Action</a>
                                                    </li>
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Another action</a>
                                                    </li>
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Something else here</a>
                                                    </li>
                                                    <hr class="border-gray-50 my-1.5 dark:border-zinc-600">
                                                    <li><a class="block w-full px-4 py-1.5 text-sm font-normal text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-50 dark:text-gray-100 dark:hover:bg-zinc-600/80" href="#">Separated link</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>

@endsection
