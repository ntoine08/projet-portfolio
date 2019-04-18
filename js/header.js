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
