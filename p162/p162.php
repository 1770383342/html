<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script language="javascript" src="../p161/datetime.js"></script>
<title>指定安全通道HTTPS</title>
</head>

<body>
<?php
setcookie("TMCookie1",'PhpLesson1');
//setcookie("TMCookie2",'PhpLesson2',time()+120);
//setcookie("TMCookie3",'PhpLesson3',time()+120,"/p162","127.0.0.1",0);
//下句代码用于安全连接
setcookie("TMCookie4",'PhpLesson4',time()+120,"/p162","127.0.0.1",1);
setcookie("TMCookie3",'PhpLesson3',time()+120,"/p162","weizh.dev.dxdc.net",0);
setcookie("TMCookie4",'PhpLesson4',time()+120,"/p162","weizh.dev.dxdc.net",1);
setcookie("TMCookie5",'PhpLesson5',time()+120,"","",0);
//下句代码用于安全连接，没有指定服务器地址，在任意服务器上都能使用
setcookie("TMCookie6",'PhpLesson6',time()+120,"","",1);
echo '<p>';
echo $_COOKIE["TMCookie1"].'<p>';
echo $_COOKIE["TMCookie2"].'<p>';
echo $_COOKIE["TMCookie3"].'<p>';
echo $_COOKIE["TMCookie4"].'<p>';
echo $_COOKIE["TMCookie5"].'<p>';
echo $_COOKIE["TMCookie6"].'<p>';
?>
</body>
</html>