
<?php
    function insertAccount($username,$password){
        global $conn;
        $sql= "INSERT INTO account (username, password) VALUES ('". $username ."', '". $password ."')";
        $val = $conn->query($sql);
        if($val === true){
            echo "Tạo tài khoản thành công !!!"."<br>";
            
        }
        else{
            echo "Fail @_@","<br>";
        }
    }
    function checkAcc($username, $password){
        global $conn;
        $sql = "SELECT * FROM account WHERE username = '" . $username . "' AND password = '" . $password . "'";
        $val = $conn->query($sql);
        if ($val->num_rows > 0) {
            $_SESSION["login"] = true;
            $_SESSION["username"] = $username;
            echo header("Location: homeview.php");
        } else {
            echo header("Location: index.php");
        }
    }


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="index.php">quay về trang chủ</a>
    <br>
</body>
</html>