<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>在表单中添加各个常用的元素</title>
</head>

<body>
<form action="" method="post" name="form1" enctype="multipart/form-data">
<table width="405" height="24" border="1" cellpadding="1" cellspacing="1" bordercolor="#fff" bgcolor="#999">
<tr bgcolor="#993399">
<td width="103" height="25" align="right" bgcolor="#fff">姓名：</td>
<td height="25" align="left" bgcolor="#ffffcc"><input name="user" type="text" id="user" size="20" maxlength="100"></td>
</tr>
<tr bgcolor="#993399">
<td height="25" align="right" bgcolor="#fff">性别：</td>
<td height="25" align="left" bgcolor="#ffffcc"><input name="sex" type="radio" value="男" checked>
男
<input type="radio" name="sex" value="女">
女</td>
</tr>
<tr bgcolor="#993399">
<td height="25" align="right" bgcolor="#fff">地址：</td>
<td height="25" align="left" bgcolor="#ffffcc"><select name="address" id="address">
<option value="长春市" selected>长春市</option>
<option value="吉林市">吉林市</option>
<option value="通化市">通化市</option>
<option value="松源市">松源市</option>
<option value="四平市">四平市</option>
<option value="其他">其他</option>
</select>
</td></tr>
<tr bgcolor="#993399">
<td height="25" align="right" bgcolor="#fff">爱好：</td>
<td height="25" align="left" bgcolor="#ffffcc">
<input name="fond[]" type="checkbox" id="fond[]" value="上网">上网
<input name="fond[]" type="checkbox" id="fond[]" value="音乐">音乐
<input name="fond[]" type="checkbox" id="fond[]" value="游泳">游泳
<input name="fond[]" type="checkbox" id="fond[]" value="读书">读书
<tr bgcolor="#993399">
<td height="25" align="right" bgcolor="#fff">本人照片：</td>
<td height="25" align="left" bgcolor="#ffffcc"><input name="photo" type="file" size="25" maxlength="1000" id="photo"></td>
</tr>
<tr bgcolor="#993399">
<td height="25" align="right" bgcolor="#fff">工作经验：</td>
<td height="25" align="left" bgcolor="#ffffcc"><textarea name="intro" cols="35" rows="4" id="intro"></textarea></td>
</tr>
<tr align="center" bgcolor="#ccff66">
<td height="25" colspan="2"><input type="submit" name="submit" value="提交">
&nbsp;&nbsp;
<input type="reset" name="submit2" value="重置"></td>
</tr>
</td>
</tr>
</body>
</html>