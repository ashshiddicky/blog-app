<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="p-3">
                        <a href="{{ route('categories.create') }}" class="px-4 py-2 bg-indigo-500 text-white rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105 active:scale-95 hover:bg-indigo-600">
                        Tambah Kategori
                        </a>
                    </div>
                    <ul class="space-y-2">
                        @foreach ($categories as $category)
                            <li class="flex justify-between items-center bg-white p-3 rounded-lg shadow-md border border-gray-200">
                                <span class="text-gray-800 font-medium">{{ $category->name }}</span>
                                <div class="space-x-2">
                                    <a href="{{ route('categories.edit', $category->id) }}" class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">
                                        Edit
                                    </a>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>

