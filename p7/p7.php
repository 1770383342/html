<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>声明和使用常量</title>
</head>

<body>
<?php
define("MESSAGE","能看到一次");
//define("MESSAGE","能看到一次",true);
//使用define函数来定义名为MESSAGE的常量，并未其赋值为“能看到一次”
echo MESSAGE;   //输出刚刚定义好的常量值
echo Message;   //因为没有设置Case_sensitive参数的值，默认值为false,所以表示常量名大小写敏感，因此执行程序是，解析器会提示此常量没有定义，并将Message作为普通字符串输出
define("COUNT","能看到多次",true);
//使用define函数来定义名为COUNT的常量，并为其赋值为“能看到多次”，并设置Case+sensitive参数为true,表示大小写不敏感
echo"<br>";   //输出空行符
echo COUNT;   //输出名为COUNT的常量值
echo"<br>";   //输出空行符
echo Count;   //输出名为Count的常量值，因为设置了大小不敏感，因此程序会认为他和COUNT是同一个常量，同样会输出值
echo"<br>";   //输出空行符
echo constant("Count");   //使用constant函数来获取名Count常量的值，并输出正确
echo"<br>";   //输出空行符
echo(defined("MESSAGE"));//判断MESSAGE常量是否已被赋值，如果已被赋值输出“1”，如果未被赋值则返回false
?>
</body>
</html>