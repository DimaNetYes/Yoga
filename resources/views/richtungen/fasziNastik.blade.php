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

       
    </style>

</head>

<body>
    <wrapper>
        @include('events/header')



        <main>
            <div id="content-container">
                <h1 class="erste__h1">Faszinastik: Eine Innovative Herangehensweise an Körperbewegung und Flexibilität</h1>

                <p>
                    Faszinastik ist eine Gymnastikart, die Elemente aus Yoga, Pilates und Tai Chi vereint. 
                </p>
                <hr>
                <p>
                    Die Faszie ist eine netzartig, mehrdimensionale Bindegewebestruktur, die Organe und Hohlräume des
                    Körpers auskleidet, Muskelschichten und Funktionsbereiche voneinander abgrenzt und lange Leitbahnen
                    (Faszien-Linien)der Kraft-, Impuls- und Energieübertagung bildet. Sie ist, sozusagen, der
                    Multiplayer unseres Stütz- und Bewegungsapparates. Unumgänglich also, wenn wir an die Komplexität
                    der ein oder anderen Körperhaltung denken und naheliegend, Yoga damit in Verbindung zu bringen. So
                    simpel diese Verknüpfung aber scheinen mag, umso weniger kann ich mich damit anfreunden. Seit meiner
                    Ausbildung zur Faszien-Yoga Trainerin frage ich mich, ob ich ein Faszientraining tatsächlich in die
                    statisch tragenden Asanas und die mental fokussierte Ausrichtung einer Yogastunde integrieren
                    möchte.
                </p>
                <p>
                    Ich habe einen anderen Weg gewählt:<br>
                    In der Faszinastik* wird gebounct, geklopft, geknetet und verdreht, aber auch gehüpft, geschaukelt
                    und -natürlich- gedehnt. Trotz scheinbarer Leichtigkeit handelt es ich um eine intensive und
                    bewusste Aktivierung, die körperlich durchaus spürbar ist. Asanas aus dem Yoga bilden für viele
                    Übungen den Ansatz, sind jedoch nach dem Wirkungsziel modifiziert, der Körper wird in ungewohnte
                    Posen gebracht. Dabei werden Muskeln oder Partien differenziert, eher sekundär angesprochen.
                    Verschiedenste Hilfsmittel kommen zum Einsatz, sie unterstützen das Weichmachen von Bändern, Sehnen
                    oder Körperregionen.
                </p>

                <h2>Vorteile von Faszinastik:</h2>
                <ul>
                    <li> <strong>Mit Faszinastik*</strong> lösen sich Verspannungen in der Schulter, im Rücken- und
                        Lendenbereich.
                    </li>
                    <li>Schmerzhafte Verkürzungen langer Muskel-und Sehnenstränge werden gedehnt.

                    </li>
                    <li>Vor allem aber hinterlässt Faszinastik* ein Gefühl der Körpergeschmeidigkeit und der
                        Bewegungsfähigkeit.

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