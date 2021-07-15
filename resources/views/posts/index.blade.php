<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Post
                </div>

                <table>
                    <thead>
                        <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Intro to CSS</td>
                        <td>Adam</td>
                        <td>858</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
</x-guest-layout>
