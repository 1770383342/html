<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$arr = array("asp","java","javaweb","php","vb");
//定义数组
$array = array_pop($arr);  //获取数组中最后一个元素
echo "被弹出的单元是：$array<br/>"; //输出最后一个元素值
print_r($arr);  //输出原数组结构，没有了vb元素了。
?>
</body>
</html>