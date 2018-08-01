$(document).ready(function(){

    // ---- Form Events ---- 
    $("input").focus(function(){
        $(this).css("background-color", "#fff");
    });

    $("input").blur(function(){
        $(this).css("background-color", "rgb(201, 201, 201)");
    });
    
    //---- Scroll Animation ---
    function scrollNav() {
        $('.nav a').click(function(){  
          //Toggle Class
          $(".active").removeClass("active");      
          $(this).closest('li').addClass("active");
          var theClass = $(this).attr("class");
          $('.'+theClass).parent('li').addClass('active');
          //Animate
          $('html, body').stop().animate({
              scrollTop: $( $(this).attr('href') ).offset().top - 160
          }, 400);
          return false;
        });
        $('.scrollTop a').scrollTop();
      }
      scrollNav();

    

});

