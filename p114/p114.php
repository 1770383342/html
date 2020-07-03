<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>综合运用数组函数-实现多文件上传</title>
<style type="text/css">
<!--
body{
	background-color:#f0f0f0;
	margin:0px;
}
.STYLE1{
	font-size:13px;
	font-weight:bold;
}
.STYLE2{
	font-size:12px; color:#ff0000;
}
a:link{
	text-decoration:none;
}
a:visited{
	text-decoration:none;
}
a:hover{
	text-decoration:none;
}
a:active{
	text-decoration:none;
}
-->
</style>
</head>

<body>
<table width="725" border="5" align="center" cellpadding="0" cellspacing="0"
 bordercolor="red">
 <tr><!--外表第1行 -->
 <td colspan="2"></td>
 </tr>
 <tr><!--外表地第2行第1单元开始 -->
 <td width="662" align="center" valign="top"><table width="578" border="3" cellspacing="0" cellpadding="0" bordercolor="blue">
 <tr><!--内表第1行 -->
 <td height="20" colspan="2" align="center" bgcolor="#fff"></td>
 </tr>
 <tr><!-- 内表第2行 -->
 <td height="20" colspan="2" align="center" bgcolor="#fff" class="STYLE1">文件路径（5个文件以内任意上传）</td>
 </tr>
 <form action="index_ok.php" method="post" enctype="multipart/form-data" name="form1">
 <!-- enctype="multipart/form-data"设置表单的MIME编码。默认情况编码格式是application/x-www-form-ulencoded,不能用于文件上传；只有使用了multipart/form-data才能完整的传递文件数据-->
 <tr><!--内表第三行 -->
 <td width="88" height="30" align="right" class="STYLE1">内容1：</td>
 <td width="369"><input name="picture[]" type="file" id="picture[]" size="30"></td>
 </tr>
 <tr><!--内表第四行 -->
 <td width="88" height="30" align="right" class="STYLE1">内容2：</td>
 <td width="369"><input name="picture[]" type="file" id="picture[]" size="30"></td>
 </tr>
  <tr><!--内表第五行 -->
 <td width="88" height="30" align="right" class="STYLE1">内容3：</td>
 <td width="369"><input name="picture[]" type="file" id="picture[]" size="30"></td>
 </tr>
  <tr><!--内表第六行 -->
 <td width="88" height="30" align="right" class="STYLE1">内容4：</td>
 <td width="369"><input name="picture[]" type="file" id="picture[]" size="30"></td>
 </tr>
  <tr><!--内表第七行 -->
 <td width="88" height="30" align="right" class="STYLE1">内容5：</td>
 <td width="369"><input name="picture[]" type="file" id="picture[]" size="30"></td>
 </tr>
  <tr><!--内表第八行 -->
 <td height="50">&nbsp;</td>
 <td><input type="image" src="images/02-03(3).jpg" name="imageField"></td><!--图像与用于提交表单 -->
 </tr>
 </form>
 </table></td><!--外表地第2行第1单元结束 -->
 <!--外表第2行第2单元 -->
 <td width="99"><img src="images/02-03(2).jpg" width="204" height="362"></td>
 </tr><!--外表第2行结束 -->
 <tr><!--外表第3行 -->
 <td colspan="2"><img src="images/02-03(4).jpg" width="765" height="80"></td>
 </tr>
 </table>
 <!--外表结束 -->
 <p>&nbsp;</p>
  </body>
</html>