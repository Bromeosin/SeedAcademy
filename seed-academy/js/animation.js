$(document).ready(function(){
  var scrollTop = 0;
  $(window).scroll(function(){
    scrollTop = $(window).scrollTop();
     $('.counter').html(scrollTop);
    
    if (scrollTop >= 100) {
      $('navbar-item').addClass('scrolled-nav');
    } else if (scrollTop < 100) {
      $('navbar-item').removeClass('scrolled-nav');
    } 
    
  }); 
  
});