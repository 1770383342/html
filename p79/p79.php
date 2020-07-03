<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>使用ereg()函数验证合法变量</title>
<style type="text/css">
<!--
body,th,td{
	font-size:12px;
}
body{
	margin:10px;
}
-->
</style>
</head>

<body>
<?php
$ereg='^[$][[:alpha:]_][[:alnum:]]*';
ereg($ereg,'$_name',$register);
var_dump($register);
?>
</body>
</html>