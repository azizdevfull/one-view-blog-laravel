


    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Post') }}
                <br><br>
                <a href="{{ route('posts.index') }}">Back</a>
            </h2>
        </x-slot>
    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                    <form action="{{ route('posts.update', $post) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="title">Title:</label>
                            <input type="text" id="title" name="title" value="{{ $post->title }}" required>
                        </div>
                        <div>
                            <label for="content">Content:</label>
                            <textarea id="content" name="content" rows="5" required>{{ $post->content }}</textarea>
                        </div>
                        <button type="submit">Update</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    