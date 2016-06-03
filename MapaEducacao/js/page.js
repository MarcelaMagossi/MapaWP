jQuery(document).ready(function(){ 
   jQuery('.nav a').click(function(){  
    //Animate
    $('html, body').stop().animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 800);
    return false;
  });

 });