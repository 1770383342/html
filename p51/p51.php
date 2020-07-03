<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>使用break关键字跳出多重循环</title>
</head>

<body>
<?php
while(true){
	for(;;){
		for($i=0;$i<=10;$i++){
			echo $i." ";
			if($i == 7){
				echo"<p>变量\$i等于7，跳出一重循环。<p>";
				break 1;
			}
		}
		for($j=0; $j<20; $j++){
			echo $j." ";
			if($j == 15){
				echo "<p>变量\$j等于15，跳出最外重循环。";
				break 3;
			}
		}
	}
	echo"这句话不会被执行。";
}
?>
</body>
</html>