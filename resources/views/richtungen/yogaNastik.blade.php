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
            background-image: url(/img/yoganastik3.png);
            background-size: auto;
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
        }

        ul li {
            margin-bottom: 10px;
        }

        .erste__bottom_hr {
            margin-top: 10px;
            margin-bottom: 40px;
        }
    </style>

</head>

<body>
    <wrapper>
        @include('events/header')



        <main>
            <div id="content-container">
                <h1 class="erste__h1">Yoganastik: ein wirksames Mittel, um Stress abzubauen und das Wohlbefinden zu
                    verbessern</h1>

                <p>
                    Yoganastik, dieser Begriff wird erstmals 1977 von der DDR-Zeitung „Volksstimme“ geprägt. Er
                    beschreibt eine Übungsserie, die den Asana des klassischen Hatha-Yoga angelehnt ist und später zu
                    einer Broschüre zusammengefasst wurde. Da sich vor diesem kulturpolitischen Hintergrund jede Form
                    der Spiritualität oder mentalen Anlehnung schwergetan hat, wurde aus dem Asana eine Gymnastikübung.

                </p>
                <hr>
                <p>
                    Unter dem Motto „abgestaubt und aufpoliert“ greife ich diese Form des Übens in einem meiner Kurse
                    auf und gebe Dir die Freiheit auch diesen Weg zu beschreiten.
                    Zweifellos kann man über diese Herangehensweise an Yoga streiten, da besonders in der Schrift der
                    Hatha Yoga Pradipika der eigentlich meditative Urgedanke der Meditation betont wird, doch habe ich
                    in meiner Zeit als Yogalehrerin immer wieder die Erfahrung gemacht, dass Menschen durchaus über das
                    Praktizieren zur mentalen Anbindung gefunden haben, dass die physischen Übungen in ihnen die Frage
                    nach dem höheren Sinn erst geweckt haben.

                </p>

                <p>
                    
                </p>

                <img class="erste__img" src="{{ asset('img/Yoganastik3.png') }}" alt="Erste Schritte">

                <h2>Vorteile von Yoganastik:</h2>
                <ul>
                    <li><strong>Reduzieren Sie Stress und verbessern Sie die psychische Gesundheit:</strong> Die
                        Ausübung von Yoganastik reduziert effektiv den Stresspegel und fördert die psychische
                        Gesundheit. Ihre Übungen helfen dabei, verspannte Muskeln im Rücken und Nacken zu entspannen,
                        was besonders wertvoll bei der Bekämpfung von Angstzuständen, Depressionen und Schlaflosigkeit
                        ist.
                    </li>
                    <li><strong>Verbesserte Gelenkflexibilität und -mobilität:</strong> Yoganastik kann dazu beitragen,
                        die Gelenkflexibilität und -mobilität zu verbessern und Menschen dabei zu helfen, alltägliche
                        Aufgaben einfacher und komfortabler zu erledigen. Beispielsweise können Yoganastik-Übungen wie
                        die Dreieckshaltung dazu beitragen, die Flexibilität der Schulter und des oberen Rückens zu
                        verbessern.
                    </li>
                    <li><strong>Muskelstärkung:</strong> Die Yoganastik-Praxis umfasst eine Vielzahl von Übungen zur
                        Muskelstärkung, die zur Verbesserung von Kraft und Ausdauer beitragen. Dies ist wichtig für die
                        allgemeine Gesundheit und kann helfen, Verletzungen vorzubeugen.
                    </li>
                    <li><strong>Steigerung des Gesamtenergieniveaus:</strong> Regelmäßiges Üben von Yoganastik aktiviert
                        das Gesamtenergieniveau und vermittelt ein Gefühl von Wachsamkeit und Aktivität. All dies
                        schafft ein angenehmes Gefühl, im Einklang mit sich selbst zu leben.
                    </li>
                </ul>

                <p>
                    Wenn Sie nach einer wirksamen Möglichkeit suchen, Stress abzubauen, Ihr Wohlbefinden zu verbessern
                    und Ihre allgemeine körperliche Aktivität zu steigern, ist Yoganastik eine großartige Option für
                    Sie.
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