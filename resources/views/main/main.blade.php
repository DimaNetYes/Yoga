             <!-- left right elements -->
<div id="container19" class="style4 show-animation">
    <div class="row ">
        <!-- Image Column -->
        <div class="col-lg-6 col-md-6 col-sm-12 order-lg-1 order-md-1 order-sm-2 order-1 custom-height">
        <div class="style1" data-position="center">
            <span class="frame deferred">
            <img src="/img/IMG_7055.jpg" data-src="done" alt="" class="img-fluid">
            </span>
        </div>
        </div>
        <!-- Text Column -->
        <div class="col-lg-6 col-md-6 col-sm-12 order-lg-2 order-md-2 order-sm-1 order-2 custom-height">
        <div class="style1" style="padding:20px 50px;">
            <h2 id="text12">Yoga für Anfänger und Fortgeschrittene</h2>
            <p id="text15" class="style3">Verschiedene Unterrichtsniveaus ermöglichen es Ihnen, Kurse für Personen mit jedem Ausbildungsniveau auszuwählen</p>
        </div>
        </div>
    </div>
</div>
  <!-- Bootstrap and other scripts here -->

<div id="container19" class="style4">
    <div class="row" style="max-width: 100vw;">
        <!-- Text Column -->
        <div class="col-lg-6 col-md-6 col-sm-12 order-lg-1 order-md-1 order-sm-1 order-2 custom-height">
        <div class="style1" style="padding:20px 50px;">
            <h2 id="text12">Ihre Yoga-Reise beginnt hier</h2>
            <p id="text15" class="style3">Als wir Yoga eingeführt haben, wollten wir, dass sich unsere Kunden hier so wohl wie möglich fühlen. Bei uns werden Sie sich immer willkommen fühlen.</p>
        </div>
        </div>
        <!-- Image Column -->
        <div class="col-lg-6 col-md-6 col-sm-12 order-lg-2 order-md-2 order-sm-2 order-1 custom-height">
        <div class="style1" data-position="center">
            <span class="frame deferred">
            <img src="/img/Daniela.png" data-src="done" alt="" class="img-fluid">
            </span>
        </div>
        </div>
        
    </div>
</div>

                 <!-- full size elements -->

  <!-- First Element -->
  <div id="container01" class="style1 container default">
        <div class="wrapper">
            <div class="inner">
                <h2 id="text17" class="">Wir entscheiden uns für einen bewussten Lebensstil!</h2>
                <p id="text49" class="style3">«Lass Frieden mit der Natur, Frieden mit den Menschen und Frieden in dir sein»</p>
            </div>
        </div>
    </div>

    <div id="image11" class="style2 image">
        <span class="frame deferred">
            <img src="/img/IMG_7070.jpg" data-src="done" alt="" style="opacity: 1;">
        </span>
    </div>

    <div id="container02" class="style1 container default">
        <div class="wrapper">
            <div class="inner">
                <h2 id="text17" class="">Das erste Studio seiner Art in Salzwedel.</h2>
                <p id="text49" class="style3">Bei uns kannst du dich vom Yoga-Anfänger zum erfahrenen Praktiker und weiter zum Yogalehrer entwickeln</p>
            </div>
        </div>
    </div>

    <div id="image11_2" class="style2 image">
        <span class="frame deferred">
            <img src="/img/IMG_7051.jpg" data-src="done" alt="" style="opacity: 1;">
        </span>
    </div>

                                 <!-- news_slider.blade.php -->

    
    <div id="slider-container" class="style3 container columns" style="opacity: 1; transform: none;">
    <h2 class='newsH2'>Veranstaltungen und Neuigkeiten</h2>
        <div class="wrapper1">
       
            <div class="inner1">
            
            @foreach($newsArticles as $article)
                
                <div class="slider-item">
                    <h2 id="" class="">{{ $article->title }}</h2>
                    <div class="style3 image d-flex justify-content-center align-items-center" data-position="center" style="opacity: 1; transform: none;">
                        <span  class="frame deferred news" style="background-image: none; background-size: 100% 100%; background-position: left top; background-repeat: no-repeat;">
                            <img src="{{ $article->image_url }}" data-src="done" alt="{{ $article->title }}" style="opacity: 1;" alt={{ $article->title }}>
                        </span>
                    </div>
                    <p id="" class="style3">{{ $article->content }}</p>
                </div>

               
            @endforeach
            </div>
        </div>
        <!-- Вставляем кнопки "Previous" и "Next" для пролистывания остальных слайдов -->
        <button class="slick-prev">&#9668;</button>
        <button class="slick-next">&#9658;</button>
    </div>


     
                                <!-- END NEWS Elements -->

                                     <!-- MAPS AND INFO ELEMENT -->

 <div class="container map-wrapper">
        <div class="row">
            <div class="col-12 col-lg-6 col-md-12 Map__El">
                <!-- Карта -->
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2409.47253104764!2d11.151745000000002!3d52.849889000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47afad3c062e369f%3A0x7844941ac34ca6a2!2sBurgstra%C3%9Fe%2075%2C%2029410%20Salzwedel!5e0!3m2!1sru!2sde!4v1690889070242!5m2!1sru!2sde" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-12 Map__El Map__El1">
                <!-- Информация -->
                <div>
                    <div class="unsere"><strong><span class="info__adresse">Unsere Adresse</span></strong></div>
                    <div class="info__info">
                        <strong>Adresse:</strong>
                        <p>Burgstraße 75, 29410 Salzwedel</p>
                        <strong>Telefonnummer:</strong>
                        <p>+49 1512 7138054</p>
                        <strong>Email:</strong>
                        <p style="color: rgb(52, 191, 234); font-weight: 400;">info@Grow.com</p>
                    </div>
                    <div class="sociallinks">
                        <div class="sociallinks__wrapper">
                            <div class="sociallinks__item_instagram">
                                <!-- Вставка SVG-изображения Instagram -->
                                <a href="https://www.instagram.com/yoga_im_atelier_salzwedel/" target="_blank"><img src="/img/icons8-instagram.svg" alt="Instagram Icon"></a>
                                <a href="https://wa.me/+4915127138054" target="_blank">
                                    <img src="/img/icons8-whatsapp.svg" alt="Whatsapp">
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                                     <!-- END MAPS AND INFO EL -->


             