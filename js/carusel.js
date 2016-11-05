$(document).ready(function() {
  console.log($("#owl-demo").owlCarousel);
 
  $("#owl-demo").owlCarousel({
 
      navigation : true, // показывать кнопки next и prev 
 
      slideSpeed : 300,
      paginationSpeed : 400,
 
      items : 1, 
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      itemsMobile : false
 
  });
 
});