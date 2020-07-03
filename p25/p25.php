<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>位运算符</title>
</head>

<body>
<?php
$m = 8;   //1000B,补码01000
$n = 12;   //1100B,补码01100
$mn = $m & $n;   //位与
echo $mn ."<br>";  //结果为8
$mn =$m | $n;  //位或
echo $mn ."<br>";  //结果为12
$mn = $m ^ $n;  //位异或
echo $mn ."<br>";  //结果为4
$mn = ~$m;  //位取反
echo $mn ."<br>";  //结果为-9， ？
$mn = ~$n;  //位取反
echo $mn ."<br>";  //结果为-13 ？
?>

</body>
</html>