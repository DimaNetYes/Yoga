<div class="footer">
  <div class="container">
    <div class="row">
      <div class="footer__inline col-lg-4 col-md-12">
        <div class="footer__logo">
          <img src="/img/logo_transit.png" alt="Logo">
        </div>
        
        <div>
          <img style="height:70px; margin-top: 20px;" src="/img/pay.png" alt="visa mastercard" class="footer__visa">
        </div>
      </div>
      <div class="footer__inline col-lg-4 col-md-12 footer__graph">
        <span class="footer__work">Öffnungszeiten des Studios</span>
        <div>
          <span>gültig ab 02.02.2024</span>
          <span>Mo: 8:30-12:00 Uhr | 15:00-20:00 Uhr</span>
          <span>Di: 8:30-13:00 Uhr | Mi: 15:00-20:00 Uhr</span>
          <span>Do: 8:30-14:00 Uhr</span>
          <span>Fr: 8:30-12:00 Uhr | 15:00-20:00 Uhr</span>
          <span>Sa/So: nach Ankündigung</span>
          <span>Während der Kurszeiten ist die Eingangstür verschlossen und Telefonate können nicht entgegengenommen werden.
Danke für das Verständnis.</span>
        </div>
      </div>
      <div class="footer__inline footer__inline_right col-lg-4 col-md-12">
        <span id="footer__phone">+49 1512 7138054</span>
        <span id="footer__info"><a href="mailto:creatura_creare@gmx.de" style="text-decoration: none; color: white; font-size: 18px;">creatura_creare@gmx.de</a></span>
        <span id="footer__feedback"><a href="https://g.page/Burgstraße+75,+29410+Salzwedel/review?gm" target="_blank"> Hinterlasse Kommentar</a></span>
        <div class="sociallinks__item_instagram footer__sociallinks_instagram">
            <!-- Вставка SVG-изображения Instagram -->
            <a href="https://www.instagram.com/yoga_im_atelier_salzwedel/" target="_blank"><img src="/img/icons8-instagram-96.svg" alt="Instagram Icon" class="footer__instagram"></a>
            <a href="{{ 'https://api.whatsapp.com/send?phone=' . urlencode('+4915127138054') }}" target="_blank">
                <img src="/img/icons8-whatsapp(1).svg" alt="Whatsapp" class="footer__whatsapp">
            </a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="informationen__footer">
      <a href="{{route("info")}}" class=" a__footer_impressum">Informationen</a>
      <a href="{{route("impressum")}}" class=" a__footer_impressum">Impressum</a>
    </div>
  </div>
  
  <div class="row">
    <div class="commerc">
      <p class="col-lg-6 col-md-12" id="p__footer_1">© 2023 "Grow! Yoga & Bildung"</p>
      <p class="col-lg-6 col-md-12" id="p__footer_2">Das Kopieren von Website-Materialien ist verboten</p>
    </div>
    <div></div>
  </div>

</div>





<!-- 
      <div class="social-links__footer">
        <a href="">
          <img src="/img/icons8-instagram-bubbles-32.png" alt="Instagram Icon">
        </a>
        <a href="">
            <img src="/img/icons8-whatsapp-color-32.png" alt="Whatsapp">
        </a>
      </div> -->


<!-- Idiot script that will change the height .t-cover__filter. Yes, im lazy -->
 <script>
    // Function to adjust the height of the .t-cover__filter element
    function adjustCoverFilterHeight() {
        var containerHeight = $("#container26").innerHeight(); // Get the height of the #container26 element
        $(".t-cover__filter").css("min-height", containerHeight); // Set the height of the .t-cover__filter element
    }

    // Call the function on page load and window resize
    $(document).ready(function() {
        adjustCoverFilterHeight();
    });

    $(window).on("resize", function() {
        adjustCoverFilterHeight();
    });
</script>

          <!-- Animation for elements slide, pop up... -->
<script>
  $(document).ready(function() {
    // Function to slide-up and show the content on scroll
    function showOnScroll() {
      var windowHeight = $(window).height();
      var scrollTop = $(window).scrollTop();

      $(".custom-height .style1, #container01, #image11, #container02, #image11_2").each(function() {
        var offsetTop = $(this).offset().top;
        var isVisible = $(this).hasClass("visible");

        if (!isVisible && (offsetTop < windowHeight + scrollTop -150)) {
          $(this).addClass("visible").css("opacity", 1);
        }
      });
    }

    // Initial check when the page loads
    showOnScroll();

    // Check on scroll
    $(window).scroll(function() {
      showOnScroll();
    });
  });
</script>

<script>
    
</script>