<?php
	$name = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$message = $_POST['message'];

	if(trim($name) == '')
		echo 'Вы не ввели имя пользавателя';
	elseif(strlen(trim($name)) <= 1)
		echo 'Такого имени не существует';
	elseif(trim($email) == '' || trim($password) == '' || trim($message) == '')
		echo 'Введите все данный';
	else
		// $_POST['password'] = md5($password);
		// echo "<h1>Все данный</h1>";
		// foreach($_POST as $key => $value)
		// 	echo "<p>$value</p>";
		header('Location: /about.php');
		exit;