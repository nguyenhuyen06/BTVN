<?php
session_start();
$_SESSION["login"] = 0;
echo header("Location: index.php");

?>
