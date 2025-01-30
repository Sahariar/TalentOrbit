
<li>
    <a href="{{ route('admin.dashboard') }}" class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:bg-sky-900 hover:text-white">
        <i data-feather="home" fill="#545a6d33"></i>
        <span data-key="t-dashboard"> Dashboard</span>
    </a>
</li>

<li>
    <a href="javascript: void(0);" aria-expanded="false" class="block :rtl:pr-10 py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:bg-sky-900 hover:text-white  active:text-gray-950  ">
        <i data-feather="users" fill="#545a6d33"></i>
        <span data-key="t-auth" >Users</span>
    </a>
    <ul>
        <li>
            <a href="{{ route('admin.companies.index') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:bg-sky-900 hover:text-white dark:text-gray-300 dark:active:text-white  ">Companies</a>
        </li>
        <li>
            <a href="{{ route('admin.candidates.index') }}" class="pl-[52.8px] pr-6 py-[6.4px] block text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:bg-sky-900 hover:text-white dark:text-gray-300 dark:active:text-white  ">Candidate</a>
        </li>

    </ul>
</li>
<li>
    <a href="{{ route('admin.job_posts.index') }}" class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:bg-sky-900 hover:text-white">
        <i data-feather="sliders" fill="#545a6d33"></i>
        <span data-key="t-dashboard"> Job Posts</span>
    </a>
</li>
<li>
    <a href="{{ route('admin.categories.cateIndex') }}" class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:bg-sky-900 hover:text-white">
        <i data-feather="copy" fill="#545a6d33"></i>
        <span data-key="t-dashboard"> Categories</span>
    </a>
</li>
<li>
    <a href="{{ route('admin.tags.tagIndex') }}" class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:bg-sky-900 hover:text-white">
        <i data-feather="folder" fill="#545a6d33"></i>
        <span data-key="t-dashboard"> Tags</span>
    </a>
</li>
<li>
    <a href="{{ route('admin.price-plans.index') }}" class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:bg-sky-900 hover:text-white">
        <i data-feather="dollar-sign" fill="#545a6d33"></i>
        <span data-key="t-dashboard">Pricing Plan</span>
    </a>
</li>
<li>
    <a href="{{ route('admin.payments.index') }}" class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:bg-sky-900 hover:text-white">
        <i data-feather="credit-card" fill="#545a6d33"></i>
        <span data-key="t-dashboard">Payments</span>
    </a>
</li>

<li>
    <a href="{{ route('profile.edit') }}" class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:bg-sky-900 hover:text-white">
        <i data-feather="user" fill="#545a6d33"></i>
        <span data-key="t-dashboard">Profile</span>
    </a>
</li>


