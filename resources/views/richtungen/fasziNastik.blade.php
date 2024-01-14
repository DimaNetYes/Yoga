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


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cookie.css') }}" rel="stylesheet">


    <style>
        #container26 {
            background-image: url(/img/Faszinastik2.jpg);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            position: relative;
            color: white;
        }

        /* Добавляем подчеркивание для заголовков */
        main h2 {
            text-decoration: underline;
        }

        main p {
            font-size: 1.3em;
        }

        .erste__img {
            max-width: 450px;
            margin-left: 20px;
            /* Отступ между текстом и изображением */
            margin-bottom: 20px;
            float: right;
            /* Отступ снизу от текста */
        }

        #content-container {
            max-width: 80vw;
            margin: 0 auto;
            padding: 20px;
            /* Отступы слева и справа */
            line-height: 1.55;
        }

        #content-container p {
            /* Стили для обтекания текста вокруг изображения */
            text-align: justify;
        }

        .erste__h1 {
            margin-top: 50px;
            font-weight: 600;
            text-shadow: 0 0 1px rgb(0, 0, 0);
        }

        .erste__h1+p {
            text-shadow: 0 0 1px rgb(0, 0, 0);
            margin: 50px 0 30px 0;
            max-width: 65vw;
        }

        h2 {
            margin: 30px 0;
            font-weight: bold;
        }

        ul {
            font-size: 16px;
            margin-bottom: 40px;
            list-style-type: none;
        }

        ul li {
            margin-bottom: 10px;
        }

        .erste__bottom_hr {
            margin-top: 10px;
            margin-bottom: 40px;
        }

        .faszinastik__last_p {
            text-shadow: 0 0 10px cornflowerblue;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
        }

        th,
        td {
            border-bottom: 1px solid #ccc;
            /* стиль для нижней границы */
            padding: 15px;
        }

        th {
            text-align: left;
            font-weight: bold;
            background-color: rgb(242, 242, 242);
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        td {
            text-align: left;
        }

        .faszinastik__td_first {
            padding-left: 20px;
        }

        .faszinastik__tr_header th {
            border-bottom: none;
            /* убираем нижнюю границу у заголовка */
        }

        /* Скругленные углы для последней строки */
        tr:last-child td {
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }
    </style>

</head>

<body>
    <wrapper>
        @include('events/header')



        <main>
            <div id="content-container">
                <h1 class="erste__h1">Faszinastik ist eine dynamischere Art von Yoga</h1>

                <p>
                    Faszinastik ist eine Gymnastikart, die Elemente aus Yoga, Pilates und Tai Chi vereint. Es wurde zu
                    Beginn des 21. Jahrhunderts in Deutschland als Methode zur Verbesserung der allgemeinen Gesundheit
                    und zur Steigerung der körperlichen Aktivität entwickelt.
                </p>
                <hr>
                <p>
                    Faszinastik-Übungen werden in einem schnelleren Tempo und mit größerem Bewegungsumfang ausgeführt.
                    Dadurch verbessert Faszinastik die Flexibilität und Beweglichkeit der Gelenke wirksamer.
                </p>

                <table border="1" style="border-radius: 5px;">
                    <thead>
                        <tr class="faszinastik__tr_header">
                            <th style=" font-weight: bold;" class="faszinastik__td_first">Charakteristisch
                            </th>
                            <th style="font-weight: bold;">Faszinastik</th>
                            <th style="font-weight: bold;">Yoganastik</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="faszinastik__td_first">Dynamik</td>
                            <td>Dynamisch</td>
                            <td>Entspannend</td>
                        </tr>
                        <tr>
                            <td class="faszinastik__td_first">Tempo</td>
                            <td>Schnell</td>
                            <td>Langsam</td>
                        </tr>
                        <tr>
                            <td class="faszinastik__td_first">Bewegungsfreiheit</td>
                            <td>Groß</td>
                            <td>Klein</td>
                        </tr>
                        <tr>
                            <td class="faszinastik__td_first">Wirksam zur Verbesserung der Gelenkflexibilität und
                                -mobilität</td>
                            <td>Hoch</td>
                            <td>Niedrig</td>
                        </tr>
                        <tr>
                            <td class="faszinastik__td_first">Wirksam zum Stressabbau und zur Verbesserung der
                                psychischen Gesundheit</td>
                            <td>Niedrig</td>
                            <td>Hoch</td>
                        </tr>
                    </tbody>
                </table>





                <h2>Tauchen Sie ein in die Welt der Faszinastik-Wirkung und spüren Sie, wie Ihre Gelenke zum Leben
                    erwachen:</h2>
                <ul>
                    <li>🏹 <strong>Bewegungsumfang:</strong> Die
                        Faszinastik wird Ihr treuer Begleiter bei der Verbesserung Ihres Bewegungsumfangs in wichtigen
                        Gelenken wie Schultern, Hüfte und Wirbelsäule sein. Stellen Sie sich vor, wie einfach und frei
                        Sie alltägliche Aufgaben erledigen können – sei es das Anziehen stilvoller Kleidung oder das
                        leichte Kämmen Ihrer Haare.
                    </li>
                    <li>💪 <strong>Muskelkraft für eine starke Haltung:</strong> Faszinastik ist nicht nur ein Training,
                        sondern eine echte unterstützende Grundlage für Ihre Körperhaltung. Vergessen Sie Fehlhaltungen
                        – Faszinastik-Übungen stärken die Schlüsselmuskeln, die die richtige Körperhaltung unterstützen.
                        Und vergessen Sie nicht: Die richtige Haltung ist nicht nur schön, sondern verringert auch das
                        Verletzungsrisiko!

                    </li>
                    <li>🌬️ <strong>Stressabbau:</strong> Lösen Sie Spannungen und verbessern Sie Ihre geistige
                        Gesundheit
                        mit Faszinastik. Tatsache ist, dass diese erstaunliche Praxis nicht nur körperliche Übungen,
                        sondern auch Atemtechniken umfasst, die Ihnen helfen, sich zu entspannen und die Alltagssorgen
                        zu vergessen.

                    </li>
                    <li>🌟 <strong>Für alle verfügbar:</strong> Unabhängig von Alter und körperlicher Fitness lädt
                        Faszinastik jeden in seine Welt ein. Dies ist eine ideale Lösung für diejenigen, die die
                        Flexibilität und Beweglichkeit der Gelenke verbessern möchten. Es wird auch eine echte Rettung
                        für diejenigen sein, die Stress reduzieren und ihr geistiges Wohlbefinden verbessern möchten.
                        Tauchen Sie ein in Faszinastik und spüren Sie, wie Ihr Leben voller Energie und Harmonie ist!
                    </li>
                </ul>

                <p class="faszinastik__last_p">
                    Insgesamt ist Faszinastik ein effektives Übungssystem, von dem Menschen jeden Alters und
                    Fitnessniveaus profitieren können.
                </p>

                <hr class="erste__bottom_hr">

            </div>
        </main>




        <footer>
            @include('main/footer')
        </footer>


        @if (isset($showCookieConsent) && $showCookieConsent)
        @include('components.cookie-consent')
        @endif

    </wrapper>

    <!-- Подключаем скрипты Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>