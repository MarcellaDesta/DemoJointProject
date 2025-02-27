<div x-data="{
            deleteConfirmation(id){
            let confirm = window.confirm('yakin untuk mengahpus?');
            if (confirm) {
                $wire.deleteProject(id)
            }
             return;
            }
            }">

        <div class="gap-1 mt-2 relative overflow-x-auto shadow-md sm:rounded-lg">
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
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $project->name }}
                        </td>

                        <td class ="px-6 py-4">
                                @if ($project->status == 'DRAFTED')
                                <span class="text-green-500"> {{ $project->status }}</span>
                                @elseif ($project->status == 'ARCHIVED')
                                <span class="text-red-500"> {{ $project->status }}</span>
                                @elseif ($project->status == 'PENDING')
                                <span class="text-yellow-500"> {{ $project->status }}</span>
                                @elseif ($project->status == 'PUBLISHED')
                                <span class="text-purple-300"> {{ $project->status }}</span>
                                @endif
                        </span>
                        </td>
                        <td class="px-6 py-4">
                            {{ $project->category }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $project->team_count}}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <button @click="deleteConfirmation( {{ $project->id }} )" type="button"class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                Hapus
                            </button>
                        </td>
                    </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
</div>
