@extends('layout.layout')
@section('content')
    {{-- hero carousel start --}}
    <div class="autoplay">
        <div class="slider_group position-relative z-0">
            <div class="hero_carousel_overlay"></div>
            <img src="{{ asset('assets/images/8886.jpg') }}" class="hero_carousel_img d-block w-100" alt="slider">
            <div
                class="slider_content position-absolute z-3 top-0 left-0 d-flex justify-content-center align-items-center w-100 h-100">
                <div class="d-flex flex-column align-items-center">
                    <p class="hero_carousel_text text-white">Style Redefined. Confidence Guaranteed.</p>
                    <a href="#" class="hero_carousel_btn">Get Started &rarr;</a>
                </div>
            </div>
        </div>
        <div class="slider_group position-relative z-0">
            <div class="hero_carousel_overlay"></div>
            <img src="{{ asset('assets/images/8886.jpg') }}" class="hero_carousel_img d-block w-100" alt="slider">
            <div
                class="slider_content position-absolute z-3 top-0 left-0 d-flex justify-content-center align-items-center w-100 h-100">
                <div class="d-flex flex-column align-items-center">
                    <p class="hero_carousel_text text-white">Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="hero_carousel_btn">Get Started &rarr;</a>
                </div>
            </div>
        </div>
        <div class="slider_group position-relative z-0">
            <div class="hero_carousel_overlay"></div>
            <img src="{{ asset('assets/images/8886.jpg') }}" class="hero_carousel_img d-block w-100" alt="slider">
            <div
                class="slider_content position-absolute z-3 top-0 left-0 d-flex justify-content-center align-items-center w-100 h-100">
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
        <p class="service_mini_description text-md-center text-justify px-1 mx-md-0">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="row row-cols-md-2 row-cols-lg-3 row-cols-1 g-5 container max-width mx-auto service_catelog_container">
            <div class="col">
                <div class="d-flex flex-column align-items-center gap-4">
                    <div class="service_catalog">
                        <svg height="40px" width="50px" fill="#fff" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z" />
                        </svg>
                    </div>
                    <h5 class="service_catalog_title">Lorem ipsum</h5>
                    <p class="service_catalog_description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in culpa qui officia deserunt.
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column align-items-center gap-4">
                    <div class="service_catalog">
                        <svg height="40px" width="50px" fill="#fff" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M160 0a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM88 384H70.2c-10.9 0-18.6-10.7-15.2-21.1L93.3 248.1 59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l53.6-89.2c20.3-33.7 56.7-54.3 96-54.3h11.6c39.3 0 75.7 20.6 96 54.3l53.6 89.2c9.1 15.1 4.2 34.8-10.9 43.9s-34.8 4.2-43.9-10.9l-33.9-56.3L265 362.9c3.5 10.4-4.3 21.1-15.2 21.1H232v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V384H152v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V384z" />
                        </svg>
                    </div>
                    <h5 class="service_catalog_title">Lorem ipsum</h5>
                    <p class="service_catalog_description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in culpa qui officia deserunt.
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column align-items-center gap-4">
                    <div class="service_catalog">
                        <svg height="40px" width="50px" fill="#fff" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M96 128a128 128 0 1 0 256 0A128 128 0 1 0 96 128zm94.5 200.2l18.6 31L175.8 483.1l-36-146.9c-2-8.1-9.8-13.4-17.9-11.3C51.9 342.4 0 405.8 0 481.3c0 17 13.8 30.7 30.7 30.7H162.5c0 0 0 0 .1 0H168 280h5.5c0 0 0 0 .1 0H417.3c17 0 30.7-13.8 30.7-30.7c0-75.5-51.9-138.9-121.9-156.4c-8.1-2-15.9 3.3-17.9 11.3l-36 146.9L238.9 359.2l18.6-31c6.4-10.7-1.3-24.2-13.7-24.2H224 204.3c-12.4 0-20.1 13.6-13.7 24.2z" />
                        </svg>
                    </div>
                    <h5 class="service_catalog_title">Lorem ipsum</h5>
                    <p class="service_catalog_description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in culpa qui officia deserunt.
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- services end --}}
    {{-- achievements section start --}}
    <section class="achievements z-0">
        <div class="achievements_overlay"></div>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4 g-lg-0 container max-width mx-auto py-5 z-5">
            <div class="d-flex flex-column align-items-center gap-4">
                <div>
                    <svg height="75px" width="75px" fill="#fff" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm177.6 62.1C192.8 334.5 218.8 352 256 352s63.2-17.5 78.4-33.9c9-9.7 24.2-10.4 33.9-1.4s10.4 24.2 1.4 33.9c-22 23.8-60 49.4-113.6 49.4s-91.7-25.5-113.6-49.4c-9-9.7-8.4-24.9 1.4-33.9s24.9-8.4 33.9 1.4zm40-89.3l0 0 0 0-.2-.2c-.2-.2-.4-.5-.7-.9c-.6-.8-1.6-2-2.8-3.4c-2.5-2.8-6-6.6-10.2-10.3c-8.8-7.8-18.8-14-27.7-14s-18.9 6.2-27.7 14c-4.2 3.7-7.7 7.5-10.2 10.3c-1.2 1.4-2.2 2.6-2.8 3.4c-.3 .4-.6 .7-.7 .9l-.2 .2 0 0 0 0 0 0c-2.1 2.8-5.7 3.9-8.9 2.8s-5.5-4.1-5.5-7.6c0-17.9 6.7-35.6 16.6-48.8c9.8-13 23.9-23.2 39.4-23.2s29.6 10.2 39.4 23.2c9.9 13.2 16.6 30.9 16.6 48.8c0 3.4-2.2 6.5-5.5 7.6s-6.9 0-8.9-2.8l0 0 0 0zm160 0l0 0-.2-.2c-.2-.2-.4-.5-.7-.9c-.6-.8-1.6-2-2.8-3.4c-2.5-2.8-6-6.6-10.2-10.3c-8.8-7.8-18.8-14-27.7-14s-18.9 6.2-27.7 14c-4.2 3.7-7.7 7.5-10.2 10.3c-1.2 1.4-2.2 2.6-2.8 3.4c-.3 .4-.6 .7-.7 .9l-.2 .2 0 0 0 0 0 0c-2.1 2.8-5.7 3.9-8.9 2.8s-5.5-4.1-5.5-7.6c0-17.9 6.7-35.6 16.6-48.8c9.8-13 23.9-23.2 39.4-23.2s29.6 10.2 39.4 23.2c9.9 13.2 16.6 30.9 16.6 48.8c0 3.4-2.2 6.5-5.5 7.6s-6.9 0-8.9-2.8l0 0 0 0 0 0z" />
                    </svg>
                </div>
                <p class="achievements_digits">1500+</p>
                <p class="achievements_slogan">Happy Customers</p>
            </div>
            <div class="d-flex flex-column align-items-center gap-4">
                <div>
                    <svg height="75px" width="75px" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path
                            d="M21 13V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V13H2V11L3 6H21L22 11V13H21ZM5 13V19H19V13H5ZM6 14H14V17H6V14ZM3 3H21V5H3V3Z">
                        </path>
                    </svg>
                </div>
                <p class="achievements_digits">20+</p>
                <p class="achievements_slogan">Outlets</p>
            </div>
            <div class="d-flex flex-column align-items-center gap-4">
                <div>
                    <svg height="75px" width="75px" fill="#fff" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z" />
                    </svg>
                </div>
                <p class="achievements_digits">400+</p>
                <p class="achievements_slogan">Employees</p>
            </div>
            <div class="d-flex flex-column align-items-center gap-4">
                <div>
                    <svg height="75px" width="75px" fill="#fff" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z" />
                    </svg>
                </div>
                <p class="achievements_digits">250+</p>
                <p class="achievements_slogan">Products</p>
            </div>
        </div>
    </section>
    {{-- achievements section end --}}
    {{-- about us start --}}
    <section>
        <h3 class="about_us_title">Learn more about us</h3>
        <div class="row row-cols-1 row-cols-lg-2 g-4 g-lg-0 container max-width mx-auto">
            <div class="col">
                <img class="about_us_img" src="{{ asset('assets/images/3513.jpg') }}" alt="about">
            </div>
            <div class="col">
                <p class="tiny_section_title p-0 about_us_tiny_title">about us</p>
                <p class="about_us_desc_1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.
                </p>
                <p class="about_us_desc_2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.
                </p>
                <div>
                    <a class="about_us_btn" href="#">Read More</a>
                </div>
            </div>
        </div>
    </section>
    {{-- about us end --}}

    {{-- products start --}}
    <section class="products">
        <p class="tiny_section_title p-0 about_us_tiny_title text-center">Products</p>
        <h3 class="products_main_title">An insight of our products</h3>
        <div class="container max-width home_products_container">
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-5">
                <div class="col">
                    <div>
                        <img class="home_product_img" src="{{asset('assets/images/0de2426c473abd7d24c8a91186c35e5c.webp')}}" alt="">
                        <p class="home_product_title">Meraki</p>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <img class="home_product_img" src="{{asset('assets/images/1H8A6389.webp')}}" alt="">
                        <p class="home_product_title">Meraki</p>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <img class="home_product_img" src="{{asset('assets/images/9_678267ba-645f-405c-b493-692e528545fd.webp')}}" alt="">
                        <p class="home_product_title">Meraki</p>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <img class="home_product_img" src="{{asset('assets/images/9e2cadb36342a3f8bcdb7e2261c73d9e.webp')}}" alt="">
                        <p class="home_product_title">Meraki</p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a class="home_products_btn" href="#">View All Products</a>
            </div>
        </div>
    </section>
    {{-- products end --}}
    {{-- management strart --}}
    <section class="home_management">
        <h3 class="management_main_title">Meet the management</h3>
        <p class="management_short_description">Lorem ipsum dolor sit amet, sit el consectetur adipiscing elit. Integer nec elit  odio.</p>
        <div class="container max-width">
            <div class="home_management_slider position-relative">
                <div class="d-flex flex-column align-items-center gap-2">
                    <img class="home_management_img" src="{{asset('assets/images/ceo.jpg')}}" alt="management">
                    <p class="home_management_name">john doe</p>
                    <p class="home_management_position">md</p>
                    <p>ceo@manvirgroup.com</p>
                    <div class="home_management_bar"></div>
                    <p class="home_management_description">
                        Lorem ipsum dolor sit amet, sit el consectetur adipiscing elit. Integer nec elit  odio.
                    </p>
                </div>
                <div class="d-flex flex-column align-items-center gap-2">
                    <img class="home_management_img" src="{{asset('assets/images/ceo.jpg')}}" alt="management">
                    <p class="home_management_name">john doe</p>
                    <p class="home_management_position">md</p>
                    <p>ceo@manvirgroup.com</p>
                    <div class="home_management_bar"></div>
                    <p class="home_management_description">
                        Lorem ipsum dolor sit amet, sit el consectetur adipiscing elit. Integer nec elit  odio.
                    </p>
                </div>
                <div class="d-flex flex-column align-items-center gap-2">
                    <img class="home_management_img" src="{{asset('assets/images/ceo.jpg')}}" alt="management">
                    <p class="home_management_name">john doe</p>
                    <p class="home_management_position">md</p>
                    <p>ceo@manvirgroup.com</p>
                    <div class="home_management_bar"></div>
                    <p class="home_management_description">
                        Lorem ipsum dolor sit amet, sit el consectetur adipiscing elit. Integer nec elit  odio.
                    </p>
                </div>
                <div class="d-flex flex-column align-items-center gap-2">
                    <img class="home_management_img" src="{{asset('assets/images/ceo.jpg')}}" alt="management">
                    <p class="home_management_name">john doe</p>
                    <p class="home_management_position">md</p>
                    <p>ceo@manvirgroup.com</p>
                    <div class="home_management_bar"></div>
                    <p class="home_management_description">
                        Lorem ipsum dolor sit amet, sit el consectetur adipiscing elit. Integer nec elit  odio.
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- management end --}}
@endsection
