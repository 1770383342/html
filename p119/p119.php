<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
$fruits = array("lemon","orange","banana","apple");
sort($fruits);
foreach($fruits as $key => $val){
	echo "fruits[".$key."]=".$val.'<br>';
}
?>
</body>
</html>