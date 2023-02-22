$(function(){    
      $('.main-btn').on('click', function(){
         $('.popup').toggleClass('popup-visible')
      });
			$('.popup-close-btn').on('click', function(){
				$('.popup').toggleClass('popup-visible')
		 });
		 $('.menu__btn').on('click', function(){
			$('.menu__btn').toggleClass('menu__btn--active'),
			$('.menu__list').toggleClass('menu__list--active')
	 });
});