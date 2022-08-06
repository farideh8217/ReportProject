<?php
include "load.php";

if (isset($_POST['sub'])) {
    $username = $_POST['username'];
    $code_personaly = $_POST['code_personaly'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user SET username=? , code_personaly=? , password=?;";
    $insert = $db->prepare($sql);
    $insert->bindValue(1,$username);
    $insert->bindValue(2,$code_personaly);
    $insert->bindValue(3,$password);
    $insert->execute();
    
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css" integrity="sha384-P4uhUIGk/q1gaD/NdgkBIl3a6QywJjlsFJFk7SPRdruoGddvRVSwv5qFnvZ73cpz" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body dir="rtl">
    <div class="container">
        <div class="register" style="text-align:center;">
            <form method="POST">
                <h4>ثبت نام کنید</h4>
                <input name="username" type="text" placeholder="نام کاربری " class="form-control"><br>
                <input name="code_personaly" type="text" placeholder="کد پرسنلی " class="form-control"><br>
                <input name="password" type="password" placeholder="رمزعبور" class="form-control"><br>
                <input name="sub" type="submit" value="ثبت نام" class="btn btn-info form-control"><br>
            </form>
        </div>
    </div>
</body>
</html>