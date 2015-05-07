$(document).ready(function(){
  $('#welcome-close').click(function(){
    $('.sign-up').stop().toggleClass('open');
    $('.border-circle').stop().toggleClass('down');
  });
});