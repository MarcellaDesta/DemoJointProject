<div>
    {{-- {{ __('HALAMAN LIST PROJECT,Jumlah Data:') }} {{ count($projects) }} --}}


        <div class="mt-2 relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Project
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah Tim
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($projects as $project)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $project->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $project->status }}
                              {{-- <span
                    class="text-xs font-semibold px-2.5 py-0.5 rounded text-white
                    @if ($project->status == 'drafted') bg-red-500
                    @elseif ($project->status == 'archived') bg-yellow-500
                    @elseif ($project->status == 'pending') bg-green-500
                    @elseif ($project->status == 'published') bg-blue-500
                    @endif">
                    {{ $project->category }}
                </span> --}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $project->category }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $project->team_count}}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                    @empty

                    @endforelse

                </tbody>
            </table>
        </div>

</div>
