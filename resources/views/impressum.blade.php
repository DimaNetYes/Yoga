<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon-32x32.png') }}">

    <title>Impressum</title>

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
     <link href="{{ asset('css/impressum.css') }}" rel="stylesheet">
     <link href="{{ asset('css/main.css') }}" rel="stylesheet">
     <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
     <link href="{{ asset('css/cookie.css') }}" rel="stylesheet">
     
</head>
<body>

    <wrapper>
    <header>
    <div id="container26" class="default full screen" style="--onvisible-speed: 1s; --onvisible-background-color: rgba(0,0,0,0.001);">
    
   

    <div class=".wrapper__My" style="max-width: 1160px; margin:0 auto;">
    <nav class="navbar navbar-expand-lg navbar-white bg-white">
            <a class="navbar-brand" href="/">
                <img src="img\Logo_GROW!.JPG" alt="GROW" height="75" id="img1">
            </a>

            <button class="navbar-toggler btn__header" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
             <!-- Добавляем мобильный телефон, email и значок Instagram -->
             <div class="d-flex flex-column align-items-center ml-lg-4 mobilePhone_Email mobilePhone_Email__top">
                <div class="d-flex align-items-center">
                    <i class="fas fa-phone-alt mr-2 i-black"></i>
                    <span class="sp-black">+49 1512 7138054</span>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-envelope mr-2 i-black"></i>
                    <a href="mailto:creatura_creare@gmx.de" class="sp-black">creatura_creare@gmx.de</a>
                </div>
                <a href="https://www.instagram.com/yoga_im_atelier_salzwedel/" target="_blank" class="mt-2 sp-black sp-black-inst">
                    <i class="fab fa-instagram i-black instagram"></i>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Hauptseite</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("calendar")}}">Zeitplan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("price")}}">Preise</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="yogaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Richtungen
                        </a>
                        <div class="dropdown-menu dropdown-menu-horizontal" aria-labelledby="yogaDropdown">
                            <a class="dropdown-item" href="#">Erste Schritte im Yoga</a>
                            <a class="dropdown-item" href="#">Hatha Yoga</a>
                            <a class="dropdown-item" href="#">Nidra Yoga</a>
                        </div>
                    </li>

                    <li class="nav-item" style="display:none;">
                        <a class="nav-link" href="/teachers">Lehrer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#slider-container">Nachricht</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer__phone">Kontakte</a>
                    </li>
                </ul>
            </div>

             <!-- Добавляем мобильный телефон, email и значок Instagram -->
             <div class="d-flex flex-column align-items-center ml-lg-4 mobilePhone_Email mobilePhone_Email__bottom">
                <div class="d-flex align-items-center">
                    <i class="fas fa-phone-alt mr-2 i-black"></i>
                    <span class="sp-black">+49 1512 7138054</span>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-envelope mr-2 i-black"></i>
                    <a href="mailto:creatura_creare@gmx.de" class="sp-black">creatura_creare@gmx.de</a>
                </div>
                <a href="https://www.instagram.com/yoga_im_atelier_salzwedel/" target="_blank" class="mt-2 sp-black sp-black-inst">
                    <i class="fab fa-instagram i-black instagram"></i>
                </a>
            </div>

            
        </nav>

        
        </div>

        <main>
            <div class="layout-content">
                <h1>Impressum</h1>
                <hr>
                <p class="impressum__Grow">Grow! Yoga & Bildung</p>
                <p>Inhaber: Daniela Shermer</p>
                <p>Burgstrasse 77</p>
                <p>29410 Salzwedel</p>
                <p>Deutschland / Germany</p>

                <p class="impressum__tel">Tel.: +49 1512 7138054</p>
                <p>E-Mail-Adresse: creatura_creare@gmx.de</p>

                <p class="impressum__Umsatz">Umsatzsteueridentifikationsnummer: YOUR_VAT_ID</p>

                <p>Online-Streitbeilegung gemäß Art. 14 Abs. 1 ODR-VO:
Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit, die Sie unter <a href="https://ec.europa.eu/consumers/odr/main/index.cfm?event=main.home2.show&lng=DE"> https://ec.europa.eu/consumers/odr/ </a> finden. </p>

                <p class="impressum__Img">
                    <img src="/img/impressum.png" alt="">
                </p>
            </div>  
            
            
        <!-- After the main content -->
        <div class="welcome-section">
                    <div class="dark-line">
                <p>Grow! Yoga & Bildung freut sich, Sie begrüßen zu dürfen.</p>
            </div>
        </div>

        </main>
    </div>
</header>


       
        
        

        <footer>
            @include('main/footer')
            
        </footer>

    </wrapper>

</body>