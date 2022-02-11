@extends('guest.layout.base')

{{-- @section('documentTitle')
    {{$nomePagina}}
@endsection --}}

@section('content_main')
<div class="main">
    <div class="cards-main">
        @foreach ($comics as $comic)
            <div class="card">
                <img src="{{ $comic['thumb'] }}" alt="">
                <p>{{ $comic['series'] }}</p> 
            </div>
        @endforeach
    </div>
    <div class="load">
        <p class="load-more">LOAD MORE</p>
    </div>
</div>
@endsection
