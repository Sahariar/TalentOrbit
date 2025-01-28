<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation</title>
    <link rel="icon" type="image/png" href="{{ asset('storage/images/talentorbit-fav.png') }}">
    <script src="https://js.stripe.com/v3/"></script>
    @vite(['resources/css/app.css','resources/css/dashboard.css','resources/css/icons.min.css'  ])
    <style>
        .StripeElement {
            box-sizing: border-box;
            height: 40px;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: white;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
    </style>
</head>

<body>
    <div class="page-content">
        <div class="container-fluid px-[0.625rem]">
            <div class="flex justify-center items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                <x-application-logo class="w-48 h-24 fill-current text-black" />
            </a>
            </div>
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 xl:col-span-12 py-6 gap-6 space-y-7">
                    <div class="relative isolate bg-white px-6 mx-4 sm:py-4 lg:px-8 mb-12">
                        <article class="rounded-xl max-w-md mx-auto bg-white p-4 ring ring-indigo-50 sm:p-6 lg:p-8 flex gap-6 items-center">
                            <div class="logo-container">
                                <img src="https://stripe.com/img/v3/home/twitter.png" alt="Stripe Logo" class="w-20 rounded-lg">
                            </div>

                            <div class="payment-summary space-y-4 w-4/5">
                                <h2 class="text-lg font-semibold">Payment Confirmation</h2>
                                <div class="space-y-2">
                                <p><strong>Plan:</strong> {{ $pricingPlan->title }}</p>
                                    <p><strong>Price:</strong> ${{ $pricingPlan->price }}</p>
                                </div>

                                <div id="payment-form">
                                    <form id="stripe-payment-form">
                                        @csrf
                                        <div id="card-element" class="StripeElement"></div>
                                        <div id="card-errors" role="alert" class="text-red-500 mt-2"></div>
                                        <x-primary-button class="mt-3 w-full text-center">
                                            {{ __('Complete Payment') }}
                                        </x-primary-button>
                                    </form>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const stripe = Stripe("{{ env('STRIPE_KEY') }}"); // Replace with your public key
        const elements = stripe.elements();

        const cardElement = elements.create('card');
        cardElement.mount('#card-element');

        const form = document.getElementById('stripe-payment-form');
        form.addEventListener('submit', async (e) => {
            e.preventDefault();

            const {
                paymentIntent,
                error
            } = await stripe.confirmCardPayment("{{ $clientSecret }}", {
                payment_method: {
                    card: cardElement,
                },
            });

            if (error) {
                // Display error
                document.getElementById('card-errors').textContent = error.message;
            } else {
                // Payment successful, redirect or display a success message
                alert("Payment successful!");
                window.location.href = "/payment-success"; // Redirect to a success page
            }
        });
    </script>
</body>

</html>
