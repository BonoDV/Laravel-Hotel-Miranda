<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Rooms | Hotel Miranda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
@vite(['public/assets/sass/rooms/rooms_styles.scss'])
@section('content')

<body>
    @extends('layouts.app')
    <header class="header">
        <div class="header__container">
            <div class="header__left-group">
                <button class="header__button header__button--menu">
                    <img class="header__icon" src="{{ asset('assets/svg/hamburgerMenu.svg') }}" alt="Menu" />
                </button>
                <div class="header__logo-container">
                    <img class="header__logo-letter" src="{{ asset('assets/svg/H.svg') }}" alt="H" />
                </div>
                <img class="header__logo-text" src="{{ asset('assets/svg/HotelMiranda.svg') }}" alt="Hotel Miranda" />
            </div>
            <div class="header__right-group">
                <button class="header__button header__button--profile">
                    <img class="header__icon" src="{{ asset('assets/svg/IconProfile.svg') }}" alt="Profile" />
                </button>
                <button class="header__button header__button--search">
                    <img class="header__icon" src="{{ asset('assets/svg/SearchIcon.svg') }}" alt="Search" />
                </button>
            </div>
        </div>
    </header>

    <section class="home--room">
        <div class="home__container">
            <div class="home__header">
                <p class="home__subtitle">THE ULTIMATE LUXURY</p>
                <h1 class="home__title">Ultimate Room</h1>
            </div>
        </div>
        <div class="home__position">
            <p>Home | <span>Rooms</span></p>
        </div>
    </section>
    <section class="rooms">
        <div class="rooms__container">
            <div class="rooms__list">
                <div class="rooms__item">
                    <div class="rooms__item-image"></div>
                    <img src="{{ asset('assets/img/rooms-rules.png') }}" alt="Room features"
                        class="rooms__item-rules" />
                    <h2 class="rooms__item-title">Minimal Duplex Room</h2>
                    <p class="rooms__item-description">
                        Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do
                        eiusmod tempor.
                    </p>
                    <div class="rooms__item-footer">
                        <span class="rooms__item-price">$345<span>/Night</span></span>
                        <span class="rooms__item-booking">Booking Now</span>
                    </div>
                </div>
                <div class="rooms__item">
                    <div class="rooms__item-image"></div>
                    <img src="{{ asset('assets/img/rooms-rules.png') }}" alt="Room features"
                        class="rooms__item-rules" />
                    <h2 class="rooms__item-title">Colonial Luxure Room</h2>
                    <p class="rooms__item-description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore.
                    </p>
                    <div class="rooms__item-footer">
                        <span class="rooms__item-price">$345<span>/Night</span></span>
                        <span class="rooms__item-booking">Booking Now</span>
                    </div>
                </div>
                <div class="rooms__item">
                    <div class="rooms__item-image"></div>
                    <img src="{{ asset('assets/img/rooms-rules.png') }}" alt="Room features"
                        class="rooms__item-rules" />
                    <h2 class="rooms__item-title">Organic Luxure Room</h2>
                    <p class="rooms__item-description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore.
                    </p>
                    <div class="rooms__item-footer">
                        <span class="rooms__item-price">$345<span>/Night</span></span>
                        <span class="rooms__item-booking">Booking Now</span>
                    </div>
                </div>
                <div class="rooms__item">
                    <div class="rooms__item-image"></div>
                    <img src="{{ asset('assets/img/rooms-rules.png') }}" alt="Room features"
                        class="rooms__item-rules" />
                    <h2 class="rooms__item-title">Minimalist Luxure Room</h2>
                    <p class="rooms__item-description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore.
                    </p>
                    <div class="rooms__item-footer">
                        <span class="rooms__item-price">$345<span>/Night</span></span>
                        <span class="rooms__item-booking">Booking Now</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer__container">
            <div class="footer__social">
                <img src="{{ asset('assets/svg/footer-logo.svg') }}" alt="Footer Logo" class="footer__logo" />
                <p class="footer__social--text">
                    Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing
                    eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.
                </p>
                <div class="footer__social-icons">
                    <div class="footer__social-icons--container">
                        <img src="{{ asset('assets/svg/facebook.svg') }}" alt="Facebook" class="footer__social-icon" />
                    </div>
                    <div class="footer__social-icons--container">
                        <img src="{{ asset('assets/svg/twitter.svg') }}" alt="Twitter" class="footer__social-icon" />
                    </div>
                    <div class="footer__social-icons--container">
                        <img src="{{ asset('assets/svg/behance.svg') }}" alt="Behance" class="footer__social-icon" />
                    </div>
                    <div class="footer__social-icons--container">
                        <img src="{{ asset('assets/svg/linkedin.svg') }}" alt="LinkedIn" class="footer__social-icon" />
                    </div>
                    <div class="footer__social-icons--container">
                        <img src="{{ asset('assets/svg/youtube.svg') }}" alt="Youtube" class="footer__social-icon" />
                    </div>
                </div>
            </div>
            <div class="footer__services">
                <p class="footer__services--text">Services.</p>
                <div class="footer__services--container">
                    <div class="footer__services--container--list">
                        <ul class="footer__services--list">
                            <li class="footer__services--item">Restaurant & Bar</li>
                            <li class="footer__services--item">Swimming Pool</li>
                            <li class="footer__services--item">Wellness & Spa</li>
                            <li class="footer__services--item">Restaurant</li>
                            <li class="footer__services--item">Conference Room</li>
                            <li class="footer__services--item">Coctail Party House</li>
                        </ul>
                    </div>
                    <div class="footer__services--container--list">
                        <ul class="footer__services--list">
                            <li class="footer__services--item">Gaming Zone</li>
                            <li class="footer__services--item">Marriage Party</li>
                            <li class="footer__services--item">Party Planning</li>
                            <li class="footer__services--item">Tour Consultancy</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__contact">
                <p class="footer__contact--text">Contact Us.</p>
                <div class="footer__contact--data--container">
                    <img src="{{ asset('assets/svg/phone.svg') }}" />
                    <div class="footer__contact--data--wrapper">
                        <p class="footer__contact--data--first">Phone Number</p>
                        <p class="footer__contact--data--second">+987 876 765 76 577</p>
                    </div>
                </div>
                <div class="footer__contact--data--container">
                    <img src="{{ asset('assets/svg/email.svg') }}" />
                    <div class="footer__contact--data--wrapper">
                        <p class="footer__contact--data--first">Phone Number</p>
                        <p class="footer__contact--data--second">+987 876 765 76 577</p>
                    </div>
                </div>
                <div class="footer__contact--data--container">
                    <img src="{{ asset('assets/svg/map.svg') }}" />
                    <div class="footer__contact--data--wrapper">
                        <p class="footer__contact--data--first">Phone Number</p>
                        <p class="footer__contact--data--second">+987 876 765 76 577</p>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <p class="footer__copyright--text">Copyright By@Example - 2025</p>
                <p class="footer__copyright--final">
                    Terms of use &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                    Privacy Environmental Policy
                </p>
            </div>
        </div>
    </footer>
    @endsection
</body>

</html>