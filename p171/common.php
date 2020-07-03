<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
error_reporting(0); //禁用错误报告，参考：
//http://www.w3school.com.cn/php/func_error_reporting.asp
//http://php.net/manual/zh/function.error-reporting.php
$path = './tmp/';
$sess_name = session_name();//返回PHPSESSID变量名
$sess_id = $_GET[$sess_name];//以$_GET[]函数方式提取PHPSESSID变量值，这个变量值就是在p171.php网页里表单调用处理程序时传来的session_id号。
/*action="common.php?<?=session_name();?>=<?=session_id();?>"*/
session_id($sess_id);//以p171.php网页的session_id号重建此网页的会话ID.
session_save_path($path);//给会话数据指定保存路径，在session_start()前使用。
session_start();//建立会话，会话文件保存在tmp目录下。
if((trim($_POST['username'])) != 'tm' or(trim($_POST['password'])!='111')){ echo "<script>alert('用户名或者密码错误!');location.href='p171.php'</script>";}else{
	//没有else语句在逻辑上不成立，但由于例子特殊，没有else代码也正确。不过这样很不好。写代码时逻辑上一定要缜密，千万不能形成坏习惯
	$_SESSION['admin'] = 'mrsoft';//只要在表单中录入了用户名tm和密码111,就能添加一个session变量admin，其实他是$_SESSION[]数组中的新元素。
}
?>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<table width="328" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td height="100"></td>
</tr>
<tr>
<td height="214" valign="top" background="images/index_01.jpg"><table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr><td width="100"></td>
<td height="70"></td>
</tr>
<tr>
<td align="center" valign="middle">&nbsp;</td>
<td height="80" align="center" valign="middle"><p class="white12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;恭喜您登录成功
<a href="connect.php?<?= session_name(); ?>=<?=session_id() ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请点击转入内容页面</a></p>
//a标记链接了connet.php网页，同网页一起传了session_id号
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>