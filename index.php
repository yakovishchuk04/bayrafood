<?php
	include "php/databases.php";
	$result1 = mysqli_query($induction, "SELECT * from `food`");
	$result2 = mysqli_query($induction, "SELECT * from `food`");
	$result3 = mysqli_query($induction, "SELECT * from `food`");
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bayrafood</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/style.css">
</head>
	
<body>
	 <header class="header">
		<div class="container">
			<div class="header__inner">
				<div class="header__logo">
					<a href="#"><img src="img/logo.png" alt="logo"></a>
				</div>
				<nav class="menu">
					<div class="menu__btn">
						<span></span>
					</div>
					<ul class="menu__list">
						<li class="menu__list-item"><a class="menu__list-link" href="#menu-1">Меню</a></li>
						<li class="menu__list-item"><a class="menu__list-link" href="#menu-2">Про нас</a></li>
						<li class="menu__list-item"><a class="menu__list-link" href="#menu-3">Відгуки</a></li>
					</ul>
				</nav>
				<div class="reg__link"> 
					<!-- php -->
					 <a class="reg__link-reg" href="pages/auth.html"><img src="img/account.png" alt="account"></a>
				</div>
			</div>
		</div>
	</header>
<main>
<section class="intro">
		<div class="container">
			<div class="intro__inner">
				<div class="intro__img">
					<img src="img/food.png">
				</div>
				<div class="intro__text">
					<h1 class="intro-title">Незабутній смак</h1>
					<div class="intro-desc">Відчуйте турботу приготування з добірними інгрідієнтами</div>
				</div>
			</div>
		</div>
	</section> 

	<section class="food" id="menu-1">
		<div class="container">
			<div class="food__inner">
				<div class="food-title">Основні страви</div>
				<div class="food__slider">
					<div class="food__slider-item">
						<div class="slider-links-center">
							<a href="pages/food-1.html" class="slider-item-img"><img src="img/food-1.png" alt="image"></a>
						</div>
						<div class="slider-links-center">
							<a href="pages/food-1.html" class="slider-item-title"><?php $title = mysqli_fetch_assoc($result1); echo $title['name'];?></a>
						</div>
						<div class="slider-item-desc">
							<div class="slider-item-text"><?php $desc = mysqli_fetch_assoc($result2); echo $desc['description'];?></div>
						</div>
						<div class="slider-item-price"><?php $price = mysqli_fetch_assoc($result3); echo $price['price'];?> ₴</div>
						<div class="slider-item-buy slider-links-center">
							<a href="pages/food-1.html" class="slider-item-btn">Замовити</a>
						</div>
					</div>

					<div class="food__slider-item">
						<div class="slider-links-center">
							<a href="#" class="slider-item-img"><img src="img/food-2.png" alt="image"></a>
						</div>
						<div class="slider-links-center">
							<a href="#" class="slider-item-title"><?php $title = mysqli_fetch_assoc($result1); echo $title['name'];?></a>
						</div>
						<div class="slider-item-desc">
							<div class="slider-item-text"><?php $desc = mysqli_fetch_assoc($result2); echo $desc['description'];?></div>
						</div>
						<div class="slider-item-price"><?php $price = mysqli_fetch_assoc($result3); echo $price['price'];?> ₴</div>
						<div class="slider-item-buy slider-links-center">
							<a href="#" class="slider-item-btn">Замовити</a>
						</div>
					</div>

					<div class="food__slider-item">
						<div class="slider-links-center">
							<a href="#" class="slider-item-img"><img src="img/food-3.png" alt="image"></a>
						</div>
						<div class="slider-links-center">
							<a href="#" class="slider-item-title"><?php $title = mysqli_fetch_assoc($result1); echo $title['name'];?></a>
						</div>
						<div class="slider-item-desc">
							<div class="slider-item-text"><?php $desc = mysqli_fetch_assoc($result2); echo $desc['description'];?></div>
						</div>
						<div class="slider-item-price"><?php $price = mysqli_fetch_assoc($result3); echo $price['price'];?> ₴</div>
						<div class="slider-item-buy slider-links-center">
							<a href="#" class="slider-item-btn">Замовити</a>
						</div>
					</div>

					<div class="food__slider-item">
						<div class="slider-links-center">
							<a href="#" class="slider-item-img"><img src="img/food-4.png" alt="image"></a>
						</div>
						<div class="slider-links-center">
							<a href="#" class="slider-item-title"><?php $title = mysqli_fetch_assoc($result1); echo $title['name'];?></a>
						</div>
						<div class="slider-item-desc">
							<div class="slider-item-text"><?php $desc = mysqli_fetch_assoc($result2); echo $desc['description'];?></div>
						</div>
						<div class="slider-item-price"><?php $price = mysqli_fetch_assoc($result3); echo $price['price'];?> ₴</div>
						<div class="slider-item-buy slider-links-center">
							<a href="#" class="slider-item-btn">Замовити</a>
						</div>
					</div>
				</div>

				<div class="food-title">Десерти</div>
				<div class="food__slider">
					<div class="food__slider-item">
						<div class="slider-links-center">
							<a href="#" class="slider-item-img"><img src="img/food-5.png" alt="image"></a>
						</div>
						<div class="slider-links-center">
							<a href="#" class="slider-item-title"><?php $title = mysqli_fetch_assoc($result1); echo $title['name'];?></a>
						</div>
						<div class="slider-item-desc">
							<div class="slider-item-text"><?php $desc = mysqli_fetch_assoc($result2); echo $desc['description'];?></div>
						</div>
						<div class="slider-item-price"><?php $price = mysqli_fetch_assoc($result3); echo $price['price'];?> ₴</div>
						<div class="slider-item-buy slider-links-center">
							<a href="#" class="slider-item-btn">Замовити</a>
						</div>
					</div>

					<div class="food__slider-item">
						<div class="slider-links-center">
							<a href="#" class="slider-item-img"><img src="img/food-6.png" alt="image"></a>
						</div>
						<div class="slider-links-center">
							<a href="#" class="slider-item-title"><?php $title = mysqli_fetch_assoc($result1); echo $title['name'];?></a>
						</div>
						<div class="slider-item-desc">
							<div class="slider-item-text"><?php $desc = mysqli_fetch_assoc($result2); echo $desc['description'];?></div>
						</div>
						<div class="slider-item-price"><?php $price = mysqli_fetch_assoc($result3); echo $price['price'];?> ₴</div>
						<div class="slider-item-buy slider-links-center">
							<a href="#" class="slider-item-btn">Замовити</a>
						</div>
					</div>

					<div class="food__slider-item">
						<div class="slider-links-center">
							<a href="#" class="slider-item-img"><img src="img/food-7.png" alt="image"></a>
						</div>
						<div class="slider-links-center">
							<a href="#" class="slider-item-title"><?php $title = mysqli_fetch_assoc($result1); echo $title['name'];?></a>
						</div>
						<div class="slider-item-desc">
							<div class="slider-item-text"><?php $desc = mysqli_fetch_assoc($result2); echo $desc['description'];?></div>
						</div>
						<div class="slider-item-price"><?php $price = mysqli_fetch_assoc($result3); echo $price['price'];?> ₴</div>
						<div class="slider-item-buy slider-links-center">
							<a href="#" class="slider-item-btn">Замовити</a>
						</div>
					</div>

					<div class="food__slider-item">
						<div class="slider-links-center">
							<a href="#" class="slider-item-img"><img src="img/food-8.png" alt="image"></a>
						</div>
						<div class="slider-links-center">
							<a href="#" class="slider-item-title"><?php $title = mysqli_fetch_assoc($result1); echo $title['name'];?></a>
						</div>
						<div class="slider-item-desc">
							<div class="slider-item-text"><?php $desc = mysqli_fetch_assoc($result2); echo $desc['description'];?></div>
						</div>
						<div class="slider-item-price"><?php $price = mysqli_fetch_assoc($result3); echo $price['price'];?> ₴</div>
						<div class="slider-item-buy slider-links-center">
							<a href="#" class="slider-item-btn">Замовити</a>
						</div>
					</div>
				</div>	

				<div class="food-title">Напої</div>
				<div class="food__slider">
					<div class="food__slider-item">
						<div class="slider-links-center">
							<a href="#" class="slider-item-img"><img src="img/food-9.png" alt="image"></a>
						</div>
						<div class="slider-links-center">
							<a href="#" class="slider-item-title"><?php $title = mysqli_fetch_assoc($result1); echo $title['name'];?></a>
						</div>
						<div class="slider-item-desc">
							<div class="slider-item-text"><?php $desc = mysqli_fetch_assoc($result2); echo $desc['description'];?></div>
						</div>
						<div class="slider-item-price"><?php $price = mysqli_fetch_assoc($result3); echo $price['price'];?> ₴</div>
						<div class="slider-item-buy slider-links-center">
							<a href="#" class="slider-item-btn">Замовити</a>
						</div>
					</div>

					<div class="food__slider-item">
						<div class="slider-links-center">
							<a href="#" class="slider-item-img"><img src="img/food-10.png" alt="image"></a>
						</div>
						<div class="slider-links-center">
							<a href="#" class="slider-item-title"><?php $title = mysqli_fetch_assoc($result1); echo $title['name'];?></a>
						</div>
						<div class="slider-item-desc">
							<div class="slider-item-text"><?php $desc = mysqli_fetch_assoc($result2); echo $desc['description'];?></div>
						</div>
						<div class="slider-item-price"><?php $price = mysqli_fetch_assoc($result3); echo $price['price'];?> ₴</div>
						<div class="slider-item-buy slider-links-center">
							<a href="#" class="slider-item-btn">Замовити</a>
						</div>
					</div>

					<div class="food__slider-item">
						<div class="slider-links-center">
							<a href="#" class="slider-item-img"><img src="img/food-11.png" alt="image"></a>
						</div>
						<div class="slider-links-center">
							<a href="#" class="slider-item-title"><?php $title = mysqli_fetch_assoc($result1); echo $title['name'];?></a>
						</div>
						<div class="slider-item-desc">
							<div class="slider-item-text"><?php $desc = mysqli_fetch_assoc($result2); echo $desc['description'];?></div>
						</div>
						<div class="slider-item-price"><?php $price = mysqli_fetch_assoc($result3); echo $price['price'];?> ₴</div>
						<div class="slider-item-buy slider-links-center">
							<a href="#" class="slider-item-btn">Замовити</a>
						</div>
					</div>
					
					<div class="food__slider-item">
						<div class="slider-links-center">
							<a href="#" class="slider-item-img"><img src="img/food-12.png" alt="image"></a>
						</div>
						<div class="slider-links-center">
							<a href="#" class="slider-item-title"><?php $title = mysqli_fetch_assoc($result1); echo $title['name'];?></a>
						</div>
						<div class="slider-item-desc">
							<div class="slider-item-text"><?php $desc = mysqli_fetch_assoc($result2); echo $desc['description'];?></div>
						</div>
						<div class="slider-item-price"><?php $price = mysqli_fetch_assoc($result3); echo $price['price'];?> ₴</div>
						<div class="slider-item-buy slider-links-center">
							<a href="#" class="slider-item-btn">Замовити</a>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</section> 

	<section class="review">
		<div class="container">
			<div class="review__inner">
				<div class="review__item" id="menu-2">
					<button class="review-title">
						Про нас >
					</button>
					<div class="review-text">
						<div class="review-text__inner">
							Ми команда молодих людей, які бажають розвиватися та радувати людей смачною їжею.
						</div>				
					</div>
				</div>
				
				<div class="resp__item" id="menu-3">
					<button class="resp-title">
						Відгуки >
					</button>
					<div class="resp-text">	
						Ви можете стати їх частиною написавши відгук :)
					</div>
				</div>
			</div>
		</div>
	</section>	
</main>
	
 <footer class="footer">
	<div class="container">
		<div class="footer__inner">
			<div class="footer-links">
				<a href="#" class="footer-logo">
					Bayrafood
				</a>
				<a href="tel:380874378661" class="footer-phone">
					+380874378661
				</a>
			</div>
			<div class="footer-right">
				© 2023 - Захищено авторський правом.
			</div>
		</div>
	</div>
</footer> 


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>