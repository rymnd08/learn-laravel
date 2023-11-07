@extends('layout')

@section('content')
    <div class="grid grid-cols-1 gap-10 lg:grid-cols-2 px-2 xl:px-0">
        <!-- CARD -->
        @foreach($listings as $listing)
            <x-_listing :listing="$listing" />
        @endforeach
    </div>
@endsection
