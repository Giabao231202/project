<?php 
    include "connect.php";

    if(isset($_POST['btn'])){
    $loaicom = $_POST['loaicom'];
    $ghichu = $_POST['ghichu'];
    $sql = "SELECT * FROM donhang WHERE loaicom = '$loaicom'";

    mysqli_query($conn, $sql);
    
     

 
   echo "đơn hàng đã đặt";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin đặt hàng</title>
</head>
<body>
   <!-- <button type="submit" name="btn">kiểm tra đơn hàng</button> -->
</body>
</html>