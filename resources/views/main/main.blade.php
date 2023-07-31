             <!-- left right elements -->
<div id="container19" class="style4 show-animation">
    <div class="row ">
        <!-- Image Column -->
        <div class="col-lg-6 col-md-6 col-sm-12 order-lg-1 order-md-1 order-sm-2 order-1 custom-height">
        <div class="style1" data-position="center">
            <span class="frame deferred">
            <img src="/img/test.jpg" data-src="done" alt="" class="img-fluid">
            </span>
        </div>
        </div>
        <!-- Text Column -->
        <div class="col-lg-6 col-md-6 col-sm-12 order-lg-2 order-md-2 order-sm-1 order-2 custom-height">
        <div class="style1" style="padding:0 50px;">
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
            <img src="/img/style.png" data-src="done" alt="" style="opacity: 1;">
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
            <img src="/img/logo3.png" data-src="done" alt="" style="opacity: 1;">
        </span>
    </div>

                                 <!-- news_slider.blade.php -->

    
    <div id="slider-container" class="style3 container columns" style="opacity: 1; transform: none;">
        
        <div class="wrapper">
       
            <div class="inner">
            
            @foreach($newsArticles as $article)
                @if($loop->index < 2)
                    <div class="slider-item">
                        <h2 id="" class="">{{ $article->title }}</h2>
                        <div class="style3 image" data-position="center" style="opacity: 1; transform: none;">
                            <span  class="frame deferred news" style="background-image: none; background-size: 100% 100%; background-position: left top; background-repeat: no-repeat;">
                                <img src="{{ $article->image_url }}" data-src="done" alt="{{ $article->title }}" style="opacity: 1;">
                            </span>
                        </div>
                        <p id="" class="style3">{{ $article->content }}</p>
                    </div>

                @else
                    <div class="slider-item hidden">
                        <h2 id="" class="">{{ $article->title }}</h2>
                        <div class="style3 image" data-position="center" style="opacity: 1; transform: none;">
                            <span  class="frame deferred news" style="background-image: none; background-size: 100% 100%; background-position: left top; background-repeat: no-repeat;">
                                <img src="{{ $article->image_url }}" data-src="done" alt="{{ $article->title }}" style="opacity: 1;">
                            </span>
                        </div>
                        <p id="" class="style3">{{ $article->content }}</p>
                    </div>
                @endif
            @endforeach
            </div>
        </div>
    </div>
     <!-- Вставляем кнопки "Previous" и "Next" для пролистывания остальных слайдов -->
     <button class="slick-prev">Previous</button>
    <button class="slick-next">Next</button>
   

             