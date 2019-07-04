@section('title', $seo->meta_title)
@section('meta_tags', $seo->meta_tags)
@section('meta_description', $seo->meta_description)

@extends('frontend.container')

@section('dynamicdata')
 @if (count($works))
     <!--Banner-->
 <div class="container-fluid bread-img pad-lr">
        <div class="row text-center py-7">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="poppin-bold text-white">OUR WORKS</h1>
                <P class="text-white"><a class="text-white" href="{{ route('home') }}">Home</a> > Our Works</P>
            </div>
        </div>
    </div>

    <!--Recent Works-->
    <div class="container-fluid works pad-lr">
        <div class="row">
            <div class="col-12 my-4">
                <h1 class="poppin-bold text-capitalize">Our Recent <span class="text-blue">Works</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's.</p>
            </div>

            @foreach ($works as $item)
                <div class="col-sm-12 col-md-4 col-lg-4 mb-4">
                    <div class="work-box border-round box-shadow">
                        <a href="{{ route('works.show', $item->slug)}}">
                            @if(file_exists('uploads/content-management/works/'.$item->attachment) && $item->attachment != '')
                                <img class="border-round-top w-100"  src="{{ asset('uploads/content-management/works/'.$item->attachment) }}" alt="{{ $item->title }}" width="200">
                            @else
                                <img class="border-round-top w-100"  src="{{ asset('uploads/noimage.jpg') }}" alt="{{ $item->title }}" width="200">
                            @endif
                        </a>
                        <div class="p-3">
                            <a class="poppin-semibold text-black" href="{{ route('works.show', $item->slug)}}">
                                <h6 class="mb-0 text-capitalize">{{ $item->title }}</h6>
                            </a>
                            <small class="text-uppercase text-black">{{ $item->category }}</small>
                            <p class="mb-4">{{ str_limit(strip_tags($item->description), 170) }}</p>
                            <a class="text-blue poppin-medium" href="{{ route('works.show', $item->slug)}}">FIND OUT MORE ></a>
                        </div>
                    </div>
                </div>
            @endforeach
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
 @endif
    
@endsection