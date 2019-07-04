@section('title', $seo->meta_title)
@section('meta_tags', $seo->meta_tags)
@section('meta_description', $seo->meta_description)

@extends('frontend.container')

@section('dynamicdata')
   @if (count($services) > 0)
        <!--Banner-->
        <div class="container-fluid bread-img pad-lr">
            <div class="row text-center py-7">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 class="poppin-bold text-white">SERVICES</h1>
                    <P class="text-white"><a class="text-white" href="{{ route('home') }}">Home</a> > services</P>
                </div>
            </div>
        </div>
    
        <!--Services-->
        <div class="container-fluid pad-lr">
            @for ($i = 0; $i < count($services); $i++)
                <div class="row my-5">
                    @if ($i < count($services))
                        <div class="col-sm-12 col-md-4 col-lg-4 mb-5">
                            @if(file_exists('uploads/content-management/services/'.($services[$i]['attachment'])) && ($services[$i]['attachment']) != '')
                                <img class="d-block w-100 box-shadow border-round"  src="{{ asset('uploads/content-management/services/'.($services[$i]['attachment'])) }}" alt="{{ ($services[$i]['title']) }}" width="200">
                            @else
                                <img class="d-block w-100 box-shadow border-round"  src="{{ asset('uploads/noimage.jpg') }}" alt="{{ ($services[$i]['title']) }}" width="200">
                            @endif
                        </div>
            
                        <div class="col-sm-12 col-md-8 col-lg-8 mb-5">
                            <div class="media">
                                {{-- <img class="mr-3" src="./images/icon-air-b.png" alt="Generic placeholder image"> --}}
                                <div class="media-body">
                                    <h5 class="poppin-bold text-capitalize">{!! $services[$i]['title'] !!}</h5>
                                </div>
                            </div>
                            <p>{!! $services[$i]['description'] !!}</p>
                        </div>
                    @endif
                    
                    @if (++$i < count($services))
                        <div class="col-sm-12 col-md-8 col-lg-8 mb-5">
                            <div class="media">
                                {{-- <img class="mr-3" src="./images/icon-ship-b.png" alt="Generic placeholder image"> --}}
                                <div class="media-body">
                                    <h5 class="poppin-bold text-capitalize">{!! $services[$i]['title'] !!}</h5>
                                </div>
                            </div>
                            <p>{!! $services[$i]['description'] !!}</p>
                        </div>
                        
                        <div class="col-sm-12 col-md-4 col-lg-4 mb-5">
                            @if(file_exists('uploads/content-management/services/'.($services[$i]['attachment'])) && ($services[$i]['attachment']) != '')
                                <img class="d-block w-100 box-shadow border-round"  src="{{ asset('uploads/content-management/services/'.($services[$i]['attachment'])) }}" alt="{{ ($services[$i]['title']) }}" width="200">
                            @else
                                <img class="d-block w-100 box-shadow border-round"  src="{{ asset('uploads/noimage.jpg') }}" alt="{{ ($services[$i]['title']) }}" width="200">
                            @endif
                        </div>
                    @endif
                </div>
            @endfor
           
        </div>
    
        <!--Bitton Contact-->
        <div class="container-fluid text-center py-5">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('contacts') }}"> <button class="btn btn-blue box-shadow">CONTACT US</button></a>
                </div>
            </div>
        </div>
   @endif
@endsection