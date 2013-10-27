<?php
$username = $_POST["username"];
$password = $_POST["password"];
$nama_lengkap = $_POST["nama_lengkap"];
$email = $_POST["email"];

mysql_connect("127.0.0.1", "root", "")or die("cannot connect");
mysql_select_db("waserda")or die("cannot select DB");

$sql = "INSERT INTO data_user (username,password,nama_lengkap,email) VALUES ('$username','$password','$nama_lengkap','$email')";


?>