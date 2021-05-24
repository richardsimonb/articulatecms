<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Create Post
                </div>
            </div>
        </div>

        <form method="POST" action="{{ route('post.store') }}">
            @csrf

            <!-- Title -->
            <div>
                <x-label for="title" :value="__('Title')" />

                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
            </div>

            <!-- Body -->
            <div>
                <x-label for="body" :value="__('Body')" />

                <x-input id="body" class="block mt-1 w-full" type="text" name="body" :value="old('body')" required autofocus />
            </div>

            <!-- Category -->
            <div>
                <x-label for="category" :value="__('Category')" />

                <x-input id="category" class="block mt-1 w-full" type="text" name="category" :value="old('category')" required autofocus />
            </div>

            <!-- Author -->
            <div>
                <x-label for="author" :value="__('Author')" />

                <x-input id="author" class="block mt-1 w-full" type="text" name="author" :value="old('author')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Save') }}
                </x-button>
            </div>
        </form>

    </div>
</x-guest-layout>
