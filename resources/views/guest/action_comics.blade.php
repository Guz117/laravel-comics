@extends('guest.layout.base')

{{-- @section('documentTitle')
    News
@endsection --}}

@section('content_main')
<div class="action-comics">
    <div class="action-comics-img">
        <div class="comic-book">
            <img src="{{ $comics[0]['thumb'] }}" alt="">
        </div>
    </div>
        <div class="action-contain">
            <div class="delux-info">
                <h1>{{ $comics[0]['title'] }}</h1>
                <div class="avaiable">
                    <div class="price">
                        <p>U.S. Price:  <span>{{ $comics[0]['price']}}</span> </p>
                        <p>AVAIABLE</p>
                    </div>
                    <div class="check">
                        <p>Chech Availability</p>
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
                <p class="description">{{ $comics[0]['description'] }}</p>
            </div>
            <div class="deluxe-img">
                <h4>ADVERTISEMENT</h4>
                <img src="{{ asset('images/adv.jpg') }}" alt="">
            </div>
        </div>
        <div class="talent-specs-tot">
            <div class="talent-specs">
                <div class="talent">
                    <p id="talent-text">Talent</p>
                    <div class="art">
                        <div class="art-by">
                            <p>Art by:</p>
                        </div>
                        <div class="artist-list">
                            @foreach ($comics[0]['artists'] as $artist)
                                <a href="">{{ $artist }},</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="written">
                        <div class="written-by">
                            <p>Written by:</p>
                        </div>
                        <div class="writers-list">
                            @foreach ($comics[0]['writers'] as $writer)
                                <a href="">{{ $writer }},</a>
                            @endforeach
                        </div>
                    </div>
    
                </div>
                <div class="specs">
                    <p id="specs-text">Specs</p>
                    <div class="series-tot">
                        <div class="series-specs">
                            <p class="specs-title">Series:</p>
                            <a href="">{{ $comics[0]['series'] }}</a>
                        </div>
                    </div>
                    <div class="price-tot">
                        <div class="price">
                            <p class="specs-title">U.S. Price:</p>
                            <p>{{ $comics[0]['price'] }}</p>
                        </div>
                    </div>
                    <div class="sale-tot">
                        <div class="sale">
                            <p class="specs-title">On Sale Date:</p>
                            <p>{{ $comics[0]['sale_date'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="digitals">
            <div class="digitals-center">
                <div class="digital">
                    
                </div>
            </div>
        </div>
</div>
@endsection