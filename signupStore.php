<?php
include 'connection.php';
$sql_query="INSERT INTO userdetail(userName,password,Mobile,email) VALUES('$_POST[name]','$_POST[password]','$_POST[phone]','$_POST[email]')";
$con->query($sql_query);
header("Location: login.php");
?>