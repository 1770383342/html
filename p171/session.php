<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
session_start();
echo '取出session变量的值，然后显示：';
echo "<p>";
echo $_SESSION["data1"],"<p>";
echo $_SESSION["data2"],"<p>";
echo $_SESSION["data3"],"<p>";
?>
</body>
</html>