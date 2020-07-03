<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>限制大小的文件上传</title>
<style type="text/css">
<!--
body,td,th{
	font-size:12px;
}
-->
</style>
</head>

<body>
<center>
<label>请选择要上传的图片（图片格式为.jpg):</label>
<form method="post" action="p67.php" enctype="multipart/form-data">
<!--
enctype基本信息
enctype是EncodeType的简写
此属性规定在将表单数据发送到服务器之前如何对其进行编码。默认表单数据以"application/x-www-form-urlencoded"进行编码。这意味着在发送前对所有字符进行编码（把"+"转换为空格，把特殊字符转换为ASCII十六进制值）；
使用方法
属性值有：
application/x-www-form-urlencoded:窗体数据被编码为名称/值对。这是标准（默认）的编码格式；
multipart/form-data:窗体数据被编码为一条消息，页上的每个空间对应消息的一个部分，上传路径用到；
text/plain：窗体数据以存文本形式进行编码，其中不含任何控件或格式字符。
enctype="mulipart/form-data是设置表单的MIME编码。默认情况，这个编码格式是application/x-www-formdata,才能完整的传递文件数据，进行下面的操作
MIEM的详细情况请看：
http://baike.baodou,com/doc/1052153-1123665.html
-->
<input type="hidden" name="action" value="upload"/>
<input type="file" name="u_file"/>
<!--上传的文件内容暂存在"u_file"的"tmp_name"书属性中。-->
<input type="submit" value="上传"/>
</form>
<?php
if(isset($_POST["action"])){
	//判断提交按钮是否为空
	$file_path="./uploads\\";
	//定义图片在服务器中的存储位置
	$picture_name=$_FILES["u_file"]["name"];
	//获取上传图片的文件名称。某abc对象里的属性name可写成：abc.name，也可以写成：abc["name"]
	$picture_name=strstr($picture_name, ".");
	//通过strstr()函数截取上传图片文件的拓展名，包括.
	if($picture_name!=".jpg"){
		//根据后缀判断上传图片的格式是否符合要求
		echo "<script>alert('上传图片格式不正确，请重新上传');
		window.location.href='p67.php';
		</script>";
	}else if($_FILES["u_file"]["tmp_name"]){
		move_uploaded_file($_FILES["u_file"]["tmp_name"],$file_path.$_FILES["u_file"]["name"]);
		//执行图片上传
		/*
		move_uploaded_file() 函数将上传的文件移动到新位置。
		若成功，则返回ture，否则返回 false。
		语法
		move_uploaded_file(file,newloc)
		参数 描述
		file必需。规定要移动的文件。
		newloc   必需。规定文件的新位置。
		*/
		echo"图片上传成功!";
	}
	else
	echo"上传图片失败";
}
?>
</center>
	

</body>
</html>