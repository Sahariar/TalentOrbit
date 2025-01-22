
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
<li>
    <a href="{{ route('admin.job_posts.index') }}" aria-expanded="false" class="block py-2.5 px-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear nav-menu hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white mm-collapsed">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#545a6d33" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg><span data-key="t-pages">Job Posts</span>
    </a>
</li>

