<?php
include 'conn.php';
$uid = $_GET['uid'];
$q = " DELETE FROM `users` WHERE uid = $uid ";
mysqli_query($mysqli, $q);
header('location:home.php');
?>