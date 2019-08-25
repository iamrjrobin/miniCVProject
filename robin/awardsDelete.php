<?php
include 'conn.php';
$aid = $_GET['aid'];
$q = " DELETE FROM `awards` WHERE aid = $aid ";
mysqli_query($mysqli, $q);
header('location:awardsshow.php');
?>