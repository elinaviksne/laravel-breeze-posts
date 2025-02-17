<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <style>
        .button {
            background-color: white;
            color: black;
            border: 2px solid #04AA6D; /* Green */
            transition-duration: 0.4s;
        }
        .button:hover {
            background-color: #04AA6D; /* Green */
            color: white;
        }

    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Edit post</h1>
                    <br>

                    <x-error-message :errors="$errors" />

                    <form action="{{ route('post.update', $post) }}" method="post">
                        @csrf
                        @method("PUT")

                        <div>
                            <label for="title">Title: </label>
                            <input type="text" id="title" name="title" value="{{ $post->title }}">
                        </div>
                        <div>
                            <label for="content">Content: </label>
                            <textarea name="content" id="content">{{ $post->content }}</textarea>
                        </div>
                        <br>
                        <div>
                            <input type="submit" value="Update" class="button">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

