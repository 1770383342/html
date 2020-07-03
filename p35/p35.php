<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>函数的地址引用</title>
</head>

<body>
<?php
function &example($tmp=""){  //定义一个地址引用函数，函数名的第一个字母为"&"符
return $tmp;  //返回参数$tmp
}
$str = &example("看到了");
//声明$str变量地址引用了函数&example,其实就是把函数的返回变量$tmp中的地址传给了$str
echo $str."<p>";  //能正常显示输出
//echo &example("没有看到")."<p>";
//报错，注释掉此句代码再运行一次
//重新对函数赋值
$str1 = &example("没有看到");
echo $str."<p>";  //输出$str,原来的值没有变
echo $str1."<p>";  //输出$str1,新值。
?>
</body>
</html>