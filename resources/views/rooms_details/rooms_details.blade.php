<!DOCTYPE html>
<html>
@extends('layouts.app')
@vite(['public/assets/sass/rooms_details/rooms_details_styles.scss', 'resources/js/app.js'])
@section('content')

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Room Details | Hotel Miranda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

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
    <section class="rooms-details-hero">
        <div class="rooms-details-hero__container">
            <div class="rooms-details-hero__header">
                <p class="rooms-details-hero__subtitle">THE ULTIMATE LUXURY</p>
                <h1 class="rooms-details-hero__title">Ultimate Room</h1>
            </div>
        </div>
        <div class="rooms-details-hero__position">
            <p>Home | <span>RoomsDetails</span></p>
        </div>
    </section>
    <section class="rooms-details-hero-info">
        <p class="rooms-details-hero-info__type">DOUBLE BED</p>
        <h2 class="rooms-details-hero-info__name">Luxury Double Bed</h2>
        <div class="rooms-details-hero-info__price-group">
            <span class="rooms-details-hero-info__price">$345</span><span
                class="rooms-details-hero-info__night">/Night</span>
        </div>
        <div class="rooms-details-hero-info__image-wrapper">
            <img class="rooms-details-hero-info__image" src="{{ asset('assets/img/luxury-hotel-room.jpg') }}"
                alt="Luxury Double Bed Room" />
        </div>
    </section>
    <section class="rooms-details-availability">
        <h2 class="rooms-details-availability__title">Check Availability</h2>
        <form class="rooms-details-availability__form">
            <div>
                <label class="rooms-details-availability__label" for="checkin">Check In</label>
                <div class="rooms-details-availability__input-group">
                    <input class="rooms-details-availability__input" type="text" id="checkin" name="checkin"
                        placeholder="Fri, 14th June 2020" readonly />
                    <img class="rooms-details-availability__icon" src="{{ asset('assets/svg/calendar-reserve.svg') }}"
                        alt="Calendar" />
                </div>
            </div>
            <div>
                <label class="rooms-details-availability__label" for="checkout">Check Out</label>
                <div class="rooms-details-availability__input-group">
                    <input class="rooms-details-availability__input" type="text" id="checkout" name="checkout"
                        placeholder="Sun, 16th June 2020" readonly />
                    <img class="rooms-details-availability__icon" src="{{ asset('assets/svg/calendar-reserve.svg') }}"
                        alt="Calendar" />
                </div>
            </div>
            <button class="rooms-details-availability__button" type="submit">
                CHECK AVAILABILITY
            </button>
        </form>
        <p class="rooms-details-availability__desc">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt
            mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus
            error sit voluptatem accusantium doloremque laudantium, totam rem
            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
            beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
            voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
            dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
            est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
            sed quia non numquam eius modi tempora incidunt ut labore et dolore
            magnam aliquam quaerat voluptatem.
        </p>
        <div class="rooms-details-availability__amenities">
            <h3 class="rooms-details-availability__amenities-title">Amenities</h3>
            <div class="rooms-details-availability__amenities-list">
                <div class="rooms-details-availability__amenity">
                    <img src="{{ asset('assets/svg/ac.svg') }}" alt="Air conditioner" /> Air conditioner
                </div>
                <div class="rooms-details-availability__amenity">
                    <img src="{{ asset('assets/svg/wifi.svg') }}" alt="High speed WiFi" /> High speed WiFi
                </div>
                <div class="rooms-details-availability__amenity">
                    <img src="{{ asset('assets/svg/breakfast.svg') }}" alt="Breakfast" /> Breakfast
                </div>
                <div class="rooms-details-availability__amenity">
                    <img src="{{ asset('assets/svg/kitchen.svg') }}" alt="Kitchen" /> Kitchen
                </div>
                <div class="rooms-details-availability__amenity">
                    <img src="{{ asset('assets/svg/cleaning.svg') }}" alt="Cleaning" /> Cleaning
                </div>
                <div class="rooms-details-availability__amenity">
                    <img src="{{ asset('assets/svg/shower.svg') }}" alt="Shower" /> Shower
                </div>
                <div class="rooms-details-availability__amenity">
                    <img src="{{ asset('assets/svg/grocery.svg') }}" alt="Grocery" /> Grocery
                </div>
                <div class="rooms-details-availability__amenity">
                    <img src="{{ asset('assets/svg/single-bed.svg') }}" alt="Single bed" /> Single bed
                </div>
                <div class="rooms-details-availability__amenity">
                    <img src="{{ asset('assets/svg/shop-near.svg') }}" alt="Shop near" /> Shop near
                </div>
                <div class="rooms-details-availability__amenity">
                    <img src="{{ asset('assets/svg/towels.svg') }}" alt="Towels" /> Towels
                </div>
                <div class="rooms-details-availability__amenity">
                    <img src="{{ asset('assets/svg/support.svg') }}" alt="24/7 Online Support" /> 24/7
                    Online Support
                </div>
                <div class="rooms-details-availability__amenity">
                    <img src="{{ asset('assets/svg/locker.svg') }}" alt="Strong Locker" /> Strong Locker
                </div>
                <div class="rooms-details-availability__amenity">
                    <img src="{{ asset('assets/svg/security.svg') }}" alt="Smart Security" /> Smart
                    Security
                </div>
                <div class="rooms-details-availability__amenity">
                    <img src="{{ asset('assets/svg/expert-team.svg') }}" alt="Expert Team" /> Expert Team
                </div>
            </div>
        </div>
        <div class="rooms-details-availability__testimonial">
            <div class="rooms-details-availability__testimonial-img-wrapper">
                <div class="rooms-details-availability__testimonial-img"></div>
                <span class="rooms-details-availability__testimonial-check">
                    <img src="{{ asset('assets/svg/check.svg') }}" alt="Verified" />
                </span>
            </div>
            <h4 class="rooms-details-availability__testimonial-name">
                Rosalina D. William
            </h4>
            <div class="rooms-details-availability__testimonial-role">
                FOUNDER, QUX CO.
            </div>
            <p class="rooms-details-availability__testimonial-desc">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore.
            </p>
        </div>
        <div class="rooms-details-availability__cancellation">
            <h3 class="rooms-details-availability__cancellation-title">
                Cancellation
            </h3>
            <p class="rooms-details-availability__cancellation-desc">
                Phasellus volutpat neque a tellus venenatis, a euismod augue
                facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus.
                Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to
                get a full refund.
            </p>
        </div>
    </section>
    <!-- Related Rooms Section -->
    <section class="rooms-details-related-rooms">
        <h2 class="rooms-details-related-rooms__title">Related Rooms</h2>
        <div class="rooms-details-related-rooms__slider">
            <button class="rooms-details-related-rooms__slider-arrow rooms-details-related-rooms__slider-arrow--left"
                aria-label="Previous Room">
                &#8592;
            </button>
            <img class="rooms-details-related-rooms__slider-img" src="{{ asset('assets/img/minimalist-luxe.jpg') }}"
                alt="Minimalist Luxe Room" />
            <button class="rooms-details-related-rooms__slider-arrow rooms-details-related-rooms__slider-arrow--right"
                aria-label="Next Room">
                &#8594;
            </button>
        </div>
        <div class="rooms-details-related-rooms__slider-amenities">
            <div class="rooms-details-related-rooms__slider-amenity">
                <img src="{{ asset('assets/svg/ac.svg') }}" alt="AC" /> AC
            </div>
            <div class="rooms-details-related-rooms__slider-amenity">
                <img src="{{ asset('assets/svg/wifi.svg') }}" alt="WiFi" /> WiFi
            </div>
            <div class="rooms-details-related-rooms__slider-amenity">
                <img src="{{ asset('assets/svg/breakfast.svg') }}" alt="Breakfast" /> Breakfast
            </div>
        </div>
        <div class="rooms-details-related-rooms__room-name">Minimalist Luxe</div>
        <div class="rooms-details-related-rooms__room-desc">
            Experience the perfect blend of comfort and style in our Minimalist Luxe
            room, designed for a relaxing stay.
        </div>
        <div class="rooms-details-related-rooms__room-footer">
            <span class="rooms-details-related-rooms__room-price">$299/Night</span>
            <a href="#" class="rooms-details-related-rooms__room-booking">Book Now</a>
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