<div class="flex justify-between max-sm:inline">
<form wire:submit.prevent="save" class=" mt-10 max-sm:ml-[32vw] ml-20 w-[30vw] animate-fadeInfromLeft transition duration-300 delay-100 ">
  <div class="mb-5 ">
    <label for="todo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Add your task here</label>
    <input type="text" id="todo" class=" font-bold bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@example.com" required wire:model='todo'/>

  </div>

  <button type="submit" class="text-white bg-blue-700 hover:bg-gray-50 hover:text-blue-700 duration-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-400 dark:hover:bg-blue-500 dark:focus:ring-blue-600">Add ✍️</button>
</form>
<img class="animate-fadeInfromRight transition duration-300 delay-100 mr-[5%] max-lg:mr-[0] max-md:w-[400px] max-sm:mt-[12vh] max-sm:w-full "  src="{{ asset('images/add.png') }}" alt="">
</div>
