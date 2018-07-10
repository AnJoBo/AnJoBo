$(document).ready(function(){

    // ---- Form Events ---- 
    $("input").focus(function(){
        $(this).css("background-color", "#fff");
    });

    $("input").blur(function(){
        $(this).css("background-color", "rgb(201, 201, 201)");
    });

    // ---- Scroll Animation ---
    if($(window).width() >= 1200 ){
        $(window).scroll(function () {
            $('[class^="card"]').each(function () {
                if (($(this).offset().top - $(window).scrollTop()) < 150) {
                    $(this).stop().fadeTo(500, 0);
                } else {
                    $(this).stop().fadeTo(500, 1);
                }
            });
        });
    }

});