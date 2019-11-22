<?php
session_start();
if(isset($_SESSION["login"]) && isset($_SESSION["user"])){
    if($_SESSION["login"] != 1){
        echo header("Location: index.php");
    }
}
else{
    echo header("Location: index.php");
}
$user = $_SESSION["username"];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Home View</p>
    <p>hello <?php echo $user?></p>
    <a href="logout.php">logout</a>
</
>
</html>