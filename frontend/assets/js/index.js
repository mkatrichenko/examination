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
		for (i=0; i<arg.length; i++){
		var temp = arg[i].getElementsByTagName('iframe');
		if (temp.length != 0){
			arg[i].className = 'frame-wrapper';
		};
	};
	}
	
	var article = $('.article .wrapper')[0];
	if (article){
		var wrap = article.getElementsByTagName('P');
		if (wrap != null){
			wrapAdd(wrap);
		};
	};
	
	
	
	var news = $('.news .wrapper .news__item');
	for (i=0; i<news.length; i++){
		var newsItem = news[i].getElementsByTagName('P');
		if (wrap != null){
			wrapAdd(newsItem);
		};
		
	}
	
	

});