$(document).ready(function(){

    $(window).scroll(function(){

      if($(window).scrollTop()>600){
        $("nav").addClass('black');
      }
      else{
        $("nav").removeClass('black');
      }
    });
});

$(document).ready(function(){
  $('.menu').click(function(){
    $('ul').mainClass('active')


  })
})
