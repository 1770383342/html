<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>应用explode()函数实现字符串分割</title>
</head>

<body>
<?php
$str="PHP编程词典@NET编程词典@ASP编程词典@JSP编程词典";  //定义字符串常量
$str_arr=explode("@",$str);  //应用标识@分割字符串
print_r($str_arr);   //输出字符串分割后的结果
//echo $str_arr[0];   //输出数组中的第一个元素
//echo $str_arr[1];   //输出数组中的第二个元素
//echo $str_arr[2];   //输出数组中的第三个元素
//echo $str_arr[3];   //输出数组中的第四个元素
?>
</body>
</html>