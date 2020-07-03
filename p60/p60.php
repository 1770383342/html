<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>应用addcslashes()函数、stripcslashes()函数分别对指定范围的字符串进行转义、还原</title>
</head>

<body>
<?php
$a="编程体验网";//对指定范围内的字符进行转义
echo $a;  //输出指定的字符串
echo "<br>";  //执行换行
$b=addcslashes($a,"编程体验网"); //转义指定的字符串
echo $b;
//输出转义后的字符串，发现一个汉字转成三组八进制数
echo "<br>";   //执行换行
$c=stripcslashes($b); //对转义的字符串进行还原
echo $c;  //输出还原后的转义字符串
echo "<p>";
$d="abc123";
echo $d;
echo "<br>";
$e = addcslashes($d,"abc123");
//转义指定的字符串不能是数字或者字母，否则还不了原
echo $e;
echo "<br>";
$f = stripcslashes($e);
echo $f;  //最后只输出c
echo "<p>";
$g='abcd\'ef"123重庆';//由于单引号作为定界符，所以在字符串中表示单引号时要用\'
echo $g;
echo "<br>";
$h=addcslashes($g,"\'\"");//转义符指定为汉字和'"
echo $h; //输出转义后的字符串
echo "<br>"; //执行换行
$i=stripcslashes($h); //对转义的字符串进行还原
echo $i; //输出还原后的转义字符串
echo "<p>";
$a="编程体验网";  //用中文字符串重做一次
echo $a;
echo "<br>";
$b=addcslashes($a,"\'\"");
//转义符不是中文自己，而是两个转义符\'\"
echo $b;  //输出转义后的字符串
echo "<br>";  //执行换行
$c=stripcslashes($b);  //对转义的字符串进行还原
echo $c;  //输出还原后的转义字符串
echo "<p>";
?>
</body>
</html>