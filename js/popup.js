$(function(){    
      $('.main-btn').on('click', function(){
         $('.popup').toggleClass('popup-visible')
      });
			$('.popup-close-btn').on('click', function(){
				$('.popup').toggleClass('popup-visible')
		 });
});