<?php
    include "connect.php";

    if(isset($_POST['dangnhap'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $hashPassword = password_hash($password, PASSWORD_DEFAULT);
      $sql = "SELECT * FROM khachhang WHERE username = '$username' AND password = '$hashPassword'";

      $result = mysqli_query($conn, $sql);
      if(password_verify($password, $hashPassword)==1){
        header("location:quancom.php");
      }
      else{
        echo "Wrong!!!";
      }
    }
 ?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="./style/style.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="login">
      <div class="login__container">
        <h1>Đăng Nhập</h1>
        <form action="login.php" method="post">
          <h5>Email</h5>
          <input type="text" name="username" id="">
          <h5>Password</h5>
          <input type="password" name="password" id=""/>
          <button type="submit" name="dangnhap">Đăng Nhập</button>
        </form>
        <a href="./signup.php" class="login__registerButton"
          >Đăng ký tài khoản</a
        >
      </div>
    </div>
  </body>
</html>