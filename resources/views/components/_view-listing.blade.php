@props(['listing'])
@php
    $tags = explode(',', $listing['tags']);
@endphp

<div class="mt-3 w-[50%] m-auto">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Logo.min.svg/2560px-Logo.min.svg.png" alt="">
</div>
<div class="w-full mt-3 flex justify-center flex-col items-center gap-2">
    <!-- title -->
    <div class="text-4xl font-semibold uppercase">
        {{$listing['title']}}
    </div>
    <!-- company -->
    <div class="text-2xl text-light">
        {{$listing['company']}}
    </div>
    <!-- location -->
    <div class="text-xl">
        <i class="bi bi-geo-alt-fill text-laravel"></i> {{$listing['location']}}
    </div>

    <!-- email -->
    <div class="italic ">
        <i class="bi bi-envelope-fill text-laravel"></i> <a href="#"> {{$listing['email']}}</a>
    </div>
    <!-- website url -->
    <div class="underline ">
        <i class="bi bi-browser-chrome text-laravel"></i> <a href="#"> {{$listing['website']}}</a>
    </div>
            <!-- tags -->
    <div class="flex gap-2">
        @foreach($tags as $tag)
        <a href="/?tags={{$listing['tags']}} inline-block" class="text-sm bg-laravel text-white rounded-full px-2"> {{$tag}}</a>
        @endforeach
    </div>
        <!-- description -->
        <div class="text-md text-center w-[50%]">
        {{$listing['description']}}
    </div>
</div>