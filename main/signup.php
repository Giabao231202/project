<?php 
    include "connect.php";

    if(isset($_POST['btn'])){
        $id ="";
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO khachhang (id, ten, username, password)
        VALUE ('$id', '', '$username', '$hashPassword');
        ";

        mysqli_query($conn, $sql);

        echo "Đăng ký thành công!";
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup</title>
    <link rel="stylesheet" href="./style/style.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="signup">
      <div class="signup__container">
        <h1>Đăng Ký</h1>
        <form action="signup.php" method="post">
          <h5>Username</h5>
          <input type="text" name="username" />
          <h5>Password</h5>
          <input type="password" name="password" />
          <button type="submit" name="btn">Đăng Ký</button>
        </form>
        <a href="login.php" class="signup__registerButton"
          >Đăng nhập </a>
      </div>
    </div>
  </body>
</html>