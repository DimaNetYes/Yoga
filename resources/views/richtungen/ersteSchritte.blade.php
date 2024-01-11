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
            margin: 50px 0;
            max-width: 65vw;
        }

        h2 {
            margin: 30px 0;
            font-weight: bold;
        }

        h3 {
            font-weight: bold;
        }

        .erste__p_ol {
            margin-bottom: 30px;
        }

        ol {
            font-size: 16px;
            list-style-type: decimal;
        }

        ol li {
            margin-bottom: 10px;
            font-weight: bold;
        }

        #content-container ol li span {
            font-weight: normal;
            /* Отменяем жирное начертание для текста внутри li */
        }

        ul {
            font-size: 16px;
            margin-bottom: 40px;

        }

        .erste__warum {
            margin-top: 100px;
        }

        .erste__bottom_p {
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
                <h1 class="erste__h1">Willkommen in der Welt des Yoga – einer Reise zur Harmonie von Körper, Geist und
                    Seele!</h1>

                <p>
                    Unsere Rubrik „Erste Schritte im Yoga“ wurde speziell für diejenigen erstellt, die gerade erst ihren
                    Weg zu Gesundheit und innerem Gleichgewicht beginnen. Lassen Sie uns gemeinsam die wunderbare Welt
                    des Yoga erkunden und lernen, Ruhe in der Hektik des Alltags zu finden.
                </p>

                <img class="erste__img" src="{{ asset('img/ersteSchritte2.png') }}" alt="Erste Schritte">

                <h2>Was wird für Yoga benötigt?</h2>

                <p class="erste__p_ol">
                    Bevor man in die wunderbare Welt des Yoga eintaucht, ist es wichtig, sich richtig vorzubereiten.
                    Hier ist eine Liste der wichtigsten Hilfsmittel, die Ihnen helfen, Ihre Yoga-Praxis bequem und
                    selbstbewusst zu beginnen:
                </p>

                <ol>
                    <li><strong>Yogamatte:</strong>
                        <span>Dies ist das wichtigste Werkzeug für Ihre Praxis. Die Matte bietet eine bequeme und
                            stabile
                            Unterlage für Asanas und schont zudem Ihre Gelenke.</span>
                    </li>
                    <li><strong>Bequeme Kleidung:</strong>
                        <span>Wählen Sie lockere, bequeme Kleidung, die die Bewegungsfreiheit nicht einschränkt. Dies
                            wird
                            Ihnen helfen, Asanas frei auszuführen und jeden Moment des Übens zu genießen.</span>
                    </li>
                    <li><strong>Wasserflasche:</strong>
                        <span>Pflegen Sie Ihren Körper während des Trainings, indem Sie Ihren Durst mit Wasser stillen.
                            Dies
                            ist besonders wichtig, da Yoga dabei hilft, Giftstoffe aus dem Körper zu entfernen.</span>
                    </li>
                    <li><strong>Decke oder Schal:</strong>
                        <span>In der letzten Phase der Übung bedecken Sie sich während der Savasana (Ruhestellung) mit
                            einer
                            Decke oder einem Schal, um Wärme und Entspannung zu bewahren.</span>
                    </li>
                    <li><strong>Offenheit:</strong>
                        <span>Die wichtigste Ausrüstung ist Ihre Offenheit und die Bereitschaft, Neues zu entdecken.
                            Gehen Sie
                            neugierig und geduldig an Ihre Praxis heran und geben Sie sich die Möglichkeit, auf allen
                            Ebenen
                            zu wachsen.</span>
                    </li>
                </ol>

                <h2>Empfehlungen vor dem Üben:</h2>
                <ul>
                    <li>Kommen Sie mit halb leerem Magen:
                        Es ist besser, mit einer kleinen Menge Essen zu üben. Vermeiden Sie schwere Mahlzeiten vor einer
                        Yoga-Sitzung, um Beschwerden zu vermeiden und freie Bewegung zu ermöglichen.
                    </li>
                    <li>Verletzungswarnung:
                        Sollten Sie gesundheitliche Probleme oder Verletzungen haben, benachrichtigen Sie bitte den
                        Ausbilder oder wählen Sie entsprechende Modifikationen der Asanas aus. Es ist wichtig, auf
                        seinen Körper zu hören und sich nicht zu überanstrengen.
                    </li>
                </ul>

                <p>
                    Mit diesen Richtlinien und der Ausrüstung sind Sie bereit für eine aufregende Yoga-Reise. Denken Sie
                    daran, dass auf diesem Weg nicht nur Asanas wichtig sind, sondern auch die innere Harmonie, die Sie
                    durch Ihre Praxis erlangen. Willkommen in der Welt des Yoga, wo jeder Schritt ein Schritt in
                    Richtung Balance und Wohlbefinden ist!
                </p>

                <h2 class="erste__warum">Warum Yoga?</h2>
                <hr>
                <p>
                    Yoga ist nicht nur körperliche Bewegung, es ist ein ganzheitliches System zur Verbesserung der
                    körperlichen und geistigen Gesundheit. Es integriert Atmung, Bewegung und Meditation, um Ihnen dabei
                    zu helfen, Harmonie und Ausgeglichenheit in Ihrem Leben zu erreichen.
                </p>

                <h3>Meditation für den Geist</h3>
                <p class="erste__bottom_p">
                    Lernen Sie, sich zu konzentrieren, Ihren Geist zu beruhigen und in der Hektik des Alltags inneren
                    Frieden zu finden.
                    Lassen Sie uns gemeinsam den Weg des Yoga gehen und so neue Möglichkeiten für Selbsterkenntnis und
                    Harmonie eröffnen. Wir erwarten Sie auf der Matte!
                </p>


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