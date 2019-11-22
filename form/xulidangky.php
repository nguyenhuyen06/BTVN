<?php
include("../model/sqlconnecter.php");
include("../model/accountmodel.php");
$user = $_POST["username"];
$pass = $_POST["password"];
insertAccount($user, $pass);
?>