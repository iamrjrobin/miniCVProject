<?php
session_start();
$databaseHost = 'localhost';
$databaseName = 'cvform';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
/*
if($mysqli)
{
    echo "connected";

}
else
{
    echo"not connected";
}
*/
?>