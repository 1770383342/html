<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>preg_replace()函数</title>
</head>

<body>
<?php
$string = '[b]粗体字[/b]';
$b_rst = preg_replace('/\[b\](.*)\[\/b\]/i','<b>$1</b>',$string);
echo $b_rst;
?>
</body>
</html>