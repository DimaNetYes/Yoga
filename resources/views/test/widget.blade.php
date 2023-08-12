<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* Стили для контейнера виджета */
.mf-widget {
    width: 100%; /* Ширина виджета */
    max-width: 600px; /* Максимальная ширина виджета, чтобы не был слишком широким */
    margin: 0 auto; /* Центрирование виджета по горизонтали */
}

    </style>
</head>
<body>
<div class="mf-widget mf-widget_reg"></div>
<div class="mf-widget mf-widget_reg" data-param="{{ $param }}"></div>


<script src="//paymo.ru/paymentgate/iframe/checkout.js"></script>
</body>
</html>













