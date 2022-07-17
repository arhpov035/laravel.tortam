/*Слайды*/
$(document).ready(function () {

    if ($(".slick-active").length == 1) {
        $(".slick-current.slick-active").css({"opacity": 1})
    } else {
        $(".slick-current.slick-active").next().css({"opacity": 1})
    }

    $(document).on("click", ".slick-arrow", function () {
        slideOpacity()
    })

    $('.filling.sliders').on('afterChange', function (event, slick, currentSlide, nextSlide) {
        slideOpacity()
    });


    $('.main_slide').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        cssEase: 'linear',
        speed: 1,
        dots: true,
        // focusOnSelect: true,
        nextArrow: '<img class="expand_less_right" src="/assets/img/svg/expand-less.svg" alt="">',
        prevArrow: '<img class="expand_less_left" src="/assets/img/svg/expand-less.svg" alt="">',

    });

})