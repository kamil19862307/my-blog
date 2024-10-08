<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('posts.update', $post) }}">
            @csrf
            @method('patch')
            <input type="text"
                   name="title"
                   placeholder="{{ __('Title') }}"
                   value="{{ old('message', $post->title) }}"
                   class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
            <textarea
                name="message"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message', $post->message) }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Сохранить') }}</x-primary-button>
                <a href="{{ route('posts.index') }}">{{ __('Отмена') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>
