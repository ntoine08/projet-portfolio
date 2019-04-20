$(document).ready(function(){

    $(window).scroll(function(){

      if($(window).scrollTop()>450){
        $("nav").addClass('black');
      }
      else{
        $("nav").removeClass('black');
      }
    });
});

function myFunction() {
  var x = document.getElementById("main");
  if (x.className === "main") {
    x.className += " responsive";
  } else {
    x.className = "main";
  }
}
