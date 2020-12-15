<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
                @includeWhen(config('rb.GOOGLE_ANALYTICS'), 'partials.google-analytics')
<meta charset="UTF-8">  
<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Affordable Niche Site Content by Native Writers - {{  get_company_name()  }}</title>
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico')}}" type="image/x-icon"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('css/responsive.css')}}" rel="stylesheet">
        <link href="{{ asset('css/all.min.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
 
 @if('website.about')
        <link rel="stylesheet" href="{{ asset('css/about.css')}}">
@endif
@if('website.contact')
        <link rel="stylesheet" href="{{ asset('css/contact.css')}}">
        @endif
        {!! settings('website_header_script') !!}
@include('website.google_analytics')
        @include('website.layouts.header')
        @yield('content')   
  


    <script src="{{ asset('js/jquery.min.js')}}"></script>

    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css')}}">
    <script type="text/javascript" src="{{ asset('js/slick.min.js')}}"></script>


    <script>
        $(document).ready(function(){

        $('.myslider').slick({
                    arrows:false,
                    dots:true,    
                    infinite: true,
                    slidesToShow: 2,
                    slidesToScroll: 2,

                    responsive: [
    
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 3
      }
    }
]
    
                });
            });
    </script>

    </body>
</html>