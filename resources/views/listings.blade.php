@extends('layout')

@section('content')
    <div class="grid grid-cols-1 gap-10 lg:grid-cols-2 ">
        <!-- CARD -->
        @foreach($listings as $listing)
            <a href="/listing/{{$listing['id']}}">
                <div class="h-48 w-full border hover:shadow-sm hover:shadow-laravel m-auto sm:w-full bg-center  bg-slate-50 p-2 flex items-start gap-1 overflow-hidden ">
                    <div class="h-full min-w-[180px] hidden md:block">
                        <img src="https://logowik.com/content/uploads/images/113_laravel.jpg" class="w-full h-full" alt="">
                    </div>
                    <div class="grow text-justify">
                        <h1 class="text-xl  uppercase">{{$listing['title']}}</h1>
                        <p class="text-xs bg-laravel text-white inline px-2 rounded-full">{{$listing['tags']}}</p > <span class="font-bold">{{$listing['company']}}</span>
                        <p class=""><span class=""><i class="bi bi-geo-alt-fill text-laravel"></i></span> {{$listing['location']}}</p>
                        <p class="mt-2">{{$listing['description']}}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection

@section('modal')
    <!-- Overlay -->
        <div class="h-screen w-full fixed top-0 left-0 bg-black bg-opacity-50 flex justify-center items-center  overlay hidden">
    <!-- MODAL -->
    <div class="w-1/2 bg-white rounded overflow-auto max-h-[90vh] animate-slide-down">
        <!-- modal-header -->
        <div class="p-3 border-b">
        <h1 class="text-2xl">Header</h1>
        </div>
        <!-- modal-body -->
        <form action="">
        <div class="p-3">
        <div class="grid grid-cols-2 gap-3">
            <div class=" w-full">
            <label for="" class="block">Title</label>
            <input type="text" name="" id="" value="kapeng mainit" class="w-full p-2 border focus:outline-none focus:border-blue-300 rounded" >
            </div>
            <div class="w-full">
            <label for="" class="block">Title</label>
            <input type="text" name="" id="" value="kapeng mainit" class="w-full p-2 border focus:outline-none focus:border-blue-300 rounded">
            </div>
            <div class=" w-full">
            <label for="" class="block">Title</label>
            <input type="text" name="" id="" value="kapeng mainit" class="w-full p-2 border focus:outline-none focus:border-blue-300 rounded">
            </div>
            <div class="w-full">
            <label for="" class="block">Title</label>
            <input type="text" name="" id="" value="kapeng mainit" class="w-full p-2 border focus:outline-none focus:border-blue-300 rounded">
            </div>

        </div>
        </div>
        <!-- modal-footer -->
        <div class="p-3 flex justify-end gap-2">
        <button type="button" class="py-1 px-3 bg-blue-500 text-white font-bold rounded-full add-button">Save</i></button>
        <button type="button" class="py-1 px-3 bg-slate-500 text-white font-bold rounded-full close-modal ">Close</i></button>
        </div>
        </form>
    </div>
    </div>
@endsection