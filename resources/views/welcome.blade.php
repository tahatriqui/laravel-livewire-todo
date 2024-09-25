<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased  bg-gradient-to-r from-cyan-100 to-blue-300">

            <livewire:layout.navigation />




    <div class="flex flex-col lg:flex-row max-sm:mt-10 mt-20 ml-6 items-start justify-between">
        <!-- Left Content -->
        <div class="content w-full lg:w-1/2">
            <div class="animate-fadeInfromLeft transition duration-300 delay-100">
                <span class="text-cyan-500 font-bold text-5xl">Welcom</span>
                <span class="text-cyan-600 font-bold text-5xl">e to</span>
                <span class="text-cyan-700 font-bold text-5xl">Your ToDo</span>
                <span class="text-cyan-800 font-bold text-5xl">List</span>
                <span class="font-bold text-cyan-900 text-5xl">App</span>
            </div>

            <div class="mt-11 font-bold ml-2 tracking-wider max-sm:mt-6 max-sm:text-[1rem] text-cyan-800 text-xl">
                <p class="animate-fadeInfromLeft transition duration-300 delay-100">
                    <span class="ml-4">Stay</span> organized and on top of your tasks with ease. Our app helps you manage your daily todos, set
                    priorities, and track progress all in a secure and simple interface. Whether it's work, personal goals, or
                    errands, we've got you covered.
                </p>
            </div>

            <div class="mt-10  animate-fadeInfromLeft transition duration-300 delay-100">
                <span class="font-bold text-2xl text-cyan-900">Key Features:</span>
                <ul  class="list-disc ml-8 mt-6  ">
                    <li> Add and manage tasks in seconds</li>
                    <li> View tasks by priority and deadlines</li>
                    <li> Get reminders for important tasks</li>
                    <li> Access your todo list from any device with secure login</li>
                    <li> Let’s get started and make your day more productive!</li>
                </ul>
            </div>

            <div class="my-14 mt-[10vh] sm:mt-[5vh] ml-6 animate-fadeInfromLeft transition duration-300 delay-100 ">
                <a href="{{route('add')}}" wire:navigate class="mr-4 max-sm:px-[0.5rem] px-7 text-xl text-center max-sm:text-[14px] bg-cyan-700 text-white p-4 rounded font-bold hover:text-cyan-700 hover:bg-white transition duration-500 ease-in-out cursor-pointer">Add New Task</a>
                <a class="mr-4 max-sm:px-[0.5rem]  px-7 text-xl text-center max-sm:text-[14px]  bg-cyan-700 text-white p-4 rounded font-bold hover:text-cyan-700 hover:bg-white transition duration-500 ease-in-out cursor-pointer">View All Tasks</a>
            </div>
        </div>

        <!-- Right Image -->
        <div class=" lg:block w-full lg:w-1/2 flex justify-center items-center sm:hidden ml-[14vw]">
            <img  src="{{ asset('images/bg.jfif') }}" alt="To-Do List Image" class=" animate-fadeInfromRight transition duration-300 delay-100 max-w-full h-[80vh] rounded shadow-lg max-sm:hidden">
        </div>
    </div>
</body>

</html>
