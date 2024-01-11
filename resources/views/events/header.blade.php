<header>
    <div id="container26" class="default full screen"
        style="--onvisible-speed: 1s; --onvisible-background-color: rgba(0,0,0,0.001); min-height: 250px; background-position-y: -200px;">
        <div class="t-cover__filter" style="min-height: 230px; height: 250px;"></div>

        <div class=".wrapper__My" style="max-width: 1160px; margin:0 auto;">
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <a class="navbar-brand" href="/">
                    <img src="img\Logo_GROW!.JPG" alt="GROW" height="75" id="img1">
                </a>

                <button class="navbar-toggler btn__header" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Добавляем мобильный телефон, email и значок Instagram  из два потому что костыль верхний этот для моб версии-->
                <div class="d-flex flex-column align-items-center ml-lg-4 mobilePhone_Email mobilePhone_Email__top ">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-phone-alt mr-2 i-black"></i>
                        <span class="sp-black">+49 1512 7138054</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-envelope mr-2 i-black"></i>
                        <a href="mailto:creatura_creare@gmx.de" class="sp-black">creatura_creare@gmx.de</a>
                    </div>
                    <a href="https://www.instagram.com/yoga_im_atelier_salzwedel/" target="_blank"
                        class="mt-2 sp-black">
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
                            <a class="nav-link dropdown-toggle" href="#" id="yogaDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <a class="nav-link" href="/#slider-container">Nachricht</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer__phone">Kontakte</a>
                        </li>
                    </ul>
                </div>

                <!-- Добавляем мобильный телефон, email и значок Instagram -->
                <div class="d-flex flex-column align-items-center ml-lg-4 mobilePhone_Email mobilePhone_Email__bottom ">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-phone-alt mr-2 i-black"></i>
                        <span class="sp-black">+49 1512 7138054</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-envelope mr-2 i-black"></i>
                        <a href="mailto:creatura_creare@gmx.de" class="sp-black">creatura_creare@gmx.de</a>
                    </div>
                    <a href="https://www.instagram.com/yoga_im_atelier_salzwedel/" target="_blank"
                        class="mt-2 sp-black">
                        <i class="fab fa-instagram i-black instagram"></i>
                    </a>
                </div>


            </nav>

            <!-- Add the new content here using Bootstrap classes -->
            <div class="container mt-5" style="position:relative; z-index:1; margin-top: 0px !important;">
                <div class="row text-white">

                    <div class="col-md-8 text-white">
                        <!-- Left-side content -->
                        <h1 class="t181__title t-title t-title_md studio header__price__h1" style="font-weight: 600; ">
                            {{ $title }}</h1>
                    </div>

                </div>
            </div>
            <!-- End of new content -->

        </div>
    </div>
</header>