<?php
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
    <h1>فرم ثبت گزارش روزانه</h1>
    <div class="report">
        <p class="date">تاریخ</p><br>
        <p class="date">24/5/1400<p><br>
        <h3>ساعت ورود:</h3>
        <select>
            <option>8</option>
        </select><br>    
        <h3>دقیقه ورود:</h3>
        <select>
            <option>8</option>
        </select><br><br><br>          
        <h3>ساعت خروج:</h3>
        <select>
            <option>14</option>
        </select><br>       
        <h3>دقیقه خروج:</h3>
        <select>
            <option>8</option>
        </select> <br>   
        
        <div class="text">
        <h3>گزارش خود را در این قسمت بنویسید</h3>
            <textarea></textarea>
        </div> 
        
        <input type="submit" value="ثبت گزارش" name="submitreport">
    </div>

</body>
</html>