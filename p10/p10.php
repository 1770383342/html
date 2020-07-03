<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP变量赋值</title>
</head>

<body>
<?php
echo'用单引号时变量名当常量字符串来使用，用双引号时变量名按变量来使用。每次循环一次变量$i都要增加1';
echo'<br><br>';
for($i=0;$i<20;$i++){
	echo'$i';echo"$i";//用下句代码功能等效
	//echo'$i'."$i";
	echo'&nbsp;&nbsp;';
}?>
</body>
</html>