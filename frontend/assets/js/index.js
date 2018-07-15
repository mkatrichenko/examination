jQuery(document).ready(function($){

 $(function() {
    $('.menu__icon').on('click', function() {
      $(this).closest('.menu').toggleClass('menu_state_open');
    });
  });	
	
$('.feedback-slider').slick({
    infinite: true,
    arrows: false,
    //slidesToShow: 4,
    slidesToScroll:1,
	dots: true,
	adaptiveHeight: true
});



});