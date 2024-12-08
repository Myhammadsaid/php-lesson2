<?php
	$title = 'Работа с датой и временем';
	require_once 'companents/header.php';
?>
<h1>Работа с датой и временем</h1>
<?php
	echo date("t F").'<br>';
	echo date("m-l H:i:s", time() + 1000).'<br>';
	echo date("m-d H:i:s", strtotime("now")).'<br>';
	echo date("m-d H:i:s", strtotime("+1 Hour")).'<br>';
	echo date("m-d H:i:s", strtotime("last Monday")).'<br>';
	echo time().'<br>';
	require_once 'companents/footer.php';