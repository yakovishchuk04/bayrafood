$(function(){
    $('.food__slider').slick({
        dots: false,
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"><img src="img/arrow-left.png" alt=""></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="img/arrow-right.png" alt=""></button>',
				responsive: [{
          breakpoint: 950,
          settings: {
						slidesToShow: 2,
          }
				},
				{
				breakpoint: 550,
				settings: {
					slidesToShow: 1,
				}
		}]
				
    });     
      $('.review-title').on('click', function(){
         $('.review-text').toggleClass('review-text--active'),
				 $('.review__item').toggleClass('review__item--active')
      });
			$('.resp-title').on('click', function(){
				$('.resp-text').toggleClass('resp-text--active'),
				$('.resp__item').toggleClass('resp__item--active')
		 });
});