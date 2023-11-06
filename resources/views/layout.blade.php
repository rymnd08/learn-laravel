<x-HTML>
    <div class="bg-laravel text-white h-16  pl-4 flex items-center justify-center ">
        <div class="max-w-7xl w-full ">
          <h1 class="text-2xl uppercase font-bold ">LaraJobs</h1>
        </div>
    </div>
    <div class="max-w-7xl mx-auto mt-5">
        <div class="flex justify-end mb-2">
          <button class="py-1 px-3 bg-laravel text-white font-bold rounded-full add-button">Add <i class="bi bi-plus-circle"></i></button>
        </div>
        <!-- VIEW OUTPUT -->
        @yield('content')
    </div>
    
    <x-_add-modal />

</x-HTML>
