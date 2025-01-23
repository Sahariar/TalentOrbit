@extends('layouts.' . ($layout ?? 'dashboard'))  <!-- Default to 'dashboard' layout -->

@section('content')
    <div class="page-content">
        <div class="container-fluid px-[0.625rem]">
            <div class="grid grid-cols-1 pb-6">
                <div class="md:flex items-center justify-between px-[2px]">
                    <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow dark:text-gray-100 mb-2 md:mb-0">Candidates Information Dashboard</h4>
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
                                    <a href="#" class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Candidates</a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="p-6 space-y-6">
    {{-- candidate Details Card --}}
    <div class="bg-white rounded-lg shadow">
        <div class="p-4 sm:p-6 border-b">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    @if($candidate->image)
                        <img src="{{ Storage::url($candidate->image) }}" alt="{{ $candidate->name }}" class="w-20 h-20 rounded-lg object-cover">
                    @else
                        <div class="w-20 h-20 rounded-lg bg-gray-200 flex items-center justify-center">
                            <span class="text-gray-500">No Image</span>
                        </div>
                    @endif
                    <div>
                        <h1 class="text-2xl font-bold">{{ $candidate->name }}</h1>
                        <p class="text-gray-500">{{ $candidate->user->email }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4 sm:p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h2 class="text-lg font-semibold mb-4">Candidate Information</h2>
                <dl class="space-y-3">
                    <div>
                        <dt class="text-sm font-medium text-gray-500">Website</dt>
                        <dd class="mt-1">
                            @if($candidate->url)
                                <a href="{{ $candidate->url }}" target="_blank" class="text-blue-600 hover:underline">
                                    {{ $candidate->url }}
                                </a>
                            @else
                                <span class="text-gray-400">Not provided</span>
                            @endif
                        </dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-gray-500">Phone Number</dt>
                        <dd class="mt-1">
                            @if($candidate->phone_number)
                                <p>
                                    {{ $candidate->phone_number }}
                                </p>
                            @else
                                <span class="text-gray-400">Not provided</span>
                            @endif
                        </dd>
                    </div>
                    <div>
                        <dt class="text-sm font-medium text-gray-500">Joined Date</dt>
                        <dd class="mt-1">{{ $candidate->created_at->format('F j, Y') }}</dd>
                    </div>
                </dl>
            </div>
            <div>
                <h2 class="text-lg font-semibold mb-4">Candidate Description</h2>
                <div class="prose max-w-none">
                    {!! $candidate->description ?? '<p class="text-gray-400">No description provided</p>' !!}
                </div>
            </div>
        </div>
    </div>

</div>
        </div>
        </div>
    </div>

@endsection
