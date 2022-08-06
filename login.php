<?php
include "load.php";

if (isset($_POST['sub'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM  user WHERE  username=? and password=?";
    $insert = $db->prepare($sql);
    $insert->bindValue(1, $username);
    $insert->bindValue(2, $password);
    $insert->execute();
    $user = $insert->fetch(PDO::FETCH_ASSOC);

    if($insert->rowCount()>=1) {
        $_SESSION['username'] = $user['username'];

        header('Location: a.php');
        exit();
    } else{
        echo "ایمیل یا رمزعبور اشتباه است";
    }
}
?>
<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css" integrity="sha384-P4uhUIGk/q1gaD/NdgkBIl3a6QywJjlsFJFk7SPRdruoGddvRVSwv5qFnvZ73cpz" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <div class="register" style="text-align:center;">
            <form action="" method="POST">
                <h4>ورود به حساب کاربری</h4>
                <input name="username" type="text" placeholder="نام کاربری" class="form-control"><br>
                <input name="password" type="password" placeholder="رمزعبور" class="form-control"><br>
                <input name="sub" type="submit" value="ورود به حساب" class="btn btn-info form-control"><br><br>
            </form>
            <a href="registrer.php" class="btn btn-info form-control">ثبت نام</a>
        </div>
    </div>
</body>
</html>
