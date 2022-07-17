$(document).ready(function () {
    [].forEach.call(document.querySelectorAll('img[data-src]'),    function(img) {
        img.setAttribute('src', img.getAttribute('data-src'));
        img.onload = function() {
            img.removeAttribute('data-src');
        };
    });
    $(".dropdown").dropdown();
    let number_order = $("#number_order").val()
    $("#number_order").val(Number(number_order) + 1)
    $(document).on("click", "a[href='#']", function (e) {
        e.preventDefault()
    })
    $('input[type="tel"]').mask("+7(999) 999-9999");
    $(document).on("click", ".weights .more", function () {
        $(".item.border.rounded").each(function () {
            if (!$(this).hasClass("hide") && !$(this).hasClass("more")) {
                $(this).addClass("hide")
            } else {
                $(this).removeClass("hide")
            }
            if (!$(this).children().hasClass("rotate-90")) {
                $(this).children().addClass("rotate-90")
            } else {
                $(this).children().removeClass("rotate-90")
            }
        })
    })


    var pathname = window.location.pathname; // Returns path only (/path/example.html)
    var url = window.location.href;     // Returns full URL (https://example.com/path/example.html)
    var origin = window.location.origin;
    echo(pathname)
    echo(url)
    echo(origin)

    if (window.location.pathname == "/") {
        echo("Мы на главной")

    } else {
        var price_base = $(".replace_price").text()
        echo("Мы на внутреней")

        // $(".slick-current").siblings(".slick-active").css({"opacity": "1"})

    }
    $('.filling.sliders.detail').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        cssEase: 'linear',
        speed: 1,
        dots: true,
        // focusOnSelect: true,
        nextArrow: '<img class="expand_less_right" src="/assets/img/svg/expand-less.svg" alt="">',
        prevArrow: '<img class="expand_less_left" src="/assets/img/svg/expand-less.svg" alt="">',
        // responsive: [
        //      {
        //        breakpoint: 1024,
        //        settings: {
        //          slidesToShow: 1,
        //          slidesToScroll: 1,
        //        }
        //      },
        //      {
        //        breakpoint: 768,
        //        settings: {
        //          slidesToShow: 2,
        //          slidesToScroll: 1
        //        }
        //      }
        //    ]

    });
    $(document).on("click", ".tpl_order", function () {

        setTimeout(function () {


            $(".filling.sliders.prew").slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                cssEase: 'linear',
                speed: 1,
                dots: true,
                nextArrow: '<img class="expand_less_right" src="/assets/img/svg/expand-less.svg" alt="">',
                prevArrow: '<img class="expand_less_left" src="/assets/img/svg/expand-less.svg" alt="">',
            });
            $(".slick-current").siblings(".slick-active").css({"opacity": "1"})
            echo($(".slick-current").html())
        }, 300);
        $(".btn-close").click(function (){
            $(".filling.sliders").slick('unslick')
        })

        $(".item.border.rounded").removeClass("active")
        $(".item.border.rounded").eq(0).addClass("active")

        let main_price = $(this).prev().children().find(".price_js").text()
        let img = $(this).prev().prev().find("img").attr("src")

        echo(img)
        var price_base = main_price
        echo(price_base)
        $(".insertPrice").text(main_price)
        $(".form_order_block .img_inser").attr("src", img)

        $(document).on("click", ".weights .item", function () {
            echo(1)
            echo(price_base)
            echo(2)

            if (!$(this).hasClass("more")) {
                $(".weights .item").removeClass("active")
                $(this).addClass("active")

                let kg = $(this).children().first().text().replace(/[^0-9]/g, "")
                if (kg == "25") {
                    kg = "2.5"
                }

                if (Number(kg) >= 4) {
                    price = 2150
                } else {
                    price = price_base / 2
                }
                echo("Сюда попали")
                console.log(price)
                echo("Сюда попали")
                $(".replace_kg").text(kg)
                $(".insertKg").text(kg)
                $(".replace_price").text(kg * price)
                $(".insertPrice").text(kg * price)
                $('input[name="weight"]').val(kg)
                $('input[name="price"]').val(kg * price)

            }

            let data_title = $(this).attr("data-title")
            $(`.shipping_desc div`).css({"display": "none"})
            $(`.shipping_desc div[data-title="${data_title}"]`).css({"display": "block"})
        })


    })
    $(".insertWeightsSlide").attr("style", "display: block")


    $(document).on("click", ".weights .item", function () {
        echo(1)
        echo(price_base)
        echo(2)

        if (!$(this).hasClass("more")) {
            $(".weights .item").removeClass("active")
            $(this).addClass("active")

            let kg = $(this).children().first().text().replace(/[^0-9]/g, "")
            if (kg == "25") {
                kg = "2.5"
            }

            if (Number(kg) >= 4) {
                price = 2150
            } else {
                price = price_base / 2
            }
            echo("Сюда попали")
            console.log(price)
            echo("Сюда попали")
            $(".replace_kg").text(kg)
            $(".insertKg").text(kg)
            $(".replace_price").text(kg * price)
            $(".insertPrice").text(kg * price)
            $('input[name="weight"]').val(kg)
            $('input[name="price"]').val(kg * price)

        }

        let data_title = $(this).attr("data-title")
        $(`.shipping_desc div`).css({"display": "none"})
        $(`.shipping_desc div[data-title="${data_title}"]`).css({"display": "block"})
    })


    $(".count_comment").text($(".comment .row.mb-4").length)

    adaptiveReplacePrice()
    $(window).on('load resize', function () {
        adaptiveReplacePrice()
    });

    $(document).on("click", "button.order", function () {
        let kg = $(".weights.slide .item.active .num_kg > div").text().replace(/[^0-9]/g, "")

        if (kg == "25") {
            kg = "2.5"
        }
        let filling = $(".slick-current.slick-active").next().children("img").attr("alt")
        // let img = $(".slick-current.slick-active").next().children("img").attr("src")
        let price = $(".replace_price").text()
        $('input[name="weight"]').val(kg)
        $('input[name="price"]').val(price)
        $('input[name="filling"]').val(filling)

        $(".insertPrice").text(price)
        $(".insertKg").text(kg)
        $(".insertTitleFiling").text(filling)
        // $(".imgFiling").attr("src", img)

        $(".insertWeightsSlide").empty()
        $(".insertWeightsSlide").html($(".weights.slide").clone())

    })

    $(document).on("click", "a.get_filling", function () {
        $("#exampleModal").css({"z-index": 1056})
    })

    $(document).on("click", ".orderSubmit", function () {
        if ($('#exampleCheck1').prop('checked')) {
            $(".form-check-label.checkbox").css({"color": "#4f4f4f"})
        } else {
            $(".form-check-label.checkbox").text("Вы не согласились на обработку персональных данных")
            $(".form-check-label.checkbox").css({"color": "brown"})
        }
    })
    $(document).on("click", "#exampleCheck1", function () {
        if ($('#exampleCheck1').prop('checked')) {
            $(".form-check-label.checkbox").css({"color": "#4f4f4f"})
            $(".form-check-label.checkbox").text("Я согласен на обработку персональных данных")
        } else {
            $(".form-check-label.checkbox").text("Вы не согласились на обработку персональных данных")
            $(".form-check-label.checkbox").css({"color": "brown"})
        }
    })

    $(document).on("click", "a.get_filling", function () {
        // при клике в модальном окне начинок, выбираем нужный слайд
        let indexCur = $("a.get_filling").index(this)
        if (indexCur == 0) {
            indexCur = $("a.get_filling").length - 2
        } else {
            indexCur = indexCur - 1
        }
        $(".slick-dots li button").eq(indexCur).trigger('click');

        if ($(this).text() != "сменить") {
            $(".insertTitleFiling").text($(this).text())
        }


    })
    $(document).on("click", ".cake_weight a", function () {
        if ($(".insertWeightsSlide").css("display") == "none") {
            $(".insertWeightsSlide").css({"display": "block"})
            $(this).text("Скрыть")
        } else {
            $(".insertWeightsSlide").css({"display": "none"})
            $(this).text("Сменить")
        }
    })

    $(document).on("click", ".reset", function () {
        location.reload(true);
    })

    if ($(window).width() <= 768) {
        $(".product").prev().css({"margin-top": "212px"})
    }

    sortOrder()

    Fancybox.bind('[data-fancybox="gallery"]', {
        infinite: false
    });
})

