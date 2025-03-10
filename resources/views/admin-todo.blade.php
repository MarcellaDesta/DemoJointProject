<x-app-layout>
    <title> {{ $pageTitle }} | {{ config('app.name') }} </title>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- Tombol Tambah Todo -->
                    <a href="{{ route('admin-todocreate') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded mb-4">
                        Tambah Todo
                    </a>
                    @if(session('success'))
                    <div class="bg-yellow-500 text-white p-3 rounded mt-2">
                        {{ session('success') }}
                    </div>
                @endif
                    <!-- Tabel Todo List -->
                    <div class="mt-2 relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Name</th>
                                    <th scope="col" class="px-6 py-3">Status</th>
                                    <th scope="col" class="px-6 py-3">Project</th>
                                    <th scope="col" class="px-6 py-3">Category</th>
                                    <th scope="col" class="px-6 py-3">Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                @forelse ($todos as $todo)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $todo->name }}
                                        </td>
                                        <td scope="row" class="px-6 py-4">
                                            {{ $todo->status }}
                                        </td>
                                        <td scope="row" class="px-6 py-4">
                                            {{ $todo->project->name}}
                                        </td>
                                        <td scope="row" class="px-6 py-4">
                                            {{ $todo->category }}
                                        </td>
                                        <td>
                                        <form action="{{ route('admin-tododestroy', $todo->id) }}" method="POST" onsubmit="return confirm('Apakah kamu yakin ingin menghapus todo ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-4 py-2 text-center">Tidak ada data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
