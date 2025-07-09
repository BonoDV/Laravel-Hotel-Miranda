@extends('layouts.app')
@vite(['public/assets/sass/contact/contact_styles.scss', 'resources/js/app.js'])
@section('content')

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Offers | Hotel Miranda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/contact_styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

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
<section class="contact-hero">
    <div class="contact-hero__container">
        <div class="contact-hero__header">
            <p class="contact-hero__subtitle">THE ULTIMATE LUXURY</p>
            <h1 class="contact-hero__title">New Details</h1>
        </div>
    </div>
    <div class="contact-hero__position">
        <p>Home | <span>Blog</span></p>
    </div>
</section>
<section class="contact-info">
    <div class="contact-info__item">
        <img class="contact-info__icon" src="{{ asset('assets/svg/email.svg') }}" alt="Hotel Address" />
        <div class="contact-info__text">
            <span class="contact-info__title">Hotel Address</span>
            <span class="contact-info__desc">19/A, Cirikon City hall Tower<br />New York, NYC</span>
        </div>
        <img class="contact-info__number" src="{{ asset('assets/img/01.png') }}" alt="01" />
    </div>
    <div class="contact-info__item">
        <img class="contact-info__icon" src="{{ asset('assets/svg/phone.svg') }}" alt="Phone Number" />
        <div class="contact-info__text">
            <span class="contact-info__title">Phone Number</span>
            <span class="contact-info__desc">+ 97656 8675 7864 7<br />+ 876 766 8675 765 6</span>
        </div>
        <img class="contact-info__number" src="{{ asset('assets/img/02.png') }}" alt="02" />
    </div>
    <div class="contact-info__item">
        <img class="contact-info__icon" src="{{ asset('assets/svg/map.svg') }}" alt="Email" />
        <div class="contact-info__text">
            <span class="contact-info__title">Email</span>
            <span class="contact-info__desc">info@webmail.com<br />jobs.webmail@mail.com</span>
        </div>
        <img class="contact-info__number" src="{{ asset('assets/img/03.png') }}" alt="03" />
    </div>
    <div
        style="width: 100%; max-width: 350px; height: 180px; background: #ddd; margin: 2rem auto 0 auto; border-radius: 4px;">
    </div>
</section>
<section class="contact-form">
    <form>
        <div class="contact-form__group">
            <img class="contact-form__icon" src="{{ asset('assets/svg/IconProfile.svg') }}" alt="Name" />
            <input class="contact-form__input" type="text" placeholder="Your full name" required />
        </div>
        <div class="contact-form__group">
            <img class="contact-form__icon" src="{{ asset('assets/svg/phone.svg') }}" alt="Phone" />
            <input class="contact-form__input" type="tel" placeholder="Add phone number" required />
        </div>
        <div class="contact-form__group">
            <img class="contact-form__icon" src="{{ asset('assets/svg/email.svg') }}" alt="Email" />
            <input class="contact-form__input" type="email" placeholder="Enter email address" required />
        </div>
        <div class="contact-form__group">
            <img class="contact-form__icon" src="{{ asset('assets/svg/locker.svg') }}" alt="Subject" />
            <input class="contact-form__input" type="text" placeholder="Enter subject" required />
        </div>
        <div class="contact-form__group">
            <img class="contact-form__icon" src="{{ asset('assets/svg/grow.svg') }}" alt="Message" />
            <textarea class="contact-form__textarea" placeholder="Enter message" required></textarea>
        </div>
        <button class="contact-form__button" type="submit">SEND</button>
    </form>
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
