<nav class="fixed top-0 left-0 right-0 z-10 flex items-center bg-white  dark:bg-zinc-800 print:hidden dark:border-zinc-700 ltr:pr-6 rtl:pl-6">
    <div class="flex justify-between w-full">
        <div class="flex items-center topbar-brand">
            <div class="hidden lg:flex navbar-brand items-center justify-between shrink px-6 h-[70px]  ltr:border-r rtl:border-l bg-[#fbfaff] border-gray-50 dark:border-zinc-700 dark:bg-zinc-800 shadow-none">
                <a href="/">
                    <span>
                    <x-application-logo class="w-44 h-20 fill-current text-black" />
                    </span>
                    <img src="{{ asset('storage/images/talentorbit-fav.png') }}" alt="" class="w-auto h-6 hidden">
                </a>
        </div>
        <button type="button" class="group-data-[sidebar-size=sm]:border-b border-b border-[#e9e9ef] dark:border-zinc-600 dark:lg:border-transparent lg:border-transparent  group-data-[sidebar-size=sm]:border-[#e9e9ef] group-data-[sidebar-size=sm]:dark:border-zinc-600 text-gray-800 dark:text-white h-[70px] px-4 ltr:-ml-[52px] rtl:-mr-14 py-1 vertical-menu-btn text-16" id="vertical-menu-btn">
            <i data-feather="menu"></i>
        </button>
        </div>
        <div class="flex justify-between w-full items-center border-b border-[#e9e9ef] dark:border-zinc-600 ltr:pl-6 rtl:pr-6">
            <div>
                <a href="{{ route('home') }}" role="button" class="text-white btn bg-sky-500 border-sky-500 hover:bg-sky-600 hover:border-sky-600 focus:bg-sky-600 focus:border-sky-600 focus:ring focus:ring-sky-500/30 active:bg-sky-600 active:border-sky-600">Visit Website</a>
                {{-- <form class="hidden app-search xl:block">
                    <div class="relative inline-block">
                        <input type="text" class="pl-4 pr-[40px] border-0 rounded bg-[#f8f9fa] dark:bg-[#363a38] focus:ring-0 text-13 placeholder:text-13 dark:placeholder:text-gray-200 dark:text-gray-100  max-w-[223px]" placeholder="Search...">
                        <button class="py-1.5 px-2.5 w-9 h-[34px] text-white bg-sky-500 inline-block absolute ltr:right-1 top-1 rounded shadow shadow-violet-100 dark:shadow-gray-900 rtl:left-1 rtl:right-auto" type="button">
                            <i data-feather="search" class="w-3 h-3"></i>
                            </button>
                    </div>
                </form> --}}
            </div>
            <div class="flex">
                <div>
                    <div class="relative block dropdown sm:hidden">
                        <button type="button" class="text-xl px-4 h-[70px] text-gray-600 dark:text-gray-100 dropdown-toggle" data-dropdown-toggle="navNotifications">
                            <i data-feather="search" class="w-5 h-5"></i>
                        </button>

                        <div class="absolute top-0 z-50 hidden px-4 mx-4 list-none bg-white border rounded shadow  dropdown-menu -left-36 w-72 border-gray-50 dark:bg-zinc-800 dark:border-zinc-600 dark:text-gray-300" id="navNotifications">
                            <form class="py-3 dropdown-item" aria-labelledby="navNotifications">
                                <div class="m-0 form-group">
                                    <div class="flex w-full">
                                        <input type="text" class="border-gray-100 dark:border-zinc-600 dark:text-zinc-100 w-fit" placeholder="Search ..." aria-label="Search Result">
                                        <button class="text-white border-l-0 border-transparent rounded-l-none btn btn-primary bg-sky-500" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="relative dropdown">
                        <div class="relative">
                            <button type="button" class="btn border-0 h-[70px] dropdown-toggle px-4 text-black dark:text-gray-300" aria-expanded="false" data-dropdown-toggle="notification">
                                <i class="text-2xl mdi mdi-bell"></i>
                            </button>
                                {{-- <span class="absolute text-xs px-1.5 bg-red-500 text-white font-medium rounded-full left-6 top-3 ring-2 ring-white dark:ring-neutral-800">3</span> --}}
                        </div>
                        <div class="absolute right-0 top-auto left-auto z-50 hidden list-none bg-white rounded shadow dropdown-menu w-72   " id="notification">
                            <div class="border rounded border-gray-50 dark:border-neutral-600" aria-labelledby="notification">
                                <div class="grid grid-cols-1 ">
                                    <div class="p-4 bg-gray-50 dark:bg-neutral-700">
                                        <h6 class="mb-1 text-black "> Notification </h6>
                                        <p class="mb-0 text-black text-13 dark:text-gray-300">You have 0 unread Notification</p>
                                    </div>
                                </div>
                                {{-- <div class="h-60" data-simplebar>
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
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="relative dropdown pt-2">
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        @if (Auth::user()->role == 'company')
                                            <img class="w-8 h-8 rounded-full ltr:xl:mr-2 rtl:xl:ml-2" src="{{ url('storage/'. Auth::user()->company_profile->image)}}" alt="Header Avatar">
                                        @elseif(Auth::user()->role == 'candidate')
                                            <img class="w-8 h-8 rounded-full ltr:xl:mr-2 rtl:xl:ml-2" src="{{ url('storage/'. Auth::user()->candidate_profile->image)}}" alt="Header Avatar">
                                        @else
                                            <img class="w-8 h-8 rounded-full ltr:xl:mr-2 rtl:xl:ml-2" src="{{ url('storage/'. Auth::user()->image)}}" alt="Header Avatar">
                                        @endif
                                        <div class="fw-medium xl:block dark:text-gray-50">{{ Auth::user()->name }}</div>

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
        </div>
    </div>
</nav>

