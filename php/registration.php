<?php
	// щоб працювало потрібно у форму поставити method="post" і action="registration.php"
	$par1_ip = "127.0.0.1";
	$par2_name = "root";
	$par3_p = "";
	$par4_db = "register-bd";
	
	// чистка змінних від лишнього
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$mail = filter_var(trim($_POST['mail']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
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
	else if (mb_strlen($pass) < 8 || mb_strlen($pass) > 30)
	{
		echo "Недопустима довжина пароля (від 8 до 30 символів)";
		exit(); 
	}
	
	// хеш
	$pass = md5($pass."qw1"); 
	
	// Підключка до sql
	$mysql = new mysqli($par1_ip, $par2_name, $par3_p, $par4_db);
	if(mysqli_connect_errno())
	{
		echo "Виникла помилка під час підключення до бази даних (".mysqli_connect_errno().": ".mysqli_connect_errno();
		exit();
	}
	$mysql->query("INSERT INTO `users` (`login`, `mail`, `pass`) VALUES('$login', '$mail', '$pass')");
	$mysql->close();
	header('Location: /');
?>
