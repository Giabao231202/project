<?php
    include "connect.php";

    if(isset($_POST['dangnhap'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $hashPassword = password_hash($password, PASSWORD_DEFAULT);
      $sql = "SELECT * FROM khachhang WHERE username = '$username' AND password = '$hashPassword'";

      $result = mysqli_query($conn, $sql);

      // if(mysqli_num_rows($result)==1){
      //   header("location:burger.php");
      // }
      // else {
      //   echo 'Username hoặc password không đúng';
      // }
      if(password_verify($password, $hashPassword)==1){
        header("location:burger.php");
      }
      else{
        echo "Wrong!!!";
      }
    }
 ?>