<?php
$username=$_POST["username"];
echo $username;
$con=mysqli_connect("localhost","root","","waserda"); 

$result = mysqli_query($con,"SELECT username,email FROM `data_user` WHERE username LIKE $username%");
$hasil = mysql_fetch_array($result);

?>