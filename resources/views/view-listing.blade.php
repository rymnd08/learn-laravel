<x-HTML>
  
  <div class="bg-laravel text-white h-16  pl-4 flex items-center justify-center ">
    <div class="max-w-7xl w-full ">
      <h1 class="text-2xl uppercase font-bold ">LaraJobs</h1>
    </div>
  </div>
  <div class="max-w-7xl mx-auto mt-5">
    <a href="/" class="py-1 px-3 bg-laraDark text-white rounded"><i class="bi bi-arrow-bar-left"></i> Back</a>
    <x-_view-listing :listing="$listing" />
  </div>

</x-HTML>