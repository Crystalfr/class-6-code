<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$id = $_GET['id'];
//���������ݿ⣬PHP��MySQL�ǻƽ���ֻ��Ҫһ����������������ݿ�
//���ݿ���û���root, �����ǿ�
//$con ����һ����������ʾһ������
$con = mysql_connect("localhost","root","");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
//ѡ�������ĸ����ݿ�
mysql_select_db("mydb", $con);
//�������ݲ����ַ���
mysql_query("SET NAMES UTF8");
//��ִ��SQL��䣬�ͰѼ�������ŵ�$result������
$result = mysql_query("SELECT * FROM xinwen WHERE id=" . $id);
//ѭ����ȡ
$row = mysql_fetch_array($result);
echo "<h1>";
echo $row['title'];
echo "</h1>";
echo $row['content'];
//�ر����ݿ�
mysql_close($con);
?>
</body>
</html>
