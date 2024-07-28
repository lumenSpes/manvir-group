@extends('layout.layout')
@section('content')
{{-- hero carousel start --}}
<div class="autoplay">
    <div class="slider_group position-relative z-0">
        <div class="hero_carousel_overlay"></div>
        <img src="{{asset('assets/images/8886.jpg')}}" class="hero_carousel_img d-block w-100" alt="slider">
        <div class="slider_content position-absolute z-3 top-0 left-0 d-flex justify-content-center align-items-center w-100 h-100">
            <div class="d-flex flex-column align-items-center">
                <p class="hero_carousel_text text-white">Style Redefined. Confidence Guaranteed.</p>
                <a href="#" class="hero_carousel_btn">Get Started &rarr;</a>
            </div>
        </div>
    </div>
    <div class="slider_group position-relative z-0">
        <div class="hero_carousel_overlay"></div>
        <img src="{{asset('assets/images/8886.jpg')}}" class="hero_carousel_img d-block w-100" alt="slider">
        <div class="slider_content position-absolute z-3 top-0 left-0 d-flex justify-content-center align-items-center w-100 h-100">
            <div class="d-flex flex-column align-items-center">
                <p class="hero_carousel_text text-white">Lorem ipsum dolor sit amet.</p>
                <a href="#" class="hero_carousel_btn">Get Started &rarr;</a>
            </div>
        </div>
    </div>
    <div class="slider_group position-relative z-0">
        <div class="hero_carousel_overlay"></div>
        <img src="{{asset('assets/images/8886.jpg')}}" class="hero_carousel_img d-block w-100" alt="slider">
        <div class="slider_content position-absolute z-3 top-0 left-0 d-flex justify-content-center align-items-center w-100 h-100">
            <div class="d-flex flex-column align-items-center">
                <p class="hero_carousel_text text-white">Lorem ipsum dolor sit amet.</p>
                <a href="#" class="hero_carousel_btn">Get Started &rarr;</a>
            </div>
        </div>
    </div>
</div>
{{-- hero carousel start --}}

{{-- services start --}}
<section>
    <p class="tiny_section_title text-center">Services</p>
    <h3 class="section_main_title">What Do we offer?</h3>
    <p class="service_mini_description text-md-center text-justify px-1 mx-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <div class="row row-cols-md-2 row-cols-lg-3 row-cols-1 g-5 container max-width mx-auto service_catelog_container">
        <div class="col">
            <div class="d-flex flex-column align-items-center gap-4">
                <div class="service_catalog">
                    <svg height="40px" width="50px" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"/></svg>
                </div>
                <h5 class="service_catalog_title">Lorem ipsum</h5>
                <p class="service_catalog_description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.
                </p>
            </div>
        </div>
        <div class="col">
            <div class="d-flex flex-column align-items-center gap-4">
                <div class="service_catalog">
                    <svg height="40px" width="50px" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M160 0a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM88 384H70.2c-10.9 0-18.6-10.7-15.2-21.1L93.3 248.1 59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l53.6-89.2c20.3-33.7 56.7-54.3 96-54.3h11.6c39.3 0 75.7 20.6 96 54.3l53.6 89.2c9.1 15.1 4.2 34.8-10.9 43.9s-34.8 4.2-43.9-10.9l-33.9-56.3L265 362.9c3.5 10.4-4.3 21.1-15.2 21.1H232v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V384H152v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V384z"/></svg>
                </div>
                <h5 class="service_catalog_title">Lorem ipsum</h5>
                <p class="service_catalog_description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.
                </p>
            </div>
        </div>
        <div class="col">
            <div class="d-flex flex-column align-items-center gap-4">
                <div class="service_catalog">
                    <svg height="40px" width="50px" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M96 128a128 128 0 1 0 256 0A128 128 0 1 0 96 128zm94.5 200.2l18.6 31L175.8 483.1l-36-146.9c-2-8.1-9.8-13.4-17.9-11.3C51.9 342.4 0 405.8 0 481.3c0 17 13.8 30.7 30.7 30.7H162.5c0 0 0 0 .1 0H168 280h5.5c0 0 0 0 .1 0H417.3c17 0 30.7-13.8 30.7-30.7c0-75.5-51.9-138.9-121.9-156.4c-8.1-2-15.9 3.3-17.9 11.3l-36 146.9L238.9 359.2l18.6-31c6.4-10.7-1.3-24.2-13.7-24.2H224 204.3c-12.4 0-20.1 13.6-13.7 24.2z"/></svg>
                </div>
                <h5 class="service_catalog_title">Lorem ipsum</h5>
                <p class="service_catalog_description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.
                </p>
            </div>
        </div>
    </div>
</section>
{{-- services end --}}
{{-- achievements section start --}}
<section class="achievements">
    <div class=""></div>
</section>
{{-- achievements section end --}}
@endsection
