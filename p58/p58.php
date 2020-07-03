<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>trim和ltrim和rtrim函数</title>
</head>

<body>
<?php
$str="\r\r(:@_@   创图书编撰伟业 展热软件开发雄风  @_@:)";
echo trim($str);
echo "<br>";
echo trim($str,"\r\r(: :)");
echo "<p>";
$str1="  (:@_@ 创图书编撰伟业  @_@:)  ";
echo ltrim($str1,"  (:@_@ ");
echo "<br>";
echo ltrim($strl," (:@_@ ");
echo "<p>";

echo rtrim($str1);
echo "<br>";
echo rtrim($str1," @_@:)");
?>
</body>
</html>