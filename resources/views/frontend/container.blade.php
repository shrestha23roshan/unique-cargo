<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {!! env('APP_NAME') !!}</title>

     <!-- Favicon -->
     {{-- <link rel="shortcut icon" href="{!! asset('uploads/settings/'.$setting->site_favicon) !!}"> --}}
     <meta name="keywords" content="@yield('meta_tags')" />
     <meta name="description" content="@yield('meta_description')">
     <meta name="copyright" content="© {!! date('Y') !!} , {!! env('APP_NAME') !!}" />
     <meta name="author" content="{!! env('APP_NAME') !!}" />
     <meta name="email" content="info@dradtech.com" />
     <meta name="Distribution" content="Global" />
     <meta name="csrf-token" content="{!!  csrf_token() !!}" />

     <!--Bootstrap 4 Css-->
     <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
     <!--Slick-->
     <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
     <link rel="stylesheet" href="{{asset('css/slick.css')}}">
     
     <!--Style Css-->
     <link rel="stylesheet" href="{{asset('css/style.css')}}">

    @yield('header_css')

</head>

<body>
    <!-- Header Section -->
    @include('frontend.header')
    <!-- End Header Section -->

    <!-- Dynamic Section -->
    @yield('dynamicdata')
    <!-- End Dynamic Section -->

    <!-- Footer Section -->
    @include('frontend.footer')
    <!-- End Footer Section -->
    
    <!--Jquery-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!--Bootstrap 4 js-->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <!--Slick js-->
    <script src="{{ asset('js/slick.js') }}"></script>
   
    @yield('footer_js')
    
   

    {{-- <script>
        //Navbar
        window.onscroll = function () { myFunction() };

        var navbar = document.getElementById("myNav");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script> --}}

    <script>
        $('.regular').slick({
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 2,
                        arrows: false
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                }
            ]
        });

        $('.brand-list').slick({
            dots: false,
            arrows: false,
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });

    </script>
</body>
    
</html>