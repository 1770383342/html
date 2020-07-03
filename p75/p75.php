<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>去除字符串首尾空格及特殊字符&&</title>
</head>

<body>
<?php
$str="&& 明日编程词典 &&";
echo trim($str,"&& &&");
//echo trim($str,"&&  ");
//echo trim($str,"  &&");//这三句代码是等效的
?>
</body>
</html>