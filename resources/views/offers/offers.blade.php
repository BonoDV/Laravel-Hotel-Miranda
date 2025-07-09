<!DOCTYPE html>
<html>
@extends('layouts.app')
@vite(['public/assets/sass/offers/offers_styles.scss', 'resources/js/app.js'])
@section('content')

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Offers | Hotel Miranda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/offers_styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
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
    <section class="offers-hero">
        <div class="offers-hero__container">
            <div class="offers-hero__header">
                <p class="offers-hero__subtitle">THE ULTIMATE LUXURY</p>
                <h1 class="offers-hero__title">Our Offers</h1>
            </div>
        </div>
        <div class="offers-hero__position">
            <p>Home | <span>Offers</span></p>
        </div>
    </section>
    <section class="offer-card">
        <div class="offer-card__top">
            <span class="offer-card__old-price">$500<span class="offer-card__night">/Night</span></span>
            <span class="offer-card__new-price">$345<span class="offer-card__night">/Night</span></span>
        </div>
        <div class="offer-card__content">
            <p class="offer-card__bed-type">DOUBLE BED</p>
            <h2 class="offer-card__title">Luxury Double Bed</h2>
            <p class="offer-card__desc">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur.
            </p>
            <div class="offer-card__amenities">
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/ac.svg') }}" alt="" /> Air conditioner
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/wifi.svg') }}" alt="" /> High speed WiFi
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/breakfast.svg') }}" alt="" /> Breakfast
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/kitchen.svg') }}" alt="" /> Kitchen
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/cleaning.svg') }}" alt="" /> Cleaning
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/shower.svg') }}" alt="" /> Shower
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/grocery.svg') }}" alt="" /> Grocery
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/single-bed.svg') }}" alt="" /> Single bed
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/shop-near.svg') }}" alt="" /> Shop near
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/towels.svg') }}" alt="" /> Towels
                </div>
            </div>
            <button class="offer-card__button">BOOK NOW</button>
        </div>
        <div class="offer-card__top">
            <span class="offer-card__old-price">$500<span class="offer-card__night">/Night</span></span>
            <span class="offer-card__new-price">$345<span class="offer-card__night">/Night</span></span>
        </div>
        <div class="offer-card__content">
            <p class="offer-card__bed-type">DOUBLE BED</p>
            <h2 class="offer-card__title">Luxury Double Bed</h2>
            <p class="offer-card__desc">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur.
            </p>
            <div class="offer-card__amenities">
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/ac.svg') }}" alt="" /> Air conditioner
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/wifi.svg') }}" alt="" /> High speed WiFi
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/breakfast.svg') }}" alt="" /> Breakfast
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/kitchen.svg') }}" alt="" /> Kitchen
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/cleaning.svg') }}" alt="" /> Cleaning
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/shower.svg') }}" alt="" /> Shower
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/grocery.svg') }}" alt="" /> Grocery
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/single-bed.svg') }}" alt="" /> Single bed
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/shop-near.svg') }}" alt="" /> Shop near
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/towels.svg') }}" alt="" /> Towels
                </div>
            </div>
            <button class="offer-card__button">BOOK NOW</button>
        </div>
        <div class="offer-card__top">
            <span class="offer-card__old-price">$500<span class="offer-card__night">/Night</span></span>
            <span class="offer-card__new-price">$345<span class="offer-card__night">/Night</span></span>
        </div>
        <div class="offer-card__content">
            <p class="offer-card__bed-type">DOUBLE BED</p>
            <h2 class="offer-card__title">Luxury Double Bed</h2>
            <p class="offer-card__desc">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur.
            </p>
            <div class="offer-card__amenities">
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/ac.svg') }}" alt="" /> Air conditioner
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/wifi.svg') }}" alt="" /> High speed WiFi
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/breakfast.svg') }}" alt="" /> Breakfast
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/kitchen.svg') }}" alt="" /> Kitchen
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/cleaning.svg') }}" alt="" /> Cleaning
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/shower.svg') }}" alt="" /> Shower
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/grocery.svg') }}" alt="" /> Grocery
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/single-bed.svg') }}" alt="" /> Single bed
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/shop-near.svg') }}" alt="" /> Shop near
                </div>
                <div class="offer-card__amenity">
                    <img src="{{ asset('assets/svg/towels.svg') }}" alt="" /> Towels
                </div>
            </div>
            <button class="offer-card__button">BOOK NOW</button>
        </div>
    </section>
    <section class="popular-rooms">
        <div class="popular-rooms__header">
            <p class="popular-rooms__subtitle">POPULAR LIST</p>
            <h2 class="popular-rooms__title">Popular Rooms</h2>
        </div>
        <div class="popular-rooms__slider">
            <button class="popular-rooms__arrow popular-rooms__arrow--left" aria-label="Previous Room">
                &lt;
            </button>
            <div class="popular-rooms__slide">
                <div class="popular-rooms__img"></div>
                <div class="popular-rooms__amenities">
                    <img src="{{ asset('assets/svg/single-bed.svg') }}" alt="Bed" />
                    <img src="{{ asset('assets/svg/wifi.svg') }}" alt="WiFi" />
                    <img src="{{ asset('assets/svg/ac.svg') }}" alt="AC" />
                    <img src="{{ asset('assets/svg/breakfast.svg') }}" alt="Breakfast" />
                    <img src="{{ asset('assets/svg/kitchen.svg') }}" alt="Kitchen" />
                    <img src="{{ asset('assets/svg/shower.svg') }}" alt="Shower" />
                    <img src="{{ asset('assets/svg/towels.svg') }}" alt="Towels" />
                </div>
                <div class="popular-rooms__info">
                    <h3 class="popular-rooms__room-name">Minimal Duplex Room</h3>
                    <p class="popular-rooms__desc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor.
                    </p>
                    <div class="popular-rooms__footer">
                        <span class="popular-rooms__price">$345/Night</span>
                        <span class="popular-rooms__booking">Booking Now</span>
                    </div>
                </div>
            </div>
            <button class="popular-rooms__arrow popular-rooms__arrow--right" aria-label="Next Room">
                &gt;
            </button>
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
</body>

</html>
