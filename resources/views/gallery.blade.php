@extends('layout.layout')
@section('content')
{{-- banner section start --}}
<div class="gallery_banner position-relative z-0">
    <div class="gallery_overlay"></div>
    <div class="gallery-item">
        <img class="gallery_banner_img" src="{{ asset('assets/images/gallery.jpg') }}" alt="">
    </div>
    <div class="position-absolute top-0 left-0 h-100 w-100 d-flex justify-content-center align-items-center z-5">
        <h3 class="gallery_banner_title">Gallery</h3>
    </div>
</div>
{{-- banner section end --}}
{{-- gallery start --}}
<section>
    <div class="container max-width">
        <div class="gallery_img_container">
            <div class="gallery-item">
                <img class="gallery_img" src="{{ asset('assets/images/dress-4.webp') }}" alt="">
                <img class="gallery_img" src="{{ asset('assets/images/dress-1.webp') }}" alt="">
                <img class="gallery_img" src="{{ asset('assets/images/gallery-dress-2.png') }}" alt="">
                <img class="gallery_img" src="{{ asset('assets/images/dress-3.webp') }}" alt="">
            </div>
            <div class="gallery-item">
                <img class="gallery_img" src="{{ asset('assets/images/dress-4.webp') }}" alt="">
                <img class="gallery_img" src="{{ asset('assets/images/gallery-dress-2.png') }}" alt="">
                <img class="gallery_img" src="{{ asset('assets/images/dress-1.webp') }}" alt="">
                <img class="gallery_img" src="{{ asset('assets/images/dress-3.webp') }}" alt="">
            </div>
            <div class="gallery-item">
                <img class="gallery_img" src="{{ asset('assets/images/gallery-dress-2.png') }}" alt="">
                <img class="gallery_img" src="{{ asset('assets/images/dress-4.webp') }}" alt="">
                <img class="gallery_img" src="{{ asset('assets/images/dress-1.webp') }}" alt="">
                <img class="gallery_img" src="{{ asset('assets/images/dress-3.webp') }}" alt="">
            </div>
            <div class="gallery-item">
                <img class="gallery_img" src="{{ asset('assets/images/dress-4.webp') }}" alt="">
                <img class="gallery_img" src="{{ asset('assets/images/dress-1.webp') }}" alt="">
                <img class="gallery_img" src="{{ asset('assets/images/dress-3.webp') }}" alt="">
                <img class="gallery_img" src="{{ asset('assets/images/gallery-dress-2.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
{{-- gallery end --}}
@endsection
