@extends('layout')

@section('content')
    <div class="grid grid-cols-1 gap-10 lg:grid-cols-2 px-2 xl:px-0">
        @unless(count($listings) == 0)
        <!-- CARD -->
        @foreach($listings as $listing)
            <x-_listing :listing="$listing" />
        @endforeach
        @else
        <h1 class="text-lg  ">No listings found.</h1>
        @endunless

        
    </div>

    <div class="m-6 p-4 text-laravel font-semibold">
        {{$listings->links()}}
    </div>


@endsection
