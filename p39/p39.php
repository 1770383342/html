<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>三个输出语句的区别</title>
</head>

<body>
<?php
$boy = "spcn";
$girl = 'qm';
$arr = array($boy,$girl);
echo $boy,' ',$girl,' ',$arr;  //echo语句不能显示数组，要转换为字符串才能显示
echo'<br>';
print($boy);print(' ');print($girl);print(' ');print($arr);
//print不能输出显示数组，要转换成字符串才能显示
echo'<br>';
printf('%s',$boy);printf(' ');printf('$s',$girl);printf(' ');printf('%s',$arr);
//printf不能输出和显示数组，要转换成字符串才能显示
echo'<br>';
print_r($boy);print_r(' ');print_r($girl);print_r(' ');print_r($arr);
//print_r可以直接显示数组，不需要转换为数组
?>
</body>
</html>