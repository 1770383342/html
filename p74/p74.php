<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>应用explode()函数实现字符串分割</title>
</head>

<body>
<?php
$str="PHP编程词典@NET编程词典@ASP编程词典@JSP编程词典";
//定义字符串常量
echo '$str:'.$str;  //输出字符串
echo "<p>";
$str_arr=explode("@",$str);
//应用标识@分割字符串
echo "转换成数组后:"."<br>";
print_r($str_arr); //打印数组
echo "<p>";
$str1=implode("@",$str_arr); //将数组合成字符串
echo "数组转换成字符串后："."<br>";
echo '$str1:'.$str1;  //输出字符串
?>
</body>
</html>