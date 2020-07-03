<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>应用str_irepalce()函数对查询关键字描红</title>
</head>

<body>
<?php
$content="白领女子公寓，温馨街南行200米，交通便利，亲情化专人管理，您的理想选择!";
$str="女子公寓";
echo str_ireplace($str,"<font color='#ff0000'>".$str."</font>",$content);
//替换字符串为红色字体
?>
</body>
</html>