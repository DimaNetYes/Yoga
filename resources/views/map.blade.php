<!DOCTYPE html>
<html>
<head>
    <title>Карта с адресом</title>
    <style>
  /* Стили для контейнера с картой */
  
  /* CSS стили для установки ширины карты на треть экрана для экранов шире 1200 пикселей */
@media (min-width: 1200px) {
  .custom-map-width {
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
}

</style>
</head>
<body>
    <h1>Карта с адресом</h1>
    
<!-- HTML-код с контейнером карты и использованием Bootstrap -->
<div class="row">
  <div class="col-12 col-md-4 custom-map-width">
    <div class="map-container" style="position: relative; padding-bottom: 75%; height: 0;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2409.47253104764!2d11.151745000000002!3d52.849889000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47afad3c062e369f%3A0x7844941ac34ca6a2!2sBurgstra%C3%9Fe%2075%2C%2029410%20Salzwedel!5e0!3m2!1sru!2sde!4v1690889070242!5m2!1sru!2sde" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</div>

 
</body>
</html>
