@extends('layouts.' . ($layout ?? 'dashboard'))  <!-- Default to 'dashboard' layout -->

@section('content')
    <div class="page-content">
        <div class="container-fluid px-[0.625rem]">
            <div class="grid grid-cols-1 pb-6">
                <div class="md:flex items-center justify-between px-[2px]">
                    <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow dark:text-gray-100 mb-2 md:mb-0">Dashboard</h4>
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                            <li class="inline-flex items-center">
                                <a href="#" class="inline-flex items-center text-sm text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center rtl:mr-2">
                                   <i class="font-semibold text-gray-600 align-middle far fa-angle-right text-13 rtl:rotate-180 dark:text-zinc-100"></i>
                                    <a href="#" class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Companies</a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Company</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jobs</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($companies as $companyProfile)
                        <tr>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    @if($companyProfile->image)
                                        <img src="{{ Storage::url($companyProfile->image) }}" class="w-10 h-10 rounded-full">
                                    @else
                                        <div class="w-10 h-10 rounded-full bg-gray-200"></div>
                                    @endif
                                    <div class="ml-3">
                                        <p class="font-medium">{{ $companyProfile->name }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">{{ $companyProfile->user->email }}</td>
                            <td class="px-6 py-4">{{ $companyProfile->jobs_count }}</td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 text-xs rounded-full {{ $companyProfile->is_approved ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                    {{ $companyProfile->is_approved ? 'Approved' : 'Pending' }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-2">
                                    <a href="{{ route('admin.companies.show', $companyProfile->id) }}" class="text-blue-600 hover:text-blue-900">View</a>
                                    @if(!$companyProfile->is_approved)
                                        <form action="{{ route('admin.companies.approve', $companyProfile) }}" method="POST" class="inline">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="text-green-600 hover:text-green-900">Approve</button>
                                        </form>
                                    @else
                                        <form action="{{ route('admin.companies.reject', $companyProfile) }}" method="POST" class="inline">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="text-yellow-600 hover:text-yellow-900">Reject</button>
                                        </form>
                                    @endif
                                    <form action="{{ route('admin.companies.delete', $companyProfile) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="p-4">
                {{ $companies->links() }}
            </div>
        </div>
        </div>
    </div>

@endsection
