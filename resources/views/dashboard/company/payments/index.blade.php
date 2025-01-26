@extends('layouts.' . ($layout ?? 'dashboard'))  <!-- Default to 'dashboard' layout -->

@section('content')
    <div class="page-content">
        <div class="container-fluid px-[0.625rem]">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 xl:col-span-12">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Payments</h6>
                        </div>
                        <div class="card-body">
                            <div class="relative overflow-x-auto">
                                <div class="grid grid-cols-3 p-4">
                                    <div class="pb-4 bg-white dark:bg-transparent">
                                        <div>
                                            <form action="{{ route('company.payments.search') }}" method="GET">
                                                <div class="flex gap-3">
                                                    <input class="w-full border-gray-100 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 focus:border-violet-100 focus:ring focus:ring-violet-500/20 dark:placeholder:text-zinc-100 dark:text-zinc-100" name="search" type="text" placeholder="Search Company Payments Here...">
                                                    <button type="submit" class="text-white bg-gray-500 border-transparent btn focus:bg-gray-600 focus:ring focus:ring-gray-100">Search</button>
                                                    <div class="border-l dark:border-zinc-600"></div>
                                                    <button type="reset" class="text-red-500 border-red-500 btn hover:bg-red-500 hover:text-white focus:bg-red-500 focus:text-white focus:ring focus:ring-red-100">Reset</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div></div>
                                    <div class="text-right">
                                        {{-- <a href="{{ route('company.job-posts.create') }}" role="button" class="text-white btn bg-violet-500 border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600">
                                            Create Job Post
                                        </a> --}}
                                    </div>
                                </div>                                  
                                <table class="w-full text-sm text-left text-gray-500">
                                    <thead class="text-xs text-gray-700 uppercase dark:text-gray-100 bg-gray-50/50 dark:bg-zinc-700">
                                        <tr>
                                            <th scope="col" class="p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-all" type="checkbox" class="w-4 h-4 border-gray-100 rounded focus:ring-0 focus:outline-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-500 dark:checked:bg-violet-500">
                                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                                </div>
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Transaction #
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Pricing Plan #
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Amount
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($payments as $payment)
                                            <tr class="bg-white border-b border-gray-50 hover:bg-gray-50/50 dark:bg-zinc-700/50 dark:border-zinc-600">
                                                <td class="w-4 p-4">
                                                    <div class="flex items-center">
                                                        <input id="checkbox-all" type="checkbox" class="w-4 h-4 border-gray-100 rounded focus:ring-0 focus:outline-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-500 dark:checked:bg-violet-500">
                                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 dark:text-zinc-100/80">
                                                    {{ $payment->transaction_id }}
                                                </td>
                                                <td class="px-6 py-4 dark:text-zinc-100/80">
                                                    {{ $payment->pricing_plan_id }}
                                                </td>
                                                <td class="px-6 py-4 dark:text-zinc-100/80">
                                                    {{ $payment->amount }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    <a href="{{ route('company.payments.show',$payment->id) }}" title="View Company Payment" class="font-medium text-blue-600 hover:underline">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    {{-- <a href="{{ route('company.payments.edit',$payment->id) }}" title="Edit Company Payment" class="font-medium text-blue-600 hover:underline">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="#" role="button" class="text-white btn bg-violet-500 border-violet-500 hover:bg-violet-600 focus:ring ring-violet-50focus:bg-violet-600" title="Delete Company Payment" data-tw-toggle="modal" data-tw-target="#delete-company-payment">
                                                        <i class="fas fa-trash"></i>
                                                    </a> --}}

                                                    <!-- Delete Job Post Modal -->
                                                    <div class="relative z-50 hidden modal" id="delete-company-payment" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                                        <div class="fixed inset-0 z-50 overflow-hidden">
                                                            <div class="absolute inset-0 transition-opacity bg-black bg-opacity-50 modal-overlay"></div>
                                                            <div class="p-4 mx-auto animate-translate sm:max-w-lg">
                                                                <div class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl dark:bg-zinc-600 ">
                                                                    <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4 dark:bg-zinc-700">
                                                                        <div class="sm:flex sm:items-start">
                                                                            <div class="flex items-center justify-center  w-12 h-12 mx-auto rounded-full bg-red-50 sm:mx-0 sm:h-10 sm:w-10 flex-shrink-0">
                                                                                <!-- Heroicon name: outline/exclamation-triangle -->
                                                                                <i class="text-red-500 mdi mdi-alert-outline text-22"></i>
                                                                            </div>
                                                                            <div class="mt-3 text-center sm:mt-0 ltr:sm:ml-4 rtl:sm:mr-4 ltr:sm:text-left rtl:sm:text-right">
                                                                                <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-gray-100" id="modal-title">Delete Company Payment</h3>
                                                                                <div class="mt-2">
                                                                                    <p class="text-sm text-gray-500 dark:text-zinc-100/60">Are you sure you want to Delete this company payment? All of your data will be permanently removed. This action cannot be undone.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="px-4 py-3 mb-2 sm:flex ltr:sm:flex-row-reverse sm:px-6">
                                                                        <form action="{{ route('company.payments.destroy', $payment->id) }}" method="POST">
                                                                            @method('DELETE')
                                                                            @csrf
                                                                            <button type="submit" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-500 border border-transparent rounded-md shadow-sm btn hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                                                Delete
                                                                            </button>
                                                                        </form>
                                                                        <button type="button" class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-gray-500/30 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20" data-tw-dismiss="modal">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
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