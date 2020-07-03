<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>应用implode()函数将数组转换成一个新字符串</title>
</head>

<body>
<?php
$str = array("明日","编程词典","网址",'www.mrbccd.com',"服务电话","0431-84972266");
echo implode("  ",$str);//虽然数组元素之间用了几个空格符，但在字符显示时发现只有一个空格符
?>
</body>
</html>