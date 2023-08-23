<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
   <style>
         .nav-link:hover {
           background-color: rgba(0, 123, 255, 0.2);
        }
        .alert-success {
             transition: opacity 4s ease; /* Добавьте анимацию для свойства opacity */
         }
    </style>
</head>
<body>

<div class="container">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="font-size: 25px;">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-uppercase  border-bottom border-primary" href="{{ route('admin.index') }}">Main</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-uppercase  border-bottom border-primary" href="{{ route('admin.courses.index') }}">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-uppercase  border-bottom border-primary" href="{{ route('admin.prices.index') }}">Prices</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-uppercase  border-bottom border-primary" href="{{ route('admin.courses.index') }}">Enrollments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-uppercase  border-bottom border-primary" href="{{ route('admin.courses.index') }}">Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-uppercase  border-bottom border-primary" href="{{ route('admin.courses.index') }}">Subscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-uppercase  border-bottom border-primary" href="{{ route('admin.courses.index') }}">Task</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-uppercase  border-bottom border-primary" href="{{ route('admin.courses.index') }}">User</a>
                </li>
                <!-- Добавьте ссылки на другие разделы админки -->
            </ul>
        </nav>
        <div class="container">
        @if(session('success'))
            <div class="alert alert-success" style="position: absolute; width:80%; left:auto;">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>
    </header>
    <main>
        @yield('content')
        {{ $main }}
    </main>
</div>


   

<script>
    // Код для автоматического закрытия сообщения об успехе через 5 секунд
    $(document).ready(function() {
        setTimeout(function() {
            $('.alert-success').fadeOut('slow');
        }, 2000); // 5000 миллисекунд = 5 секунд
    });
</script>
</body>
</html>