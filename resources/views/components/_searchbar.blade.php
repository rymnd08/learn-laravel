<!-- Search bar -->
<div class="max-w-7xl mx-auto border mt-5 mb-3 p-2  ">
    <form action="/listings" method="GET" class="flex items-center gap-2">
        <i class="bi bi-search"></i>
        <input type="text" placeholder="Search" class="w-full focus:outline-none" name="search" value="{{$_SESSION['search'] != '' ? $_SESSION['search'] : null}}">
        <button type="submit"  class="bg-laravel text-white py-1 px-3 rounded-full font-semibold hover:scale-110">Search</button>
    </form>
</div>