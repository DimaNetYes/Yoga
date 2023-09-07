<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5;url={{ url('/') }}">  <!--Мета перенаправление через 5 сек -->
    <title>404 - Seite nicht gefunden</title>
</head>
<body>
    <h1>404 - Seite nicht gefunden</h1>
    <p>Nach 5 Sekunden werden sie zur <a href="{{ url('/') }}">HauptSeite weiteregeleitet</a>.</p>
</body>
</html>