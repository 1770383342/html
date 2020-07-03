<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>应用函数explode()对全国各省会名称以逗号进行分割</title>
</head>

<body>
<?php
$content = "北京，上海，天津，重庆，河北，山西，辽宁，吉林，黑龙江，江苏，则将，安徽，福建，江西，山东，河南，湖北，湖南，其他";
$data=explode(",",$content);   //下面数组循环
for($index=0;$index<count($data);$index++){
	echo $data[$index];
	echo "</br>";
}
?>
</body>
</html>