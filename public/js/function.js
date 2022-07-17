function slideOpacity() {
    if ($(".slick-active").length != 1) {
        $(".slick-active").css({"opacity": ".3"})
        $(".slick-current.slick-active").next().css({"opacity": 1})
    } else {
        $(".slick-current.slick-active").css({"opacity": 1})
    }
}

function echo(val) {
    console.log(val)
}

function adaptiveReplacePrice() {
    if ($(window).width() <= 768) {
        $('.block_replace_prece_js').html($('.adaptive_replace_js').detach());
        $('.adaptive_replace_js').addClass("fixed_my");
    }
}

function sortOrder(){
    // let href = window.location.href
    // echo(href.includes("DESC"));

        $(".block_sort a").each(function (){
            let href = $(this).attr("href")
            if (href.includes("ASC")){
                $(this).addClass("desc")
            }
        })


}