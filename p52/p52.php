<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>使用continue关键字控制流程</title>
</head>

<body>
<?php
$arr = array("A","B","C","D","E","F","G","H","I","J");
for($i = 0; $i < 10; $i++){  //数组下标0~9
echo"<br>";
if($i%2 == 0){ //如果i是偶数返回重新循环，0也是偶数
continue;
}
for(;;){
	for($j = 0; $j < count($arr); $j++){
		if($j ==$i){
			continue 3;
		}else{
			echo"\$arr[".$j."]=".$arr[$j]." ";
		}
	}
}
echo"这句话永远不会输出";
}
?>
</body>
</html>