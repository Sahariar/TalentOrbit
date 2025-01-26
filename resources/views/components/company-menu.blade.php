<li>
    <a class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-sky-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white" href="{{ route('company.dashboard') }}">
        <i data-feather="users" fill="#545a6d33"></i>
        Company Dashboard
    </a>
</li>
<li>
    <a class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-sky-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white" href="{{ route('company-profile.index') }}">
        <i data-feather="user" fill="#545a6d33"></i>
        Profile
    </a>
</li>
@if ($companyProfile->is_approved)
    <li>
        <a class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-sky-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white" href="{{ route('company.job-posts.index') }}">
            <i data-feather="briefcase" fill="#545a6d33"></i>
            Manage Jobs
        </a>
    </li>
@endif
<li>
    <a href="{{ route('company.payments.index') }}" class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-sky-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white" >
        <i data-feather="dollar-sign" fill="#545a6d33"></i>
        Payments
    </a>
</li>
