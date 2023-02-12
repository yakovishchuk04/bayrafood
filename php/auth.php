<?php
	// щоб працювало потрібно у форму поставити method="post" і action="auth.php"
	$login = filter_var(trim($_POST['login']) 
	FILTER_SANITAZE_STRING);
	$pass = filter_var(trim($_POST['pass'])
	FILTER_SANITAZE_STRING);

	$pass = md5($pass."skfn2a41"); 
	$mysql = new mysqli('localhost','root','root','register-bd');
	$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
	// порівняння
	$user = $result->fetch_assoc();
	if (count($user) == 0)
	{
		echo "Такого користувача не існує";
		exit();
	}
	// кукі
	setcookie('user', $user['name'], time() + 3600, "/");
	
	$mysql->close();
	header('Location: /');
	
?>
