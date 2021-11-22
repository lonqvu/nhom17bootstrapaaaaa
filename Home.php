<?php
require_once 'config/db.php';
$sql_sp = "SELECT * FROM sanpham";
$query_sp = mysqli_query($connect, $sql_sp);
$sql_dm = "SELECT * FROM dmsanpham";
$query_dm = mysqli_query($connect, $sql_dm);
$sql_spnb = "SELECT * FROM sanpham limit 1";
$query_spnb = mysqli_query($connect, $sql_spnb);
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Trang chủ</title>

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
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/quang-cao-du-lich_113702379.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <div class="carousel-item">
                <img src="img/bannertournuocngoai.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block" style="position: absolute; top:0px;">
                    <h5>Du lịch 5 Châu</h5>
                    <p>Chất lượng toàn cầu</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/xu-huong-phat-trien-cua-nganh-kinh-doanh-khach-san.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Dịch vụ</h5>
                    <p>Luôn đem lại những gì bạn cần</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--end of menu-->
    <div class="container">
        <div class="row" id="haha">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <!-- Left-->
            <div class="col-md-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i>Danh mục sản phẩm</div>
                <ul class="list-group category_block">
                    <?php
                    while ($row_dm = mysqli_fetch_assoc($query_dm)) { ?>
                        <li class="list-group-item text-black"><a href="Home_dm.php?id_dm=<?php echo $row_dm['id_dm'] ?>"><?php echo $row_dm['ten_dm'] ?></a></li>
                    <?php } ?>
                    <li class="list-group-item text-white"><a href="Home_km.php ?>">Khuyến mại</a></li>
                </ul>

                <div class="card bg-light mb-3" id="sanphamnoibat">
                    <div class="card-header bg-success text-white text-uppercase">Sản phẩm nổi bật</div>
                    <div class="card-body">
                        <?php while ($row_spnb = mysqli_fetch_assoc($query_spnb)) { ?>
                            <img class="img-fluid" src="img/<?php echo $row_spnb['anh_sp'] ?>" />
                            <h5 class="card-title"><?php echo $row_spnb['ten_sp'] ?></h5>
                            <p class="bloc_left_price"><?php echo number_format($row_spnb['gia_sp']) ?> VND</p>
                            <div class="col">
                                <a href="Cart.php?id_sp=<?php echo $row_sp['id_sp']; ?>" class="btn btn-success btn-block">Đặt hàng</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!--End left-->
            <div class="col-md-9">
                <div class="row" id="roww">

                    <!--vong lap-->
                    <?php
                    while ($row_sp = mysqli_fetch_assoc($query_sp)) { ?>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card">
                                <img class="img" src="img/<?php echo $row_sp['anh_sp'] ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title show_txt"><a href="Detail.php?id_sp=<?php echo $row_sp['id_sp']; ?>" title="View Product" class="nd"><?php echo $row_sp['ten_sp'] ?></a></h4>

                                    </p>

                                    <div class="col">

                                        <p>Giá chỉ: <span class="money"><?php echo number_format($row_sp['gia_sp']) ?> VNĐ</span></p>
                                    </div>
                                    <div class="col">
                                        <a href="Cart.php?id_sp=<?php echo $row_sp['id_sp']; ?>" class="btn btn-success">Đặt hàng</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!--ket thuc vong lap-->
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-3">
                    <h5>Thông tin về trang web</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <p class="mb-0">
                        Một trang web giúp khách hàng tìm hiều thông tin về các tour du lịch, dịch vụ
                        <p>Trang web được phát triển bởi 3 thành viên</p>
                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                    <h5>Nhóm 17</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <ul class="list-unstyled">
                        <li><a href="">Vũ Xuân Long</a></li>
                        <li><a href="">Phạm Yến Linh</a></li>
                        <li><a href="">Vương Thị Linh</a></li>
                        
                    </ul>
                </div>

         

                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h5>Liên hệ</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <ul class="list-unstyled">
                        <li><i class="fa fa-home mr-2"></i> Văn Trì - Hà Nội</li>
                        <li><i class="fa fa-envelope mr-2"></i> Loqcoqtu@gmail.com</li>
                        <li><i class="fa fa-phone mr-2"></i> + 113</li>
                        <li><i class="fa fa-print mr-2"></i> + 112</li>
                    </ul>
                </div>
                <div class="col-12 copyright mt-3">
                    <p class="float-left">
                        <a href="#">Trở về đầu</a>
                    </p>
                    
                </div>
            </div>
        </div>
    </footer>
    <!--End footer-->
    <script src="js/script.js"></script>
</body>

</html>