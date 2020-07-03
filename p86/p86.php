<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ereg_replace_callback()函数</title>
</head>

<body>
<?php
function c_back($str){
	var_dump($str);
	echo '<p>';
	$str = "<font color=$str[1]>$str[2]</font>";
	return $str;
}
	$string = '[color=blue]字体颜色[/color]';
	echo preg_replace_callback('/\[color=(.*)\](.*)\[\/color\]/i',"c_back",$string);
	?>
</body>
</html>