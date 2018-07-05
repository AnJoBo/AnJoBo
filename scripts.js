
// $(document).ready(function() {

//   $(".card").hover(function() {
//     $(this).css("background-color", "white");
//   }, function() {
//     $(this).css("background-color", "black");
//   });

// });

$(document).ready(function() {

  $("#myPhoto").hover(function() {
    $(this).attr("src", "me00-1.png");
  }, function() {
    $(this).attr("src", "me00.png");
  });

});