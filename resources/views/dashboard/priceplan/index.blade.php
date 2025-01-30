@extends('layouts.' . ($layout ?? 'dashboard'))  <!-- Default to 'dashboard' layout -->

@section('content')
    <div class="page-content">
        <div class="container-fluid px-[0.625rem]">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 xl:col-span-12 py-6 gap-6 space-y-7">
                    <div class="relative isolate bg-white px-6 space-y-8 mx-4 sm:py-12 lg:px-8 mb-12">
                        <div class="mx-auto max-w-4xl text-center my-6">
                          <h2 class="text-base/7 font-semibold text-sky-600">Pricing</h2>
                          <p class="mt-2 text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-6xl">Choose the right plan for you</p>
                        </div>
                        <p class="mx-auto mt-6 max-w-2xl text-pretty text-center text-lg font-medium text-gray-600 sm:text-xl/8">Choose an affordable plan that’s packed with the best features for engaging your audience, creating customer loyalty, and driving sales.</p>
                        <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 items-center gap-x-6 sm:mt-20 sm:gap-y-0 lg:max-w-4xl lg:grid-cols-2">
                            @foreach ($pricingPlans as $plan)
                            <div class="rounded-3xl rounded-t-3xl bg-white/60 p-6 ring-1 ring-gray-900/10 sm:mx-8 sm:rounded-b-none sm:p-10 lg:mx-0 lg:rounded-bl-3xl lg:rounded-tr-none">
                            <h3 id="tier-hobby" class="text-xl font-semibold text-orange-500">{{ $plan->title }}</h3>
                            <p class="mt-4 flex items-baseline gap-x-2">
                              <span class="text-5xl font-semibold tracking-tight text-gray-900">${{ $plan->price }}</span>
                              <span class="text-base text-gray-500">/month</span>
                            </p>
                            <p class="mt-6 text-base/7 text-gray-600">{!!  $plan->description !!}</p>
                            <form method="POST" action="{{ route('payment.process') }}" >
                                @csrf
                                <input type="hidden" name="pricing_plan_id" value="{{ $plan->id }}">
                                @if ($plan->id == 1)
                                @else
                                <x-primary-button class="mt-3 text-center">
                                    {{ __('Proceed to Payment') }}
                                </x-primary-button>
                                @endif

                            </form>
                            {{-- <a href="#" aria-describedby="tier-hobby" class="mt-8 block rounded-md px-3.5 py-2.5 text-center text-sm font-semibold text-sky-600 ring-1 ring-inset ring-sky-200 hover:ring-sky-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600 sm:mt-10">Get started today</a> --}}
                          </div>
                          @endforeach
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection
