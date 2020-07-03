<?php
error_reporting(0);
$sess_name = session_name();//取出字符串"PHPSESSID"
$sess_id = $GET[$sess_name];
session_id($sess_id);//设置未来session_id号为$sess_id值
session_save_path('./tmp/');
session_start();//创建了一个与p171.php一样的session_id号
if(!isset($_SESSION['admin'])){  //当在p171.php中，登录名为rm和密码为111时$_SESSION['admin']才会有效。
echo "<script>alert('对不起，你没有权限');
location.href='p171.php'</script>";
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>后台管理页面</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
 </head>

<body>
<table width="779" height="712" border="0" align="center" cellpadding="0" cellspacing="0" background="images/index_02.jpg">
<tr><td></td></tr>
</table>
</body>
</html>