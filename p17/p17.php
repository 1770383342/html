<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>不同进制的输出结果</title>
</head>

<body>
<div align="center">
<?php
$str1 = 1234567890;
//声明一个10进制整数
$str2 = 0x1234567890;
//声明一个16进制的整数
$str3 = 01234567;//无法实践，会报错
//声明一个8进制的整数，89是八进制的非法数字
$str4 = 01234567;
//声明另一个8进制的整数，8是八进制的非法数字
echo'数字1234567890不同进制的输出结果：<p>';
echo'10进制的结果是：'.$str1.'<br>';   //输出10进制整数
echo'16进制的结果是：'.$str2.'<br>';   //输出16进制整数
echo'8进制的结果是：';
if($str3 == $str4){
	//判断$str3和$str4的关系
	echo'$str3 = $str4 ='.$str3;
	//如果相等，输出变量值，自动转换成十进制输出
}else{
	echo'$str3 !=$str4';
	//如果不相等，输出"$str3 != $str4"
}
?>
</div>
</body>
</html>