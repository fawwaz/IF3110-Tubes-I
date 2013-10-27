<?php


mysql_connect("127.0.0.1", "root", "")or die("cannot connect");
mysql_select_db("waserda")or die("cannot select DB");


// $result = mysqli_query($con,"SELECT username,email FROM `data_user` WHERE username LIKE '$username'%");
// $result = mysqli_query($con,"SELECT username,email FROM `data_user` ");


// while ( $row = mysql_fetch_array($result)) {
// 	print_r($row);
// }
$sql = "SELECT username FROM data_user";
$result = mysql_query($sql);
if (false === $result) {
    echo mysql_error();
}else{
	$i=0;
	while ($row=mysql_fetch_array($result)) {
		echo $row["username"];
		$i++;
	}
}
?>