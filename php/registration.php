<?php
	// щоб працювало потрібно у форму поставити method="post" і action="registration.php"
	// чистка змінних від лишнього
	$login = filter_var(trim($_POST['login']) 
	FILTER_SANITAZE_STRING);
	$name = filter_var(trim($_POST['mail'])
	FILTER_SANITAZE_STRING);
	$pass = filter_var(trim($_POST['pass'])
	FILTER_SANITAZE_STRING);

	// перевірки на довжину змінних
	if(mb_strlen($login) < 5 || mb_strlen($login) > 90)
	{
		echo "Недопустима довжина логіна";
		exit();
	}
	else if (mb_strlen($mail) < 9 || mb_strlen($mail) > 50)
	{
		echo "Недопустима довжина пошти";
		exit();
	}
	else if (mb_strlen($pass) < 8 || mb_strlen($pass) > 16)
	{
		echo "Недопустима довжина пароля (від 8 до 16 символів)"
		exit(); 
	}
	// хеш
	$pass = md5($pass."skfn2a41"); 
	
	// Підключка до sql
	$mysql = new mysqli('localhost','root','root','register-bd');
	$mysql->query("INSERT INTO `users`(`login`, `pass`, `mail`) 
	VALUES('$login', '$pass', '$mail')");
	$mysql->close();
	header('Location: /');

?>
