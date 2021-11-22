<?php
require_once 'config/db.php';
error_reporting(0);
$id = $_GET['id'];

$sql_up = "SELECT * FROM orrders WHERE id_kh = '$id'";
$query_up = mysqli_query($connect, $sql_up);
$row_up = mysqli_fetch_assoc($query_up);

if (isset($_POST['sbm'])) {
    $hoten = $_POST['hoten'];
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $diachi = $_POST['diachi'];
    $tongtien = $_POST['tongtien'];
    $sql = "UPDATE orrders SET hoten = '$hoten', email = '$email', sdt = '$sdt', diachi = '$diachi', tongtien = '$tongtien' WHERE id_kh = '$id'";
    $query = mysqli_query($connect, $sql);
    header("location:QuanLyKH.php");

}
?>

<style type="text/css">
    div.button {
        text-align: center;
    }
</style>
<!DOCTYPE html>
<html>

<head>
    <title>Sửa khách hàng</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container-fluid">
                <a class="navbar-brand" href="Home.php"><img src="img/test3.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="Home.php">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ManagerProduct.php">Quản lý sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="QuanLyKH.php">Quản lý khách hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="QuanLyTK.php">Quản lý Tài khoản</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="thongke.php">Thống kê khách hàng</a>
                        </li>

                    </ul>

                </div>


            </div>
            <div class="icons">
                <div class="icon">
                    <i class="fas fa-search" id="search-btn"></i>
                    <a href="Cart.php">
                        <i class="fa fa-shopping-cart"></i>
                    </a>
                    <a href="danhnhap.php">
                        <i class="fas fa-user"></i>
                    </a>
                </div>
            </div>
            <form action="Search.php?quanly=timkiem" method="post" class="search-bar-container">
                <input name="search_product" id="search-bar" class="form-control me-2" type="search" placeholder="Nhập địa điểm du lịch cần tìm kiếm..." aria-label="Search">
                <button type="submit" name="search_button" class="btn btn-secondary btn-number">
                    <i class="fa fa-search"></i>
                </button>
            </form>

        </nav>
    </section>
    <div class="container-fluid">

        <div class="card" id="cad">
            <div class="card-header">
                <h2>Quản lý khách hàng</h2>
            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <label for="">họ tên</label>
                        <input type="text" name="hoten" class="form-control" value="<?php echo $row_up['hoten'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $row_up['email'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Số điện thoại</label>
                        <input type="number" name="sdt" class="form-control" value="<?php echo $row_up['sdt'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ</label>
                        <input type="text" name="diachi" class="form-control" value="<?php echo $row_up['diachi'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Tổng tiền</label>
                        <input type="number" name="tongtien" class="form-control" value="<?php echo $row_up['tongtien'] ?>">
                    </div>

                    <div class="button" style="margin-top: 20px;">
                        <a href="QuanLyKH.php"><button type="button" class="btn btn-primary">Trở lại</button></a>
                        <button name="sbm" class="btn btn-success" type="submit" name="sbm">Sửa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>