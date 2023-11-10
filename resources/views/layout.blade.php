<x-HTML>
  <x-_navbar />

<x-_searchbar />

    <div class="max-w-7xl mx-auto ">
        <div class="flex justify-end mb-2">
          <button class="py-1 px-3 bg-laravel text-white font-semibold rounded-full add-button hover:scale-110 mr-2 xl:mr-0 add-btn" >Add <i class="bi bi-plus-circle"></i></button>
        </div>
        <!-- VIEW OUTPUT -->
        @yield('content')
    </div>
    
    <x-_add-modal />
<script>
  const button = document.querySelector('.add-btn')
  button.addEventListener('click', ()=>{
    window.location.href = "{{'/listings/create'}}"
  })
</script>
</x-HTML>
