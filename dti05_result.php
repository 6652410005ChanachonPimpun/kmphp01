<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ผลการคำนวณ</h1>
    <hr>
    <?php
        if( empty($_GET["num1"]) == true || empty($_GET["num2"]) == true){
            echo "ป้อนตัวเลขก่อน";
            //redirect กลับไปที่ dti05.php
            header("Refresh: 3; url=dti05.php");
            exit();
        }else if(floatval($_GET["num1"]) == 0 || floatval($_GET["num2"]) == 0){
            echo "ตัวเลขห้ามเป็น 0";
            //redirect กลับไปที่ dti05.php
            header("Refresh: 3; url=dti05.php");
            exit();
        }else{
        $result = $_GET["num1"] / $_GET["num2"];
        echo "เงิน" . $_GET["num1"] . " บาท<br/>";
        echo "คน" . $_GET["num2"] . "คน<br/>";
        echo "หารกันคนละ" . $result . "บาท";
        }
    ?>
</body>
</html>