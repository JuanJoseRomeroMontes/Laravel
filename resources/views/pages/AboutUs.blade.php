@extends('layouts.app')
@section('title', 'About us')
@section('content')
<body>

    <header>
            <p>THE ULTIMATE LUXURY</p>
            <h1>About Us</h1>
            <div>
                <p>Home  &nbsp;&nbsp;| &nbsp;</p>
                <p class="golden-text">About</p>
            </div>
    </header>

    <section class="welcome-page">
        <video width="335" height="270" controls>
            <source src="/Videos/Video-intro.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <h2>Hello. Our hotel has been present for over 20 years. We make the best for all our customers.</h2>
        <article>
            <div>
                <img alt="breackfast icon" src="/Images/BreackfastIcon.svg">
                <p>BREAKFAST</p>
            </div>
            <div class="golden-background white-color">
                <img alt="plane icon" src="/Images/PlaneIcon.svg">
                <p>AIRPORT PICKUP</p>
            </div>
            <div>
                <img alt="map icon" src="/Images/GuideIcon.svg">
                <p>CITY GUIDE</p>
            </div>
            <div>
                <img alt="room icon" src="/Images/RoomIcon.svg">
                <p>LUXURY ROOM</p>
            </div>
        </article>
    </section>

    <section class="restaurant">
        <div class="restaurant__image" style="background-image: url(/Images/restaurant.jpg);"></div>
        <div class="restaurant__info">
            <p class="restaurant__info__overtitle">RESTAURANT</p>
            <h2>Get Restaurant Facilities & Many Other More</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
            <button class="button__filled">TAKE A TOUR</button>
        </div>
    </section>

    <section class="facilities dark-theme">
        <p class="white-color">FACILITIES</p>
        <h2>Core Features</h2>
        <div class="swiper facility-swiper" id="swiper-features">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="swiper-slide__facility grey-bg">
                        <h3 class="black-color">01</h3>
                        <img src="/Images/Features/Feature01.svg">
                        <h4 class="white-color">Have High Rating</h4>
                        <p class="white-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide__facility grey-bg">
                        <h3 class="black-color">02</h3>
                        <img src="/Images/Features/Feature02.svg">
                        <h4 class="white-color">Quiet Hours</h4>
                        <p class="white-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide__facility grey-bg">
                        <h3 class="black-color">03</h3>
                        <img src="/Images/Features/Feature03.svg">
                        <h4 class="white-color">Best Locations</h4>
                        <p class="white-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide__facility grey-bg">
                        <h3 class="black-color">04</h3>
                        <img src="/Images/Features/Feature04.svg">
                        <h4 class="white-color">Free Cancellation</h4>
                        <p class="white-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide__facility grey-bg">
                        <h3 class="black-color">05</h3>
                        <img src="/Images/Features/Feature05.svg">
                        <h4 class="white-color">Payment Options</h4>
                        <p class="white-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide__facility grey-bg">
                        <h3 class="black-color">06</h3>
                        <img src="/Images/Features/Feature06.svg">
                        <h4 class="white-color">Special Offers</h4>
                        <p class="white-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination" id="swiper-pagination-features"></div>
        </div>

        <div class="facilities__facilities-list">
            <div class="swiper-slide__facility grey-bg">
                <h3 class="black-color">01</h3>
                <img src="/Images/Features/Feature01.svg">
                <h4 class="white-color">Have High Rating</h4>
                <p class="white-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
            <div class="swiper-slide__facility grey-bg">
                <h3 class="black-color">02</h3>
                <img src="/Images/Features/Feature02.svg">
                <h4 class="white-color">Quiet Hours</h4>
                <p class="white-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
            <div class="swiper-slide__facility grey-bg">
                <h3 class="black-color">03</h3>
                <img src="/Images/Features/Feature03.svg">
                <h4 class="white-color">Best Locations</h4>
                <p class="white-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
            <div class="swiper-slide__facility grey-bg">
                <h3 class="black-color">04</h3>
                <img src="/Images/Features/Feature04.svg">
                <h4 class="white-color">Free Cancellation</h4>
                <p class="white-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
            <div class="swiper-slide__facility grey-bg">
                <h3 class="black-color">05</h3>
                <img src="/Images/Features/Feature05.svg">
                <h4 class="white-color">Payment Options</h4>
                <p class="white-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
            <div class="swiper-slide__facility grey-bg">
                <h3 class="black-color">06</h3>
                <img src="/Images/Features/Feature06.svg">
                <h4 class="white-color">Special Offers</h4>
                <p class="white-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>
    </section>

    <section class="counter">
        <p class="counter__overtitle">COUNTER</p>
        <h2>Some Fun Facts</h2>
        <article>
            <div>
                <img class="counter__article-image" alt="happy user" src="/Images/HappyUserIcon.svg">
                <div>
                    <h3>8000</h3>
                    <p>Happy Users</p>
                </div>
                <img class="counter__article-arrow" alt="arrow" src="/Images/FactsArrow.svg">
            </div>
            <div>
                <img alt="reviews" src="/Images/ReviewsIcon.svg">
                <div>
                    <h3>10M</h3>
                    <p>Reviews & Appriciate</p>
                </div>
                <img class="counter__article-arrow" alt="arrow" src="/Images/FactsArrow.svg">
            </div>
            <div>
                <img alt="wold map" src="/Images/WorldMapIcon.svg">
                <div>
                    <h3>100</h3>
                    <p>Countries Coverage</p>
                </div>
                <img class="counter__article-arrow" alt="arrow" src="/Images/FactsArrow.svg">
            </div>
        </article>

        <div class="swiper counter__swiper" id="swiper-counter-carousel">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><div class="counter__swiper__image" style="background-image: url(https://img.freepik.com/free-photo/full-shot-man-carrying-baggage_23-2149963942.jpg?size=626&ext=jpg&ga=GA1.1.2116175301.1717804800&semt=ais_user);"></div></div>
                <div class="swiper-slide"><div class="counter__swiper__image" style="background-image: url(https://media.istockphoto.com/id/1448506100/photo/male-hotel-receptionist-assisting-female-guest.jpg?s=612x612&w=0&k=20&c=xXJn95XgzSA4_LgGczr7ce-FnpcWXwYIr-fGH9yN_z0=);"></div></div>
            </div>

            <div class="swiper-pagination" id="swiper-pagination-counter-carousel"></div>
        </div>

        <div class="counter__images">
            <div class="counter__images__image" style="background-image: url(https://img.freepik.com/free-photo/full-shot-man-carrying-baggage_23-2149963942.jpg?size=626&ext=jpg&ga=GA1.1.2116175301.1717804800&semt=ais_user);"></div>
            <div class="counter__images__image" style="background-image: url(https://media.istockphoto.com/id/1448506100/photo/male-hotel-receptionist-assisting-female-guest.jpg?s=612x612&w=0&k=20&c=xXJn95XgzSA4_LgGczr7ce-FnpcWXwYIr-fGH9yN_z0=);"></div>
        </div>
    </section>

</body>
@endsection