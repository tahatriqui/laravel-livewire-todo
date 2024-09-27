<nav
    class=" px-10 relative flex justify-between items-center bg-dots-darker bg-cyan-100 dark:bg-dots-lighter dark:bg-gray-900 h-16 p-4">
    <div class="z-10  sm:left-0">
        <a href="{{ route('home') }}" wire:navigate><img class="w-20" src="{{ asset('images/logo.png') }}" alt="Logo"></a>
    </div>
    @if (Route::has('login'))
        <livewire:welcome.navigation />
    @endif

</nav>
