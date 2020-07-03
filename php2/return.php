<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>还书</title>
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
<td width="65" bgcolor="#99fffb" class="word_orange"><a href="reader.php"><strong>借书</strong></a></td>
<td width="76" bgcolor="#99fffb" class="word_orange"><a href="return.php"><strong>还书</strong></a></td>
<td width="115" bgcolor="#99fffb" class="word_orange"><a href="grinformation.php"><strong>个人信息</strong></a></td>
<td width="84" bgcolor="#99fffb" class="word_orange"><a href="login.php"><strong>退出</strong></a></td>
<td width="84" bgcolor="#99fffb" class="word_orange"><a href="zhuxiao.php"><strong>注销</strong></a></td>
</tr>
</table>
<br><br><br>
<table width="510" height="" border="1"  bordercolor="#68baeb" cellpadding="0" cellspacing="0" align="center">
<tr>
<td height="30" align="center" colspan="7">
<form action="" name="form1" method="post">查询书名&nbsp;
<input type="text" name="txt_keyword" id="txt_keyword" size="40">&nbsp;
<input type="submit" name="Submit" value="搜索" onclick="return check(form)">
</form>
</td>
</tr>
<tr align="center" >
<td width="64" height="40" class="word_red"><strong>编号</strong></td>
<td width="112" height="40" class="word_red"><strong>书名</strong></td>
<td width="82" height="40" class="word_red"><strong>作者</strong></td>
<td width="71" height="40" class="word_red"><strong>出版社</strong></td>
<td width="49" height="40" class="word_red"><strong>借书时间</strong></td>
<td width="55" height="40" class="word_red"><strong>到期时间</strong></td>
<td width="74" height="40" class="word_red"><strong>编辑</strong></td>
</tr>
<?php
include("conn.php");
$no=$_SESSION['no'];
//var_dump($no);
$sql=$mysqli->query("select tb_book_php.book_id,book_name,book_author,book_publish,borrow_time,return_time from tb_book_php join tb_borrow_php on tb_book_php.book_id=tb_borrow_php.book_id where reader_id='".$no."' ");
$row=$sql->fetch_object();
if(!$row){
	echo"<font color='red'>你还没有借书！！</font>";
	}else{
if(isset($_POST["Submit"])){
	$keyword=$_POST["txt_keyword"];
	$sql=$mysqli->query("select tb_book_php.book_id,book_name,book_author,book_publish,borrow_time,return_time from tb_book_php join tb_borrow_php on tb_book_php.book_id=tb_borrow_php.book_id where book_name like '%$keyword%' and reader_id='".$no."'");		
	$row=$sql->fetch_object();
	}
if(!$row){
	echo"<font color='red'>没有这本书！！</font>";
	}else{
		do{
			?>
			<tr bgcolor="#CCFF00" align="center" class="word_black">
            <td class="word_black" height="30"><strong><?php echo $row->book_id; ?></strong></td>
			<td class="word_black" height="30"><strong><?php echo $row->book_name; ?></strong></td>
			<td class="word_black" height="30"><strong><?php echo $row->book_author; ?></strong></td>
            <td class="word_black" height="30"><strong><?php echo $row->book_publish; ?></strong></td>
            <td class="word_black" height="30"><strong><?php echo $row->borrow_time; ?></strong></td>
            <td class="word_black" height="30"><strong><?php echo $row->return_time; ?></strong></td>
            <td class="word_black" height="30"><strong><a href="return_ok.php?id=<?php echo $row->book_id; ?>">还书</a></strong></td>
			</tr>
            <?php
			}while($row=$sql->fetch_object());
	}
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