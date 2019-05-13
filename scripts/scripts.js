$(document).ready(function(){

    // Checks if window is big enough for A-Frame scene
    if($(window).width() >= 1200){
        $("#head-canvas").load("scene.html");
    } else {
        $("#head-canvas").css("background-color", "rgba(32, 32, 32, 0.5)");
    }
    

    // ---- Form Events ---- 
    $("input").focus(function(){
        $(this).css("background-color", "#fff");
    });

    $("input").blur(function(){
        $(this).css("background-color", "rgb(201, 201, 201)");
    });

    // ---- Nav Stuff ----
    $( "ul.nav-list li" ).hover(
        function() {
            $(this).css("color", "red");
        },
        function() {
            $(this).css("color", "green");
        }
    );



});

