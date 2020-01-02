 $(function() {
   
   $(window).scroll(function(){ 
        if ($(this).scrollTop() > 400) { 
            $('.scroll-down').fadeOut(); 
        } else { 
            $('.scroll-down').fadeIn(); 
        } 
    }); 
   
    $('.scroll-down').click (function() {
      $('html, body').animate({scrollTop: $('#jobcounter').offset().top }, 'slow');
      return false;
    });
  });