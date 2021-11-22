<?php
include 'config/db.php';
error_reporting(0);
$sql_tk = "SELECT * FROM tk";
$query_dm = mysqli_query($connect,$sql_tk);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản lý tour du lịch</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="css/manager.css" rel="stylesheet" type="text/css"/>
    <style>
        img{
            width: 200px;
            height: 120px;
        }
    </style>
    <body>
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container-fluid">
                <a class="navbar-brand" href="Home.php"><img src="../tourdulich/img/test3.png" alt=""></a>
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
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Quản lý <b>sản phẩm Tour du lịch</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="./Danhky.php" class="btn btn-success "><i class="fas fa-plus-square"></i> <span>Thêm tài khoản</span></a>
                            
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                           
                            <th>ID</th>
                            <th>Tên người dùng</th>
                            <th>Mật khẩu</th>
                            <th>Actions</th>
                         
                        </tr>
                    </thead>
                    <tbody>
                        <!--vòng lặp-->
                        <?php while($row_sp=mysqli_fetch_assoc($query_dm)){ ?>
                            <tr>
                            <td><?php echo $row_sp['id'] ?></td>
                                <td><?php echo $row_sp['username'] ?></td>
                                <td><?php echo $row_sp['password'] ?></td>
                                
                                <td>
                                    <a href="Sua_TK.php?id=<?php echo $row_sp['id'] ?>" class="btn btn-success" style="margin-bottom: 10px;">Sửa</a>
                                    <a href="xoa_TK.php?id=<?php echo $row_sp['id'] ?>"class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa tài khoản này?')">Xóa</a>
                                </td>
                            </tr>
                        <?php } ?>
                        <!-- kết thúc vòng lặp-->
                    </tbody>
                </table>
                <a href="Home.php"><button type="button" class="btn btn-primary">Trở lại</button>

                </div>
        </a>
        <script src="js/manager.js" type="text/javascript"></script>
        <script src="../tourdulich/js/script.js"></script>
    </body>
    </html>