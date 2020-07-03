<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$array_push = array("PHP从入门到精通","PHP范例手册","PHP范例手册","PHP网络编程自学手册");
array_push($array_push,"PHP开发典型模块大全","PHP网络编程自学手册");  //添加2个元素并输出数组新长度
echo '<br>';
print_r($array_push); //输出数组结果
?>
</body>
</html>