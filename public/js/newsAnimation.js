
$(document).ready(function() {
   // Initialize the Slick slider
   $('#slider-container .inner1').slick({
        // your slider options here
        slidesToShow: 2, // Количество слайдов, показываемых одновременно
        slidesToScroll: 1, // Количество слайдов, прокручиваемых за раз
        prevArrow: $('.slick-prev'), // Используем кнопку "Previous"
        nextArrow: $('.slick-next'), // Используем кнопку "Next"
        responsive: [
            {
                breakpoint: 1024, // При ширине экрана менее 1024px
                settings: {
                    slidesToShow: 1, // Показываем только 1 слайд
                }
            }
        ]
    });
   
});



