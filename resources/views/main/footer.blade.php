




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

<script>
  $(document).ready(function() {
    // Function to slide-up and show the content on scroll
    function showOnScroll() {
      var windowHeight = $(window).height();
      var scrollTop = $(window).scrollTop();

      $(".custom-height .style1").each(function() {
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

