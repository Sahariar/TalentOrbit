@extends('layouts.' . ($layout ?? 'dashboard'))  <!-- Default to 'dashboard' layout -->

@section('content')
    @php
        $currentRouteName = Illuminate\Support\Facades\Route::currentRouteName();
        use Carbon\Carbon;
    @endphp
    <div class="page-content">
        <div class="container-fluid px-[0.625rem]">
            <div class="grid grid-cols-1">
                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                        <div class="grid grid-cols-2">
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100 text-left">Job Post {{ $currentRouteName == 'company.job-posts.create' ? 'Create' : 'Update' }}</h6>
                            <div class="text-right">
                                <a href="{{ route('company.job-posts.index') }}" class="text-white btn bg-sky-500 border-sky-500 hover:bg-sky-600 hover:border-sky-600 focus:bg-sky-600 focus:border-sky-600 focus:ring focus:ring-sky-500/30 active:bg-sky-600 active:border-sky-600" role="button">
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
                                <form action="{{ $currentRouteName == 'company.job-posts.create' ? route('company.job-posts.store') : route('company.job-posts.update', $job_post->id) }}" method="POST" enctype="multipart/form-data">
                                    @if ($currentRouteName == 'company.job-posts.edit')
                                        @method('PUT')
                                    @endif
                                    @csrf
                                    <div class="mb-4">
                                        <label for="job-title" class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Job Title:</label>
                                        <input class="w-full placeholder:text-13 text-13 py-1.5 rounded border-gray-100 focus:border focus:border-violet-50 focus:ring focus:ring-violet-500/20  dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 placeholder:text-gray-800 dark:text-zinc-100" type="text" name="title" value="{{ $currentRouteName == 'company.job-posts.edit' ? $job_post->title : old('title') }}" placeholder="Software Engineer" id="job-title">
                                    </div>
                                    <div class="mb-4">
                                        <label for="job-categories" class="block mb-2 font-medium text-gray-700 dark:text-zinc-100">Job Categories</label>
                                        <select class="dark:bg-zinc-800 dark:border-zinc-700 w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:text-zinc-100" name="category">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ $currentRouteName == 'company.job-posts.edit' && $job_post->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label for="job-description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Job Description:</label>
                                        <textarea id="job_description_editor" name="description" rows="4" placeholder="Write Job Title Description">
                                            {{ $currentRouteName == 'company.job-posts.edit' ? $job_post->description : old('description') }}
                                        </textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label for="external-apply-link" class="block mb-2 font-medium text-gray-700 dark:text-gray-100">External Apply Link:</label>
                                        <input class="w-full placeholder:text-sm py-1.5 rounded border-gray-100 focus:border focus:border-violet-500 focus:ring focus:ring-violet-500/20 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" type="url" name="apply_link" value="{{ $currentRouteName == 'company.job-posts.edit' ? $job_post->apply_link : old('apply_link') }}" placeholder="https://getbootstrap.com" id="external-apply-link">
                                    </div>
                                    <div class="mb-4">
                                        <label for="job-expiration-date" class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Job Expiration Date:</label>
                                        <input class="w-full border-gray-100 rounded placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100" type="date" name="job_expiration_date" value="{{ $currentRouteName == 'company.job-posts.edit' ? Carbon::parse($job_post->job_expiration_date)->format('Y-m-d') : old('job_expiration_date') }}" id="job-expiration-date">
                                    </div>
                                    <div class="mb-4">
                                        <label for="is-job-available" class="block mb-2 font-medium text-gray-700 dark:text-zinc-100">Is Job Available?</label>
                                        <select class="dark:bg-zinc-800 dark:border-zinc-700 w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:text-zinc-100" name="is_available">
                                            @if (isset($job_post))
                                                @if ($job_post->is_available)
                                                    <option value="1" selected>Yes</option>
                                                    <option value="0">No</option>
                                                @else
                                                    <option value="1">Yes</option>
                                                    <option value="0" selected>No</option>
                                                @endif
                                            @else
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label for="job-location" class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Job Location:</label>
                                        <input class="w-full placeholder:text-13 text-13 py-1.5 rounded border-gray-100 focus:border focus:border-violet-50 focus:ring focus:ring-violet-500/20  dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 placeholder:text-gray-800 dark:text-zinc-100" type="text" name="location" value="{{ $currentRouteName == 'company.job-posts.edit' ? $job_post->location : old('location') }}" placeholder="Ka-115/6/1,Mohakhali Dakkhinpara" id="job-location">
                                    </div>
                                    <div class="mb-4">
                                        <label for="salary-range" class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Salary Range:</label>
                                        <input class="w-full placeholder:text-13 text-13 py-1.5 rounded border-gray-100 focus:border focus:border-violet-50 focus:ring focus:ring-violet-500/20  dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 placeholder:text-gray-800 dark:text-zinc-100" type="text" name="salary_range" value="{{ $currentRouteName == 'company.job-posts.edit' ? $job_post->salary_range : old('salary_range') }}" placeholder="100,000-150,000" id="salary-range">
                                    </div>
                                    <div class="mb-4">                                        
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="featured-image">Featured Image:</label>
                                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-white-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="featured-image" name="featured_image" type="file">
                                    </div>
                                    <br>
                                    <div class="mb-4">
                                        <button type="submit" class="text-white bg-green-500 border-green-500 btn hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600">{{ $currentRouteName == 'company.job-posts.edit' ? 'Update' : 'Create' }} Job Post</button>
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
            .create(document.querySelector('#job_description_editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection