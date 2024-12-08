<?php 
	$title = 'Про нас';
	require 'companents/header.php';
?>
<div class='container mt-2'>
<h1>Про нас</h1>
<form action="check_get.php" method='get'>
	<input type="text" name='username' placeholder='Введите имя' class='form-control'><br>
	<input type="email" name='email' placeholder='Введите email' class='form-control'><br>
	<input type="password" name='password' placeholder='Введите пароль' class='form-control'><br>
	<textarea name="message" class='form-control' placeholder='Введите собщение'></textarea>
	<button class='btn btn-success'>Отправить</button>
</form>
</div>
<?php 
	require 'companents/footer.php';
?>