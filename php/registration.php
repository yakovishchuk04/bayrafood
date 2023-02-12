<?php
	// щоб працювало потрібно у форму поставити method="post" і action="registration.php"
	// чистка змінних від лишнього
	$login = filter_var(trim($_POST['login']) 
	FILTER_SANITAZE_STRING);
	$name = filter_var(trim($_POST['name'])
	FILTER_SANITAZE_STRING);
	$pass = filter_var(trim($_POST['pass'])
	FILTER_SANITAZE_STRING);

	// перевірки на довжину змінних
	if(mb_strlen($login) < 5 || mb_strlen($login) > 90)
	{
		echo "Недопустима довжина логіна";
		exit();
	}
	else if (mb_strlen($name) < 3 || mb_strlen($name) > 50)
	{
		echo "Недопустима довжина імені";
		exit();
	}
	else if (mb_strlen($pass) < 4 || mb_strlen($pass) > 12)
	{
		echo "Недопустима довжина пароля (від 4 до 12 символів)"
		exit(); 
	}
	// хеш
	$pass = md5($pass."skfn2a41"); 
	
	// Підключка до sql
	$mysql = new mysqli('localhost','root','root','register-bd');
	$mysql->query("INSERT INTO `users`(`login`, `pass`, `name`) 
	VALUES('$login', '$pass', '$name')");
	$mysql->close();
	header('Location: /');

?>
