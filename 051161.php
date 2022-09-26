<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
$username=$_POST["uname"];
$userpwd=$_POST["upwd"];
echo "用户名：{$username} <br/>";
echo "密码：{$userpwd}";
?>