<x-app-layout>
<form id="addNewForm" method="POST" class="space-y-6">
    @csrf
    <div class="flex flex-col">
        <label for="header" class="text-sm font-medium text-gray-700">Заголовок:</label>
        <input type="text" name="title" id="title" maxlength="50" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
    </div>

    <div class="flex flex-col">
        <label for="text" class="text-sm font-medium text-gray-700">Текст:</label>
        <input type="text" name="text" id="text" maxlength="150" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
    </div>

    <div class="flex flex-col">
        <label for="photo" class="text-sm font-medium text-gray-700">Фото(по бажанню):</label>
        <input type="text" name="photo" id="photo" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
    </div>

    <div class="flex justify-center">
        <button type="submit" name="add" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-500 disabled:opacity-25 transition">
            Додати</button>
    </div>
</form>
</x-app-layout>
