@extends('layout')

@section('content')
    <div class="grid grid-cols-1 gap-10 lg:grid-cols-2 ">
        <!-- CARD -->
        @foreach($listings as $listing)
            <x-_listing :listing="$listing" />
        @endforeach
    </div>
@endsection

@section('modal')
    <x-_add-modal />
@endsection