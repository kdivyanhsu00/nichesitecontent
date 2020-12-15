<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
     <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>Affordable Niche Site Content by Native Writers - {{  get_company_name()  }}</title>
     
<link rel="shortcut icon" href="{{ asset('img/favicon.ico')}}" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
     <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('css/responsive.css')}}" rel="stylesheet">
        <link href="{{ asset('css/all.min.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

   </head>
   <body class="body d-flex flex-column h-100">
      <div id="app" class="flex-grow-1">
        {!! settings('website_header_script') !!}
@include('website.google_analytics')
         @include('website.layouts.header1')
         
         <main>@yield('content')</main>
      </div>
      
      @include('website.layouts.footer')

<script type="text/javascript">
      window.currencyConfig = {!! currencyConfig() !!};
</script>
<script src="{{ asset('js/app.js') }}"></script>
@if($notification = growl_notification())
<script type="text/javascript">
   $(function () {     
     <?php echo $notification; ?>     
   });
</script>
@endif
@stack('scripts')
</body>
</html>