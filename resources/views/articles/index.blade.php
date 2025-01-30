<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="p-3">
                        <a href="{{ route('articles.create') }}" class="px-4 py-2 bg-indigo-500 text-white rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105 active:scale-95 hover:bg-indigo-600">
                        Tambah Artikel
                        </a>
                    </div>
                    <table class="min-w-full bg-white shadow-md rounded-lg">
                        <thead class="bg-indigo-500 text-white">
                            <tr>
                                <th class="px-4 py-2">#</th>
                                <th class="px-4 py-2">Judul</th>
                                <th class="px-4 py-2">Kategori</th>
                                <th class="px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                            <tr class="border-b hover:bg-gray-100">
                                <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2">{{ $article->title }}</td>
                                <td class="px-4 py-2">{{ $article->category->name ?? '-' }}</td>
                                <td class="px-4 py-2">
                                    <a href="{{ route('articles.edit', $article->id) }}" class="text-blue-500 hover:underline">Edit</a>
                                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline ml-2">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>


