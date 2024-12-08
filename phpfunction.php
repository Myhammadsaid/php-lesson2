<?php 
$title = 'Встроенные PHP функции';
require_once 'companents/header.php';
?>
<h1>Встроенные PHP функции</h1>
<?php
$list = [5,3,7,1,9,3];
unset($list[1]);
$list = array_values($list);
sort($list);
// rsort($list);
// shuffle($list);
$arr = array_slice($list, 2, 2);
// var_dump($arr);
print_r($arr);
echo '<br>';

$arr_1 = [4,7,3];
$arr_2 = [9,0];
$arr_3 = array_merge($arr_1, $arr_2);
print_r($arr_3);
echo '<br>';

// if(in_array(7, $list) == '')
// 	echo 'Not Found <br>';
// else
// 	echo 'Found <br>';

print_r($list);

$x = "10";
echo gettype($x).'<br>';
// echo is_numeric($x).'<br>';
// echo is_integer($x).'<br>';
// echo is_double($x).'<br>';
// echo is_bool($x).'<br>';
// echo is_array($x).'<br>';
// echo is_string($x).'<br>';

$str = 'Example';
echo strpos($str, 'am').'<br>';

$words = 'john,bob,alex';
$arr_words = explode(',',$words);
print_r($arr_words);
echo '<br>'.implode(' | ', $arr_words);
require_once 'companents/footer.php';