<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"><title>Miranda Web</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script defer src="{{ asset('assets/js/navBar.js') }}"></script>
    <script defer src="{{ asset('assets/js/navHamburguer.js') }}"></script>
    <script defer src="{{ asset('assets/js/Swiper.js') }}"></script>
</head>
<body>
    @include('navbar')

    <header>
            <p>THE ULTIMATE LUXURY</p>
            <h1>Ultimate Room</h1>
            <div>
                <p>Home  &nbsp;&nbsp;| &nbsp;</p>
                <p class="golden-text">Rooms</p>
            </div>
    </header>

    <section class="room-list">
        @foreach($rooms as $room)
        <article>
            <div>
                <div class="div-img" style="background-image: url({{ $room->images->first()->url }});"></div>
                <img class="room-list__features no-margin" alt="room features" src="/Images/RoomFeaturesBar.svg"/>
            </div>
            <h2>Minimal Duplex Room</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
            <div class="room-list__pricing">
                <h3 class="golden-text">$345/Night</p>
                <h3>Booking Now</p>
            </div>
        </article>
        @endforeach
    </section>

    <section class="room-list room-list__computer">
        <div class="room-list__wrapper">
        @foreach($rooms as $room)
            <article>
                <div>
                    <div class="div-img" style="background-image: url({{ $room->images->first()->url }});"></div>
                    <img class="room-list__features no-margin" alt="room features" src="/Images/RoomFeaturesBar.svg"/>
                </div>
                <h2>Minimal Duplex Room</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                <div class="room-list__pricing">
                    <h3 class="golden-text">$345/Night</p>
                    <h3>Booking Now</p>
                </div>
            </article>
            @endforeach
        </div>
    </section>

    <section class="pagination">
        <button class="pagination__arrow">«</button>
        <button>1</button>
        <button class="golden-background white-color">2</button>
        <button>3</button>
        <button>...</button>
        <button>10</button>
        <button class="pagination__arrow">»</button>
    </section>

    @include('footer')
</body>
</html>