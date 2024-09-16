@extends('layouts.app')
@section('title', 'Index')
@section('content')
<body>

    <header>
            <p>THE ULTIMATE LUXURY EXPERIENCE</p>
            <h1 class="homeTitle">The Perfect Base For You</h1>
            <a href="#tour"><button class="button__filled">TAKE A TOUR</button></a>
            <a href="aboutus"><button class="button__hollow">LEARN MORE</button></a>
            <a id="booking"></a>
    </header>
    
    <section class="availability-section">
        <form>
            <div>
                <label for="arrivalDate">Arrival Date</label>
                <input type="date" id="arrivalDate" name="arrivalDate" >
            </div>
            <div>
                <label for="departureDate">Departure Date</label>
                <input type="date" id="departureDate" name="departureDate">
            </div>
            <input type="submit" value="CHECK AVAILABILITY" class="button__filled">
          </form>
    </section>

    <section class="about-us">
        <div class="about-us__div1">
            <p class="about-us__overtitle">ABOUT US</p>
            <h2>Discover Our Underground.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="#booking"><button class="button__filled">BOOK NOW</button></a>
        </div>

        <div class="about-us__div2">
            <article class="about-us__strong-team">
                <img alt="People working on reception" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT67ydEFXc0WLr1P_hyTAdeJDU3P0T2ISrmLA&s"/>
                <div>
                    <img src="/Images/StrongTeam.svg"/>
                    <img src="/Images/StrongTeamBackground.svg" class="article-bg-img"/>
                    <h3>Strong Team</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                </div>
            </article>

            <article>
                <img alt="Luxury room" src="https://fancyhouse-design.com/wp-content/uploads/2023/11/In-this-bedroom-the-luxury-headboard-with-plush-upholstery-commands-attention.-300x300.jpg"/>
                <div class="dark-theme">
                    <img src="/Images/LuxxuryRoom.svg"/>
                    <h3>Luxury Room</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                </div>
            </article>
        </div>
    </section>

    <section class="rooms">
        <p class="rooms__overtitle">ROOMS</p>
        <h2>Hand Picked Rooms</h2>
        <img src="/Images/RoomFeaturesBar.svg" class="rooms__features"/>
        <div class="swiper rooms__swiper rooms__swiper__mobile" id="swiper-rooms-mobile">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide__rooms-image swiper-slide" alt="room1" style="background-image: url(https://www.shutterstock.com/image-illustration/horizontal-frame-mockup-boho-bedroom-600nw-1901460664.jpg);"></div>
                <div class="swiper-slide__rooms-image swiper-slide" alt="room2" style="background-image: url(https://media.remodelista.com/wp-content/uploads/2015/03/fields/tiina-laakonen-hamptons-NY-remodelista-24.jpeg);"></div>
                <div class="swiper-slide__rooms-image swiper-slide" alt="room3" style="background-image: url(https://img.freepik.com/premium-photo/living-room-with-luxurious-elegantly-designed-neutral-interior-horizontal-layout_410516-84179.jpg);"></div>
                <div class="swiper-slide__rooms-image swiper-slide" alt="room1" style="background-image: url(https://www.shutterstock.com/image-illustration/horizontal-frame-mockup-boho-bedroom-600nw-1901460664.jpg);"></div>
                <div class="swiper-slide__rooms-image swiper-slide" alt="room2" style="background-image: url(https://media.remodelista.com/wp-content/uploads/2015/03/fields/tiina-laakonen-hamptons-NY-remodelista-24.jpeg);"></div>
                <div class="swiper-slide__rooms-image swiper-slide" alt="room3" style="background-image: url(https://img.freepik.com/premium-photo/living-room-with-luxurious-elegantly-designed-neutral-interior-horizontal-layout_410516-84179.jpg);"></div>
            </div>

            <!-- Navigation buttons -->
            <div class="rooms__button-left" id="swiper-button-prev-rooms"></div>
            <div class="rooms__button-right" id="swiper-button-next-rooms"></div>
        </div>
        <div class="swiper rooms__swiper rooms__swiper__computer" id="swiper-rooms-computer">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide__rooms-image swiper-slide" alt="room1" style="background-image: url(https://www.shutterstock.com/image-illustration/horizontal-frame-mockup-boho-bedroom-600nw-1901460664.jpg);"></div>
                <div class="swiper-slide__rooms-image swiper-slide" alt="room2" style="background-image: url(https://media.remodelista.com/wp-content/uploads/2015/03/fields/tiina-laakonen-hamptons-NY-remodelista-24.jpeg);"></div>
                <div class="swiper-slide__rooms-image swiper-slide" alt="room3" style="background-image: url(https://img.freepik.com/premium-photo/living-room-with-luxurious-elegantly-designed-neutral-interior-horizontal-layout_410516-84179.jpg);"></div>
                <div class="swiper-slide__rooms-image swiper-slide" alt="room1" style="background-image: url(https://www.shutterstock.com/image-illustration/horizontal-frame-mockup-boho-bedroom-600nw-1901460664.jpg);"></div>
                <div class="swiper-slide__rooms-image swiper-slide" alt="room2" style="background-image: url(https://media.remodelista.com/wp-content/uploads/2015/03/fields/tiina-laakonen-hamptons-NY-remodelista-24.jpeg);"></div>
                <div class="swiper-slide__rooms-image swiper-slide" alt="room3" style="background-image: url(https://img.freepik.com/premium-photo/living-room-with-luxurious-elegantly-designed-neutral-interior-horizontal-layout_410516-84179.jpg);"></div>
            </div>

            <!-- Navigation buttons -->
            <div class="rooms__button-left" id="swiper-button-prev-rooms"></div>
            <div class="rooms__button-right" id="swiper-button-next-rooms"></div>
        </div>
        <article>
            <h3>Minimal Duplex Room</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            <p class="price__number">$345<span class="price__text">/Night</span></p>
        </article>
    </section>

    <section class="intro-video">
        <a id="tour"></a>
        <div>
            <p class="intro-video__overtitle">INTRO VIDEO</p>
            <h2>Meet With Our Luxury Place.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</p>    
        </div>
        <video width="335" height="270" controls>
            <source src="/Videos/Video-intro.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <a href="#booking"><button href="booking" class="button__filled">BOOK NOW</button></a>
        <div class="intro-video__golden-background"></div>
    </section>

    <section class="facilities">
        <p>FACILITIES</p>
        <h2>Core Features</h2>
        <div class="swiper facility-swiper" id="swiper-features">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="swiper-slide__facility">
                        <h3>01</h3>
                        <img src="/Images/Features/Feature01.svg">
                        <h4>Have High Rating</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide__facility">
                        <h3>02</h3>
                        <img src="/Images/Features/Feature02.svg">
                        <h4>Quiet Hours</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide__facility">
                        <h3>03</h3>
                        <img src="/Images/Features/Feature03.svg">
                        <h4>Best Locations</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide__facility">
                        <h3>04</h3>
                        <img src="/Images/Features/Feature04.svg">
                        <h4>Free Cancellation</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide__facility">
                        <h3>05</h3>
                        <img src="/Images/Features/Feature05.svg">
                        <h4>Payment Options</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide__facility">
                        <h3>06</h3>
                        <img src="/Images/Features/Feature06.svg">
                        <h4>Special Offers</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination" id="swiper-pagination-features"></div>
        </div>

        <div class="facilities__facilities-list">
            <div class="swiper-slide__facility">
                <h3>01</h3>
                <img src="/Images/Features/Feature01.svg">
                <h4>Have High Rating</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
            <div class="swiper-slide__facility">
                <h3>02</h3>
                <img src="/Images/Features/Feature02.svg">
                <h4>Quiet Hours</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
            <div class="swiper-slide__facility">
                <h3>03</h3>
                <img src="/Images/Features/Feature03.svg">
                <h4>Best Locations</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
            <div class="swiper-slide__facility">
                <h3>04</h3>
                <img src="/Images/Features/Feature04.svg">
                <h4>Free Cancellation</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
            <div class="swiper-slide__facility">
                <h3>05</h3>
                <img src="/Images/Features/Feature05.svg">
                <h4>Payment Options</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
            <div class="swiper-slide__facility">
                <h3>06</h3>
                <img src="/Images/Features/Feature06.svg">
                <h4>Special Offers</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>
    </section>

    <section class="food-menu">
        <div class="food-menu__image-container"><img src="/Images/FoodsIcon.svg"></div>
        <p>MENU</p>
        <h2>Our Foods Menu</h2>
        <div class="swiper food-menu__swiper-mobile" id="swiper-food">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="food-menu__swiper-slide">
                        <div>
                            <img alt="Eggs & Bacon image" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhIHtcg_eeKEct6bsV6ajs_HnwzWwgBI0KZUOdbCLTRR3l3Osh5xQhYxo3iYh7n32cPGB-1QyM_8SBYRs5T3d2S2LLMJ1Zq_-9LtAdyUMuOe-d08d4gVR4P-4TCK9PCcEsST-H7k6J7DqO1/s640/Bacon-and-Eggs_IMG_0822.JPG">
                            <div>
                                <h4>Eggs & Bacon</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                        <div>
                            <img alt="Tea or Coffee image" src="https://www.eatthis.com/wp-content/uploads/sites/4/2020/07/coffee-tea.jpg?quality=82&strip=1">
                            <div>
                                <h4>Tea or Coffee</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                        <div>
                            <img alt="Chia Oatmeal image"  src="https://realfoodrealdeals.com/wp-content/uploads/2022/12/chia-seed-oatmeal-sq22.jpeg">
                            <div>
                                <h4>Chia Oatmeal</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="food-menu__swiper-slide">
                        <div>
                            <img alt="Fruit Parfait image" src="https://cdn.apartmenttherapy.info/image/upload/f_jpg,q_auto:eco,c_fill,g_auto,w_1500,ar_1:1/k%2FPhoto%2FRecipes%2F2022-01_Yogurt-Parfait%2F2022-01-05_ATK-0852">
                            <div>
                                <h4>Fruit Parfait</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                        <div>
                            <img alt="Marmalade Selection image" src="https://sites.create-cdn.net/siteimages/40/6/4/406428/19/8/0/19807515/1000x920.jpeg?1644065739">
                            <div>
                                <h4>Marmalade Selection</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                        <div>
                            <img alt="Cheese Plate image"  src="https://www.cupofzest.com/wp-content/uploads/2020/09/Cheese-Board-for-Two-Thumbnail.jpg">
                            <div>
                                <h4>Cheese Plate</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper food-menu__swiper-computer" id="swiper-food">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="food-menu__swiper-slide">
                        <div>
                            <img alt="Eggs & Bacon image" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhIHtcg_eeKEct6bsV6ajs_HnwzWwgBI0KZUOdbCLTRR3l3Osh5xQhYxo3iYh7n32cPGB-1QyM_8SBYRs5T3d2S2LLMJ1Zq_-9LtAdyUMuOe-d08d4gVR4P-4TCK9PCcEsST-H7k6J7DqO1/s640/Bacon-and-Eggs_IMG_0822.JPG">
                            <div>
                                <h4>Eggs & Bacon</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <img class="food-menu__left-arrow" alt="" src="/Images/Left-arrow.svg">
                        </div>
                        <div>
                            <img alt="Tea or Coffee image" src="https://www.eatthis.com/wp-content/uploads/sites/4/2020/07/coffee-tea.jpg?quality=82&strip=1">
                            <div>
                                <h4>Tea or Coffee</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <img class="food-menu__left-arrow" alt="" src="/Images/Left-arrow.svg">
                        </div>
                        <div>
                            <img alt="Chia Oatmeal image"  src="https://realfoodrealdeals.com/wp-content/uploads/2022/12/chia-seed-oatmeal-sq22.jpeg">
                            <div>
                                <h4>Chia Oatmeal</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <img class="food-menu__left-arrow" alt="" src="/Images/Left-arrow.svg">
                        </div>
                        <div>
                            <img alt="Fruit Parfait image" src="https://cdn.apartmenttherapy.info/image/upload/f_jpg,q_auto:eco,c_fill,g_auto,w_1500,ar_1:1/k%2FPhoto%2FRecipes%2F2022-01_Yogurt-Parfait%2F2022-01-05_ATK-0852">
                            <div>
                                <h4>Fruit Parfait</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <img class="food-menu__left-arrow" alt="" src="/Images/Left-arrow.svg">
                        </div>
                        <div>
                            <img alt="Marmalade Selection image" src="https://sites.create-cdn.net/siteimages/40/6/4/406428/19/8/0/19807515/1000x920.jpeg?1644065739">
                            <div>
                                <h4>Marmalade Selection</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <img class="food-menu__left-arrow" alt="" src="/Images/Left-arrow.svg">
                        </div>
                        <div>
                            <img alt="Cheese Plate image"  src="https://www.cupofzest.com/wp-content/uploads/2020/09/Cheese-Board-for-Two-Thumbnail.jpg">
                            <div>
                                <h4>Cheese Plate</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <img class="food-menu__left-arrow" alt="" src="/Images/Left-arrow.svg">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="food-menu__swiper-slide">
                        <div>
                            <img alt="Marmalade Selection image" src="https://sites.create-cdn.net/siteimages/40/6/4/406428/19/8/0/19807515/1000x920.jpeg?1644065739">
                            <div>
                                <h4>Marmalade Selection</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <img class="food-menu__left-arrow" alt="" src="/Images/Left-arrow.svg">
                        </div>
                        <div>
                            <img alt="Cheese Plate image"  src="https://www.cupofzest.com/wp-content/uploads/2020/09/Cheese-Board-for-Two-Thumbnail.jpg">
                            <div>
                                <h4>Cheese Plate</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <img class="food-menu__left-arrow" alt="" src="/Images/Left-arrow.svg">
                        </div>
                        <div>
                            <img alt="Eggs & Bacon image" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhIHtcg_eeKEct6bsV6ajs_HnwzWwgBI0KZUOdbCLTRR3l3Osh5xQhYxo3iYh7n32cPGB-1QyM_8SBYRs5T3d2S2LLMJ1Zq_-9LtAdyUMuOe-d08d4gVR4P-4TCK9PCcEsST-H7k6J7DqO1/s640/Bacon-and-Eggs_IMG_0822.JPG">
                            <div>
                                <h4>Eggs & Bacon</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <img class="food-menu__left-arrow" alt="" src="/Images/Left-arrow.svg">
                        </div>
                        <div>
                            <img alt="Tea or Coffee image" src="https://www.eatthis.com/wp-content/uploads/sites/4/2020/07/coffee-tea.jpg?quality=82&strip=1">
                            <div>
                                <h4>Tea or Coffee</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <img class="food-menu__left-arrow" alt="" src="/Images/Left-arrow.svg">
                        </div>
                        <div>
                            <img alt="Chia Oatmeal image"  src="https://realfoodrealdeals.com/wp-content/uploads/2022/12/chia-seed-oatmeal-sq22.jpeg">
                            <div>
                                <h4>Chia Oatmeal</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <img class="food-menu__left-arrow" alt="" src="/Images/Left-arrow.svg">
                        </div>
                                                <div>
                            <img alt="Fruit Parfait image" src="https://cdn.apartmenttherapy.info/image/upload/f_jpg,q_auto:eco,c_fill,g_auto,w_1500,ar_1:1/k%2FPhoto%2FRecipes%2F2022-01_Yogurt-Parfait%2F2022-01-05_ATK-0852">
                            <div>
                                <h4>Fruit Parfait</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <img class="food-menu__left-arrow" alt="" src="/Images/Left-arrow.svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="food-menu__button-container">
            <div class="food-menu__button-container__prev" id="swiper-button-prev-food"></div>
            <div class="food-menu__button-container__next" id="swiper-button-next-food"></div>
        </div>
    </section>
    
    <section class="stats">
        <div class="swiper stats__swiper" id="swiper-carousel">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img class="swiper-slide__stats-img" alt="room1" src="https://www.shutterstock.com/image-illustration/horizontal-frame-mockup-boho-bedroom-600nw-1901460664.jpg"></div>
                <div class="swiper-slide"><img class="swiper-slide__stats-img" alt="room2" src="https://media.remodelista.com/wp-content/uploads/2015/03/fields/tiina-laakonen-hamptons-NY-remodelista-24.jpeg"></div>
                <div class="swiper-slide"><img class="swiper-slide__stats-img" alt="room3" src="https://img.freepik.com/premium-photo/living-room-with-luxurious-elegantly-designed-neutral-interior-horizontal-layout_410516-84179.jpg"></div>
            </div>

            <div class="swiper-pagination" id="swiper-pagination-carousel"></div>
        </div>

        <div class="stats__images">
            <div class="stats__images__img" style="background-image: url(https://www.shutterstock.com/image-illustration/horizontal-frame-mockup-boho-bedroom-600nw-1901460664.jpg);"></div>
            <div class="stats__images__img" style="background-image: url(https://media.remodelista.com/wp-content/uploads/2015/03/fields/tiina-laakonen-hamptons-NY-remodelista-24.jpeg);"></div>
            <div class="stats__images__img" style="background-image: url(https://img.freepik.com/premium-photo/living-room-with-luxurious-elegantly-designed-neutral-interior-horizontal-layout_410516-84179.jpg);"></div>
        </div>

        <article class="stats__show dark-theme">
            <div>
                <img src="/Images/RocketIcon.svg" alt="rocket">
                <h2>84k.</h2>
                <p>Projects are Completed</p>
            </div>
            <div>
                <img src="/Images/PeopleIcon.svg" alt="group of people">
                <h2>100M.</h2>
                <p>Active Backers Around World</p>
            </div>
            <div>
                <img src="/Images/ChartIcon.svg" alt="chart going up">
                <h2>02k.</h2>
                <p>Categories Served</p>
            </div>
            <div class="no-margin">
                <img src="/Images/BookIcon.svg" alt="book">
                <h2>100M.</h2>
                <p>Idea Raised Funds</p>
            </div>
        </article>
    </section>

</body>
@endsection