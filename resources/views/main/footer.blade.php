




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