@extends('layout.layout')
@section('content')
{{-- about us banner start --}}
<div class="gallery_banner position-relative z-0">
    <div class="gallery_overlay"></div>
    <div class="gallery-item">
        <img class="gallery_banner_img" src="{{ asset('assets/images/aboutus.jpg') }}" alt="">
    </div>
    <div class="position-absolute top-0 left-0 h-100 w-100 d-flex justify-content-center align-items-center z-5">
        <h3 class="gallery_banner_title">about us</h3>
    </div>
</div>
{{-- about us banner end --}}
{{-- about us start --}}
<section class="container max-width about_us_container">
    <div class="row row-cols-1 row-cols-md-2 about_us_section gy-4">
        <div class="col">
            <h3 class="about_us_heading">our History</h3>
            <p class="about_us_description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus.
            </p>
            <p class="about_us_description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis s
            </p>
        </div>
        <div class="col">
            <img class="about_us_img" src="{{ asset('assets/images/team.jpg') }}" alt="">
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 gy-4">
        <div class="col">
            <h3 class="about_us_heading">mission</h3>
            <p class="about_us_description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus.
            </p>
        </div>
        <div class="col">
            <h3 class="about_us_heading">vision</h3>
            <p class="about_us_description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus.
            </p>
        </div>
    </div>
</section>
{{-- about us end --}}
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
{{-- management strart --}}
<section class="home_management about_team">
    <h3 class="management_main_title text-black">our team</h3>
    {{-- <p class="management_short_description">Lorem ipsum dolor sit amet, sit el consectetur adipiscing elit. Integer nec elit  odio.</p> --}}
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
