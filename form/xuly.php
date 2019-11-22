<?php
include("../model/sqlconnecter.php");
include("../model/accountmodel.php");
session_start();
isset($_POST["username"]) ? $user = $_POST["username"] : $user ="";
isset($_POST["password"]) ? $pass = $_POST["password"] : $pass ="";

checkAcc($user,$pass);


?>