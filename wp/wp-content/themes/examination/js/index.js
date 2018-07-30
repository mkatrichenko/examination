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
	adaptiveHeight: false,
	focusOnSelect: true
});

	
	
	
	function wrapAdd(arg){
		for(let i=0; i<arg.length; i++){
		let temp = arg[i].getElementsByTagName('iframe');
		if (temp.length != 0){
			arg[i].className = 'frame-wrapper';
		};
	};
	}
	
	let article = $('.article .wrapper')[0];
	let wrap = article.getElementsByTagName('P');	
	wrapAdd(wrap);
	
	let news = $('.news .wrapper .news__item');
	for(let i=0; i<news.length; i++){
		let newsItem = news[i].getElementsByTagName('P');
		wrapAdd(newsItem);
	}
	
	

});