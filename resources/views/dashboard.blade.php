<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex justify-center">
                    <a href="https://t.me/ForTanyshechkaBot"><x-primary-button> {{ __("Bot") }}</x-primary-button></a>
                </div>
            </div>


        @if($posts->isNotEmpty())
            @foreach($posts as $post)
                <br>
                <a href="{{ route('posts, ['post' => $post]) }}" class="one-new">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 flex justify-center">
                        <h2>{{ $post->title }}</h2>
                    </div>
                    </div>
                </a>
            @endforeach
        @else
            <p class="no-categories">{{__('No posts yet')}}</p>
        @endif
        </div>
    </div>
</x-app-layout>
