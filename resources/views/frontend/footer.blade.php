
 <!--Testimonial-->
 @if (count($testimonials) > 0)
    <div class="container-fluid testimonial pad-lr">
        <div class="row py-5">
            <div class="col-12">
                <h1 class="poppin-bold text-capitalize text-center my-2">Some <span class="text-blue">word</span> form
                    <span class="text-blue">our clients</span></h1>
            </div>
            <div class="col-12">
                <div class="regular slider">

                    @foreach ($testimonials as $testimonial)
                        <div class="testimonial-slide text-center mt-4">
                            <p class="pad-4">{{ strip_tags($testimonial->description) }}</p>
                            <div class="text-center mt-3">
                                <img src="./images/s1.png" alt="">
                                <p class="poppin-semibold">{{ $testimonial->name }}</p>
                                <small class="text-uppercase">- {{ $testimonial->location }}</small>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
 @endif


<!--Brand-->
@if (count($brands) > 0)
    <div class="container-fluid brands pad-lr">
        <div class="row py-4">
            <div class="col-12">
                <div class="brand-list slider text-center">
                    @foreach ($brands as $brand)
                        <div class="brand-img">
                            <img class="d-block w-100"  src="{{ asset('uploads/media-management/brands/'.$brand->attachment) }}" alt="brand-img" width="200">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif


<!--Footer-->
<footer>
    <div class="container-fluid pad-lr">
        <div class="row pt-5">
            <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                <img src="./images/logo-2.png" alt="logo">
                <ul class="mt-3">
                    <li class="d-block mr-4 mt-3">
                        <a class="text-gry" href=""><span class="icon-phone mr-2"></span>{{ $setting->site_phone1 }}</a>
                    </li>
                    <li class="d-block mr-4 mt-3">
                            <a class="text-gry" href=""><span class="icon-phone mr-2"></span>{{ $setting->site_phone2 }}</a>
                        </li>
                    <li class="d-block mr-4 mt-3">
                        <a class="text-gry" href=""><span class="icon-location mr-2"></span>{{ $setting->site_address }}</a>
                    </li>
                    <li class="d-block mr-4 mt-3">
                        <a class="text-gry" href=""><span class="icon-envelop mr-2"></span>{{ $setting->site_email }}</a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                <p class="link-head poppin-bold text-white">Our Services</p>
                <ul class="mt-3 list">
                    <li class="d-block mr-4 ">
                        <a class="text-gry" href="{{ route('services.index') }}">> Air Cargo Export / Import</a>
                    </li>
                    <li class="d-block mr-4 ">
                        <a class="text-gry" href="{{ route('services.index') }}">> Sea Cargo Export / Import</a>
                    </li>
                    <li class="d-block mr-4 ">
                        <a class="text-gry" href="{{ route('services.index') }}">> Warehouse</a>
                    </li>
                    <li class="d-block mr-4 ">
                        <a class="text-gry" href="{{ route('services.index') }}">> Trucking Pick Up / Drop</a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                <p class="link-head poppin-bold text-white">Company</p>
                <ul class="mt-3 list">
                    <li class="d-block mr-4 ">
                        <a class="text-gry" href="{{ route('about-us.index') }}">> About Us</a>
                    </li>
                    <li class="d-block mr-4 ">
                        <a class="text-gry" href="{{ route('works.index') }}">> Our Recent Works</a>
                    </li>
                    <li class="d-block mr-4 ">
                        <a class="text-gry" href="{{ route('contacts') }}">> Contact Us</a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                <p class="link-head poppin-bold text-white">follow Us On</p>
                <div class="social-links">
                    <ul>
                        <li class="d-inline-block mr-4">
                            <a href="{{ $setting->facebook_url }}"><span class="icon-facebook ml-2"></span></a>
                        </li>
                        <li class="d-inline-block mr-4">
                            <a href="{{ $setting->twitter_url }}"><span class="icon-twitter ml-2"></span></a>
                        </li>
                        <li class="d-inline-block mr-4">
                            <a href="{{ $setting->youtube_url }}"><span class="icon-youtube ml-2"></span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid bg-black pad-lr">
        <div class="row py-2">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p class="text-gry">{{ $setting->site_copyright }} </p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p class="text-gry float-right">Design by <a href="https://dradtech.com/" target="_blank"><span class="text-blue">Dradtech Technology</span></a></p>
            </div>
        </div>
    </div>
</footer>