<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>应用strnatcmp()函数按"自然排序"法进行字符串的比较</title>
</head>

<body>
<?php
$str1="str2.jpg";   //定义字符串常量
$str2="str10.jpg";   //定义字符串常量
$str3="mrsoft1";//定义字符串常量
$str4="MRSOFT2";//定义字符串常量
echo strcmp($str1,$str2)."<br>";
//按字节逐位进行比较，返回1
echo strcmp($str3,$str4)."<br>";
//按字节逐位进行比较，返1
echo strnatcmp($str1,$str2)."<br>";
//按“自然排序”法进行比较，非数字部分按普通字符逐位比较，而数字部分按数值大小比较，前面3个字母一样，后面的2小于10，则返回-1
echo strnatcasecmp($str1,$str2)."<br>";
//由于字符串都是小写，返回仍然是-1
echo strnatcmp($str3,$str4)."<br>"; //按“自然排序”法进行比较，字符串要区分大小写，返回1
echo strnatcasecmp($str3,$str4)."<br>";//字符串不区分大小写，结果返回-1
?>
</body>
</html>