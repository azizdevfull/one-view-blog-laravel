    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('All Posts') }} <br> <br>
                <a href="{{ route('posts.create') }}">New Post</a>
            </h2>
        </x-slot>
    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <ul>
                            @foreach ($posts as $post)
                                <li>
                                    <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                                    (Views: {{ $post->views()->count() }})
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    