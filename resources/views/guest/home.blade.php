@extends('guest.layout.base')

{{-- @section('documentTitle')
    {{$nomePagina}}
@endsection --}}

@section('content_main')
<div class="main">
    <div class="main-central">
        <div class="cards-main">
            @foreach ($comics as $comic)
                <div class="card">
                    <a href=""><img src="{{ $comic['thumb'] }}" alt=""></a>
                    <p><a href="">{{ $comic['series'] }}</a></p> 
                </div>
            @endforeach
        </div>
        <div class="load">
            <p class="load-more">LOAD MORE</p>
        </div>
    </div>

    <div class="menu">
        <ul class="ul-menu">
            <li>
                <a href=""><img class="png" src="{{ asset('images/buy-comics-digital-comics.png') }}" alt=""></a>
                <a href="">DIGITAL COMICS</a>
            </li>
            <li>
                <a href=""><img class="png" src="{{ asset('images/buy-comics-merchandise.png') }}" alt=""></a>
                <a href="">DC MERCHANDISE</a>
            </li>
            <li>
                <a href=""><img id="png" src="{{ asset('images/buy-comics-shop-locator.png') }}" alt=""></a>
                <a href="">COMICS SHOP LOCATOR</a>
            </li>
            <li>
                <a href=""><img class="png" src="{{ asset('images/buy-comics-subscriptions.png') }}" alt=""></a>
                <a href="">SUBSCRIPTION</a>
            </li>
            <li>
                <a href=""><img id="svg" src="{{ asset('images/buy-dc-power-visa.svg') }}" alt=""></a>
                <a href="">DC POWER VISA</a>
            </li>
        </ul>
    </div>
</div>
@endsection
