<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database ="quanly";

    $conn = new mysqli($servername,$username,$password,$database);
    $mess = $conn->connect_error ? "Connect fail" : "connect success";
    echo $mess;
    echo '<br>';
?>