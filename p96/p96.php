<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>foreach遍历数组</title>
</head>

<body>
<?php
$url = array('编程词典网'=>'www.mrbccd.com',
'编程体验网'=>'www.bcty365.com',
'编程资源网'=>'www.bc110.com',
);
foreach( $url as $link){
	echo $link.'<br><br>';
}
?>
</body>
</html>