<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    User Page
                        <div class="container mx-auto p-4">
                            <div class="flex justify-between items-center mb-4">
                                <h1 class="text-2xl font-bold">Users</h1>
                                <a href="{{ route('user.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                    New
                                </a>
                            </div>

                            <div class="overflow-x-auto">
                                <table class="min-w-full border border-gray-300">
                                    <thead>
                                        <tr class="bg-gray-100">
                                            <th class="border px-4 py-2">ID</th>
                                            <th class="border px-4 py-2">Name</th>
                                            <th class="border px-4 py-2">Email</th>
                                            <th class="border px-4 py-2">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border px-4 py-2"></td>
                                            <td class="border px-4 py-2"></td>
                                            <td class="border px-4 py-2"></td>
                                            <td class="border px-4 py-2 flex space-x-2">
                                                <a href="" class="text-yellow-500 hover:text-yellow-600">
                                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825a4.5 4.5 0 01-5.25 0m5.25 0l3.75-3.75m-3.75 3.75l-4.5-4.5m0 0l3.75-3.75a4.5 4.5 0 010 5.25l-3.75 3.75z" />
                                                    </svg>
                                                </a>
                                                <form action="" method="POST" onsubmit="return confirm('Are you sure?');">

                                                    <button type="submit" class="text-red-500 hover:text-red-600">
                                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>