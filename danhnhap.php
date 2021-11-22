<?php
  require_once 'config/db.php';
  if(isset($_POST['submit']) && $_POST["username"] !='' && $_POST["password"] != ''){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "select * from tk where username = '$username' and password = '$password'";
    $user = mysqli_query($connect, $sql);
    if(mysqli_num_rows($user)>0){
      $message = "Đăng nhập thành công";
      echo "<script type='text/javascript'>alert('$message');</script>";
      header("location:Home.php");
    }
    else{
      $message = "Nhập sai tài khoản hoặc mật khẩu!";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    
    <div class="body">
      <div class="brand">
        <div class="brand-name">
          <img src="img/demo-logo.png" alt="">
        </div>
        <div class="exit-btn">
          <a href="Home.php"><i class="fas fa-times-circle"></i></a>
        </div>
      </div>
      <div class="login-form-container">
        <form class="login-form" action="danhnhap.php" method="POST">
          <div class="brand">
          </div>
          <div class="form-group">
          <div class="row" style="float: right; margin-right:15px;">
          <a href="Home.php" style="color:rgb(168, 54, 168);; font-size: 25px;"><i class="fas fa-times-circle"></i></a>
          </div>
            <h1>Đăng nhập</h1>
            <br>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên tài khoản" name="username">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu" name="password">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Nhớ mật khẩu</label>
          </div>
          <button type="submit" class="btn btn-primary" id="btn" name="submit">Đăng nhập</button>
          <hr>
          <div class="row">
              <a href="Danhky.php" style="margin-left: 15px; margin-bottom: 10px;">Đăng ký ngay</a>
          </div>
          <div class="diff">
               Hoặc đăng nhập với <a href="https://www.facebook.com/"><img src="img/facebook-icon.png" alt="" width="60px"></a>
            <a href="https://www.instagram.com/accounts/login/"><img src="img/instagram-icon.png" alt="" width="60px"></a>
            <a href="https://www.instagram.com/accounts/login/"><img src="img/twitter-icon.png" alt="" width="60px"></a>
          </div>
          
        </form>
      </div>
    </div>
</body>
</html>