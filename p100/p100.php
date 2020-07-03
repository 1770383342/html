<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>测试list函数对关联数组无关</title>
</head>

<body>
<?php
$info = array('w1'=>'coffee','w2'=>'brown','w3'=>'caffeine');
var_dump($info);echo'<p>';
list($drink,$color,$power) = $info;echo'<p>';
echo"三个变量中的值:";echo'<p>';
var_dump($drink,$color,$power);
?>
</body>
</html>