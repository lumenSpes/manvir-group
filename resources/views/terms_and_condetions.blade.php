@extends('layout.layout')
@section('content')
{{-- about us banner start --}}
<div class="gallery_banner position-relative z-0">
    <div class="gallery_overlay"></div>
    <div class="gallery-item">
        <img class="gallery_banner_img" src="{{ asset('assets/images/terms.jpg') }}" alt="">
    </div>
    <div class="position-absolute top-0 left-0 h-100 w-100 d-flex justify-content-center align-items-center z-5">
        <h3 class="gallery_banner_title">terms and condetions</h3>
    </div>
</div>
{{-- about us banner end --}}
{{-- terms and condetions start --}}
<section class="terms_and_condetions">
    <div class="container max-width">
        <div class="privacy_policy_item">
            <h6 class="privacy_policy_title">Terms of Service</h6>
            <p class="privacy_policy_description">Last updated: May 9, 2024</p>
            <p class="privacy_policy_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum.
            </p>
        </div>
        <ol>
            <li>
                <div class="privacy_policy_item">
                    <h6 class="privacy_policy_title">The basics</h6>
                    <p class="privacy_policy_description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Curabitur pretium
                    </p>
                    <p class="privacy_policy_description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Curabitur pretium tincidunt lacus. Nulla gravida orci a odio.
                    </p>
                </div>
            </li>
            <li>
                <div class="privacy_policy_item">
                    <h6 class="privacy_policy_title">Use of the Service</h6>
                    <p class="privacy_policy_description">
                        We may update this privacy policy from time to time to reflect our current practice and ensure compliance with applicable laws. When we post changes to this policy, we will revise the “Last Updated” date at the top of this policy. If we make any material changes to the way we collect, use, store and/or share your personal data, we will take appropriate measures to notify you. We recommend that you check this page from time to time to inform yourself of any changes.
                    </p>
                </div>
            </li>
        </ol>
    </div>
</section>
{{-- terms and condetions end --}}
@endsection