<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>引用传递</title>
</head>

<body>
<?php
function example(&$m){  //定义一个函数，传址引用
$m = $m * 5 + 10;
echo "在函数内：\$m = ".$m;  //输出形参的值
}
$m = 1;
example($m);  //传址：将实参$m的地址传递给形参$m，实参和形参用了同一个内存地址
echo "<p>在函数外：\$m = $m<p>";
//实参的值发生变化，输出m=15
?>
</body>
</html>