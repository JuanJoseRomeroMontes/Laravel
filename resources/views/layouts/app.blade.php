<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
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
    @if (session('status'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Toastify({
                    text: "{{ session('status') }}",
                    duration: 5000,
                    close: true,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#4fbe87",
                    stopOnFocus: true
                }).showToast();
            });
        </script>
    @endif
    @section('nav')
    <nav>
        <div class="nav-outside">
            <p>We Make Your Feel Comfortable</p>
        </div>
        <div class="nav-bar">
            <img class="nav-bar__hamburger" id="navHamburgerButton" src="/Images/Hamburguer.svg" alt="Menu"/>
            <a href="/" class="nav-bar__logo">
                <div> <p>H</p> </div>
                <img src="/Images/HotelMiranda.svg" alt="HOTEL MIRANDA"/>
            </a>
            <div class="nav-bar__navigation">
                <ul>
                    <li><a href="/aboutus">About us</a></li>
                    <li><a href="/rooms">Rooms</a></li>
                    <li><a href="/offers">Offers</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
            <div class="nav-bar__icons">
                <img src="/Images/ProfileIcon.svg" alt="Profile"/>
                <img src="/Images/SearchIcon.svg" alt="Search"/>
            </div>
        </div>
        <div class="nav-menu" id="navHamburguerMenu">
            <ul>
                <li><a href="/aboutus">About us</a></li>
                <li><a href="/rooms">Rooms</a></li>
                <li><a href="/offers">Offers</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    @show
    <div class="container">
        @yield('content')
    </div>
    @section('footer')
    <footer class="footer">
        <div class="footer-divider">
            <article class="footer__header">
                <div class="footer__header__logo">
                    <div> <a href="/" style="text-decoration: none"><p class="no-margin">H</p></a> </div>
                    <img src="/Images/HotelMiranda.svg" alt="HOTEL MIRANDA"/>
                </div>

                <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.</p>
                
                <div class="footer__header__social-nets">
                    <div><img alt="facebook" src="/Images/Social/FacebookLogo.svg"></div>
                    <div class="golden-background"><img alt="twitter" src="/Images/Social/twitterLogo.svg"></div>
                    <div><img alt="behance" src="/Images/Social/BehanceLogo.svg"></div>
                    <div><img alt="linkedin" src="/Images/Social/LinkedinLogo.svg"></div>
                    <div><img alt="youtube" src="/Images/Social/YoutubeLogo.svg"></div>
                </div>
            </article>

            <article class="footer__services no-margin">
                <h2>Services</h2>
                <ul>
                    <li>+ Resturent & Bar</li>
                    <li>+ Swimming Pool</li>
                    <li>+ Wellness & Spa</li>
                    <li>+ Restaurant</li>
                    <li>+ Conference Room</li>
                    <li>+ Coctail Party House</li>
                    <li>+ Gaming Zone</li>
                    <li>+ Marriage Party</li>
                    <li>+ Party Planning</li>
                    <li>+ Tour Consultancy</li>
                </ul>
            </article>
            
            <article class="footer__contact-info">
                <h2>Contact Us.</h2>
                <div class="no-margin">
                    <img alt="phone" src="/Images/contactPhone.svg">
                    <div>
                        <h3>Phone Number</h3>
                        <h4>+987 876 765 76 577</h4>
                    </div>
                </div>
                <div>
                    <img alt="email" src="/Images/contactEmail.svg">
                    <div>
                        <h3>Email</h3>
                        <h4>Example@gmail.com</h4>
                    </div>
                </div>
                <div>
                    <img alt="direction" src="/Images/contactLocation.svg">
                    <div>
                        <h3>Direction</h3>
                        <h4>C/Example nº14</h4>
                    </div>
                </div>
            </article>
        </div>
        
        <article class="footer__legal no-margin">
            <p>Copyright By@Example - 2020</p>
            <p class="no-margin">Terms of use    |    Privacy Environmental Policy</p>
        </article>
    </footer>
    @show
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>
</html>