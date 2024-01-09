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
     <link href="{{ asset('css/info.css') }}" rel="stylesheet">
     <link href="{{ asset('css/main.css') }}" rel="stylesheet">
     <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 
</head>

<body >

@include('events/header')

<div class="container__info">
        <h1>Liebe Yogint, lieber Yogi</h1>

        <p>Aus organisatorischen Gründen bitte ich um Dein Mitwirken:</p>

        aus organisatorischen Gründen bitte ich um Dein Mitwirken:

Das Fünfer-Ticket soil Dir eine zeitlich gut machbare Kursteilnahme ermöglichen, die Dich nicht länger bindet, als Du wirklich Freude und Erfüllung im Yoga findest.

Sicher ist Dir längst bewusst, dass sich die Wirkung der Übungen erst im beständigen Praktizieren entfaltet, nicht immer jedoch lässt unser Alltag eine wöchentliche Kontinuität zu. Um eine Flexibilitat anbieten zu können, habe ich auf langfristig bindende Verträge verzichtet und setzte auf Vielfalt in den Kursen und Zeiten.

Das Fünfer-Ticket bietet die Teilnahme an 5 Yoga-Stunden (jeweils 90 Minuten) in einem, von Dir gewählten Stammkurs". Das sollte idealerweise ein Tag und eine Zeit sein, an dem Du mit großer Wahrscheinlichkeit teilnehmen kannst. Solite das mal nicht möglich sein, fragst Du einfach nach einem Ausweichtermin. Häufig gibt es andere Teilnehmer/innen, die ein ähnliches Zeitproblem haben und so findet sich meistens ein freier Platz. Auch zusätzliche Stunden sind so möglich.

Natürlich baut das Funktionieren dieses Systems auf ein paar Grundsätze. Bitte lese sie und entscheide, ob Du Dich auf den Inhalt einlassen kannst!

1. Überlege bitte vorab, ob Dir eine Festlegung auf einen Stammkurs" möglich ist.

2. Wenn Du ein Fünfer-Ticket gebucht hast, aber nicht teilnehmen kannst oder möchtest, melde Dich bitte spätestens (wenn möglich kurz schriftlich) 2 Tage vor Deinem Kurs ab. Damit stellst Du Deinen Platz einem anderen Menschen zur Verfügung und Dein Guthaben im Fünfer- Ticket wird nicht geschmälert.

3. Versteh bitte, dass ich Dich als anwesend zählen muss, wenn Du Dich nicht oder zu kurzfristig abmeldest.

4. Möchtest Du auf einen anderen Kurs ausweichen, informiere mich möglichst schriftlich mit ein wenig organisatorischer Frist. Ich melde mich auf jeden Fall zurück. 5. Bel fünfmaliger Absage kann ich Dir ein Platzrecht in Deinem Stammkurs nicht mehr garantieren, auch wenn Du die Meldefrist eingehalten hast. Natürlich bleibt Dein Ticket-Guthaben erhalten, bitte lass uns dann aber über andere Möglichkeiten reden.

6. Das Fünfer-Ticket für Salzwedel kostet 65,00€ inkl. Mehrwertsteuer. Für die Yogakurse in Fleetmark und Kalbe/Milde liegt der Preis bei 60,00 €.
Aktuell strebeich die Zertifizierung als Präventionskurs zur Abrechnung bei den Krankenkassen an, Du kannst Dir den Betrag dann anteilig 2mal jährlich rückerstatten lassen.

7. Wähle bitte, ob Du mit Bargeld oder per Überweisung zahlen möchtest. Teile mir Deine Wahl einfach auf dem Anmeldebogen mit. Aus diesem und anderem Grund benötige ich Deine persönlichen Daten, mit denen ich höchst achtsam umgehen werde.

8. Für jedes neue oder fortgeführte Fünfer-Ticket erhältst Du eine schriftliche Rechnung. Diese wird bei der 2. Teilnahme in einem Kurs ausgehändigt und hat ein Zahlungsziel von 15 Tagen.

9. Bei Online-Zahlungen gib bitte immer Rechnungs- und Kundennummer an.

10. Informiere mich bitte rechtzeitig, wenn Du weißt, dass Du kein weiteres Fünfer-Ticket haben und nicht mehr teilnehmen möchtest.

Wenn Du damit konform bist, sage ich Danke!" und freue mich auf die gemeinsame Zeit,

Daniela Schermer

    </div>


@include('main/footer')
<!-- Подключаем скрипты Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>