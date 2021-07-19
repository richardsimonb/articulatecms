<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Category
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
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->parent }}</td>
                                <td>Edit Delete</td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>

            </div>
        </div>
    </div>



</x-guest-layout>