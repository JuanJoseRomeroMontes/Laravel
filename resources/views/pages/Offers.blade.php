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
            <h1>Our Offers</h1>
            <div>
                <p>Home  &nbsp;&nbsp;| &nbsp;</p>
                <p class="golden-text">Offers</p>
            </div>
    </header>

    <section>
        <article class="offer">
            <div class="offer__header">
                <img alt="image not available" src="https://media.remodelista.com/wp-content/uploads/2015/03/fields/tiina-laakonen-hamptons-NY-remodelista-24.jpeg">
                <div class="offer__header__old-price">
                    <s class="price__number">$500</s>
                    <span class="price__text">/Night</span>
                </div>
                <div class="offer__header__new-price">
                    <p class="price__number red-color">$345</p>
                    <span class="price__text red-color">/Night</span>
                </div>
            </div>
            <div class="offer__body">
                <div class="offer__body__title">
                    <div>
                        <p class="offer__overtitle">DOUBLE BED</p>
                        <h2>Luxury Double Bed</h2>
                    </div>

                    <div class="offer__body__title__price">
                        <div class="offer__body__title__old-price">
                            <s class="price__number">$500</s>
                            <span class="price__text">/Night</span>
                        </div>
                        <div class="offer__body__title__new-price">
                            <p class="price__number red-color">$345</p>
                            <span class="price__text red-color">/Night</span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="offer__body__content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
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
                    </div>
                    <button class="button__filled">BOOK NOW</button>
                </div>
            </div>
        </article>
        <article class="offer">
            <div class="offer__header">
                <img alt="image not available" src="https://media.remodelista.com/wp-content/uploads/2015/03/fields/tiina-laakonen-hamptons-NY-remodelista-24.jpeg">
                <div class="offer__header__old-price">
                    <s class="price__number">$500</s>
                    <span class="price__text">/Night</span>
                </div>
                <div class="offer__header__new-price">
                    <p class="price__number red-color">$345</p>
                    <span class="price__text red-color">/Night</span>
                </div>
            </div>
            <div class="offer__body">
                <div class="offer__body__title">
                    <div>
                        <p class="offer__overtitle">DOUBLE BED</p>
                        <h2>Luxury Double Bed</h2>
                    </div>

                    <div class="offer__body__title__price">
                        <div class="offer__body__title__old-price">
                            <s class="price__number">$500</s>
                            <span class="price__text">/Night</span>
                        </div>
                        <div class="offer__body__title__new-price">
                            <p class="price__number red-color">$345</p>
                            <span class="price__text red-color">/Night</span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="offer__body__content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
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
                    </div>
                    <button class="button__filled">BOOK NOW</button>
                </div>
            </div>
        </article>
        <article class="offer">
            <div class="offer__header">
                <img alt="image not available" src="https://media.remodelista.com/wp-content/uploads/2015/03/fields/tiina-laakonen-hamptons-NY-remodelista-24.jpeg">
                <div class="offer__header__old-price">
                    <s class="price__number">$500</s>
                    <span class="price__text">/Night</span>
                </div>
                <div class="offer__header__new-price">
                    <p class="price__number red-color">$345</p>
                    <span class="price__text red-color">/Night</span>
                </div>
            </div>
            <div class="offer__body">
                <div class="offer__body__title">
                    <div>
                        <p class="offer__overtitle">DOUBLE BED</p>
                        <h2>Luxury Double Bed</h2>
                    </div>

                    <div class="offer__body__title__price">
                        <div class="offer__body__title__old-price">
                            <s class="price__number">$500</s>
                            <span class="price__text">/Night</span>
                        </div>
                        <div class="offer__body__title__new-price">
                            <p class="price__number red-color">$345</p>
                            <span class="price__text red-color">/Night</span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="offer__body__content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
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
                    </div>
                    <button class="button__filled">BOOK NOW</button>
                </div>
            </div>
        </article>
        <article class="offer">
            <div class="offer__header">
                <img alt="image not available" src="https://media.remodelista.com/wp-content/uploads/2015/03/fields/tiina-laakonen-hamptons-NY-remodelista-24.jpeg">
                <div class="offer__header__old-price">
                    <s class="price__number">$500</s>
                    <span class="price__text">/Night</span>
                </div>
                <div class="offer__header__new-price">
                    <p class="price__number red-color">$345</p>
                    <span class="price__text red-color">/Night</span>
                </div>
            </div>
            <div class="offer__body">
                <div class="offer__body__title">
                    <div>
                        <p class="offer__overtitle">DOUBLE BED</p>
                        <h2>Luxury Double Bed</h2>
                    </div>

                    <div class="offer__body__title__price">
                        <div class="offer__body__title__old-price">
                            <s class="price__number">$500</s>
                            <span class="price__text">/Night</span>
                        </div>
                        <div class="offer__body__title__new-price">
                            <p class="price__number red-color">$345</p>
                            <span class="price__text red-color">/Night</span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="offer__body__content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
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
                    </div>
                    <button class="button__filled">BOOK NOW</button>
                </div>
            </div>
        </article>
    </section>

    <section class="popular-rooms dark-theme">
        <p>POPULAR LIST</p>
        <h2>Popular Rooms</h2>
        <div class="popular-rooms__swiper">
            <div class="swiper " id="swiper-offers">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper room-list no-padding">
                    <article class="swiper-slide ligth-theme">
                        <div>
                            <img alt="room image" src="https://www.shutterstock.com/image-illustration/horizontal-frame-mockup-boho-bedroom-600nw-1901460664.jpg">
                            <img class="room-list__features no-margin" alt="room features" src="Images/RoomFeaturesBar.svg"/>
                        </div>
                        <h2>Minimal Duplex Room</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <div class="room-list__pricing">
                            <h3 class="golden-text">$345/Night</p>
                            <h3>Booking Now</p>
                        </div>
                    </article>
                    <article class="swiper-slide ligth-theme">
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
                    <article class="swiper-slide ligth-theme">
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
            </div>

            <div class="popular-rooms__button-left" id="swiper-button-prev-offers"></div>
            <div class="popular-rooms__button-right" id="swiper-button-next-offers"></div>
        </div>
        <div class="popular-rooms__images">
            <article class="ligth-theme">
                <div class="popular-rooms__images__header">
                    <div class="popular-rooms__images__header__div-image" style="background-image: url(https://www.shutterstock.com/image-illustration/horizontal-frame-mockup-boho-bedroom-600nw-1901460664.jpg);"></div>
                    <div class="popular-rooms__images__header__features" style="background-image: url(Images/RoomFeaturesBar.svg);"></div>
                </div>
                <h2>Minimal Duplex Room</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                <div class="room-list__pricing">
                    <h3 class="golden-text">$345/Night</p>
                    <h3>Booking Now</p>
                </div>
            </article>
            <article class="ligth-theme">
                <div class="popular-rooms__images__header">
                    <div class="popular-rooms__images__header__div-image" style="background-image: url(https://www.shutterstock.com/image-illustration/horizontal-frame-mockup-boho-bedroom-600nw-1901460664.jpg);"></div>
                    <div class="popular-rooms__images__header__features" style="background-image: url(Images/RoomFeaturesBar.svg);"></div>
                </div>
                <h2>Minimal Duplex Room</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                <div class="room-list__pricing">
                    <h3 class="golden-text">$345/Night</p>
                    <h3>Booking Now</p>
                </div>
            </article>
            <article class="ligth-theme">
                <div class="popular-rooms__images__header">
                    <div class="popular-rooms__images__header__div-image" style="background-image: url(https://www.shutterstock.com/image-illustration/horizontal-frame-mockup-boho-bedroom-600nw-1901460664.jpg);"></div>
                    <div class="popular-rooms__images__header__features" style="background-image: url(Images/RoomFeaturesBar.svg);"></div>
                </div>
                <h2>Minimal Duplex Room</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                <div class="room-list__pricing">
                    <h3 class="golden-text">$345/Night</p>
                    <h3>Booking Now</p>
                </div>
            </article>
        </div>
    </section>

    @include('footer')
</body>
</html>