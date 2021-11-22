<?php
require_once 'config/db.php';

$sql_dm = "SELECT * FROM dmsanpham";
$query_dm = mysqli_query($connect, $sql_dm);

$sql_spnb = "SELECT * FROM sanpham limit 1";
$query_spnb = mysqli_query($connect, $sql_spnb);

if (isset($_GET['id_sp'])) {
    $id_sp = $_GET['id_sp'];
} else {
    $id_sp = '';
}
$sql_chitietSP = "SELECT * FROM sanpham where id_sp='$id_sp'";
$query_chitietSP = mysqli_query($connect, $sql_chitietSP);
$query_chitietSP1 = mysqli_query($connect, $sql_chitietSP);
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Thông tin</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <style>
        .gallery-wrap .img-big-wrap {
            padding: 50px 0px 30px 50px;
            overflow: hidden;
        }

        .gallery-wrap .img-big-wrap img {
            height: 350px !important;
            width: auto;
            display: inline-block;
            cursor: zoom-in;
            transition: all 1s;
        }

        .img-big-wrap:hover img {
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }

        .gallery-wrap .img-small-wrap .item-gallery {
            width: 60px;
            height: 60px;
            border: 1px solid #ddd;
            margin: 7px 2px;
            display: inline-block;
            overflow: hidden;
        }

        .gallery-wrap .img-small-wrap {
            text-align: center;
        }

        .gallery-wrap .img-small-wrap img {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
            border-radius: 4px;
            cursor: zoom-in;
        }

        .img-big-wrap img {
            width: 100% !important;
            height: auto !important;
        }
    </style>
</head>

<body>

    <!--begin of menu-->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container-fluid">
                <a class="navbar-brand" href="Home.php"><img src="tourdulich/img/test3.png" alt=""></a>
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
    <div class="container">
        <div class="row" id="haha">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="Home.php">Trang chủ</a></li>
                        <?php while ($row_chitietSP1 = mysqli_fetch_assoc($query_chitietSP1)) { ?>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $row_chitietSP1['ten_sp'];?></li>
                            
                        <?php }?>
                        
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
            <div class="col-sm-9">
                <div class="container">
                    <div class="card">
                        <div class="row">
                            <?php while ($row_chitietSP = mysqli_fetch_assoc($query_chitietSP)) { ?>
                                <aside class="col-sm-5 border-right">
                                    <article class="gallery-wrap">
                                        <div class="img-big-wrap">
                                            <div> <a href="#"><img src="img/<?php echo $row_chitietSP['anh_sp'] ?>"></a></div>
                                        </div> 
                                        <div class="img-small-wrap">
                                        </div> 
                                    </article> 
                                </aside>
                                <aside class="col-sm-7">
                                    <article class="card-body p-5">
                                        <h3 class="title mb-3"><?php echo $row_chitietSP['ten_sp'] ?></h3>

                                        <p class="price-detail-wrap">
                                            <span class="price h3 text-warning">
                                                <span class="currency">Giá </span><span class="num"><?php echo number_format($row_chitietSP['gia_sp']) ?> VND</span>
                                            </span>
                                        </p>
                                        <dl class="item-property">
                                            <dt>Mô tả</dt>
                                            <dd>
                                                <p><?php echo $row_chitietSP['chi_tiet_sp'] ?></p>
                                            </dd>
                                        </dl>

                                        <hr>
                        </div>
                        <hr>
                        <a href="Cart.php?id_sp=<?php echo $row_chitietSP['id_sp']; ?>" class="btn btn-lg btn-success btn-block text-uppercase"> Đặt hàng </a>
                        </article> 
                        </aside> 
                    </div> 
                </div> 
            <?php } ?>

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
    <script src="tourdulich/js/script.js"></script>
</body>

</html>