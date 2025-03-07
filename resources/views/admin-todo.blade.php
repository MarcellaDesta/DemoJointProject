<x-app-layout>
    @section('title', "Daftar Data | " . config('app.name'))

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-xl font-semibold mb-4">Daftar Data</h2>

                    <table class="w-full border-collapse border border-gray-300 dark:border-gray-700">
                        <thead>
                            <tr class="bg-gray-200 dark:bg-gray-700">
                                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Name</th>
                                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Status</th>
                                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Project ID</th>
                                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $item->name }}</td>
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $item->status }}</td>
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $item->project_id }}</td>
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $item->category }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
