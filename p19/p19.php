<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>数组声明和显示</title>
</head>

<body>
<?php
echo'通过array()函数声明数组$arr1:'.'<br>';
$arr1=array("1"=>"编","2"=>"程","3"=>"词","4"=>"典");
print_r($arr1);  //输出所创建的数组的结构
echo"<p>";
echo $arr1[1];
//输出数组元素的值"编",不换行
echo $arr1[2];
//输出数组元素的值"程"
echo $arr1[3];
//输出数组元素的值"词"
echo $arr1[4];
//输出数组元素的值"典"
echo"<p>";
echo'通过为数组元素赋值的方式声明数组$arr2:'.'<br>';
$arr2[0]="编";
$arr2[1]="程";
$arr2[2]="词";
$arr2[3]="典";
print_r($arr2);   //输出所创建的数组的结构
?>
</body>
</html>