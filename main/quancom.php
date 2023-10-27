<?php
    include "connect.php";

    if(isset($_POST['btn'])){
        $id ="";
        $com = $_POST['com'];
        $ghichu = $_POST['ghichu'];
        $sql = "INSERT INTO donhang (id, loaicom, ghichu)
        VALUE ('$id', '$com', '$ghichu');
        ";

        mysqli_query($conn, $sql);

        echo "Đặt hàng thành công!";
        header("location:hienthi.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style2.css">
    <title>Giabao's Burgers</title>
</head>
<body>
    <h1>
        TIỆM CƠM CỦA BẢO
    </h1>
    <h2>Tạo 1 đơn hàng</h2>
    <div class="mainForm">
        <form action="burger.php" method="post">
        <h5>Loại cơm bạn muốn</h5>
          <input type="text" name="com" />
          <p>Cơm gà 30.000</p>
        <p>Cơm sườn bì chả 35.000</p>
        <p>Cơm lạp xưởng 30.000</p>
          <h5>Ghi chú</h5>
          <input type="text" name="ghichu" />
          <button type="submit" name="btn">Đặt hàng</button>
        </form>
    </div>
</body>
</html>