$(document).ready(function(){

    // ---- Form Events ---- 
    $("input").focus(function(){
        $(this).css("background-color", "#fff");
    });

    $("input").blur(function(){
        $(this).css("background-color", "rgb(201, 201, 201)");
    });
    
    // ---- Scroll Animation ---
    // if($(window).width() >= 1200 ){
    //     $(window).scroll(function () {            
    //         $('[class^="card"]').each(function () {
    //             var scrollPos = $(this).offset().top - $(window).scrollTop();
    //             if (scrollPos <= 150 && scrollPos >= 100 ||
    //                 scrollPos > 750) {
    //                 $(this).stop().fadeTo(500, 0.5);
    //             } else if ((scrollPos < 150) || 
    //                         (scrollPos > 850)) {
    //                 $(this).stop().fadeTo(500, 0);
    //             } else {
    //                 $(this).stop().fadeTo(500, 1);
    //             }

    //         });
    //     });
    // }

});