<?php
$title = $_GET['title'];
$date = $_GET['date'];
$content = $_GET['content'];

//�������ݿ�
$conn = mysqli_connect('localhost', 'root','','mydb');
//���ò����ַ���
mysqli_query($conn, "SET NAMES UTF8");
//ִ��һ��SQL��䣬�������ݿ�
$sql = "INSERT INTO xinwen
(title,date,content) VALUES('{$title}', '{$date}',
'{$content}')";
echo $sql;
$result = mysqli_query($conn, $sql);

if ($result == 1) {
    echo "���ݳɹ�����";
} else {
    echo "���ݴ�������ϵ����Ա";
}
mysqli_close($conn);
