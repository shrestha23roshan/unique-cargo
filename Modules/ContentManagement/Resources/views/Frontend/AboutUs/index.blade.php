@section('title', $seo->meta_title)
@section('meta_tags', $seo->meta_tags)
@section('meta_description', $seo->meta_description)

@extends('frontend.container')

@section('dynamicdata')
    @if ($aboutUs)
        <!--Banner-->
        <div class="container-fluid bread-img pad-lr">
            <div class="row text-center py-7">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 class="poppin-bold text-white">ABOUT US</h1>
                    <P class="text-white"><a class="text-white" href="{{ route('home') }}">Home</a> > About Us</P>
                </div>
            </div>
        </div>
        
        <!--About-->
        <div class="container-fluid pad-lr my-5">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <h1 class="poppin-bold text-black">Who <span class="text-blue">We Are</span></h1>
                    <p>{!! $aboutUs->description !!}</p>
        
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5">
                    @if(file_exists('uploads/content-management/about-us/'.$aboutUs->attachment) && $aboutUs->attachment != '')
                        <img class="d-block w-100 box-shadow border-round"  src="{{ asset('uploads/content-management/about-us/'.$aboutUs->attachment) }}" alt="unique cargo about us" width="200">
                    @else
                        <img class="d-block w-100 box-shadow border-round"  src="{{ asset('uploads/noimage.jpg') }}" alt="unique cargo about us" width="200">
                    @endif
                </div>
            </div>
        </div>
        
        <!--Icon-->
        <div class="container-fluid bg-grey pad-lr">
            <div class="row pt-4">
                <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                    <div class="media">
                        <img class="align-self-start mr-3" src="./images/icon-exp.png" alt="icon-exp">
                        <div class="media-body">
                            <p class="my-0 poppin-semibold text-black text-uppercase">{{ $aboutUs->experience }} Year</p>
                            <p>of experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                    <div class="media">
                        <img class="align-self-start mr-3" src="./images/icon-cft.png" alt="icon-exp">
                        <div class="media-body">
                            <p class="my-0 poppin-semibold text-black text-uppercase">certified</p>
                            <p>ISO 9001: 2008</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                    <div class="media">
                        <img class="align-self-start mr-3" src="./images/icon-rocket.png" alt="icon-exp">
                        <div class="media-body">
                            <p class="my-0 poppin-semibold text-black text-uppercase">fast delivery</p>
                            <p>on time</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                    <div class="media">
                        <img class="align-self-start mr-3" src="./images/icon-van.png" alt="icon-exp">
                        <div class="media-body">
                            <p class="my-0 poppin-semibold text-black text-uppercase">world wide shipping</p>
                            <p>leading provider of courier</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ .icon-->
        
        <div class="container-fluid text-center py-5">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('contacts') }}"> <button class="btn btn-blue box-shadow">CONTACT US</button></a>
                </div>
            </div>
        </div>
    @endif
@endsection