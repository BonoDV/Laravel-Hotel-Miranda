@extends('layouts.app')
@vite(['public/assets/sass/home/styles.scss', 'resources/js/app.js'])
@section('content')
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Hotel Miranda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' type='text/css' media='screen' href='../css/styles.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <header class="header">
        <div class="header__container">
            <div class="header__left-group">
                <button class="header__button header__button--menu">
                    <img class="header__icon" src="{{ asset('assets/svg/hamburgerMenu.svg') }}" alt="Menu">
                </button>
                <div class="header__logo-container">
                    <img class="header__logo-letter" src="{{ asset('assets/svg/H.svg') }}" alt="H">
                </div>
                <img class="header__logo-text" src="{{ asset('assets/svg/HotelMiranda.svg') }}" alt="Hotel Miranda">
            </div>
            <div class="header__right-group">
                <button class="header__button header__button--profile">
                    <img class="header__icon" src="{{ asset('assets/svg/IconProfile.svg') }}" alt="Profile">
                </button>
                <button class="header__button header__button--search">
                    <img class="header__icon" src="{{ asset('assets/svg/SearchIcon.svg') }}" alt="Search">
                </button>
            </div>
        </div>
    </header>
    <section class="home">
        <div class="home__container">
            <div class="home__header">
                <p class="home__subtitle">THE ULTIMATE LUXURY EXPERIENCE</p>
                <h1 class="home__title">The Perfect Base For You</h1>
            </div>
            <div class="home__actions">
                <button class="home__action home__action--primary">TAKE A TOUR</button>
                <button class="home__action home__action--secondary">LEARN MORE</button>
            </div>
        </div>
    </section>
    <section class="availability">
        <div class="availability__container">
            <div class="availability__dates">
                <label>Arrival Date</label>
                <input id="date__input--arrival" class="availability__dates--arrival" type="date">
                <label>Departure Date</label>
                <input id="date__input--departure" class="availability__dates--departure" type="date">
            </div>
            <div class="availability__check">
                <button class="availability__check--button">CHECK AVAILABILITY</button>
            </div>
        </div>
    </section>
    <section class="about-us">
        <div class="about-us__container">
            <div class="about-us__content">
                <p class="about-us__subtitle">ABOUT US</p>
                <h1 class="about-us__title">Discover Our Underground.</h1>
                <p class="about-us__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="about-us__actions">
                <button class="about-us__button about-us__button--primary">BOOK NOW</button>
            </div>
        </div>
        <div class="about-us__cards">
            <div class="about-us__cards-team">
                <img src="{{ asset(path: 'assets/img/strong-team.jpg') }}" alt="Hotel Miranda Strong Team">
                <div class="about-us__cards-team-icons">
                    <img src="{{ asset('assets/svg/team-icon.svg') }}" class="about-us__cards-team-icons--small"
                        alt="Hotel Miranda Strong Team Icon">
                    <img src="{{ asset('assets/svg/team-icon.svg') }}" class="about-us__cards-team-icons--transparent"
                        alt="Hotel Miranda Strong Team Big Icon Transparent">
                    <h2 class="about-us__cards-team-title">Strong Team</h2>
                    <p class="about-us__cards-team-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor.</p>
                </div>
            </div>
            <div class="about-us__cards-luxury">
                <img src="{{ asset('assets/img/luxury-hotel-room.jpg') }}" alt="Hotel Miranda Luxury Room">
                <div class="about-us__cards-luxury-icons">
                    <img src="{{ asset('assets/svg/calendar-reserve.svg') }}" class="about-us__cards-team-icons--small"
                        alt="Hotel Miranda Calendar Reserve Icon">
                    <p class="about-us__cards-team-title">Luxury Room</p>
                    <h2 class="about-us__cards-team-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor.</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="rooms">
        <div class="rooms__container">
            <div class="rooms__header">
                <p class="rooms__subtitle">ROOMS</p>
                <h1 class="rooms__title">Hand Picked Rooms</h1>
            </div>
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/img/rooms-rules.png') }}" alt="Room 1"
                            class="swiper-slide__image--rules">
                        <div class="swiper-slide__content">
                            <div>
                                <img src="{{ asset('assets/img/luxury-hotel-room.jpg') }}" alt="Luxury room"
                                    class="swiper-slide__image--slider">

                            </div>
                            <div class="swiper-slide__container">
                                <h2 class="swiper-slide__title">Colonial Luxure Room</h2>
                                <p class="swiper-slide__description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                <p class="swiper-slide__price">$345<span>/Night</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/img/rooms-rules.png') }}" alt="Room 1"
                            class="swiper-slide__image--rules">
                        <div class="swiper-slide__content">
                            <img src="{{ asset('assets/img/organic-luxe.jpg') }}" alt="Luxury room"
                                class="swiper-slide__image--slider">
                            <div class="swiper-slide__container">
                                <h2 class="swiper-slide__title">Organic Luxure Room</h2>
                                <p class="swiper-slide__description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                <p class="swiper-slide__price">$345/<span>/Night</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('assets/img/rooms-rules.png') }}" alt="Room 1"
                            class="swiper-slide__image--rules">
                        <div class="swiper-slide__content">
                            <img src="{{ asset('assets/img/minimalist-luxe.jpg') }}" alt="Luxury room"
                                class="swiper-slide__image--slider">
                            <div class="swiper-slide__container">
                                <h2 class="swiper-slide__title">Minimalist Luxure Room</h2>
                                <p class="swiper-slide__description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                <p class="swiper-slide__price">$345/<span>/Night</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <section class="video">
        <div class="video__container">
            <div class="video__content">
                <p class="video__subtitle">INTRO VIDEO</p>
                <h1 class="video__title">Meet With Our Luxury Place.</h1>
                <p class="video__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.
                </p>
            </div>
            <div class="video__actions">
                <iframe src="https://www.youtube-nocookie.com/embed/Bu3Doe45lcU?si=GeWwCXl-j2nWYUd7"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

            </div>
            <button class="video__button--book">BOOK NOW</button>
    </section>
    <section class="features">
        <div class="features__container">
            <div class="features__header">
                <p class="features__subtitle">FACILITIES</p>
                <h1 class="features__title">Core Features</h1>
            </div>
        </div>
        <!-- Slider main container -->
        <div class="swiper features-swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper features-swiper__wrapper">
                <!-- Slides -->
                <div class="swiper-slide features-swiper__slide">
                    <img src="{{ asset('assets/svg/team-icon.svg') }}" alt="Room 1"
                        class="features-swiper__image features-swiper__image--transparent">
                    <div class="features-swiper__content">
                        <img src="{{ asset('assets/svg/pick-stars.svg') }}" alt="Luxury room"
                            class="features-swiper__icon">
                        <div class="features-swiper__text-container">
                            <h2 class="features-swiper__title">Have High Rating</h2>
                            <p class="features-swiper__description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide features-swiper__slide">
                    <img src="{{ asset('assets/svg/team-icon.svg') }}" alt="Room 1"
                        class="features-swiper__image features-swiper__image--transparent">
                    <div class="features-swiper__content">
                        <img src="{{ asset('assets/svg/pick-stars.svg') }}" alt="Luxury room"
                            class="features-swiper__icon">
                        <div class="features-swiper__text-container">
                            <h2 class="features-swiper__title">Have High Rating</h2>
                            <p class="features-swiper__description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide features-swiper__slide">
                    <img src="{{ asset('assets/svg/team-icon.svg') }}" alt="Room 1"
                        class="features-swiper__image features-swiper__image--transparent">
                    <div class="features-swiper__content">
                        <img src="{{ asset('assets/svg/pick-stars.svg') }}" alt="Luxury room"
                            class="features-swiper__icon">
                        <div class="features-swiper__text-container">
                            <h2 class="features-swiper__title">Have High Rating</h2>
                            <p class="features-swiper__description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination features-swiper__pagination"></div>
        </div>


    </section>
    <section class="menu">
        <div class="menu__container">
            <div class="menu__header">
                <img src="{{ asset('assets/svg/donut.svg') }}" alt="Menu Icon" class="menu__icon">
                <p class="menu__subtitle">MENU</p>
                <h1 class="menu__title">Our Foods Menu</h1>
            </div>
            <div class="swiper foods-swiper">
                <div class="swiper-wrapper foods-swiper__wrapper">
                    <!-- Grupo vertical 1 -->
                    <div class="swiper-slide foods-swiper__slide">
                        <div class="foods-swiper__vertical-group">
                            <!-- Item 1 -->
                            <div class="foods-swiper__item">
                                <img src="{{ asset('assets/img/eggs-bacon.jpg') }}" alt="Eggs and Bacon"
                                    class="foods-swiper__image">
                                <div class="foods-swiper__text-container">
                                    <h3 class="foods-swiper__title">Eggs & Bacon</h3>
                                    <p class="foods-swiper__description">Lorem ipsum dolor sit amet, consectetur adip
                                        isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="foods-swiper__item">
                                <img src="{{ asset('assets/img/eggs-bacon.jpg') }}" alt="Tea or Coffee"
                                    class="foods-swiper__image">
                                <div class="foods-swiper__text-container">
                                    <h3 class="foods-swiper__title">Tea or Coffee</h3>
                                    <p class="foods-swiper__description">Lorem ipsum dolor sit amet, consectetur adip
                                        isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="foods-swiper__item">
                                <img src="{{ asset('assets/img/eggs-bacon.jpg') }}" alt="Chia Oatmeal"
                                    class="foods-swiper__image">
                                <div class="foods-swiper__text-container">
                                    <h3 class="foods-swiper__title">Chia Oatmeal</h3>
                                    <p class="foods-swiper__description">Lorem ipsum dolor sit amet, consectetur adip
                                        isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Grupo vertical 2 (siguiente conjunto de 3 items) -->
                    <div class="swiper-slide foods-swiper__slide">
                        <div class="foods-swiper__vertical-group">
                            <!-- Items 4-6 -->
                            <!-- Item 1 -->
                            <div class="foods-swiper__item">
                                <img src="{{ asset('assets/img/eggs-bacon.jpg') }}" alt="Eggs and Bacon"
                                    class="foods-swiper__image">
                                <div class="foods-swiper__text-container">
                                    <h3 class="foods-swiper__title">Eggs & Bacon2</h3>
                                    <p class="foods-swiper__description">Lorem ipsum dolor sit amet, consectetur adip
                                        isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="foods-swiper__item">
                                <img src="{{ asset('assets/img/eggs-bacon.jpg') }}" alt="Tea or Coffee"
                                    class="foods-swiper__image">
                                <div class="foods-swiper__text-container">
                                    <h3 class="foods-swiper__title">Tea or Coffee2</h3>
                                    <p class="foods-swiper__description">Lorem ipsum dolor sit amet, consectetur adip
                                        isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="foods-swiper__item">
                                <img src="{{ asset('assets/img/eggs-bacon.jpg') }}" alt="Chia Oatmeal"
                                    class="foods-swiper__image">
                                <div class="foods-swiper__text-container">
                                    <h3 class="foods-swiper__title">Chia Oatmeal2</h3>
                                    <p class="foods-swiper__description">Lorem ipsum dolor sit amet, consectetur adip
                                        isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Navigation buttons -->
                <div class="swiper-button-prev foods-swiper__button-prev"></div>
                <div class="swiper-button-next foods-swiper__button-next"></div>
            </div>


        </div>

    </section>
    <section class="photos">
        <div class="photos__container">
            <!-- Slider main container -->
            <div class="swiper photos-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper photos-swiper__wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide photos-swiper__slide">
                        <img src="{{ asset('assets/img/eggs-bacon.jpg') }}" alt="Room 1"
                            class="photos-swiper__image photos-swiper__image--transparent">
                    </div>

                    <div class="swiper-slide photos-swiper__slide">
                        <img src="{{ asset('assets/img/eggs-bacon.jpg') }}" alt="Room 1"
                            class="photos-swiper__image photos-swiper__image--transparent">
                    </div>

                    <div class="swiper-slide photos-swiper__slide">
                        <img src="{{ asset('assets/img/eggs-bacon.jpg') }}" alt="Room 1"
                            class="photos-swiper__image photos-swiper__image--transparent">
                    </div>
                </div>

                <!-- If we need pagination -->
                <div class="swiper-pagination photos-swiper__pagination"></div>
            </div>
        </div>
    </section>
    <section class="stats">
        <div class="stats__container">
            <div class="stats__container--projects">
                <img src="{{ asset('assets/svg/rocket.svg') }}" alt="Rocket Icon" class="stats__icon">
                <p class="stats__container--projects-number">84k<span>+</span></p>
                <p class="stats__container--projects-title">Projects are Completed</p>
            </div>
            <div class="stats__container--backers"><img src="{{ asset('assets/svg/team-icon.svg') }}"
                    alt="Projects Icon" class="stats__icon">
                <p class="stats__container--projects-number">10M<span>+</span></p>
                <p class="stats__container--projects-title">Active Backers Around World</p>
            </div>
            <div class="stats__container--categories"><img src="{{ asset('assets/svg/grow.svg') }}" alt="Projects Icon"
                    class="stats__icon">
                <p class="stats__container--projects-number">02k<span>+</span></p>
                <p class="stats__container--projects-title">Categories Served</p>
            </div>
            <div class="stats__container--raised"><img src="{{ asset('assets/svg/book.svg') }}" alt="Projects Icon"
                    class="stats__icon">
                <p class="stats__container--projects-number">100M<span>+</span></p>
                <p class="stats__container--projects-title">Idea Raised Funds</p>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer__container">
            <div class="footer__social">
                <img src="{{ asset('assets/svg/footer-logo.svg') }}" alt="Footer Logo" class="footer__logo">
                <p class="footer__social--text">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing
                    eius mod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris
                    nisi.</p>
                <div class="footer__social-icons">
                    <div class="footer__social-icons--container"><img src="{{ asset('assets/svg/facebook.svg') }}"
                            alt="Facebook" class="footer__social-icon"></div>
                    <div class="footer__social-icons--container"><img src="{{ asset('assets/svg/twitter.svg') }}"
                            alt="Twitter" class="footer__social-icon"></div>
                    <div class="footer__social-icons--container"><img src="{{ asset('assets/svg/behance.svg') }}"
                            alt="Behance" class="footer__social-icon"></div>
                    <div class="footer__social-icons--container"><img src="{{ asset('assets/svg/linkedin.svg') }}"
                            alt="LinkedIn" class="footer__social-icon"></div>
                    <div class="footer__social-icons--container"><img src="{{ asset('assets/svg/youtube.svg') }}"
                            alt="Youtube" class="footer__social-icon"></div>
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
                    <img src="{{ asset('assets/svg/phone.svg') }}">
                    <div class="footer__contact--data--wrapper">
                        <p class="footer__contact--data--first">Phone Number</p>
                        <p class="footer__contact--data--second">+987 876 765 76 577</p>
                    </div>
                </div>
                <div class="footer__contact--data--container">
                    <img src="{{ asset('assets/svg/email.svg') }}">
                    <div class="footer__contact--data--wrapper">
                        <p class="footer__contact--data--first">Phone Number</p>
                        <p class="footer__contact--data--second">+987 876 765 76 577</p>
                    </div>
                </div>
                <div class="footer__contact--data--container">
                    <img src="{{ asset('assets/svg/map.svg') }}">
                    <div class="footer__contact--data--wrapper">
                        <p class="footer__contact--data--first">Phone Number</p>
                        <p class="footer__contact--data--second">+987 876 765 76 577</p>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <p class="footer__copyright--text">Copyright By@Example - 2025</p>
                <p class="footer__copyright--final">Terms of use &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                    Privacy Environmental Policy</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src='/js/availability.js'></script>
    <script src='/js/swiper.js'></script>
</body>

</html>
@endsection
