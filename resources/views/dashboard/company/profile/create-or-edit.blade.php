@extends('layouts.' . ($layout ?? 'dashboard'))  <!-- Default to 'dashboard' layout -->

@section('content')
    @php
        $currentRouteName = Illuminate\Support\Facades\Route::currentRouteName();
    @endphp
    <div class="page-content">
        <div class="container-fluid px-[0.625rem]">
            <div class="grid grid-cols-1">
                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                        <div class="grid grid-cols-2">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100 text-left">Company Profile {{ $currentRouteName == 'company-profile.create' ? 'Create' : 'Update' }}</h6>
                            <div class="text-right">
                                <a href="{{ route('company-profile.index') }}" class="text-white btn bg-sky-500 border-sky-500 hover:bg-sky-600 hover:border-sky-600 focus:bg-sky-600 focus:border-sky-600 focus:ring focus:ring-sky-500/30 active:bg-sky-600 active:border-sky-600" role="button">
                                    Back
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 lg:col-span-12">
                                @if (request()->session()->has('msg'))
                                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                                        {{ session('msg') }}
                                    </div>
                                @endif
                                <form action="{{ $currentRouteName == 'company-profile.create' ? route('company-profile.store') : route('company-profile.update', $company_profile->id) }}" method="POST" enctype="multipart/form-data">
                                    @if ($currentRouteName == 'company-profile.edit')
                                        @method('PUT')
                                    @endif
                                    @csrf
                                    <div class="mb-4">
                                        <label for="profile-name" class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Profile Name:</label>
                                        <input class="w-full placeholder:text-13 text-13 py-1.5 rounded border-gray-100 focus:border focus:border-violet-50 focus:ring focus:ring-violet-500/20  dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 placeholder:text-gray-800 dark:text-zinc-100" type="text" name="name" value="{{ $currentRouteName == 'company-profile.edit' ? $company_profile->name : old('name') }}" placeholder="Saif Kamal" id="profile-name">
                                    </div>
                                    <div class="mb-4">
                                        <label for="profile-description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profile Description:</label>
                                        <textarea id="company_profile_description_editor" name="description" rows="4" placeholder="Write Company Profile Description">
                                            {{ $currentRouteName == 'company-profile.edit' ? $company_profile->description : old('description') }}
                                        </textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label for="phone-number" class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Phone Number:</label>
                                        <input class="w-full placeholder:text-sm py-1.5 rounded border-gray-100 focus:border focus:border-violet-500 focus:ring focus:ring-violet-500/20 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" type="text" name="phone_number" value="{{ $currentRouteName == 'company-profile.edit' ? $company_profile->phone_number : old('phone_number') }}" placeholder="+8801913775866" id="phone-number">
                                    </div>
                                    <div class="mb-4">
                                        <label for="url" class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Url:</label>
                                        <input class="w-full placeholder:text-13 text-13 py-1.5 rounded border-gray-100 focus:border focus:border-violet-50 focus:ring focus:ring-violet-500/20  dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 placeholder:text-gray-800 dark:text-zinc-100" type="url" name="url" value="{{ $currentRouteName == 'company-profile.edit' ? $company_profile->url : old('url') }}" placeholder="https://saifkamal.com" id="url">
                                    </div>
                                    <div class="mb-4">
                                        <label for="linkedin-url" class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Linkedin Url:</label>
                                        <input class="w-full placeholder:text-13 text-13 py-1.5 rounded border-gray-100 focus:border focus:border-violet-50 focus:ring focus:ring-violet-500/20  dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 placeholder:text-gray-800 dark:text-zinc-100" type="text" name="linkedin_url" value="{{ $currentRouteName == 'company-profile.edit' ? $company_profile->linkedin_url : old('linkedin_url') }}" placeholder="https://linkedin.com/saifkamal" id="linkedin-url">
                                    </div>
                                    <div class="mb-4">                                        
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Image:</label>
                                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-white-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="image" name="image" type="file">
                                    </div>
                                    <br>
                                    <div class="mb-4">
                                        <button type="submit" class="text-white bg-green-500 border-green-500 btn hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600">{{ $currentRouteName == 'company-profile.edit' ? 'Update' : 'Create' }} Company Profile</button>
                                    </div>
                                </form>
                                @if ($errors->any())
                                    <div>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>
                                                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                                        {{ $error }}
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @else

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#company_profile_description_editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection