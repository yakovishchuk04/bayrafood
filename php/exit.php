<?php
	//вихід з акка
	setcookie('user', $user['login'], time() - 3600, "/");
	header('Location: /');
?>
