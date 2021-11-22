<?php
require_once 'code-cart.php';
$cart=(isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
 <!--begin of menu-->
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
<!--end of menu-->

<div class="shopping-cart">

    <div class="px-4 px-lg-0">
        <div class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

                        <!-- Shopping cart table -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="p-2 px-3 text-uppercase">Sản Phẩm</div>
                                        </th>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase">Đơn Giá</div>
                                        </th>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase">Số Lượng</div>
                                        </th>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase">Xóa</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--vong lap--> 
                                    <?php $tongtien = 0; ?>
                                    <?php foreach ($cart as $key => $value):
                                        $tongtien += $value['gia_sp']*$value['quantity'];
                                        ?>
                                        <tr>
                                            <td scope="row">
                                                <div class="p-2">
                                                    <img src="img/<?php echo $value['anh_sp'] ?>" alt="" width="70" class="img-fluid rounded shadow-sm">
                                                    <div class="ml-3 d-inline-block align-middle">
                                                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block"><?php echo $value['ten_sp'] ?></a></h5><span class="text-muted font-weight-normal font-italic"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle"><?php echo number_format($value['gia_sp']*$value['quantity']) ?> VND</td>
                                            <td class="align-middle">
                                                <form action="Cart.php">
                                                    <!--gọi 2 input để gọi id_sp và action=update -->
                                                    <input type="hidden" name="action" value="update">
                                                    <input type="hidden" name="id_sp" value="<?php echo $value['id_sp'] ?>">
                                                    <input type="number" name="quantity" value="<?php echo $value['quantity'] ?>">
                                                    <button type="btn" class="btn btn-success" onclick="return confirm('Bạn có muốn cập nhật sản phẩm này?')">Cập nhật</button>
                                                </form>
                                            </td>
                                            <td class="align-middle"><a href="Cart.php?id_sp=<?php echo $value['id_sp'] ?>&action=delete" class="text-dark" onclick="return confirm('Bạn có muốn xóa sản phẩm này?')">
                                                <button type="button" class="btn btn-danger">Xóa</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach ?> 
                                <!--ket thuc vong lap--> 
                            </tbody>
                        </table>
                    </div>
                    <!-- End -->
                </div>
            </div>
            <!--Lưu vào csdl-->
            <?php 
            if(isset($_POST['sbm'])){
                $hoten = $_POST["hoten"];
                $email = $_POST["email"];
                $sdt = $_POST["sdt"];
                $diachi = $_POST["diachi"];

                $sql = "INSERT INTO orrders(hoten,email,sdt,diachi,tongtien) values('$hoten','$email','$sdt','$diachi','$tongtien')";
                $query = mysqli_query($connect,$sql);

                if($query){
                 //   $id = mysqli_insert_id($connect);
                    foreach ($cart as $value) {
                        mysqli_query($connect,"INSERT INTO orders_detail(hoten,ten_sp,gia_sp,quantity) values('$hoten','$value[ten_sp]','$value[gia_sp]','$value[quantity]')");
                    }
                }
                echo 'cảm ơn bạn đã mua hàng!';
                unset($_SESSION['cart']);
            }
            ?>
            <div class="row py-5 p-4 bg-white rounded shadow-sm">
                <div class="col-lg-6">
                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Thông tin khách hàng</div>
                    <form method="post">
                        <div class="p-4">

                            <div class="input-group mb-4 border rounded-pill p-2">
                                <input type="text" name="hoten" placeholder="Họ tên khách hàng" aria-describedby="button-addon3" class="form-control border-0">
                            </div>

                            <div class="input-group mb-4 border rounded-pill p-2">
                                <input type="text" name="email" placeholder="Email" aria-describedby="button-addon3" class="form-control border-0">
                            </div>

                            <div class="input-group mb-4 border rounded-pill p-2">
                                <input type="number"v name="sdt" placeholder="Số điện thoại" aria-describedby="button-addon3" class="form-control border-0">
                            </div>

                            <div class="input-group mb-4 border rounded-pill p-2">
                                <input type="text" name="diachi" placeholder="Địa chỉ" aria-describedby="button-addon3" class="form-control border-0">
                            </div>
                            <div class="input-group mb-4 border rounded-pill p-2">
                                <input type="submit" name="sbm" class="btn btn-dark rounded-pill py-2 btn-block" value="Mua hàng" onclick="return confirm('Bạn có muốn mua sản phẩm này?')">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Thành tiền</div>
                    <div class="p-4">
                        <ul class="list-unstyled mb-4">
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tổng thanh toán</strong>
                                <h5 class="font-weight-bold"><?php echo number_format($tongtien) ?> VND</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<script src="js/script.js"></script>
</body>
</html>