<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>UBB应用</title>
</head>

<body>
<?php
$url = '[url=http://www.bccd.com/]编程词典网[/url]';
$color = '[color=red]蓝色[/color]';
$b = '[b]粗体[/b]';
$pics = '/dx';
$string = '超级链接:'.$url;
$string .='<br>字体颜色：'.$color;
$string .='<br>粗体：'.$b;
$string .='<br>贴图：'.$pics;
$rst = '超级链接：' .preg_replace('/\[url=(http:\/\/\w+(\.\w+)+\/.*)\](.*)\[\/url\]/is','<a href=\'$1\'>$2</font>',$color);
$rst .='<br>字体颜色：'.preg_replace('/\[color=(.*)\](.*)\[\/color\]/','<font color=\'$1\'>$2</font>',$color);
$rst .='<br>粗体：'.preg_replace('/\[b\](.*)\[\/b\]/','<b>$1</b>',$b);
$rst .='<br>贴图：'.preg_replace('/\/(dx)/','<img src=\'images/$1.gif\'/>',$pics);
?>
<table border="1" cellpadding="0" cellspacing="0" bgcolor="#f0f0f0">
<tr>
<td align="center"><h3>UBB使用帮助</h3></td>
<td align="center"><h4>实例效果</h4></td>
</tr>
<tr>
<td><?php echo $string; ?></td>
<td><?php echo $rst; ?></td>
</tr>
</table>
</body>
</html>