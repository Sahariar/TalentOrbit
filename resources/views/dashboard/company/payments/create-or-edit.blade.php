@extends('layouts.' . ($layout ?? 'dashboard'))  <!-- Default to 'dashboard' layout -->

@section('content')
    @php
    $currentRouteName = Illuminate\Support\Facades\Route::currentRouteName();
    @endphp
    <div class="page-content">
        <div class="container-fluid px-[0.625rem]">
            <div class="grid grid-cols-1">
                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                        <div class="grid grid-cols-2">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100 text-left">Payment {{ $currentRouteName == 'company.payments.create' ? 'Create' : 'Update' }}</h6>
                            <div class="text-right">
                                <a href="{{ route('company.payments.index') }}" class="text-white btn bg-sky-500 border-sky-500 hover:bg-sky-600 hover:border-sky-600 focus:bg-sky-600 focus:border-sky-600 focus:ring focus:ring-sky-500/30 active:bg-sky-600 active:border-sky-600" role="button">
                                    Back
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 lg:col-span-12">
                                @if (request()->session()->has('msg'))
                                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                                        {{ session('msg') }}
                                    </div>
                                @endif
                                <form action="{{ $currentRouteName == 'company.payments.create' ? route('company.payments.store') : route('company.payments.update', $payment->id) }}" method="POST" enctype="multipart/form-data">
                                    @if ($currentRouteName == 'company.payments.edit')
                                        @method('PUT')
                                    @endif
                                    @csrf
                                    <div class="mb-4">
                                        <label for="amount" class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Amount:</label>
                                        <input class="w-full placeholder:text-13 text-13 py-1.5 rounded border-gray-100 focus:border focus:border-violet-50 focus:ring focus:ring-violet-500/20  dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 placeholder:text-gray-800 dark:text-zinc-100" type="text" name="amount" value="{{ $currentRouteName == 'company.payments.edit' ? $payment->amount : old('amount') }}" placeholder="https://linkedin.com/saifkamal" id="amount">
                                    </div>
                                    <br>
                                    <div class="mb-4">
                                        <button type="submit" class="text-white bg-green-500 border-green-500 btn hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600">{{ $currentRouteName == 'company.payments.edit' ? 'Update' : 'Create' }} Payment</button>
                                    </div>
                                </form>
                                @if ($errors->any())
                                    <div>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>
                                                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                                        {{ $error }}
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @else

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection