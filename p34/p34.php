<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>变量函数</title>
</head>

<body>
<?php
function come(){  //定义com函数
echo "来了<p>";
}
function go($name = "jack"){   //定义go函数
echo $name."走了<p>";
}
function back($string)//定义back函数
{
	echo "又回来了，$string<p>";
}
$func = "come";  //声明一个变量，将变量赋值为"come"
$func();  //使用变量函数来调用函数come()
$func = "go";  //重新给变量赋值
$func("Tom");  //使用变量函数来调用函数go()
$func = "back";  //重新给变量赋值
$func("Lily");  //使用变量函数来调用函数back();
?>
</body>
</html>