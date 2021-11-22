<?php
    require_once 'config/db.php';
    if(isset($_POST['submit']) && $_POST["username"] !='' && $_POST["password"] != '' && $_POST["repassword"] != '' ){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        $level = 0;
        if($password != $repassword){
            header("location:Danhky.php");
        }
        $sql = "select * from tk where username = '$username'";
        $old = mysqli_query($connect, $sql);
      
        if(mysqli_num_rows($old)>0){
            header("location:Danhky.php");
        }
        else{
          $sql = "Insert into tk (username, password, level) values ('$username', '$password', '$level')";
        mysqli_query($connect, $sql);
        $message = "Đăng ký thành công";
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
    <title>Đăng ký</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    
    <div class="body">
    
      <div class="login-form-container">
        <form class="login-form" action="Danhky.php" method="POST">
          
          <div class="form-group">
            <h1>Đăng Ký</h1>
            <br>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tài khoản" name="username">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu" name="password">
          </div>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập lại mật khẩu" name="repassword">
          <div class="row">
              <a href="danhnhap.php" style="margin-left: 15px; margin-bottom: 15px; margin-top: 15px; ">Quay về đăng nhập</a>
          </div>
          <button type="submit" class="btn btn-primary" id="btn" name="submit" >Đăng ký</button>
          <hr>
          
        </form>
      </div>
    </div>
</body>
</html>