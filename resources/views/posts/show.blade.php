<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">

        <h2 class="text-2xl font-bold dark:text-white">
            {{ $post->title }}
        </h2>

        <p class="indent-8 mb-3">{{ $post->message }}</p>

        <div class="mt-4 space-x-2">
            <x-primary-button><a href="{{ route('posts.index') }}">{{ __('На главную') }}</a></x-primary-button>
        </div>

    </div>
</x-app-layout>
