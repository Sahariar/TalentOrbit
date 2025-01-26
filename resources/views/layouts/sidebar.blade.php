        <!-- ========== Left Sidebar Start ========== -->
        <div class="fixed bottom-0 z-10 h-screen ltr:border-r rtl:border-l vertical-menu rtl:right-0 ltr:left-0 top-[70px] bg-slate-50 border-gray-50 print:hidden dark:bg-zinc-800 dark:border-neutral-700">

            <div data-simplebar class="h-full">
                <!--- Sidemenu -->
                <div class="metismenu pb-10 pt-2.5" id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul id="side-menu">
                        <li class="px-5 py-3 text-xs font-medium text-gray-500 cursor-default leading-[18px] group-data-[sidebar-size=sm]:hidden block" data-key="t-menu">Menu</li>
                    @if(Auth::user()->role === 'company')
                        <x-company-menu :companyProfile="$companyProfile" />
                    @elseif(Auth::user()->role === 'candidate')
                        <x-candidate-menu/>
                    @else
                        <x-admin-menu/>
                    @endif

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
