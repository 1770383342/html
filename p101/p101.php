<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
$a[0]=10;$a[1]=11;$a[2]=12;//在数组中，先存储的元素放在数组前面，后存储的函数放在数组后面
echo 'a数组：';
var_dump($a);
echo '<br>';
list($aa0,$aa1,$aa2)= $a;
echo '$aa0:',$aa0,'<br>'.'$aa1:'.$aa1.'<br>'.'$aa2:'.$aa2;
echo '<p>';
echo '********'.'<p>';
echo '<p>';
$b[2]=2; $b[1]=1; $b[0]=0;
//$b[2]最先存储放在数组最前面，$b[0]最后存储放在数组最后面，但这并不能影响数据的下标功能，即$b[0]无存储在数组最前面还是最后面，其元素变量名仍然为$b[0].
echo 'b数组:';var_dump($b);
echo '<br>';
list($bb0,$bb1,$bb2)=$b;
echo '$bb0:'.$bb0.'<br>'.'$bb1:'.$bb1.'<br>','$bb2:'.$bb2;
?>
</body>
</html>