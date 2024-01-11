<header>
    <div id="container26" class="default full screen" style="--onvisible-speed: 1s; --onvisible-background-color: rgba(0,0,0,0.001);">
    <div class="t-cover__filter" style=""></div>

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
                            <a class="dropdown-item" href="{{ route('ersteschritte') }}">Erste Schritte im Yoga</a>
                            <a class="dropdown-item" href="#">Yoganastik</a>
                            <a class="dropdown-item" href="#">Faszinastik</a>
                            <a class="dropdown-item" href="#">Yoga und Musik</a>
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

        <!-- Add the new content here using Bootstrap classes -->
        <div class="container mt-5" style="position:relative; z-index:1;">
            <div class="row text-white">
            
                <div class="col-md-8 text-white">
                    <!-- Left-side content -->
                    <h1 class="t181__title t-title t-title_md studio" style="font-weight: 600;">YOGA IM ATELIER 
                    <br/><br/>Studio für Yoga und mentale Gesundheit in Salzwedel</h1>
                    <div class="t181__descr t-descr t-descr_lg praktik" style="color: #e8e8e8;">
                        <span>In meinem Studio hat sich ein qualifiziertes Kollektiv aus Yoga- Therapeutinnen zusammengefunden, das in professioneller Weise unterrichtet und anleitet. Der Raum steht allen offen, die nach Ausgeglichenheit und innerer Ruhe suchen. Unabhängig von Deinem Erfahrungsstand bieten wir Kurse, die Dich befähigen im Yoga zu wachsen und Deinen Weg zu gehen. Unsere Praktiken leiten Dich an, Deinen Geist zur Ruhe zu bringen, Dich zu neu zu betrachten. Du findest einen anderen Zugang zur Natur, der Welt und Dir selbst..</span>
                    </div>
                    <div style="margin-top: 60px; margin-bottom: 30px;">
                       <!-- Use Bootstrap classes for the buttons -->
                        <div class="t-btnwrapper d-flex flex-column flex-md-row ">
                            <a href="{{route("calendar")}}" target="" class="btn btn-primary btn-lg btn-block mb-3 mb-md-0 mr-md-3" >ZEITPLAN ANZEIGEN</a>
                            <a href="{{route("price")}}" target="" class="btn btn-outline-primary btn-lg btn-block">WÄHLEN SIE EIN ABO</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End of new content -->
        
        </div>
    </div>
</header>








