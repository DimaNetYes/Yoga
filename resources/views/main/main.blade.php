             <!-- left right elements -->
<div id="container19" class="style4 show-animation">
    <div class="row ">
        <!-- Image Column -->
        <div class="col-lg-6 col-md-6 col-sm-12 order-lg-1 order-md-1 order-sm-2 order-1 custom-height">
        <div class="style1" data-position="center">
            <span class="frame deferred">
            <img src="/img/Webside1.png" data-src="done" alt="" class="img-fluid main__img1">
            </span>
        </div>
        </div>
        <!-- Text Column -->
        <div class="col-lg-6 col-md-6 col-sm-12 order-lg-2 order-md-2 order-sm-1 order-2 custom-height">
        <div class="style1" style="padding:20px 50px;">
            <h2 id="text12">Intensität und Intention</h2>
            <p id="text15" class="style3"> <i>Was ist Dein Beweg-Grund?</i><br/> …diese Frage haben ich aufgegriffen und kreiere daraus, gemeinsam mit meinen Kolleginnen, ein besonderes Angebot an Yoga-Stunden. Neben den verschiedenen physischen Intensitätsstufen bieten wir kreative und mentale Formen von Yoga. <br/><i>»Yoga ist nichts anderes als eine Wissenschaft der Achtsamkeit: Werde Dir genau bewusst, was Du tust, wo tu es tust und wie Du es tust «</i></br> Hansaji </p>
        </div>
        </div>
    </div>
</div>
  <!-- Bootstrap and other scripts here -->

<div id="container19" class="style4">
    <div class="row" style="">
        <!-- Text Column -->
        <div class="col-lg-6 col-md-6 col-sm-12 order-lg-1 order-md-1 order-sm-1 order-2 custom-height">
        <div class="style1" style="padding:20px 50px;">
            <h2 id="text12">Deine Yoga-Reise beginnt mit uns</h2>
            <p id="text15" class="style3"><span style="color: black;">Daniela Schermer (Studioleitung):</span><br/> Zertifizierte Hatha-Yogatherapeutin, Faszien-Yoga-Lehrerin, Heilpädagogin, Jobcoachin für Menschen mit Handicap <br/><br/> <span style="color: black;">Ivonne Ritter Findeisen (freie Mitarbeiterin):</span> <br/> Zertifizierte Yin Yoga Lehrerin/Diplom-Journalistin <br/><br/> <span style="color: black;">Martina Michaelis (freie Mitarbeiterin):</span><br/>Zertifizierte Benefit Yoga® Lehrerin/ freie Rednerin</p>
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
                <p id="text49" class="style3">Bei uns kannst du dich vom Yoga-Anfänger zum erfahrenen Praktiker entwickeln</p>
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
                    <h2 id="" class="">{!! $article->title !!}</h2>
                    
                    <div class="style3 image d-flex justify-content-center align-items-center" data-position="center" style="opacity: 1; transform: none;">
                        <span  class="frame deferred news" style="background-image: none; background-size: 100% 100%; background-position: left top; background-repeat: no-repeat;">
                            <img src="{{ $article->image_url }}" data-src="done" alt="{{ $article->title }}" style="opacity: 1;" alt={{ $article->title }}>
                        </span>
                    </div>
                    <p id="" class="style3">{!! $article->content !!}</p>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2409.4783326916095!2d11.149156776555493!3d52.84978447214948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47afad3c061ad353%3A0x322ea3faa4f8f6f7!2sBurgstra%C3%9Fe%2077%2C%2029410%20Salzwedel!5e0!3m2!1sru!2sde!4v1704797346822!5m2!1sru!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-12 Map__El Map__El1">
                <!-- Информация -->
                <div>
                    <div class="unsere"><strong><span class="info__adresse">Unsere Adresse</span></strong></div>
                    <div class="info__info">
                        <strong>Adresse:</strong>
                        <p>Burgstraße 77, 29410 Salzwedel</p>
                        <strong>Telefonnummer:</strong>
                        <p>+49 1512 7138054</p>
                        <strong>Email:</strong>
                        <p ><a href="mailto:creatura_creare@gmx.de" style="color: rgb(52, 191, 234);font-weight: 400; text-decoration:none;">creatura_creare@gmx.de</a></p>
                        <!-- <a href="mailto:creatura_creare@gmx.de" class="sp-black" >creatura_creare@gmx.de</a> -->
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


             