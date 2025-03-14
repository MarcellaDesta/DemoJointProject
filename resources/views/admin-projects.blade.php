<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    <title> {{ $pageTitle }} | {{ config('app.name') }}</title>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- {{ __("Halaman Admin Project") }} --}}
                    {{-- {{ Auth::user()->role }} --}}
                    <livewire:destaria.admin.form-create-project/>
                    <livewire:destaria.admin.list-project/>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
