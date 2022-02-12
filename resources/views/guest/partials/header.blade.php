<div class="header-tot">
    <div class="header">
        <div class="power">
            <div class="power-dc">
                <p>DC POWER&#8480;</p>
                <p>VISA&#174;</p>
                <p id="additional">ADDITIONAL DC SITES <i class="fa-solid fa-caret-down"></i></p>
            </div>
        </div>
        <div class="contain">
            <a href="{{route('home')}}"><img class="img-header" src="{{ asset('images/dc-logo.png') }}" alt=""></a>
            <ul class="ul-header">
                <li class="li-header"><a class="hover" href="">CHARACTERS</a></li>
                <li class="li-header"><a class="{{ 'action_comics' === Route::currentRouteName() ? 'active' : '' }} hover" href="{{route('action_comics')}}">COMICS</a></li>
                <li class="li-header"><a class="hover" href="">MOVIES</a></li>
                <li class="li-header"><a class="hover" href="">TV</a></li>
                <li class="li-header"><a class="hover" href="">GAMES</a></li>
                <li class="li-header"><a class="hover" href="">COLLECTIBLES</a></li>
                <li class="li-header"><a class="hover" href="">VIDEOS</a></li>
                <li class="li-header"><a class="hover" href="">FANS</a></li>
                <li class="li-header"><a class="hover" href="">NEWS</a></li>
                <li class="li-header"><a class="hover" href="">SHOP</a><i class="fa-solid fa-caret-down"></i></li>
            </ul>
            <div class="search">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </div>
        <div class="img-jumbotron">
            
        </div>
    </div>
</div>