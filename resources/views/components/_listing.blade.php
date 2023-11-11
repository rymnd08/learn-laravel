@props(['listing'])

    @php
        $tags = explode(',', $listing['tags']);
    @endphp
    
    <!-- card -->
    <div class="h-48 w-full border hover:shadow-sm hover:shadow-laravel m-auto sm:w-full bg-center  bg-slate-50 p-2 flex items-start gap-1 overflow-hidden relative">
        <div class="h-full min-w-[180px] hidden md:block">
            <img src="https://logowik.com/content/uploads/images/113_laravel.jpg" class="w-full h-full" alt="">
        </div>
        <div class="grow text-justify">
            <h1 class="text-xl  uppercase">{{$listing['title']}}</h1>
            <div>
                @foreach($tags as $tag)
                    <a href="?tags={{trim($tag)}}"><p class="text-xs bg-laravel text-white inline px-2 rounded-full">{{$tag}}</p></a>
                @endforeach
                <span class="font-bold">{{$listing['company']}}</span>
            </div>
            <p class=""><span class=""><i class="bi bi-geo-alt-fill text-laravel"></i></span> {{$listing['location']}}</p>
            <p class="mt-2 ">{{$listing['description']}}</p>
        </div>
        <div class="absolute bottom-3 hover:scale-110">
        <a href="/listing/{{$listing['id']}}" class="px-3 py-1 bg-laravel rounded-full bg-opacity-50 text-white ">view</a>
        </div>
    </div>


