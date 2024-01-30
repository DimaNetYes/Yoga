<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon-32x32.png') }}">

    <title>Grow!Yoga & Bildung</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/newsAnimation.js') }}" defer></script>
    
    <!-- Include Slick Carousel JavaScript -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
   
    <!-- Include Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <!-- Styles -->
     <link href="{{ asset('css/header.css') }}" rel="stylesheet">
     <link href="{{ asset('css/main.css') }}" rel="stylesheet">
     <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
     <link href="{{ asset('css/cookie.css') }}" rel="stylesheet">
     

     <style>
      
     </style>

</head>
<body>
<wrapper>
    @include('main/header')
    

    <main>
        @include('main/main')

    </main>

    <footer>
        @include('main/footer')
        
    </footer>
    
    
    @if (isset($showCookieConsent) && $showCookieConsent)
    <?php //dd(request()->cookies->all()); ?>
        @include('components.cookie-consent')
    @endif

</wrapper>
    <!-- Подключаем скрипты Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Slick Carousel library -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Include snowfall.jquery.js -->
<script src="{{ asset('js/snowfall.jquery.js') }}"></script>
<script>
$(document).ready(function(){
    // Initialize the snowfall effect without a custom image
    $('#container26').snowfall({
        flakeCount: 50,
        maxSpeed : 1, 
        maxSize : 5,
        round: true,
        
        // other options can be added as needed
    });
});
</script>



</body>
</html>
