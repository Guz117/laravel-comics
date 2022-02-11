@extends('guest.layout.base')

{{-- @section('documentTitle')
    {{$nomePagina}}
@endsection --}}

@section('content_main')
<div class="main">
    @foreach ($comics as $comic)
        <img src="{{ $comic['thumb'] }}" alt="">
        <p>{{ $comic['series'] }}</p> 
    @endforeach
  </div>
@endsection
