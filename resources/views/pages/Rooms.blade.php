@extends('layouts.app')
@section('title', 'Rooms')
@section('content')
<body>
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
                <div class="div-img" style="background-image: url( {{ $room->images->first()->url }} );"></div>
                <img class="room-list__features no-margin" alt="room features" src="/Images/RoomFeaturesBar.svg"/>
            </div>
            <h2>{{ $room->room_type->first()->typeName }}</h2>
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
                    <div class="div-img" style="background-image: url( {{ $room->images->first()->url }} );"></div>
                    <img class="room-list__features no-margin" alt="room features" src="/Images/RoomFeaturesBar.svg"/>
                </div>
                <h2>{{ $room->room_type->first()->typeName }}</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                <div class="room-list__pricing">
                    <h3 class="golden-text">$345/Night</h3>
                    <a href="{{ route('roomInfo', $room->id) }}" style="color: gray;">Booking Now</a>
                </div>
            </article>
        @endforeach
        </div>
    </section>
<!--
    <section class="pagination">
        <button class="pagination__arrow">«</button>
        <button>1</button>
        <button class="golden-background white-color">2</button>
        <button>3</button>
        <button>...</button>
        <button>10</button>
        <button class="pagination__arrow">»</button>
    </section>
-->
</body>
@endsection