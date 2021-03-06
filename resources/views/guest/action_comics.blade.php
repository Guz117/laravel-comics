@extends('guest.layout.base')

{{-- @section('documentTitle')
    News
@endsection --}}

@section('content_main')
<div class="action-comics">
    <div class="action-comics-img">
        <div class="comic-book">
            <p id="comic-book-img">COMIC BOOK</p>
            <img src="{{ $comic['thumb'] }}" alt="">
            <p id="view-gallery-img">VIEW GALLERY</p>
        </div>
    </div>
        <div class="action-contain">
            <div class="delux-info">
                <h1>{{ $comic['title'] }}</h1>
                <div class="avaiable">
                    <div class="price">
                        <p>U.S. Price:  <span>{{ $comic['price'] }}</span> </p>
                        <p>AVAIABLE</p>
                    </div>
                    <div class="check">
                        <p>Chech Availability</p>
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
                <p class="description">{{ $comic['description'] }}</p>
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
                            @foreach ($comic['artists'] as $artist)
                                 @if ($loop->last)
                                    <a href="">{{ $artist }}</a>
                                @else
                                    <a href="">{{ $artist }}</a><span>,</span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="written">
                        <div class="written-by">
                            <p>Written by:</p>
                        </div>
                        <div class="writers-list">
                            @foreach ($comic['writers'] as $writer)
                                @if ($loop->last)
                                    <a href="">{{ $writer }}</a>
                                @else
                                    <a href="">{{ $writer }}</a><span>,</span> 
                                @endif
                            @endforeach
                        </div>
                    </div>
    
                </div>
                <div class="specs">
                    <p id="specs-text">Specs</p>
                    <div class="series-tot">
                        <div class="series-specs">
                            <p class="specs-title">Series:</p>
                            <a href="">{{ $comic['series'] }}</a>
                        </div>
                    </div>
                    <div class="price-tot">
                        <div class="price">
                            <p class="specs-title">U.S. Price:</p>
                            <p>{{ $comic['price'] }}</p>
                        </div>
                    </div>
                    <div class="sale-tot">
                        <div class="sale">
                            <p class="specs-title">On Sale Date:</p>
                            <p>{{ $comic['sale_date'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="digitals">
            <div class="digitals-center">
                <div class="digital-comics">
                    <a href="">DIGITAL COMICS</a href="">
                    <div id="img-digital-comics"></div>    
                </div>
                <div class="shop-dc">
                    <a href="">SHOP DC</a href="">    
                    <div id="img-shop-dc"></div> 
                </div>
                <div class="coics-shop-locator">
                    <a href="">COMICS SHOP LOCATOR</a href=""> 
                    <div id="img-comics-shop-locator"></div>    
                </div>
                <div class="subscription">
                    <a href="">SUBSCRIPTION</a href="">    
                    <div id="img-subscription"></div>    
                </div>
            </div>
        </div>
</div>
@endsection