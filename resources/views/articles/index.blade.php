<x-app-layout>

    <section class="w-full mx-auto bg-nordic-gray-light flex pt-12 md:pt-0 md:items-center bg-cover bg-right" style="max-width:1600px; height: 32rem; background-image: url('https://images.unsplash.com/photo-1422190441165-ec2956dc9ecc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">

        <div class="container mx-auto">

            <div class="flex flex-col w-full lg:w-1/2 justify-center items-start  px-6 tracking-wide">
                <h1 class="text-black text-2xl my-4">Stripy Zig Zag Jigsaw Pillow and Duvet Set</h1>
                <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">products</a>

            </div>

          </div>

    </section>


    <section class="bg-white py-8">

        <div class="container py-8 px-6 mx-auto">

            <form method="POST" action="{{ route('articles.store') }}">
                @csrf
                <input type="text"
                       name="title"
                       placeholder="{{ __('Title') }}"
                       value="{{ old('message') }}"
                       class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                >
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                <textarea
                    name="message"
                    placeholder="{{ __('What\'s on your mind?') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                >{{ old('message') }}</textarea>
                <x-input-error :messages="$errors->get('message')" class="mt-2" />
                <x-primary-button class="mt-4">{{ __('Добавить') }}</x-primary-button>
            </form>

            <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl mb-8" href="#">
                Статьи
            </a>

            <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">

                @foreach($posts as $post)

                    <div class="p-6 flex space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>

                        <div class="flex-1">
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-gray-800">{{ $post->user->name }}</span>
                                    <small class="ml-2 text-sm text-gray-600">{{ $post->created_at->format('j M Y, g:i a') }}</small>

                                    @unless ($post->created_at->eq($post->updated_at))

                                        <small class="text-sm text-gray-600"> &middot; {{ __('изменено') }}</small>

                                    @endunless

                                </div>

                                @if ($post->user->is(auth()->user()))

                                    <x-dropdown>
                                        <x-slot name="trigger">
                                            <button>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                </svg>
                                            </button>
                                        </x-slot>
                                        <x-slot name="content">
                                            <x-dropdown-link :href="route('articles.edit', $post)">
                                                {{ __('Изменить') }}
                                            </x-dropdown-link>
                                            <form method="POST" action="{{ route('articles.destroy', $post) }}">
                                                @csrf
                                                @method('delete')
                                                <x-dropdown-link :href="route('articles.destroy', $post)" onclick="event.preventDefault(); this.closest('form').submit();">
                                                    {{ __('Удалить') }}
                                                </x-dropdown-link>
                                            </form>
                                        </x-slot>
                                    </x-dropdown>

                                @endif

                            </div>
                            <a href="{{ route('articles.show', $post) }}">
                                <p class="mt-4 text-lg text-gray-900">{{ $post->title }}</p>
                            </a>
                            <p class="mt-4 text-lg text-gray-900">{{ $post->message }}</p>
                        </div>
                    </div>

                @endforeach
            </div>

        </div>

    </section>


</x-app-layout>
