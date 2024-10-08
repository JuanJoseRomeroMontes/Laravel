@extends('layouts.app')
@section('title', 'Room Info')
@section('content')
<body>
    <header>
            <p>THE ULTIMATE LUXURY</p>
            <h1>Ultimate Room</h1>
            <div>
                <p>Home  &nbsp;&nbsp;| &nbsp;</p>
                <p class="golden-text">Room Details</p>
            </div>
    </header>

    <section class="room-info">
        <div class="room-info__display">
            <p class="offer__overtitle">{{$room->room_type->first->typeName->typeName}}</p>
            <h2>Luxury {{$room->room_type->first->typeName->typeName}}</h2>
            <div class="price">
                <p class="price__number">{{$room->price}}€</p>
                <span class="price__text">/Night</span>
            </div>
            <img alt="room image not found" src="{{ $room->images->first()->url }}" >
        </div>
        <article class="room-info__availability">
            <p>Book room</p>
            <form method="POST" action="/bookings">
                <input type="hidden" name="roomId" value="{{ $room->id }}">
                <label for="checkInDate">Check in</label>
                <input type="date" id="checkInDate" name="checkInDate" required>
                <label for="checkOutDate">Check out</label>
                <input type="date" id="checkOutDate" name="checkOutDate" required>
                <label for="name">Your name</label>
                <input type="text" id="name" name="name" required>
                <label for="specialRequest">Special request</label>
                <input type="text" id="specialRequest" name="specialRequest" required>
                <input type="submit" value="BOOK ROOM" class="button__filled">
            </form>
        </article>
        <p class="room-info__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
    </section>

    <section class="room-details">
        <h2>Amenities</h2>
        <hr>
        <div class="offer__room-amenities">
            <div>
                <img alt="" src="/Images/AmenitiesIcons/AirConditionerIcon.svg">
                <p>Air Conditioner</p>
            </div>
            <div>
                <img alt="" src="/Images/AmenitiesIcons/WifiIcon.svg">
                <p>High speed WiFi</p>
            </div>
            <div>
                <img alt="" src="/Images/AmenitiesIcons/SilverwareIcon.svg">
                <p>Breakfast</p>
            </div>
            <div>
                <img alt="" src="/Images/AmenitiesIcons/KitchenIcon.svg">
                <p>Kitchen</p>
            </div>
            <div>
                <img alt="" src="/Images/AmenitiesIcons/CleaningIcon.svg">
                <p>Cleaning</p>
            </div>
            <div>
                <img alt="" src="/Images/AmenitiesIcons/ShowerIcon.svg">
                <p>Shower</p>
            </div>
            <div>
                <img alt="" src="/Images/AmenitiesIcons/GroceryIcon.svg">
                <p>Grocery</p>
            </div>
            <div>
                <img alt="" src="/Images/AmenitiesIcons/SingleBedIcon.svg">
                <p>Single bed</p>
            </div>
            <div>
                <img alt="" src="/Images/AmenitiesIcons/ShopIcon.svg">
                <p>Shop Near</p>
            </div>
            <div>
                <img alt="" src="/Images/AmenitiesIcons/TowelsIcon.svg">
                <p>Towels</p>
            </div>
            <div>
                <img alt="" src="/Images/AmenitiesIcons/OnlineSupportIcon.svg">
                <p>24/7 Online Support</p>
            </div>
            <div>
                <img alt="" src="/Images/AmenitiesIcons/KeyIcon.svg">
                <p>Strong Locker</p>
            </div>
            <div>
                <img alt="" src="/Images/AmenitiesIcons/LockIcon.svg">
                <p>Smart Security</p>
            </div>
            <div>
                <img alt="" src="/Images/AmenitiesIcons/ExpertIcon.svg">
                <p>Expert Team</p>
            </div>
        </div>
    </section>

    <section class="room-founder">
        <article class="room-founder__profile">
            <img class="room-founder__profile__mask" src="https://secure.gravatar.com/avatar/929e916fa1ad387c80387211eb505045?s=300&d=mm&r=g" alt="">
            <img class="room-founder__profile__check-mark" alt="" src="/Images/Check-mark.svg">  
        </article>
        <h2>Pedro Hernandez</h2>
        <h3>FOUNDER, QUX CO.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </section>

    <section class="room-details">
        <h2>Cancellation</h2>
        <hr>
        <p>Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.</p>
    </section>

    <section class="room-details">
        <h2>Related Rooms</h2>
        <hr>
        <div class="swiper room-details__mobile" id="swiper-related-rooms">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper room-list no-padding">
                <!-- Slides -->
                <article class="swiper-slide">
                    <div>
                        <img alt="room image" src="https://www.shutterstock.com/image-illustration/horizontal-frame-mockup-boho-bedroom-600nw-1901460664.jpg">
                        <img class="room-list__features no-margin" alt="room features" src="/Images/RoomFeaturesBar.svg"/>
                    </div>
                    <h2>Minimal Duplex Room</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="room-list__pricing">
                        <h3 class="golden-text">$345/Night</p>
                        <h3>Booking Now</p>
                    </div>
                </article>
                <article class="swiper-slide">
                    <div>
                        <img alt="room image" src="https://media.remodelista.com/wp-content/uploads/2015/03/fields/tiina-laakonen-hamptons-NY-remodelista-24.jpeg">
                        <img class="room-list__features no-margin" alt="room features" src="/Images/RoomFeaturesBar.svg"/>
                    </div>
                    <h2>Minimal Duplex Room</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="room-list__pricing">
                        <h3 class="golden-text">$345/Night</p>
                        <h3>Booking Now</p>
                    </div>
                </article>
                <article class="swiper-slide">
                    <div>
                        <img alt="room image" src="https://img.freepik.com/premium-photo/living-room-with-luxurious-elegantly-designed-neutral-interior-horizontal-layout_410516-84179.jpg">
                        <img class="room-list__features no-margin" alt="room features" src="/Images/RoomFeaturesBar.svg"/>
                    </div>
                    <h2>Minimal Duplex Room</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="room-list__pricing">
                        <h3 class="golden-text">$345/Night</p>
                        <h3>Booking Now</p>
                    </div>
                </article>
            </div>

            <!-- Navigation buttons -->
            <div class="swiper-button-prev" id="swiper-button-prev-related-rooms"></div>
            <div class="swiper-button-next" id="swiper-button-next-related-rooms"></div>
        </div>

        <div class="swiper room-details__computer">
            <div class="recomended-room">
                <img src="/Images/RoomFeaturesBar.svg" class="rooms__features"/>
                <div class="recomended-room__image" style="background-image: url(https://www.shutterstock.com/image-illustration/horizontal-frame-mockup-boho-bedroom-600nw-1901460664.jpg);"></div>
                <article>
                    <h3>Minimal Duplex Room</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <div class="recomended-room__pricing"> <p class="price__number">$345<span class="price__text">/Night</span></p> </div>
                </article>
            </div>
            <div class="recomended-room">
                <img src="/Images/RoomFeaturesBar.svg" class="rooms__features"/>
                <div class="recomended-room__image" style="background-image: url(https://www.shutterstock.com/image-illustration/horizontal-frame-mockup-boho-bedroom-600nw-1901460664.jpg);"></div>
                <article>
                    <h3>Minimal Duplex Room</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <div class="recomended-room__pricing"> <p class="price__number">$345<span class="price__text">/Night</span></p> </div>
                </article>
            </div>
            <div class="recomended-room">
                <img src="/Images/RoomFeaturesBar.svg" class="rooms__features"/>
                <div class="recomended-room__image" style="background-image: url(https://www.shutterstock.com/image-illustration/horizontal-frame-mockup-boho-bedroom-600nw-1901460664.jpg);"></div>
                <article>
                    <h3>Minimal Duplex Room</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <div class="recomended-room__pricing"> <p class="price__number">$345<span class="price__text">/Night</span></p> </div>
                </article>
            </div>
        </div>
    </section>
</body>
@endsection