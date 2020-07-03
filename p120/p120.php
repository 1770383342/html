<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$fruits = array("Orange1","orange2","Orange3","orange20");
sort($fruits,SORT_NATURAL|SORT_FLAG_CASE);
foreach($fruits as $key => $val){
	echo "fruits[".$key."]=".$val."<br>";
}
?>
</body>
</html>