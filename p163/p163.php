<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
date_default_timezone_set("Etc/GMT-8");
//这里比格林威治标准时间快8小时，相当于北京时间
//dete_default_timezone_set('PRC'):设置中国时区
if(isset($_COOKIE["visittime"])){
	//如果Cookie不存在
	setcookie("visittime",date("y-m-d H:i:s"));
	//设置一个Cookie变量
	echo "欢迎您第一次访问网站！"."<br>";
	//输出字符串
	}else{  //如果Cookie存在
	setcookie("visittime",date("y-m-d H:i:s"),time()+60);
	//设置带Cookie失效时间的变量
	echo "您上次访问网站的时间为：".$_COOKIE["visittime"];
	//刚新建的visittime无效，输出上次创建的visittime的值
	echo "<br>";  //输出回车符
	}
	echo "您本次访问网站的时间为：".date("y-m-d H:i:s");
	//输出当前的访问时间
	?>
</body>
</html>