@extends('layouts.app')
@vite(['public/assets/sass/about/about_styles.scss'])
@section('content')

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>About | Hotel Miranda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<section class="home--about">
    <div class="home__container">
        <div class="home__header">
            <p class="home__subtitle">THE ULTIMATE LUXURY</p>
            <h1 class="home__title">About Us</h1>
        </div>
    </div>
    <div class="home__position">
        <p>Home | <span>About</span></p>
    </div>
</section>

<section class="about-us">
    <div class="about-us__container">
        <iframe src="https://www.youtube-nocookie.com/embed/Bu3Doe45lcU?si=GeWwCXl-j2nWYUd7"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <h2>
            Hello. Our hotel has been present for over 20 years. We make the best
            for all our customers.
        </h2>
    </div>
    <div class="about-us__icons">
        <div class="about-us__icon">
            <img class="about-us__icon-image" src="{{ asset('assets/svg/croissant-coffee.svg') }}"
                alt="Desayuno con croissant y café" />
            <p>Breakfast</p>
        </div>
        <div class="about-us__icon--filled">
            <img class="about-us__icon-image" src="{{ asset('assets/svg/airplane.svg') }}" alt="Viaje en avión" />
            <p>Airport Pickup</p>
        </div>
        <div class="about-us__icon">
            <img class="about-us__icon-image" src="{{ asset('assets/svg/map-1.svg') }}" alt="Mapa de ubicación" />
            <p>City Guide</p>
        </div>
        <div class="about-us__icon">
            <img class="about-us__icon-image" src="{{ asset('assets/svg/mult-room.svg') }}"
                alt="Sala de reuniones múltiples" />
            <p>Luxury Room</p>
        </div>
    </div>

    <div class="about-us__restaurant-card">
        <div class="about-us__restaurant-card-image"></div>
        <p class="about-us__restaurant-card-subtitle">RESTAURANT</p>
        <h2 class="about-us__restaurant-card-title">
            Get Restaurant Facilities & Many Other More
        </h2>
        <p class="about-us__restaurant-card-desc">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip.
        </p>
        <button class="about-us__restaurant-card-button">TAKE A TOUR</button>
    </div>
</section>
<section class="core-features">
    <p class="core-features__subtitle">FACILITIES</p>
    <h2 class="core-features__title">Core Features</h2>
    <div class="core-features__card">
        <div class="core-features__icon">
            <img src="{{ asset('assets/svg/pick-stars.svg') }}" alt="High Rating" />
        </div>
        <span class="core-features__number">01</span>
        <h3 class="core-features__card-title">Have High Rating</h3>
        <p class="core-features__card-desc">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna..
        </p>
    </div>
    <div class="core-features__pagination">
        <span class="core-features__dot core-features__dot--active"></span>
        <span class="core-features__dot"></span>
        <span class="core-features__dot"></span>
        <span class="core-features__dot"></span>
        <span class="core-features__dot"></span>
    </div>
</section>
<section class="fun-facts">
    <p class="fun-facts__subtitle">COUNTER</p>
    <h2 class="fun-facts__title">Some Fun<br />Facts</h2>
    <div class="fun-facts__list">
        <div class="fun-facts__item">
            <img class="fun-facts__icon" src="{{ asset('assets/svg/happy-person.svg') }}" alt="Happy Users" />
            <div class="fun-facts__content">
                <div class="fun-facts__number">8000</div>
                <div class="fun-facts__desc">Happy Users</div>
            </div>
            <span class="fun-facts__arrow">&rarr;</span>
        </div>
        <div class="fun-facts__item">
            <img class="fun-facts__icon" src="{{ asset('assets/svg/like-3stars.svg') }}" alt="Reviews & Appreciate" />
            <div class="fun-facts__content">
                <div class="fun-facts__number">10M</div>
                <div class="fun-facts__desc">Reviews & Appriciate</div>
            </div>
            <span class="fun-facts__arrow">&rarr;</span>
        </div>
        <div class="fun-facts__item">
            <img class="fun-facts__icon" src="{{ asset('assets/svg/world.svg') }}" alt="Country Coverage" />
            <div class="fun-facts__content">
                <div class="fun-facts__number">100</div>
                <div class="fun-facts__desc">Country Coverage</div>
            </div>
            <span class="fun-facts__arrow">&rarr;</span>
        </div>
    </div>
    <div class="fun-facts__image-placeholder"></div>
    <div class="fun-facts__pagination">
        <span class="fun-facts__dot fun-facts__dot--active"></span>
        <span class="fun-facts__dot"></span>
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