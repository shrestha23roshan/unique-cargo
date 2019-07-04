{{-- @php
    dd($testimonials);
@endphp --}}
@section('title', $seo->meta_title)
@section('meta_tags', $seo->meta_tags)
@section('meta_description', $seo->meta_description)

@extends('frontend.container')

@section('dynamicdata')
    <!--Banner-->
    @if (count($banners) > 0)
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <?php $count = 1; ?>
                @if( count($banners) > 0)
                    @foreach($banners as $banner)
                        <div class="carousel-item <?php if($count == 1) { ?>active <?php } ?>">
                            <div class="item">
                                @if(file_exists('uploads/media-management/banners/'.$banner->attachment) && $banner->attachment != '')
                                    <img class="d-block w-100"  src="{{ asset('uploads/media-management/banners/'.$banner->attachment) }}" alt="{{ $banner->caption }}" width="200">
                                @else
                                    <img class="d-block w-100"  src="{{ asset('uploads/noimage.jpg') }}" alt="{{ $banner->caption }}" width="200">
                                @endif
                            </div>
                            <div class="carousel-caption d-none d-md-block">
                                <img src="./images/icon-car.png" alt="">
                                <p class="text-white">-FAST -SECURE -WORLDWIDE</p>
                                <h1 class="text-capitalize poppin-extrabold text-white text-shadow">{{$banner->caption}}</h1>
                                <a href=""><button class="btn btn-blue text-uppercase box-shadow mt-3">see our services</button></a>
                            </div>
                        </div>
                    <?php $count++; ?>
                    @endforeach
                @endif
            </div>
           
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    @endif
   

    <!--About-->
    @if ($aboutUs)
        <div class="container-fluid pad-lr my-5">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <h1 class="poppin-bold text-black">Who <span class="text-blue">We Are</span></h1>
                    <p>{!! str_limit($aboutUs->description, 200) !!}</p>
                    <!--Icon-->
                    <div class="row mt-3">
                        <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
                            <div class="media">
                                <img class="align-self-start mr-3" src="./images/icon-exp.png" alt="icon-exp">
                                <div class="media-body">
                                    <p class="my-0 poppin-semibold text-black text-uppercase">{{ $aboutUs->experience }} Years</p>
                                    <p>of experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
                            <div class="media">
                                <img class="align-self-start mr-3" src="./images/icon-cft.png" alt="icon-exp">
                                <div class="media-body">
                                    <p class="my-0 poppin-semibold text-black text-uppercase">certified</p>
                                    <p>ISO 9001: 2008</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
                            <div class="media">
                                <img class="align-self-start mr-3" src="./images/icon-rocket.png" alt="icon-exp">
                                <div class="media-body">
                                    <p class="my-0 poppin-semibold text-black text-uppercase">fast delivery</p>
                                    <p>on time</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
                            <div class="media">
                                <img class="align-self-start mr-3" src="./images/icon-van.png" alt="icon-exp">
                                <div class="media-body">
                                    <p class="my-0 poppin-semibold text-black text-uppercase">world wide shipping</p>
                                    <p>leading provider of courier</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ .icon-->
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5">
                    @if(file_exists('uploads/content-management/about-us/'.$aboutUs->attachment) && $aboutUs->attachment != '')
                        <img class="w-100 d-block box-shadow border-round"  src="{{ asset('uploads/content-management/about-us/'.$aboutUs->attachment) }}" alt="Unique Cargo and Courier about us" width="200">
                    @else
                        <img class="w-100 d-block box-shadow border-round"  src="{{ asset('uploads/noimage.jpg') }}" alt="Unique Cargo and Courier about us" width="200">
                    @endif
                </div>
            </div>
        </div>
    @endif
    

    <!--Services-->
    @if (count($services) > 0)
        <div class="container-fluid services pad-lr">
            <div class="row my-5">
                <div class="col-12 my-4">
                    <h1 class="poppin-bold text-capitalize text-center">we <span class="text-blue">carefully </span>handle
                        all <span class="text-blue">services</span></h1>
                    <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's.</p>
                </div>
                @foreach ($services as $service)
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                        <div class="service-content">
                            <div class="img-gradient">
                                @if(file_exists('uploads/content-management/services/'.$service->attachment) && $service->attachment != '')
                                    <img class="w-100 d-block box-shadow border-round"  src="{{ asset('uploads/content-management/services/'.$service->attachment) }}" alt="{{ $service->title }}" width="200">
                                @else
                                    <img class="w-100 d-block box-shadow border-round"  src="{{ asset('uploads/noimage.jpg') }}" alt="{{ $service->title }}" width="200">
                                @endif
                            </div>
                            <div class="service-desc p-3">
                                <div class="media">
                                    {{-- <img class="mr-3" src="./images/icon-air.png" alt="Generic placeholder image"> --}}
                                    <div class="media-body">
                                        <h5 class="poppin-semibold text-white mt-1 text-capitalize">{{ $service->title }}</h5>
                                    </div>
                                </div>
                                <p class="text-white mb-3">{{ str_limit(strip_tags($service->description), 135) }}</p>
                                <a class="text-gry" href="{{ route('services.index') }}">READ MORE ></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="service-content">
                        <div class="img-gradient">
                            <img class="w-100 d-block box-shadow border-round" src="./images/s1.png" alt="">
                        </div>
                        <div class="service-desc p-3">
                            <div class="media">
                                <img class="mr-3" src="./images/icon-air.png" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="poppin-semibold text-white mt-1">Media heading</h5>
                                </div>
                            </div>
                            <p class="text-white mb-3">Lorem Ipsum is simply dummy text the printing and typesetting
                                industry. Lorem Ipsum
                                has been the industry's standard.</p>
                            <a class="text-gry" href="">READ MORE ></a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="service-content">
                        <div class="img-gradient">
                            <img class="w-100 d-block box-shadow border-round" src="./images/s2.png" alt="">
                        </div>
                        <div class="service-desc p-3">
                            <div class="media">
                                <img class="mr-3" src="./images/icon-ship.png" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="poppin-semibold text-white mt-1">Media heading</h5>
                                </div>
                            </div>
                            <p class="text-white mb-3">Lorem Ipsum is simply dummy text the printing and typesetting
                                industry. Lorem Ipsum
                                has been the industry's standard.</p>
                            <a class="text-gry" href="">READ MORE ></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4 ">
                    <div class="service-content d-none d-lg-block">
                        <div class="img-gradient">
                            <img class="w-100 d-block box-shadow border-round" src="./images/s3.png" alt="">
                        </div>
                        <div class="service-desc p-3">
                            <div class="media">
                                <img class="mr-3" src="./images/icon-truck.png" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="poppin-semibold text-white mt-1">Media heading</h5>
                                </div>
                            </div>
                            <p class="text-white mb-3">Lorem Ipsum is simply dummy text the printing and typesetting
                                industry. Lorem Ipsum
                                has been the industry's standard.</p>
                            <a class="text-gry" href="">READ MORE ></a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    @endif
   

    <!--Contact-->
    <div class="container-fluid home-contact pad-lr my-4">
        <div class="row text-center py-5">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="poppin-bold text-white text-capitalize">we are ready to collect your packages</h1>
                <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy <br> text ever since the 1500s</p>
                <a href="{{ route('contacts') }}">
                        <button class="btn btn-blue mt-3">Contact us</button>
                </a>
            </div>
        </div>
    </div>

    <!--Recent Works-->
    @if (count($works) > 0)
        <div class="container-fluid works pad-lr">
            <div class="row">
                <div class="col-12 my-4">
                    <h1 class="poppin-bold text-capitalize text-center">Our Recent <span class="text-blue">Works</h1>
                    <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's.</p>
                </div>
                @foreach ($works as $work)
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                        <div class="work-box border-round box-shadow">
                            <a href="{{ route('works.show', $work->slug) }}">
                                @if(file_exists('uploads/content-management/works/'.$work->attachment) && $work->attachment != '')
                                    <img class="border-round-top w-100"  src="{{ asset('uploads/content-management/works/'.$work->attachment) }}" alt="{{ $work->title }}" width="200">
                                @else
                                    <img class="border-round-top w-100"  src="{{ asset('uploads/noimage.jpg') }}" alt="{{ $work->title }}" width="200">
                                @endif
                            </a>
                            <div class="p-3">
                                <a class="poppin-semibold text-black" href="{{ route('works.show', $work->slug) }}">
                                    <h6 class="mb-0 text-capitalize">{{ $work->title }}</h6>
                                </a>
                                <small class="text-uppercase text-black">{{ $work->category }}</small>
                                <p class="mb-4">{{ str_limit(strip_tags($work->description), 135)}}</p>
                                <a class="text-blue poppin-medium" href="{{ route('works.show', $work->slug) }}">FIND OUT MORE ></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
    
                {{-- <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="work-box border-round box-shadow">
                        <a href="">
                            <img class="border-round-top w-100" src="./images/w2.png" alt="">
                        </a>
                        <div class="p-3">
                            <a class="poppin-semibold text-black" href="">
                                <h5 class="mb-0">Project Cargo and Breakbulk</h5>
                            </a>
                            <small class="text-uppercase text-black">Air Cargo</small>
                            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has
                                been the
                                industry's standard text ever since the 1500s, when an unknown Lorem Ipsum is ..</p>
                            <a class="text-blue poppin-medium" href="">FIND OUT MORE ></a>
                        </div>
                    </div>
                </div>
    
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="work-box border-round box-shadow d-none d-lg-block">
                        <a href="">
                            <img class="border-round-top w-100" src="./images/w3.png" alt="">
                        </a>
                        <div class="p-3">
                            <a class="poppin-semibold text-black" href="">
                                <h5 class="mb-0">Project Cargo and Breakbulk</h5>
                            </a>
                            <small class="text-uppercase text-black">Air Cargo</small>
                            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has
                                been the
                                industry's standard text ever since the 1500s, when an unknown Lorem Ipsum is ..</p>
                            <a class="text-blue poppin-medium" href="">FIND OUT MORE ></a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    @endif
   
@endsection