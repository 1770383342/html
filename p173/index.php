<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$path = './tmp/';  //设置session存储路径
session_save_path($path);//指定了Session临时文件保存路径
session_start();//初始化session,建立一个Session会话
$_SESSION["username"] = true;//设置了一个逻辑型数组元素
//建立了一个Session会话变量username
echo "session_id号：".session_id();
//session_id()函数返回session_id号
echo '<p>';
echo "Session文件名称为：sess_",session_id();
//此处"sess_"前缀是人为添加去的，但实际保存在tmp目录里的session临时文件名有这个前缀。
?>
</body>
</html>