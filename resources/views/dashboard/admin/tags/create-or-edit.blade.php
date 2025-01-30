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
                            <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100 text-left">Tag {{ $currentRouteName == 'admin.tags.tagCreate' ? 'Create' : 'Update' }}</h6>
                            <div class="text-right">
                                <a href="{{ route('admin.tags.tagIndex') }}" class="text-white btn bg-sky-500 border-sky-500 hover:bg-sky-600 hover:border-sky-600 focus:bg-sky-600 focus:border-sky-600 focus:ring focus:ring-sky-500/30 active:bg-sky-600 active:border-sky-600" role="button">
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
                                <form action="{{ $currentRouteName == 'admin.tags.tagCreate' ? route('admin.tags.tagStore') : route('admin.tags.tagUpdate', $tag->id) }}" method="POST" enctype="multipart/form-data">
                                    @if ($currentRouteName == 'admin.tags.tagEdit')
                                        @method('PUT')
                                    @endif
                                    @csrf
                                    <div class="mb-4">
                                        <label for="tag-name" class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Tag Name:</label>
                                        <input class="w-full placeholder:text-13 text-13 py-1.5 rounded border-gray-100 focus:border focus:border-violet-50 focus:ring focus:ring-violet-500/20  dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 placeholder:text-gray-800 dark:text-zinc-100" type="text" name="title" value="{{ $currentRouteName == 'admin.tags.tagEdit' ? $tag->title : old('title') }}" placeholder="Laravel" id=tag-name">
                                    </div>
                                    <div class="mb-4">
                                        <label for="category-description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tag Description:</label>
                                        <textarea id="tag_description_editor" name="description" rows="4" placeholder="Write Tag Description">
                                            {!! $currentRouteName == 'admin.tags.tagEdit' ? $tag->description : old('description') !!}
                                        </textarea>
                                    </div>
                                    <br>
                                    <div class="mb-4">
                                        <button type="submit" class="text-white bg-green-500 border-green-500 btn hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600">{{ $currentRouteName == 'admin.tags.tagEdit' ? 'Update' : 'Create' }} Tag</button>
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
            .create(document.querySelector('#tag_description_editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection