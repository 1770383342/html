<?php
session_start();
$_SESSION["user"]=$_POST["user"];
$_SESSION["pwd"]=$_POST["pwd"];
if($_SESSION["user"]==""){
	echo "<script language='javascript'>alert('请通过正确的途径登录本系统!');history.back();</script>";
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!--<link href="CSS/style.css" rel="stylesheet">-->
<title>通过SESSION判断用户的操作权限</title>
<style type="text/css">
<!--
.style1{color:#ff0000;}
-->
</style>
</head>

<body>
<table width="856" height="498" align="center" cellpadding="0" cellspacing="0" border="3" bordercolor="red">
<tr>
<td height="258" valign="baseline" style="background-image:url(images/bg.jpg); vertical-align:middle; height:50px; text-align:center"><table width="856" height="419" cellpadding="0" cellspacing="0" border="2" bordercolor="blue">
<tr>
<td height="176" colspan="6" style="vertical-align:text-top; width:80px; height:115px; text-align:right"></td>
</tr>
<tr>
<td height="214" align="center" valign="top">
<table align="center" cellpadding="0" cellspacing="0" border="2" bordercolor="#ff00ff">
<tr align="center" valign="middle">
<td style="width:140px; color:red;">当前用户：&nbsp;<?php if($_SESSION["user"]=="tsoft" && $_SESSION["pwd"]=="111"){ echo "管理员";}else{echo "普通用户";}?>&nbsp;&nbsp;</td>
<td width="70"><a href="#">博客首页</a></td>
<td width="70">|&nbsp;<a href="#">我的文章</a></td>
<td width="70">|&nbsp;<a href="#">我的相册</a></td>
<td width="70">|&nbsp;<a href="#">音乐在线</a></td>
<td width="70">|&nbsp;<a href="#">修改密码</a></td>
<?php
if($_SESSION["user"]=="tsoft" && $_SESSION["pwd"]=="111"){
	?>
    <td width="70">|&nbsp;<a href="default.php">用户管理</a></td>
    <?php
}
?>
</tr>
</table><br><br>
<div style="width:500px; left:120px; text-align:left; border:2px #f00 solid">女人永远也不知道男人为什么不对她说“我爱你”这三个字？<br><br>因为他们知道，说上一万句“我爱你”仍然无法表达对老婆的深情。<br>
</div></td>
</tr>
</table>
欢迎访问博客网 请使用Firefox浏览器浏览本网站&nbsp;<a href="safe.php">注销用户</a></td>
</tr></table>

</body>
</html>