<!doctype html>
<html>
<head><!--嵌套datetime.js文件用于显示当前时间-->
<meta charset="utf-8">
<script language="javascript" src="datetime.js"></script>
<title>添加cookie变量</title>
</head>

<body>
<?php
setcookie("TMCookiel",'myPhpLesson');
echo'<p>';
echo $_COOKIE["TMCookiel"].'<p>';
?>
</body>
</html>