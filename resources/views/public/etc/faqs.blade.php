@extends('layouts.' . ($layout ?? 'app'))  <!-- Default to 'app' layout -->
@section('js')
    <script>
        function toggleFAQ(id) {
            const faq = document.getElementById(id);
            faq.classList.toggle('hidden');
        }
    </script>
@endsection
@section('content')

<div class="main-content">
    <div class="page-content">

        <section class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.png')] bg-center bg-cover relative" >
            <div class="container mx-auto">
                <div class="grid">
                    <div class="col-span-12">
                        <div class="text-center text-white">
                            <h3 class="mb-4 text-[26px]">FAQ'S</h3>
                            <div class="page-next">
                                <nav class="inline-block" aria-label="breadcrumb text-center">
                                    <ol class="flex justify-center text-sm font-medium uppercase">
                                        <li><a href="{{route('home')}}">Home</a></li>
                                        <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a href="{{route('companies')}}">Company</a></li>
                                        <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i> Faq's </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{asset('storage/imagess/about/shape.png' )}}" alt="" class="absolute block bg-cover -bottom-0 dark:hidden">
            <img src="{{asset('storage/imagess/shape-dark.png' )}}" alt="" class="absolute hidden bg-cover -bottom-0 dark:block">
        </section>

        <!-- Start faqs -->
        <div class="max-w-4xl mx-auto py-10 px-4 sm:px-6 lg:px-8">

            <div class="space-y-6">
                <!-- FAQ 1 -->
                <div class="bg-white shadow-md rounded-lg">
                    <div class="p-4 flex justify-between items-center cursor-pointer" onclick="toggleFAQ('faq1')">
                        <h2 class="text-lg font-semibold">How do I create an account on TalentOrbit?</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                    </div>
                    <div id="faq1" class="hidden p-4 border-t border-gray-200">
                        <p>Creating an account on TalentOrbit is simple. Click on the "Sign Up" button at the top-right corner, fill in your details, and follow the verification process to activate your account.</p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white shadow-md rounded-lg">
                    <div class="p-4 flex justify-between items-center cursor-pointer" onclick="toggleFAQ('faq2')">
                        <h2 class="text-lg font-semibold">How can I apply for jobs?</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                    </div>
                    <div id="faq2" class="hidden p-4 border-t border-gray-200">
                        <p>Once you have an account, log in and browse the job listings. Click on the job you are interested in, review the details, and click "Apply Now" to submit your application.</p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white shadow-md rounded-lg">
                    <div class="p-4 flex justify-between items-center cursor-pointer" onclick="toggleFAQ('faq3')">
                        <h2 class="text-lg font-semibold">How do I contact an employer?</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                    </div>
                    <div id="faq3" class="hidden p-4 border-t border-gray-200">
                        <p>You can contact an employer through the messaging feature on TalentOrbit once the employer has viewed your application. Keep an eye on your inbox for responses.</p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white shadow-md rounded-lg">
                    <div class="p-4 flex justify-between items-center cursor-pointer" onclick="toggleFAQ('faq4')">
                        <h2 class="text-lg font-semibold">Can I save jobs to apply later?</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                    </div>
                    <div id="faq4" class="hidden p-4 border-t border-gray-200">
                        <p>Yes, you can save jobs by clicking the "Save" button on the job listing. You can view all your saved jobs under the "Saved Jobs" section in your profile.</p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-white shadow-md rounded-lg">
                    <div class="p-4 flex justify-between items-center cursor-pointer" onclick="toggleFAQ('faq5')">
                        <h2 class="text-lg font-semibold">What should I do if I forget my password?</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                    </div>
                    <div id="faq5" class="hidden p-4 border-t border-gray-200">
                        <p>If you forget your password, click on the "Forgot Password" link on the login page. Enter your registered email address, and we will send you a link to reset your password.</p>
                    </div>
                </div>

                <!-- Pricing FAQ 1 -->
                <div class="bg-white shadow-md rounded-lg">
                    <div class="p-4 flex justify-between items-center cursor-pointer" onclick="toggleFAQ('faq6')">
                        <h2 class="text-lg font-semibold">What is included in the free plan?</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                    </div>
                    <div id="faq6" class="hidden p-4 border-t border-gray-200">
                        <p>Our free plan allows companies to post up to 3 jobs. This is ideal for small businesses or startups just getting started.</p>
                    </div>
                </div>

                <!-- Pricing FAQ 2 -->
                <div class="bg-white shadow-md rounded-lg">
                    <div class="p-4 flex justify-between items-center cursor-pointer" onclick="toggleFAQ('faq7')">
                        <h2 class="text-lg font-semibold">What are the benefits of the premium plan?</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                    </div>
                    <div id="faq7" class="hidden p-4 border-t border-gray-200">
                        <p>The premium plan offers unlimited job postings, advanced analytics, priority support, and access to a larger talent pool, making it perfect for growing businesses.</p>
                    </div>
                </div>

                <!-- Pricing FAQ 3 -->
                <div class="bg-white shadow-md rounded-lg">
                    <div class="p-4 flex justify-between items-center cursor-pointer" onclick="toggleFAQ('faq8')">
                        <h2 class="text-lg font-semibold">Can I switch plans later?</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                    </div>
                    <div id="faq8" class="hidden p-4 border-t border-gray-200">
                        <p>Yes, you can upgrade or downgrade your plan at any time by visiting the billing section in your account settings.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End faqs -->

    </div>
</div>

@endsection
