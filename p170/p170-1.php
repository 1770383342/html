<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>判断浏览器是否有读写Cookie的功能</title>
</head>

<body>
<?php
$testCookie=setcookie("testCookieEnabled","123");
//如果新建Cookie变量testCookieEnabled成功，setcookie()函数返回为true，否则为假。
if($testCookie){
	echo"Cookie变量testCookieEnabled已经建立成功。。。".'<p>';
	echo '如果能取出Cookie变量testCookieEnabled的值为123，则说明能够在网站取出Cookie变量的值：'.$_COOKIE["testCookieEnabled"];
}else{echo "不能创建Cookie变量。。。";}
?>
</body>
</html>