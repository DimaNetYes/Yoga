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

    <!-- Подключаем стили Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

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


</wrapper>
    <!-- Подключаем скрипты Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Slick Carousel library -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    
                    //COOKIES
    <div id="cookie-notification" class="cookie-notification">
        <p>Этот сайт использует куки. Выберите предпочтения по использованию куки:</p>
        <button id="accept-all-cookies">Принять все куки</button>
        <button id="accept-optional-cookies">Принять необязательные куки</button>
        <button id="customize-cookies">Настроить куки</button>
    </div>
                //Added modal window for cookies
    <div class="modal fade" id="cookieSettingsModal" tabindex="-1" role="dialog" aria-labelledby="cookieSettingsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cookieSettingsModalLabel">Настройки куки</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="range" id="cookieSlider1" name="cookieSlider1" min="0" max="1" step="1" value="1"> Куки 1<br>
                    <input type="range" id="cookieSlider2" name="cookieSlider2" min="0" max="1" step="1" value="1"> Куки 2<br>
                    <input type="range" id="cookieSlider3" name="cookieSlider3" min="0" max="1" step="1" value="1"> Куки 3<br>
                    <input type="range" id="cookieSlider4" name="cookieSlider4" min="0" max="1" step="1" value="1"> Куки 4<br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-primary">Сохранить изменения</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var cookieNotification = document.getElementById('cookie-notification');
            if (!localStorage.getItem('cookieConsent')) {
                cookieNotification.style.display = 'block';
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var cookieNotification = document.getElementById('cookie-notification');
            if (!localStorage.getItem('cookieConsent')) {
                cookieNotification.style.display = 'block';
            }

            function hideCookieNotification() {
                cookieNotification.style.display = 'none';
                localStorage.setItem('cookieConsent', true);
            }

            document.getElementById('accept-all-cookies').addEventListener('click', function() {
                // Обработка принятия всех куки
                localStorage.setItem('cookieConsent', true);
                console.log("etwas");
                hideCookieNotification();
            });

            document.getElementById('accept-optional-cookies').addEventListener('click', function() {
                // Обработка принятия необязательных куки
                // Можно добавить соответствующую логику здесь
                hideCookieNotification();
            });

            document.getElementById('customize-cookies').addEventListener('click', function() {
                // Обработка настройки куки
                // Открываем модальное окно
                $('#cookieSettingsModal').modal('show');
                hideCookieNotification();
                // Откройте новое окно с ползунками вкл/выкл куки
                // Например, используя модальное окно Bootstrap
            });

            document.getElementById('cookieSettingsModal').addEventListener('hidden.bs.modal', function () {
             // Обработка закрытия модального окна
            // Сохранение настроек куки (здесь добавим логику сохранения настроек)
            // Пример: сохранение значений ползунков в localStorage
                localStorage.setItem('cookieSlider1', document.getElementById('cookieSlider1').value);
                localStorage.setItem('cookieSlider2', document.getElementById('cookieSlider2').value);
                localStorage.setItem('cookieSlider3', document.getElementById('cookieSlider3').value);
                localStorage.setItem('cookieSlider4', document.getElementById('cookieSlider4').value);
            });
        });
    </script>


</body>
</html>
