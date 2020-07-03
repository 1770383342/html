<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加书籍信息</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body  bgcolor="#68baeb">
<div align="center">
<table width="700" height="600" border="1"  bordercolor="#68baeb" cellpadding="0" cellspacing="0" >
<tr>
<td height="130" width="700" align="center" class="word_green"><img src="images/4.gif" width="700" height="130" /></td>
</tr>
<tr height="470" width="700" valign="top">
<td  background="images/bg1.gif">
<table width="700" height="20" border="1"  bordercolor="#68baeb"cellpadding="0" cellspacing="0" align="left">

<tr align="left" width="300">
<td width="65" bgcolor="#FFFF99" class="word_orange"><a href="manager_book.php"><strong>书籍</strong></a></td>
<td width="76" bgcolor="#FFFF99" class="word_orange"><a href="manager_reader.php"><strong>用户</strong></a></td>
<td width="115" bgcolor="#FFFF99" class="word_orange"><a href="manager_information.php"><strong>个人信息</strong></a></td>
<td width="84" bgcolor="#FFFF99" class="word_orange"><a href="login.php"><strong>退出</strong></a></td>
</tr>
</table>
<br><br><br><br><br><br><br><br>
<table width="510" height="" border="1"  bordercolor="#68baeb" cellpadding="0" cellspacing="0" align="center">


<form name="form1" method="post" action=""  onsubmit="return chkinput(this)">
<tr>
        <td width="106" height="25" bgcolor="#FFFFFF"><div align="center">图书编号：</div></td>
        <td width="275" height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="book_id" class="inputcss" size="25">（6位）</td>
      </tr>
         <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">书名：</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="book_name" class="inputcss" size="25"></td>
      </tr>     
       <tr>
   <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">作者：</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="book_author" class="inputcss" size="25"></td>
      </tr> 
         <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">出版社：</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="book_publish" class="inputcss" size="25"></td>
      </tr> 
         <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">库存：</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="book_count" class="inputcss" size="25"></td>
      </tr> 
       <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" name="submit" value="添加" class="buttoncss" onclick="return check(form1)">&nbsp;&nbsp;</div></td>
      </tr>
	 </form> 
<?php
include("conn.php");
$no=$_SESSION['no'];
if(isset($_POST["submit"])){
$book_id=$_POST["book_id"];
$book_name=$_POST["book_name"];
$book_author=$_POST["book_author"];
$book_publish=$_POST["book_publish"];
$book_count=$_POST["book_count"];
$sql=$mysqli->query("select * from tb_book_php where book_id='".$book_id."'");
$row=$sql->fetch_object();
if(!$row){
$result=$mysqli->query("insert into tb_book_php(book_id,book_name,book_author,book_publish,book_count,manager_id) values ('$book_id','$book_name','$book_author','$book_publish','$book_count','$no')");
 if($result){
	 echo "<script>
	 alert('添加成功！！');
	 window.location.href='manager_book.php'</script>";
	 }else{
		 echo "<script>
	 alert('添加失败！！');
	 window.location.href='book_add.php'</script>";
		 }
	 }
	 else{
	 echo "<script>
	 alert('图书编号已存在，添加失败！！');
	 window.location.href='book_add.php'</script>";
	}
}
//$result->close();
$mysqli->close();
?>
</table>
</table>
<tr><div id="footer">重庆师范大学17级计算机科学与技术2班谭自立（17623575750）版权所有</div></tr>
</div>
</body>
</html>