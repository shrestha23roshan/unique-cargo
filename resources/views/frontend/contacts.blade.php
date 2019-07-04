@section('title', $seo->meta_title)
@section('meta_tags', $seo->meta_tags)
@section('meta_description', $seo->meta_description)

@extends('frontend.container')

@section('footer_js')
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

@section('dynamicdata')
     <!--Breadcrumb-->
     <div class="container-fluid bread-img pad-lr">
        <div class="row text-center py-7">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="poppin-bold text-white">CONACT US</h1>
                <P class="text-white"><a class="text-white" href="{{ route('home') }}">Home</a> > Contact Us</P>
            </div>
        </div>
    </div>

    <!--Information-->
    <div class="container-fluid works pad-lr">
        <div class="row py-4">
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="bg-blue border-round box-shadow text-center p-4">
                    <p class="poppin-semibold text-white">Company Address :</p>
                    <p class="text-white"><span class="icon-location mr-3"></span>{{ $setting->site_address }}</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="bg-blue border-round box-shadow text-center p-4">
                    <p class="poppin-semibold text-white">Phone :</p>
                    <p><a class="text-white" href=""><span class="icon-phone mr-3"></span>{{ $setting->site_phone1 }}, {{ $setting->site_phone2 }}</a></p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="bg-blue border-round box-shadow text-center p-4">
                    <p class="poppin-semibold text-white">E-mail Address :</p>
                    <p><a class="text-white" href=""><span class="icon-envelop mr-3"></span>{{ $setting->site_email }}</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact form-->
    <div class="container-fluid  bg-grey text-center pad-lr">
        <div class="row py-4">
            <div class="col-12">
                <h1 class="poppin-bold text-capitalize text-center my-2">We Are <span class="text-blue">Ready</span>
                    To Collect 
                    <span class="text-blue">Your Packages</span></h1>
            </div>
        </div>
        <!--form-->
        <form method="post" action="{{ route('contacts.mail') }}" >
                {!! csrf_field() !!}
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
                    <input type="text" class="form-control" name="full_name" placeholder="Full name" required>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
                    <input type="number" class="form-control" name="phone" placeholder="Phone Number" required>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
                    <input type="email" class="form-control" name="email" placeholder="e-mail address" required>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
                    <input type="text" class="form-control" name="subject" placeholder="subject" required>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 mb-4">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" placeholder="Message"
                        required></textarea>
                </div>
                <div class="col-12">
                    <div class="form-group">
                      <div class="g-recaptcha" data-sitekey="{!! env('RECAPTCHA_SITE_KEY') !!}"></div>
                    </div>
                </div>

            </div>
            <div class="text-center pb-5">
                <a href="contacts.html"> <button class="btn btn-blue box-shadow">SEND MESSAGE</button></a>
            </div>
        </form>
         <!--/ .form-->
    </div>

    <!--Google Map-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe id="gmap_canvas" width="100%" height="400px" src="https://maps.google.com/maps?q=unique%20cargo%20and%20courier&t=&z=15&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection