<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>应用addcslashes()函数和stripslashes()函数分别对字串进行转义和还原</title>
</head>

<body>
<?php
$str = "select * from tb_book where bookname = 'PHP5从入门到精通'";
echo $str."<br>";  //输出字符串
$a = addslashes($str); //对字符串中的特殊字符进行转义
echo $a."<br>"; //输出转义后的字符
$b = stripslashes($a); //对转义后的字符进行还原
echo $b."<br>";//将字符原义输出
?>
</body>
</html>