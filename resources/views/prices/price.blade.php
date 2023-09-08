<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon-32x32.png') }}">

    <title>Main</title>

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
     <link href="{{ asset('css/price.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">



     <style>
        
    </style>
     
</head>

<body >
@include('events/header')



<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tabs">
                    <ul class="nav-tabs pricing__header">
                        <li class="active"><a href="#tab1" data-toggle="tab" class="price__a"><img src="/img/logoUl1.jpg" alt=""> {{ $price->subscription_type }}</a></li>
                        <li><a href="#tab2" data-toggle="tab" class="price__a"><img src="/img/logoUl1.jpg" alt=""> Probestunde</a></li>
                    </ul>
                </div>

                <div class="tab-content price__main">
                    <div id="tab1" class="tab-pane active">
                        <div class="section-content">
                            <div class="pricing__table">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="pricing-inner">
                                            <div class="pricingtable-price">
                                                <span> {{ floor($price->cost) }} €</span>
                                            </div>
                                            <div class="pricingtable-title">
                                                <h2> {{ $price->title }}</h2>
                                            </div>
                                            <ul class="pricingtable-feautures">
                                                <li><i class="fa fa-check"></i> <span> {{ $price->punkt1 }}</span></li>
                                                <li><i class="fa fa-check"></i><span>  {{ $price->punkt2 }}</span></li>
                                                <li><i class="fa fa-check"></i><span>  {{ $price->punkt3 }} </span></li>
                                                <li>
                                                    <div>
                                                        <img src="/img/pay.png" alt="Visa Mastercard" style="height:60px;">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div id="tab2" class="tab-pane">
                        <div class="section-content">
                            <div class="pricing__table">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="pricing-inner">
                                            <div class="pricingtable-price">
                                                <span>GRATIS</span>
                                            </div>
                                            <div class="pricingtable-title">
                                                <h2>Probestunde</h2>
                                            </div>
                                            <ul class="pricingtable-feautures">
                                                <li><i class="fa fa-check"></i> <span>Eine Gruppenstunde</span></li>
                                                <li><i class="fa fa-check"></i><span> Alle vorgestellten Yogarichtungen</span></li>
                                                <li><i class="fa fa-check"></i><span> Mit dem kauf eines fünfer tickets belegst du einen festen kurs mit 5 teilnahmen </span></li>
                                                <li>
                                                    <div>
                                                        <img src="/img/pay.png" alt="Visa Mastercard" style="height:60px;">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>


                <div class="ul-style">
                    <p>Zusatzleistungen:</p>
                    <ul>
                     <li><i class="fas fa-check-circle" style="margin-right: 5px;"></i> Teppichverleih - 1 €</li>
                    </ul>
                </div>


            </div>  
        </div>
    </div>


    <div class="container">
    <div class="section-content price__section_content"> <!-- Добавлен класс text-center для центрирования контента -->
        <h3 style="text-align:center; margin-bottom: 70px; font-family: 'Noto Sans Bold'; font-size: 30px; color: #666666">
Siehe Auch</h3>
        <div class="row">
            <div class="col-md-6"> <!-- Используем col-md-6 для создания двух колонок на больших экранах -->
                <div class="thumbnail">
                    <a href="#" class="price__img_a"><img src="img/Rhytm.jpg" alt="Rhytm Yoga" class="price__type"></a>
                    <div class="caption price__caption" style="">
                        <h4 class="price__h4"><a href="#" class="price__a">Hatha Yoga Kurs</a></h4>
                        <p class="price__p">Der Hauptaspekt des Hatha-Yoga ist die Entwicklung der Flexibilität und die Erhaltung der Gesundheit der Gelenke, insbesondere der Wirbelsäule. Jede Übung betrifft einen bestimmten Körperteil, ein bestimmtes Organ oder eine bestimmte Gruppe von Organen. Bei der Durchführung von Übungen wird die Atmung sowie ein Punkt – eine Stelle im Körper, auf die die Konzentration gerichtet werden soll – berücksichtigt.</p>
                        <a href="#" class="btn btn-primary price__btn">Um mehr zu lernen</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail">
                    <a href="#" class="price__img_a"><img src="img/Hatha.jpg" alt="Hatha Yoga" class="price__type"></a>
                    <div class="caption price__caption" style="">
                        <h4 class="price__h4"><a href="#" class="price__a">Rhytm Yoga Kurs</a></h4>
                        <p class="price__p">Rhythmus-Yoga ist ein Yoga-Stil, der sich auf die Synchronisierung von Bewegung mit Rhythmus und Musik konzentriert, um körperliche und emotionale Harmonie zu erreichen. Kreativität und Ausdruck: Dieser Stil ermöglicht es jedem Praktizierenden, seine Einzigartigkeit durch Bewegungs- und Tanzelemente auszudrücken.</p>
                        <a href="#" class="btn btn-primary price__btn">Um mehr zu lernen</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('main/footer')

        <!-- ПЕРЕКЛЮЧАТЕЛЬ ВКЛАДОК цен -->
<script>
    $(document).ready(function() {
        // Обработчик клика на вкладках
        $('.nav-tabs li').click(function() {
            // Убираем класс "active" у всех вкладок
            $('.nav-tabs li').removeClass('active');
            // Добавляем класс "active" только к кликнутой вкладке
            $(this).addClass('active');

            // Получаем идентификатор вкладки, на которую кликнули
            var tabId = $(this).find('a').attr('href');
            // Скрываем все контенты
            $('.tab-content .tab-pane').hide();
            // Показываем только контент выбранной вкладки
            $(tabId).show();
        });
    });
</script>
 <!-- Подключаем скрипты Bootstrap -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Slick Carousel library -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>







