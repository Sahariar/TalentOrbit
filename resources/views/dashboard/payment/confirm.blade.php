@extends('layouts.' . ($layout ?? 'dashboard')) <!-- Default to 'dashboard' layout -->

@section('content')
    <div class="page-content">
        <div class="container-fluid px-[0.625rem]">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 xl:col-span-12 py-24 gap-6 space-y-7">
                    <div class="relative isolate bg-white px-6 space-y-8 mx-4 py-24 sm:py-32 lg:px-8 mb-12">
                        <div class="mx-auto max-w-4xl text-center my-6">
                            <h2 class="text-base/7 font-semibold text-sky-600">Confirm Your Payment</h2>
                            <!-- Stripe Payment Form -->
                            <form action="{{ route('payment.confirm') }}" method="POST" id="payment-form">
                                @csrf
                                <div id="card-element">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>

                                <!-- Used to display form errors. -->
                                <div id="card-errors" role="alert"></div>

                                <button type="submit">Confirm Payment</button>
                            </form>

                            <script src="https://js.stripe.com/v3/"></script>

                            <script>
                                var stripe = Stripe('YOUR_PUBLIC_KEY');
                                var elements = stripe.elements();
                                var card = elements.create('card');
                                card.mount('#card-element');

                                var form = document.getElementById('payment-form');
                                form.addEventListener('submit', function(event) {
                                    event.preventDefault();

                                    stripe.createPaymentMethod({
                                        type: 'card',
                                        card: card,
                                    }).then(function(result) {
                                        if (result.error) {
                                            // Display error message
                                            document.getElementById('card-errors').textContent = result.error.message;
                                        } else {
                                            // Submit the form with the payment method ID
                                            form.submit();
                                        }
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
