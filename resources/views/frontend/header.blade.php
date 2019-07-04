{{-- @php
    dd($setting);
@endphp --}}
<!--Header-->
  <section class="bg-blue d-none d-lg-block">
    <div class="container-fluid pad-lr">
        <div class="row py-2">
            <div class="col-sm-12 col-md-6 col-lg-8">
                <div class="cmp-info">
                    <ul>
                        <li class="d-inline-block mr-4 ">
                            <a class="text-white" href=""><span class="icon-phone mr-2"></span>{{ $setting->site_phone1 }}, {{ $setting->site_phone2 }}</a>
                        </li>
                        <li class="d-inline-block mr-4">
                            <a class="text-white" href=""><span class="icon-location mr-2"></span>{{ $setting->site_address }}</a>
                        </li>
                        <li class="d-inline-block mr-4">
                            <a class="text-white" href=""><span class="icon-envelop mr-2"></span>{{ $setting->site_email }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="social-links float-right">
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
</section>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light pad-lr py-1 box-shadow">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="./images/logo.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
        aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample05">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link poppin-semibold" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link poppin-semibold <?php if(trim(Request::segment(1)) === 'about-us' ) { echo 'active'; } ?>" href="{{ route('about-us.index') }}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link poppin-semibold <?php if(trim(Request::segment(1)) === 'services' ) { echo 'active'; } ?>" href="{{ route('services.index') }}">Services</a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link poppin-semibold <?php if(trim(Request::segment(1)) === 'contacts' ) { echo 'active'; } ?>" href="{{ route('contacts') }}">Contact Us</a>
            </li>
        </ul>
    </div>
</nav>