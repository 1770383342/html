<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>对检索到的用户输入的查询关键字进行加粗描红</title>
</head>

<body>
<?php
$text="白领女子公寓，温馨街南行200米，交通便利，亲情化专人管理，您的理想选择！";
$content=$_POST["content"];
echo str_ireplace($content,"<font color='red'><strong>".$content."</strong></font>",$text);
//对检索到的用户输入的查询关键字进行加粗描红
?>
</body>
</html>