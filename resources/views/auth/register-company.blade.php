@extends('layouts.' . ($layout ?? 'guest'))
@section('content')
    <div class="container-fluid">
        <div class="h-screen md:overflow-hidden">
            <div class="grid grid-cols-2 md:grid-cols-12 ">
                <div class="relative z-50 col-span-12 md:col-span-5 lg:col-span-4">
                    <div class="w-full p-10 bg-white xl:p-12 dark:bg-zinc-800">
                        <div class="flex h-[100vh] flex-col">
                            <div class="mx-auto mb-12">
                                <x-application-logo class="w-44 h-20 fill-current text-black" />
                            </div>

                            <div class="my-auto overflow-x-auto">
                                <div class="text-center">
                                    <h5 class="font-medium text-gray-700 dark:text-gray-100">Company Registration</h5>
                                    <p class="mt-1 text-gray-500 dark:text-zinc-100/60"> Create your Company account</p>
                                </div>

                                <form method="POST" action="{{ route('register.companyProfile.submit') }}"
                                    enctype="multipart/form-data" class="grid grid-cols-2 gap-4 p-4">
                                    @csrf

                                    <!-- Name -->
                                    <div>
                                        <x-input-label for="name" :value="__('Name')" />
                                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                            :value="old('name')" required autofocus autocomplete="name" />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                    <!--Company Name -->
                                    <div>
                                        <x-input-label for="company_name" :value="__('Company Name')" />
                                        <x-text-input id="company_name" class="block mt-1 w-full" type="text"
                                            name="company_name" :value="old('company_name')" required autofocus
                                            autocomplete="company_name" />
                                        <x-input-error :messages="$errors->get('company_name')" class="mt-2" />
                                    </div>
                                    {{-- Profile Image --}}
                                    <div class="col-span-2">
                                        <x-input-label for="image" :value="__('Company Picture')" />
                                        <div class="mt-1 flex justify-end items-center">
                                            <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                                {{-- <img id="preview" src="{{ asset('images/placeholder.png') }}"
                                                    alt="Preview" class="h-full w-full object-cover"> --}}
                                                <img id="preview" src="https://api.dicebear.com/9.x/icons/svg?seed=Felix"
                                                    alt="Preview" class="h-full w-full object-cover">
                                            </span>
                                            <input type="file" id="image" name="image"
                                                class="ml-5 w-5/6 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-sky-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                accept="image/*" onchange="previewImage(this)">
                                        </div>
                                    </div>
                                    <!-- Email Address -->
                                    <div>
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                            :value="old('email')" required autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <!--Phone Number -->
                                    <div>
                                        <x-input-label for="phone_number" :value="__('Phone Number')" />
                                        <x-text-input id="phone_number" class="block mt-1 w-full" type="text"
                                            name="phone_number" :value="old('phone_number')" required autofocus
                                            autocomplete="phone_number" />
                                        <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                                    </div>
                                    <!--Website Url -->
                                    <div>
                                        <x-input-label for="url" :value="__('Website URL')" />
                                        <x-text-input id="url" class="block mt-1 w-full" type="text" name="url"
                                            :value="old('url')" required autofocus autocomplete="url" />
                                        <x-input-error :messages="$errors->get('url')" class="mt-2" />
                                    </div>
                                    <!--Linkedin Url -->
                                    <div>
                                        <x-input-label for="linkedin_url" :value="__('Linkedin URL')" />
                                        <x-text-input id="linkedin_url" class="block mt-1 w-full" type="text"
                                            name="linkedin_url" :value="old('linkedin_url')" required autofocus autocomplete="linkedin_url" />
                                        <x-input-error :messages="$errors->get('linkedin_url')" class="mt-2" />
                                    </div>

                                    <!-- Password -->
                                    <div class="mt-4">
                                        <x-input-label for="password" :value="__('Password')" />

                                        <x-text-input id="password" class="block mt-1 w-full" type="password"
                                            name="password" required autocomplete="new-password" />

                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="mt-4">
                                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                            name="password_confirmation" required autocomplete="new-password" />

                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                    <div class="col-span-2">
                                        <div class="flex flex-col gap-5 items-center justify-end mt-4">
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                href="{{ route('login') }}">
                                                {{ __('Already registered?') }}
                                            </a>

                                            <x-primary-button class="ms-3 w-full text-center">
                                                {{ __('Register') }}
                                            </x-primary-button>
                                        </div>
                                    </div>

                                </form>
                                <div class="mt-12 text-center">
                                    <p class="text-gray-500 dark:text-zinc-100/60">Already have an account ? <a
                                            href="{{ route('login') }}" class="font-semibold text-sky-500"> Login</a> </p>

                                </div>
                            </div>
                            <div class="text-center">
                                <p class="mb-0 text-center">
                                    &copy;
                                    {{ now()->year }} Talent Orbit - Where Talent Meets Opportunity.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-7 lg:col-span-8">
                    <div class="h-screen bg-cover relative p-5 ">
                        <div class="absolute inset-0 bg-sky-900/80"></div>

                        <ul class="absolute top-0 left-0 w-full h-full overflow-hidden bg-bubbles animate-square">
                            <li class="h-10 w-10 rounded-3xl bg-white/10 absolute left-[10%] "></li>
                            <li class="h-28 w-28 rounded-3xl bg-white/10 absolute left-[20%]"></li>
                            <li class="h-10 w-10 rounded-3xl bg-white/10 absolute left-[25%]"></li>
                            <li class="h-20 w-20 rounded-3xl bg-white/10 absolute left-[40%]"></li>
                            <li class="h-24 w-24 rounded-3xl bg-white/10 absolute left-[70%]"></li>
                            <li class="h-32 w-32 rounded-3xl bg-white/10 absolute left-[70%]"></li>
                            <li class="h-36 w-36 rounded-3xl bg-white/10 absolute left-[32%]"></li>
                            <li class="h-20 w-20 rounded-3xl bg-white/10 absolute left-[55%]"></li>
                            <li class="h-12 w-12 rounded-3xl bg-white/10 absolute left-[25%]"></li>
                            <li class="h-36 w-36 rounded-3xl bg-white/10 absolute left-[90%]"></li>
                        </ul>

                        <div class="flex items-center justify-center h-screen">
                            <div class="w-full md:max-w-4xl lg:px-9">
                                <div class="swiper login-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <i class="text-5xl text-white bx bxs-quote-alt-left"></i>
                                            <h3 class="mt-4 text-white text-22">“I feel confident imposing change on
                                                myself. It's a lot more progressing fun than looking back. That's why I
                                                ultricies enim at malesuada nibh diam on tortor neaded to throw curve
                                                balls.”</h3>
                                            <div class="flex pt-4 mt-6 mb-10">
                                                <img src="{{ asset('storage/images/avatar-1.jpg') }}"
                                                    class="w-12 h-12 rounded-full" alt="...">
                                                <div class="flex-1 mb-4 ltr:ml-3 rtl:mr-3">
                                                    <h5 class="text-white font-size-18">Ilse R. Eaton</h5>
                                                    <p class="mb-0 text-white/50">Manager
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <i class="text-5xl text-white bx bxs-quote-alt-left"></i>
                                            <h3 class="mt-4 text-white text-22">“I feel confident imposing change on
                                                myself. It's a lot more progressing fun than looking back. That's why I
                                                ultricies enim at malesuada nibh diam on tortor neaded to throw curve
                                                balls.”</h3>
                                            <div class="flex pt-4 mt-6 mb-10">
                                                <img src="{{ asset('storage/images/avatar-2.jpg') }}"
                                                    class="w-12 h-12 rounded-full" alt="...">
                                                <div class="flex-1 mb-4 ltr:ml-3 rtl:mr-3">
                                                    <h5 class="text-white font-size-18">Mariya Willam</h5>
                                                    <p class="mb-0 text-white/50">Designer
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <i class="text-5xl text-white bx bxs-quote-alt-left"></i>
                                            <h3 class="mt-4 text-white text-22">“I feel confident imposing change on
                                                myself. It's a lot more progressing fun than looking back. That's why I
                                                ultricies enim at malesuada nibh diam on tortor neaded to throw curve
                                                balls.”</h3>
                                            <div class="flex pt-4 mt-6 mb-10">
                                                <img src="{{ asset('storage/images/avatar-3.jpg') }}"
                                                    class="w-12 h-12 rounded-full" alt="...">
                                                <div class="flex-1 mb-4 ltr:ml-3 rtl:mr-3">
                                                    <h5 class="text-white font-size-18">Jiya Jons</h5>
                                                    <p class="mb-0 text-white/50">Developer
                                                    </p>
                                                </div>
                                            </div>
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
    </div>
@endsection
