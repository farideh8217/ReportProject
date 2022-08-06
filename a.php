<?php
require "load.php";

if (isset($_POST["submitreport"])) {

    $dateofday = $_POST["dateofday"];
    $hourslogin = $_POST["hourslogin"];
    $minutelogin = $_POST["minutelogin"];
    $hourslogout = $_POST["hourslogout"];
    $minutelogout = $_POST["minutelogout"];
    $reporttext = $_POST["reporttext"];

    $sql = "INSERT INTO `report` SET dateofday= :dateofday, hourslogin= :hourslogin, 
    minutelogin= :minutelogin, hourslogout= :hourslogout, minutelogout= :minutelogout, reporttext= :reporttext";
    $stmt = $db->prepare($sql);
    $stmt->bindvalue(":dateofday",$dateofday);
    $stmt->bindvalue(":hourslogin",$hourslogin);
    $stmt->bindvalue(":minutelogin",$minutelogin);
    $stmt->bindvalue(":hourslogout",$hourslogout);
    $stmt->bindvalue(":minutelogout",$minutelogout);
    $stmt->bindvalue(":reporttext",$reporttext);
    $stmt->execute();

    header("Location: b.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <h1>فرم ثبت گزارش روزانه</h1>
    <div class="report">
        <p class="date">تاریخ</p><br>
        <input type="date" name="dateofday"><br><br>
        <h3>ساعت ورود:</h3>
        <select name="hourslogin">
            <?php for($i = 8; $i<=14; $i++){ ?>
                <option value="<?= $i ?>"<?php if ($i==8) echo" selected" ?>> <?= $i ?></option>
            <?php } ?>
        </select><br>    
        <h3>دقیقه ورود:</h3>
        <select name="minutelogin">
            <?php for($i = 0; $i<=55; $i += 5){ ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php } ?>
        </select><br><br><br>          
        <h3>ساعت خروج:</h3>
        <select name="hourslogout">
            <?php for($i = 8; $i<=14; $i++){ ?>
                <option value="<?= $i ?>"<?php if ($i==14) echo" selected" ?>> <?= $i ?></option>
            <?php } ?>
        </select><br>    
        <h3>دقیقه خروج:</h3>
        <select name="minutelogout">
            <?php for($i = 0; $i<=55; $i += 5){ ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php } ?>
        </select>
        
        <div class="text">
        <h3>گزارش خود را در این قسمت بنویسید</h3>
            <textarea name="reporttext"></textarea>
        </div> 
        <input class="submitreport" type="submit" value="ثبت گزارش" name="submitreport">
    </div>

</form>    
</body>
</html>