<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>添加多个cookie变量</title>
</head>

<body>
<?php
setcookie("TMCookie1",'myPhpLesson');
setcookie("TMCookie2",'ourPhpLesson',time()+60);
setcookie("TMCookie3",'yourPhpLesson',time()+80,"/p161/","127.0.0.1",0);
echo'<p>';
echo $_COOKIE["TMCookie1"].'<p>';
echo $_COOKIE["TMCookie2"].'<p>';
echo $_COOKIE["TMCookie3"].'<p>';
?>
</body>
</html>