<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$info = array("m1"=>"daizg","m2"=>"666666");
var_dump($info);
echo'<p>';
var_dump(each($info));
echo'<p>';
var_dump(each($info));
?>
</body>
</html>