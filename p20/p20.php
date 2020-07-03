<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>被赋值为null的几种情况</title>
</head>

<body>
<?php
echo"变量(\$string1)直接赋值为null:";
$string1 = null;//变量$string1被赋空值
$string3 = "str";  //变量$string被赋值str
if(is_null($string1))  //判断$string1是否为空
echo"string1 = null";
echo"<p>变量(\$string2)未被赋值：";
//$string2变量未定义，系统会提示
if(is_null($string2))//判断$string2 是否为空
echo "string2 = null";
echo"<p>被unset()函数处理过的变量(\$string3):";
unset($string3);  //从内存中释放$string3,则此变量成为未定义了，系统会提示此变量未定义。
if(is_null($string3))  //判断$string3是否为空
echo"string3 = null";
?>
</body>
</html>