<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>可变变量</title>
</head>

<body>
<?php
$a="mrkj";   //定义变量
$$a="bccd";  //声明可变变量，该变量名称为变量a的值
echo $a."<br>";   //输出变量a
echo $$a."<br>";   //输出可变变量
echo $mrkj;        //输出变量mrkj
?>
</body>
</html>