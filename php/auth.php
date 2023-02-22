<?php
	// щоб працювало потрібно у форму поставити method="post" і action="auth.php"
	$par1_ip = "127.0.0.1";
	$par2_name = "root";
	$par3_p = "";
	$par4_db = "register-bd";
	
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
	$pass = md5($pass."qw1"); 

	$mysql = new mysqli($par1_ip,$par2_name,$par3_p,$par4_db);
	$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
	// порівняння
	$user = $result->fetch_assoc();
	if (count($user) == 0)
	{
		echo "Такого користувача не існує";
		exit();
	}
	// кукі
	setcookie('user', $user['login'], time() + 3600, "/");
	
	$mysql->close();
	header('Location: /');
	
?>
