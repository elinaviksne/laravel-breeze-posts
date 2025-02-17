<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('All Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1>All posts</h1>
                <br>
                <a href="{{ route('post.create') }}">Create post</a>
                <br>
                <br>
                <ul>
                    @foreach($posts as $post)
                        <li>
                            <h2>Title: {{ $post->title }}</h2>
                            <p>Content: {{ $post->content }}</p>
                            <div>
                                <a href="{{ route('post.show', $post) }}">Show</a>
                                <a href="{{ route('post.edit', $post) }}">Edit</a>
                                <form action="{{ route('post.destroy', $post) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    
                                    <button>Delete</button>
                                </form>
                            </div>
                        </li>
                        <br>
                    @endforeach
                </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

