<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>机器信息</title>
</head>

<body>
<?php
echo '您的IP是：'.$_SERVER['REMOTE_ADDR'];
echo '<br>';
echo '您使用的端口是：'.$_SERVER['REMOTE_PORT'];
echo '<p><p>';
foreach($_SERVER as $key => $value){
	echo '<font color=red>'.$key.'</font>&nbsp;<font color=blue>'.$value.'</font><p>';
}
?>
</body>
</html>