$(document).ready(function(){

    $(window).scroll(function(){

      if($(window).scrollTop()>300){
        $("nav").addClass('black');
      }
      else{
        $("nav").removeClass('black');
      }
    });
});
