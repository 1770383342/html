<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>使用time函数获取当前时间戳</title>
<style type="text/css">
<!--
body,td,th{
	font-size:12px;
}
body{
	margin-left:10px;
	margin-top:10px;
	margin-right:10px;
	margin-bottom:10px;
}
-->
</style>
</head>

<body>
<div align="center">
<?php
$nextWeek = time() + (7*24*60*60);  //7days; 24hours; 60mins; 60secs
echo 'Now:     '.date('Y-m-d')."<p>";
echo 'Next Week:'.date('Y-m-d',$nextWeek);
?>
</div>
</body>
</html>