<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 200px;
            height: 150px;
        }
    </style>
</head>
<body>
    <?php
    if(isset($_POST["s"]) && $_POST["s"] ){
        $anh = $_FILES["filew"];
        $them = $_POST["them"];
        $mota = $_POST["mota"];
        $gia = $_POST["gia"];
        $luachon= $_POST["luachon"];
        $chuaanh = "img/";
        $chuaanh2 = $chuaanh . basename( $anh['name']);  
        move_uploaded_file($anh["tmp_name"],$chuaanh2);
        echo $them;
        echo "<br>";
        echo $mota;
        echo "<br>";
        echo $gia;
        echo "<br>";
        echo $luachon;
        echo "<br>";
        echo '<img src="' . $chuaanh2 . '"  alt="" /> ';
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Product Name:</label><br>
        <input type="text" name="them" id=""><br>
        <label for="">Discription:</label><br>
        <input type="text" name="mota" id=""><br>
        <label for="">Price:</label><br>
        <input type="text" name="gia" id=""><br>
        <label for="">Catagory:</label><br>
        <select name="luachon" id="">
            <option value="số 1" selected>số 1</option>
            <option value="số 2">số 12</option>
            <option value="số 3">số 13</option>
        </select><br>
        <label for="">Room Image:</label><br>
        <input type="file" name="filew"><br>
        <input type="submit" value="Save" name="s">
    </form>

</body>
</html>