<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>逻辑运算符</title>
</head>

<body>
<?php
$i = true;
$j = true;
$z = false;
if($i or $j and $z)  //and运算优先于or
echo"true";
else
echo"false";
echo"<br>";
if($i || $j and $z)  //||运行优先于and
echo"true";
else
echo"false";
echo"<br>";
if($i || $j && $z)  //&&运行优先于||
echo"true";
else
echo"false";
?>
</body>
</html>