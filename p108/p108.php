<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>应用count()函数递归统计数组元素的个数</title>
</head>

<body>
<?php
$array = array("php" => array("PHP函数参考大全","PHP程序开发范例宝典","PHP数据库系统开发完全手册"),"other" => array("ASP经验技巧宝典","laravel程序开发","drupal基础"));
//声明一个2*3的二维数组
echo '数组元素总数：'.count($array,COUNT_RECURSIVE);
//递归统计数组元素的个数
?>
</body>
</html>