
<li>
    <a href="{{ route('admin.dashboard') }}" class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-sky-900">
        <i data-feather="home" fill="#545a6d33"></i>
        <span data-key="t-dashboard"> Dashboard</span>
    </a>
</li>

<li>
    <a href="javascript: void(0);" aria-expanded="false" class="block :rtl:pr-10 py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-sky-900  dark:active:text-white dark:hover:text-white">
        <i data-feather="users" fill="#545a6d33"></i>
        <span data-key="t-auth" >Users</span>
    </a>
    <ul>
        <li>
            <a href="{{ route('admin.companies.index') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-sky-900 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Companies</a>
        </li>
        <li>
            <a href="{{ route('admin.candidates.index') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-sky-900 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Candidate</a>
        </li>

    </ul>
</li>
{{-- <li class="px-5 py-3 mt-2 text-xs font-medium text-gray-500 cursor-default leading-[18px] group-data-[sidebar-size=sm]:hidden" data-key="t-elements">Elements</li> --}}

    <li>
        <a href="javascript: void(0);" aria-expanded="false" class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-sky-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
            <i data-feather="briefcase" fill="#545a6d33"></i>
            <span data-key="t-compo">Components</span>
        </a>
        <ul>
            <li>
                <a href="alerts.html" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-sky-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Alerts</a>
            </li>
            <li>
                <a href="buttons.html" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-sky-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Buttons</a>
            </li>
            <li>
                <a href="cards.html" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-sky-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Cards</a>
            </li>
            <li>
                <a href="dropdown.html" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-sky-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Dropdown</a>
            </li>
            <li>
                <a href="flexbox&grid.html" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-sky-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Flexbox & Grid</a>
            </li>
            <li>
                <a href="sizing.html" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-sky-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Sizing</a>
            </li>
            <li>
                <a href="avatars.html" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-sky-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Avatar</a>
            </li>
            <li>
                <a href="modals.html" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-sky-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Modals</a>
            </li>
            <li>
                <a href="progress.html" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-sky-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Progress</a>
            </li>
            <li>
                <a href="tabs&accordions.html" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-sky-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Tabs & Accordions</a>
            </li>
            <li>
                <a href="typography.html" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-sky-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Typography</a>
            </li>
            <li>
                <a href="toasts.html" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-sky-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Toasts</a>
            </li>
            <li>
                <a href="general.html" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-sky-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">General</a>
            </li>
            <li>
                <a href="colors.html" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-sky-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Colors</a>
            </li>
            <li>
                <a href="utilities.html" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-sky-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Utilities</a>
            </li>
        </ul>
    </li>
