<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>判断浏览器是否有建立Cookie的功能</title>
</head>

<body>
<?php
$testCookie=setcookie("testCookieEnabled","123");
//如果新建Cookie变量testCookieEnabled成功，setcookie()函数返回为true，否则为false。
if($testCookie){
	echo "Hello!欢迎你进入主页。。。";
}else{
	echo "警告：请你打开浏览器的Cookie功能。..<p>还可以在此处显示如何开启浏览器Cookie功能的文字和图片内容。。。";
}
?>
</body>
</html>