<span>
   <div class="relative overflow-x-auto mt-12   px-10">
     @if (session()->has('message'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">

  <span class="font-medium">{{ session('message') }}</span>
</div>
 @endif

    <table class="w-full text-sm text-left rtl:text-right rounded-lg text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4">
                    is done
                </th>
                <th scope="col" class="px-12 py-3">
                    Task
                </th>
                <th scope="col" class="px-6 py-3">
                    created at
                </th>
                <th scope="col" class="px-6 py-3">
                    updated at
                </th>

                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todos as $todo)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input  {{ $todo->is_done?'checked':'' }} id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-12 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $todo->todo }}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                     {{ $todo->created_at }}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                     {{ $todo->updated_at }}
                </th>

                <td class="flex items-center px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $todos->links() }}
</div>
</span>
