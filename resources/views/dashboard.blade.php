<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col gap-6 p-6 text-gray-900 dark:text-gray-100">
                    {{-- Hacer de esto un componente después, de momento solo test --}}
                    <header>
                        <h1 class="text-xl font-semibold">Manage data from database</h1>
                        <p class="text-neutral-300">Here you can manage all the data from your database.</p>
                    </header>

                    <hr>
                    <div>
                        <h2 class="text-lg font-semibold">Clients</h2>
                        <ul class="p-2 flex flex-col gap-2">
                            <li><a href="dashboard/create-client">New client</a></li>
                            <li><a href="dashboard/edit-client">Edit client</a></li>
                            <li><a href="dashboard/show-client">Show clients</a></li>
                            <li class="text-red-400">
                                <a href="dashboard/delete-client">Delete clients</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
