<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>preg_match()函数和preg_match_all()函数</title>
</head>

<body>
<?php
$str = 'This is an example!';
$preg = '/\b\w{2}\b/';
$num1 = preg_match($preg,$str,$str1);
echo $num1.'<br>';
var_dump($str1);
$num2 = preg_match_all($preg,$str,$str2);
echo '<br>'.$num2.'<br>';
var_dump($str2);
?>
</body>
</html>