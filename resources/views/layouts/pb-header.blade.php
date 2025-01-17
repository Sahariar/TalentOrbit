<header>
    <div class="hidden px-5 mx-auto border-gray-200 container-fluid lg:px-24 bg-gray-50 md:block">
        <div class="grid items-center grid-cols-12">
            <div class="col-span-7">
                <ul class="flex items-center py-3">
                    <li class="ltr:mr-4 rtl:ml-4">
                        <p class="mb-0 text-black text-13 "> <i class="mdi mdi-map-marker"></i> Your Location: <a href="javascript:void(0)" class="font-medium">New Caledonia</a></p>
                    </li>
                    <li>
                        <ul class="flex flex-wrap gap-4 text-black ">
                            <li class="transition-all duration-200 ease-in hover:text-green-500  dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-whatsapp"></i></a></li>
                            <li class="transition-all duration-200 ease-in hover:text-green-500  dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-facebook-messenger-alt"></i></a></li>
                            <li class="transition-all duration-200 ease-in hover:text-green-500  dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-instagram"></i></a></li>
                            <li class="transition-all duration-200 ease-in hover:text-green-500  dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-envelope"></i></a></li>
                            <li class="transition-all duration-200 ease-in hover:text-green-500  dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-twitter-alt"></i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-span-5 ml-auto">
                <ul class="flex items-center gap-4">
                    <li>
                        @if (Route::has('login'))
                        <div class="hidden px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="py-3 font-medium text-black text-13">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="py-3 font-medium text-black text-13">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 py-3 font-medium text-black text-13">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                    </li>
                    <li>
                        <div class="relative hidden dropdown language sm:block">
                            <button class="px-4 py-3 border-0 btn dropdown-toggle" type="button" aria-expanded="false" data-dropdown-toggle="navNotifications">
                                <img src="{{ asset('storage/images/flags/us.jpg') }}" alt="" class="h-4" id="header-lang-img">
                            </button>
                            <div class="absolute top-auto z-50 hidden w-40 list-none bg-white rounded shadow dropdown-menu -left-20 dark:bg-neutral-700" id="navNotifications">
                                <ul class="border border-gray-50 dark:border-gray-700" aria-labelledby="navNotifications">
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-neutral-600/50 dark:hover:text-white"><img src="{{ asset('storage/images/flags/us.jpg') }}" alt="user-image" class="inline-block h-3 mr-1"> <span class="align-middle">English</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-neutral-600/50 dark:hover:text-white"><img src="{{ asset('storage/images/flags/us.jpg') }}" alt="user-image" class="inline-block h-3 mr-1"> <span class="align-middle">Spanish</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-neutral-600/50 dark:hover:text-white"><img src="{{ asset('storage/images/flags/us.jpg') }}" alt="user-image" class="inline-block h-3 mr-1"> <span class="align-middle">German</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-neutral-600/50 dark:hover:text-white"><img src="{{ asset('storage/images/flags/us.jpg') }}" alt="user-image" class="inline-block h-3 mr-1"> <span class="align-middle">Italian</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>



    <nav class="navbar fixed right-0 left-0 top-0 lg:top-[44.5px] px-5 lg:px-24 transition-all duration-500 ease shadow-lg shadow-gray-200/20 bg-white border-gray-200 z-40 dark:shadow-neutral-900" id="navbar">
        <div class="mx-auto container-fluid">
            <div class="flex flex-wrap items-center justify-between mx-auto">
                <a href="#" class="flex items-center">
                        <x-application-logo class="w-48 h-24 fill-current text-black" />
                </a>
                <button data-collapse-toggle="navbar-collapse" type="button" class="inline-flex items-center p-2 text-sm text-black rounded-lg navbar-toggler group lg:hidden hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                </button>
                <div class="flex items-center lg:order-2">
                    <div>
                        <div class="relative dropdown">
                            <div class="relative">
                                <button type="button" class="btn border-0 h-[70px] dropdown-toggle px-4 text-black dark:text-gray-300" aria-expanded="false" data-dropdown-toggle="notification">
                                    <i class="text-2xl mdi mdi-bell"></i>
                                </button>
                                    <span class="absolute text-xs px-1.5 bg-red-500 text-white font-medium rounded-full left-6 top-3 ring-2 ring-white dark:ring-neutral-800">3</span>
                            </div>
                            <div class="absolute right-0 top-auto left-auto z-50 hidden list-none bg-white rounded shadow dropdown-menu w-72   " id="notification">
                                <div class="border rounded border-gray-50 dark:border-neutral-600" aria-labelledby="notification">
                                    <div class="grid grid-cols-1 ">
                                        <div class="p-4 bg-gray-50 dark:bg-neutral-700">
                                            <h6 class="mb-1 text-black "> Notification </h6>
                                            <p class="mb-0 text-black text-13 dark:text-gray-300">You have 4 unread Notification</p>
                                        </div>
                                    </div>
                                    <div class="h-60" data-simplebar>
                                        <div>
                                            <a href="#!">
                                                <div class="flex p-4 hover:bg-gray-50/30 dark:hover:bg-neutral-600/50">
                                                    <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                        <div class="h-10 w-10 bg-violet-500/20 rounded-full text-center leading-[2.8]">
                                                            <i class="text-lg text-black uil uil-user-check"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h6 class="mb-1 text-sm text-black dark:text-gray-300">22 verified registrations</h6>
                                                        <div class="text-gray-600 text-13 dark:text-gray-300">
                                                            <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-300"></i> <span>3 hour ago</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="#!">
                                                <div class="flex items-center p-4 hover:bg-gray-50/30 dark:hover:bg-neutral-600/50">
                                                    <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                        <img src="{{ asset('storage/images/user/img-07.jpg') }}" class="w-10 h-10 rounded-full" alt="user-pic">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h6 class="mb-1 text-sm text-black dark:text-gray-300">Kevin Stewart</h6>
                                                        <div class="text-gray-600 text-13 dark:text-gray-300">
                                                            <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-300"></i> <span>1 hour ago</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="#!">
                                                <div class="flex items-center p-4 hover:bg-gray-50/30 dark:hover:bg-neutral-600/50">
                                                    <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                        <img src="{{ asset('storage/images/user/img-01.jpg') }}" class="w-10 h-10 rounded-full" alt="user-pic">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h6 class="mb-1 text-sm text-black dark:text-gray-300">Applications has been approved</h6>
                                                        <div class="text-gray-600 text-13 dark:text-gray-300">
                                                            <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-300"></i> <span>45 min ago</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="#!">
                                                <div class="flex items-center p-4 hover:bg-gray-50/30 dark:hover:bg-neutral-600/50">
                                                    <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                        <img src="{{ asset('storage/images/user/img-03.jpg') }}" class="w-10 h-10 rounded-full" alt="user-pic">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h6 class="mb-1 text-sm text-black dark:text-gray-300">Salena Layfield</h6>
                                                        <div class="text-gray-600 text-13 dark:text-gray-300">
                                                            <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-300"></i> <span>15 min ago</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="#!">
                                                <div class="flex items-center p-4 hover:bg-gray-50/30 dark:hover:bg-neutral-600/50">
                                                    <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                        <img src="
                                                        {{ asset('storage/images/user/img-04.jpg') }}" class="w-10 h-10 rounded-full" alt="user-pic">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <h6 class="mb-1 text-sm text-black dark:text-gray-300">Creative Agency</h6>
                                                        <div class="text-gray-600 text-13 dark:text-gray-300">
                                                            <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-300"></i> <span>15 min ago</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="grid p-1 border-t border-gray-50 dark:border-zinc-600 justify-items-center bg-gray-50 dark:bg-neutral-700">
                                        <a class="border-0 group-data-[theme-color=violet]:text-black group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 btn " href="javascript:void(0)">
                                            <i class="mr-1 mdi mdi-arrow-right-circle"></i> <span>View More..</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="relative dropdown ltr:mr-4 rtl:ml-4">
           <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <img class="w-8 h-8 rounded-full ltr:xl:mr-2 rtl:xl:ml-2" src="{{ asset('storage/images/user/img-02.jpg') }}" alt="Header Avatar">
                            <div class="fw-medium xl:block dark:text-gray-50 px-3">{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
                        </div>
                    </div>
                </div>

                <div id="navbar-collapse" class="navbar-res items-center justify-between w-full text-sm lg:flex lg:w-auto lg:order-1 group-focus:[.navbar-toggler]:block hidden">
                    <ul class="flex flex-col items-start mt-5 mb-10 font-medium lg:mt-0 lg:mb-0 lg:items-center lg:flex-row" id="navigation-menu">
                        <li class="relative dropdown">
                            <a class="block w-full px-4 py-2 text-13 font-medium text-black duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-black group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500"
                                    href="#">Home</a>

                        </li>
                        <li class="relative dropdown lg:mt-0">
                            <button class="py-5 text-black lg:px-4 dropdown-toggle  lg:h-[70px]" id="company" data-bs-toggle="dropdown">Company <i class='align-middle bx bxs-chevron-down ltr:ml-1 rtl:mr-1'></i></button>


                        <li class="relative ">
                            <a class="block w-full px-4 py-2 text-13 font-medium text-black duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-black group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500"
                                href="blog.html">Blog</a>
                            </li>
                        <li class="py-5 lg:px-4">
                            <a href="#" class="py-2.5 text-black font-medium leading-tight " id="contact" data-bs-toggle="dropdown">Contact </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
