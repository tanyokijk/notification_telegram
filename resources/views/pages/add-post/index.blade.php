<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex justify-center">
                    <form id="addNewForm" method="POST" class="space-y-6">
                        @csrf
                        <div class="flex flex-col">
                            <label for="header" class="text-sm font-medium text-gray-700">Title:</label>
                            <input type="text" name="title" id="title" maxlength="50" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="flex flex-col">
                            <label for="text" class="text-sm font-medium text-gray-700">Text:</label>
                            <input type="text" name="text" id="text" maxlength="150" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>


                        <div class="flex justify-center">
                            <button type="submit" name="add" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-500 disabled:opacity-25 transition">
                                Додати</button>
                        </div>
                    </form>
                </div>
            </div>

</x-app-layout>
