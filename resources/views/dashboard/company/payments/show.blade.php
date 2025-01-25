@extends('layouts.' . ($layout ?? 'dashboard'))  <!-- Default to 'dashboard' layout -->

@section('content')
    <div class="page-content">
        <div class="container-fluid px-[0.625rem]">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 xl:col-span-12">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Payment <strong>{{ $payment->id }}</strong></h6>
                        </div>
                        <div class="card-body">
                            <div class="relative overflow-x-auto w-full">
                                <table class="w-full text-sm text-left text-gray-500 ">
                                    <thead class="text-sm text-gray-700 dark:text-gray-100 bg-gray-50 dark:bg-zinc-600">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Column Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Column Value
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-white border-b border-gray-50 dark:bg-zinc-700 dark:border-zinc-600">
                                            <th scope="row" class="px-6 py-3.5 font-medium text-gray-900 whitespace-nowrap dark:text-zinc-100">
                                                Company Profile #
                                            </th>
                                            <td class="px-6 py-3.5 dark:text-zinc-100">
                                                {{ $payment->company_profile_id }}
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-gray-50 dark:bg-zinc-700 dark:border-zinc-600">
                                            <th scope="row" class="px-6 py-3.5 font-medium text-gray-900 whitespace-nowrap dark:text-zinc-100">
                                                Transaction #
                                            </th>
                                            <td class="px-6 py-3.5 dark:text-zinc-100">
                                                {{ $payment->transaction_id }}
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-gray-50 dark:bg-zinc-700 dark:border-zinc-600">
                                            <th scope="row" class="px-6 py-3.5 font-medium text-gray-900 whitespace-nowrap dark:text-zinc-100">
                                                Pricing Plan #
                                            </th>
                                            <td class="px-6 py-3.5 dark:text-zinc-100">
                                                {{ $payment->pricing_plan_id }}
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-gray-50 dark:bg-zinc-700 dark:border-zinc-600">
                                            <th scope="row" class="px-6 py-3.5 font-medium text-gray-900 whitespace-nowrap dark:text-zinc-100">
                                                Amount
                                            </th>
                                            <td class="px-6 py-3.5 dark:text-zinc-100">
                                                {{ $payment->amount }}
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
    </div>
@endsection