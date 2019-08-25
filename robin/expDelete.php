<?php
include 'conn.php';
$exid = $_GET['exid'];
$q = " DELETE FROM `exp` WHERE exid = $exid ";
mysqli_query($mysqli, $q);
header('location:expshow.php');
?>