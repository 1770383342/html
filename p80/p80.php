<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>使用eregi_replace()函数替换字符</title>
</head>

<body>
<?php
$ereg = 'tm';   //要匹配的字串
$str = 'hello,tm,Tm,tM.';   //要查找的文本
$rep_str = eregi_replace($ereg,'TM',$str);
//使用eregi_replace()函数进行替换
echo $rep_str;    //输出替换后的文本
?>
</body>
</html>