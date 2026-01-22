<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            padding: 40px;
        }
        .form-group{
            margin-bottom: 5px;
            padding-bottom: 5px;
        }
        input[type="text"], input[type="password"], input[type="number"], select, textarea{
            width: 100%;
            padding: 5px;
            background-color: #e2e2e2;
        }
        input[type="submit"]{
            background-color: #08881d;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
        input[type="reset"]{
            background-color: #880808;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
        label{
            display: block;
            margin-bottom: 3px;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Action PHP</h1>
    <hr>
    <!-- methos (GET POST PUT DELETE) -->
    <form action=<?php echo $_SERVER['PHP_SELF']?> method="POST" enctype="">
        <div class="form-group">
            <label for="fname">ชื่อ - นามสกุล</label>
            <input type="text" id="fname" name="fname">
        </div>
        <div class="form-group">
            <label for="pword">รหัสผ่าน</label>
            <input type="password" id="pword" name="pword">
        </div>
        <div class="form-group">
            <label for="age">อายุ</label>
            <input type="number" id="age" name="age">
        </div>
        <div class="form-group">
            <label for="gender">เพศ</label>
            <input type="radio" id="" name="gender" value="ชาย" checked>ชาย
            <input type="radio" id="" name="gender" value="หญิง">หญิง
            <input type="radio" id="" name="gender" value="LGTV">LGTV
        </div>
        <div class="form-group">
            <label for="plang">ภาษาโปรแกรมที่ชอบ</label>
            <input type="checkbox" id="" name="plang[]" value="C">C
            <input type="checkbox" id="" name="plang[]" value="JAVA">JAVA
            <input type="checkbox" id="" name="plang[]" value="Python">Python
            <input type="checkbox" id="" name="plang[]" value="PHP">PHP
        </div>
        <div class="form-group">
            <label for="food">อาหารที่ชอบ</label>
            <input type="checkbox" id="" name="food1" value="KFC">KFC
            <input type="checkbox" id="" name="food2" value="Pizza">Pizza
            <input type="checkbox" id="" name="food3" value="Hamburger">Hamburger
            <input type="checkbox" id="" name="food4" value="Donut">Donut
        </div>
        <div class="form-group">
            <label for="country">ประเทศที่ชอบ</label>
            <select name="country" id="country">
                <option value="">--กรุณาเลือก--</option>
                <option value="Thailand">Thailand</option>
                <option value="Japan">Japan</option>
                <option value="Chinese">Chinese</option>
                <option value="India">India</option>
                <option value="USA">USA</option>
            </select>
        </div>
        <div class="form-group">
            <label for="province">จังหวัดที่ชอบ</label>
            <select name="province" id="province" size="5">
                <option value="trung">ตรัง</option>
                <option value="grungtep">กรุงเทพ</option>
                <option value="trad">ตราด</option>
                <option value="samudsongcram">สมุทรปราการ</option>
                <option value="samudpragran">สมุทรสงคราม</option>
            </select>
        </div>
        <div class="form-group">
            <label for="bdate">วันเกิด</label>
            <input type="date" name="bdate" id="bdate">
        </div>
        <div class="form-group">
            <label for="likelevel">ระดับความชอบ</label>
            0<input type="range" name="likelevel" id="likelevel" min="0" max="100">100
        </div>
        <div class="form-group">
            <label for="comment">ความคิดเห็น</label>
            <textarea type="comment" name="comment" id="comment" rows="5"></textarea>
        </div>
        <!-- input hidden จะไม่แสดงบนหน้าจอ แต่มีข้อมูลที่ส่งไปแสดงผล-->
         <input type="hidden" name="message" value="Hello World">
         <!-- -------------------------------------------------->
        <div class="form-group">
            <input type="submit" value="ตกลง">
            <input type="reset" value="ยกเลิก">
        </div>
    </form>
    <br>
    <!-- แสดงข้อมูลที่ส่งมาจากฟอร์ม ในไฟล์ตัวเอง -->
     <?php
        //ตรวจสอบว่ามีการส่งข้อมูลมาแบบไหน
        if($_SERVER["REQUEST_METHOD"] == "POST"){
    ?>
    <div><strong>ชื่อ-นามสกุล: </strong>
        <?php echo empty( $_POST["fname"]) ? "-" : $_POST["fname"];?>
    </div>
    <div><strong>รหัสผ่าน: </strong>
        <?php echo empty( $_POST["pword"]) ? "-" : $_POST["pword"];?>
    </div>
    <div><strong>อายุ: </strong>
        <?php echo empty( $_POST["age"]) ? "-" : $_POST["age"];?>
        <strong>ปี</strong>
    </div>
    <div><strong>เพศ: </strong>
        <?php echo $_POST["gender"];?>
    </div>
    <div><strong>ภาษาโปรแกรมที่ชอบ: </strong>
        <?php echo implode($_POST["plang"]) ? implode($_POST["plang"]): "-";?>
    </div>
    <div><strong>อาหารที่ชอบ: </strong>
        <?php 
            echo isset($_POST["food1"]) ? $_POST["food1"]: "";
            echo isset($_POST["food2"]) ? $_POST["food2"]: "";
            echo isset($_POST["food3"]) ? $_POST["food3"]: "";
            echo isset($_POST["food4"]) ? $_POST["food4"]: "";
        ?>
    </div>
    <div><strong>ประเทศที่ชอบ: </strong>
        <?php echo empty($_POST["country"]) ? "-" : $_POST["country"];?>
    </div>
    <div><strong>จังหวัดที่ชอบ: </strong>
        <?php echo empty($_POST["province"]) ? "-" : $_POST["province"];?>
    </div>
    <div><strong>วันเกิด: </strong>
        <?php echo empty($_POST["bdate"]) ? "-" : $_POST["bdate"];?>
    </div>
    <div><strong>ระดับความชอบ: </strong>
        <?php echo $_POST["likelevel"];?>
    </div>
    <div><strong>ความคิดเห็น: </strong>
        <?php echo empty($_POST["comment"]) ? "-" : $_POST["comment"];?>
    </div>
    <div><strong>Message: </strong>
        <?php echo $_POST["message"];?>
    </div>
    <?php
        }else{
            echo "NOT OK";
        }
    ?>
</body>
</html>