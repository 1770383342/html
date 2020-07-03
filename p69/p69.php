<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>使用新的子字符串替换原始字符串中被指定要替换的字符串</title>
</head>

<body>
<?php
$str2="某某";
$str1="**";
$str="某某公司是一家以计算机软件技术为核心的高科技企业，多年来始终致力于行业某某管理软件开发、数字化出版物制作、计算机网络系统综合应用以及行业电子商务网站开发等领域，涉及生产、管理、控制、仓贮、物流、营销、服务等某某行业";
echo str_ireplace($str2,$str1,$str);
?>
</body>
</html>