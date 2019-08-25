<?php require_once("conn.php")

# check if post
# sql select id from user where email = $_POST["email"] and password = "password";
$_SESSION["id"] = $row["id"];

?>