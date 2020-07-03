<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员信息</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body bgcolor="#68baeb">
<div align="center">
<table width="700" height="600" border="1"  bordercolor="#68baeb" cellpadding="0" cellspacing="0" >
<tr>
<td height="130" width="700" align="center" class="word_green"><img src="images/4.gif" width="700" height="130" /></td>
</tr>
<tr height="470" width="700" valign="top">
<td  background="images/bg1.gif">
<table width="700" height="20" border="1"  bordercolor="#68baeb" cellpadding="0" cellspacing="0" align="left">

<tr align="left" width="300">
<td width="65" bgcolor="#FFFF99" class="word_orange"><a href="manager_book.php"><strong>书籍</strong></a></td>
<td width="76" bgcolor="#FFFF99" class="word_orange"><a href="manager_reader.php"><strong>用户</strong></a></td>
<td width="115" bgcolor="#FFFF99" class="word_orange"><a href="manager_information.php"><strong>个人信息</strong></a></td>
<td width="84" bgcolor="#FFFF99" class="word_orange"><a href="login.php"><strong>退出</strong></a></td>
</tr>
</table>
<br><br><br><br><br><br><br><br>
<table width="510" height="" border="1"  bordercolor="#68baeb" cellpadding="0" cellspacing="0" align="center">

<tr align="center" >
<td width="105" height="40" class="word_red"><strong>工号</strong></td>
<td width="109" height="40" class="word_red"><strong>姓名</strong></td>
<td width="108" height="40" class="word_red"><strong>密码</strong></td>
<td width="165" height="40" class="word_red"><strong>编辑</strong></td>
</tr>
<?php
include("conn.php");
$no=$_SESSION['no'];
$sql=$mysqli->query("select * from tb_manager_php");
$row=$sql->fetch_object();
if(!$row){
	echo"<font color='red'>没有个人信息！！</font>";
	}else{
		do{
			?>
			<tr bgcolor="#CCFF00" align="center" class="word_black">
            <td class="word_black" height="30"><strong><?php echo $row->manager_id; ?></strong></td>
			<td class="word_black" height="30"><strong><?php echo $row->manager_name; ?></strong></td>
			<td class="word_black" height="30"><strong><?php echo $row->manager_pwd; ?></strong></td>
            <td class="word_black" height="30"><strong><a href="manager_pwd_ok.php">修改密码</a></strong></td>
			</tr>
            <?php
			}while($row=$sql->fetch_object());
	}
	
$sql->close();
$mysqli->close();
?>
</table>
</td>
</tr>
</table>
<tr><div id="footer">重庆师范大学17级计算机科学与技术2班谭自立（17623575750）版权所有</div></tr>
</div>
</body>
</html>