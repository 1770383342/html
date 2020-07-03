<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>preg_quote()函数</title>
</head>

<body>
<?php
$str = '!、$、^、*、+、.、[、]、\\、/、b、<、>';
$str2 = 'b';
$match_one = preg_quote($str,$str2);
echo $match_one;
?>
</body>
</html>