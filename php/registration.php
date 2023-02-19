<?php
	// щоб працювало потрібно у форму поставити method="post" і action="registration.php"
	// чистка змінних від лишнього
	$login = filter_var(trim($_POST['login']),
	FILTER_SANITIZE_STRING);
	$mail = filter_var(trim($_POST['mail']),
	FILTER_SANITIZE_EMAIL);
	$pass = filter_var(trim($_POST['pass']),
	FILTER_SANITIZE_STRING);
	// перевірки на довжину змінних
	if(mb_strlen($login) < 5 || mb_strlen($login) > 25)
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
		echo "Недопустима довжина пароля (від 8 до 16 символів)";
		exit(); 
	}
	// хеш
	$pass = md5($pass."skfn2a41"); 
	
	// Підключка до sql
	$mysql = new mysqli('127.0.0.1','root','','register-bd');
	$mysql->query("INSERT INTO `users`(`login`, `mail`, `pass`) 
	VALUES('$login', '$mail', '$pass')");
	$mysql->close();
	header('Location: /');
?>
