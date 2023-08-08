
<div class="slider-container">
  <div class="slider-biba">
    <img src="https://via.placeholder.com/400x300?text=Slide+1" alt="Slide 1">
  </div>
  <div class="slider-biba">
    <img src="https://via.placeholder.com/400x300?text=Slide+2" alt="Slide 2">
  </div>
  <div class="slider-biba">
    <img src="https://via.placeholder.com/400x300?text=Slide+3" alt="Slide 3">
  </div>
</div>

<script>
    $(document).ready(function() {
        $('.slider-container').slick({
            // Slick options
            dots: false,
            autoplay: true,
            slidesToShow: 2,
            margin: 80,
            
        });
    });
</script>



