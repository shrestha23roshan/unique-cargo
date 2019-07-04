@section('title', $seo->meta_title)
@section('meta_tags', $seo->meta_tags)
@section('meta_description', $seo->meta_description)

@extends('frontend.container')

@section('dynamicdata')
    <!--Banner-->
    <div class="container-fluid bread-img pad-lr">
            <div class="row text-center py-7">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 class="poppin-bold text-white">OUR WORKS</h1>
                    <P class="text-white"><a class="text-white" href="{{ route('home') }}">Home</a><a class="text-white" href="{{ route('works.show', $work) }}"> > Our Works</a> > Project
                        Cargo and Breakbulk</P>
                </div>
            </div>
        </div>
    
        <!--Works-->
        <div class="container-fluid works pad-lr">
            <div class="row py-4">
                <!--Work desc-->
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <h1 class="poppin-bold text-capitalize heading py-2">{{ $work->title }}</h1>
                    @if(file_exists('uploads/content-management/works/'.$work->attachment) && $work->attachment != '')
                        <img class="border-round-top w-100"  src="{{ asset('uploads/content-management/works/'.$work->attachment) }}" alt="{{ $work->title }}" width="200">
                    @else
                        <img class="border-round-top w-100"  src="{{ asset('uploads/noimage.jpg') }}" alt="{{ $work->title }}" width="200">
                    @endif
                    <p class="my-3">{{ $work->description }}</p>
                </div>
                <!--/ .Work desc-->
    
                @if (count($works) > 0)
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <h1 class="poppin-bold text-capitalize heading py-2">Other Works</h1>
                        @foreach ($works as $work)
                            <div class="row work-show mb-4">
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <a href="">
                                        @if(file_exists('uploads/content-management/works/'.$work->attachment) && $work->attachment != '')
                                            <img class="border-round-top w-100"  src="{{ asset('uploads/content-management/works/'.$work->attachment) }}" alt="{{ $work->title }}" width="200">
                                        @else
                                            <img class="border-round-top w-100"  src="{{ asset('uploads/noimage.jpg') }}" alt="{{ $work->title }}" width="200">
                                        @endif
                                    </a>
                                </div>
                                <div class="col-sm-12 col-md-8 col-lg-8">
                                    <h4 class="mb-0"><a class="poppin-semibold" href="">{{ $work->title }}</a></h4>
                                    <small class=" text-uppercase">{{ $work->category }}</small>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
               
            </div>
        </div>
    
        <!--Button Contact-->
        <div class="container-fluid text-center py-5">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('contacts') }}"> <button class="btn btn-blue box-shadow">CONTACT US</button></a>
                </div>
            </div>
        </div>
@endsection