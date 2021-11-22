
<?php
include 'config/db.php';
$sql_dm = "select * from dmsanpham";
$query_dm = mysqli_query($connect, $sql_dm);

if (isset($_POST['sbm'])) {
    $ten_sp = $_POST['ten_sp'];

    $anh_sp = $_FILES['anh_sp']['name'];
    $anh_sp_tmp = $_FILES['anh_sp']['tmp_name'];

    $gia_sp = $_POST['gia_sp'];
    $khuyen_mai = $_POST['khuyen_mai'];
    $chi_tiet_sp = $_POST['chi_tiet_sp'];
    $id_dm = $_POST['id_dm'];

    $sql = "insert into sanpham(id_dm ,ten_sp, anh_sp, gia_sp, khuyen_mai, chi_tiet_sp)values('$id_dm','$ten_sp', '$anh_sp', '$gia_sp', '$khuyen_mai', '$chi_tiet_sp')";

    $query = mysqli_query($connect, $sql);
    move_uploaded_file($anh_sp_tmp, 'img/' . $anh_sp);
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
    <title>Thêm sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="card" style="margin-top: 50px; box-shadow: 3px 3px 5px 0px #666;">
            <div class="card-header" style="background: rgba(15, 65, 131, 0.685) !important; color: white;">
                <h2>Thêm sản phẩm</h2>
            </div>


            <div class="card-body">
                <form enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <label for="">Tên sản phẩm</label>
                        <input type="text" name="ten_sp" class="form-control">
                    </div>
                    <div class="form-group" style="margin: 15px 0px;">
                        <label for="">Hình ảnh</label>
                        <input type="file" name="anh_sp">
                    </div>
                    <div class="form-group">
                        <label for="">Giá</label>
                        <input type="number" name="gia_sp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Khuyến mại</label>
                        <select class="form-control" name="khuyen_mai">
                            <option>Có</option>
                            <option>Không</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả</label>
                        <input type="text" name="chi_tiet_sp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Danh mục</label>
                        <select class="form-control" name="id_dm">
                            <?php
                            while ($row_dm = mysqli_fetch_assoc($query_dm)) { ?>
                                <option value="<?php echo $row_dm['id_dm']; ?>">
                                    <?php echo $row_dm['ten_dm']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="button" style="margin-top: 20px;">
                        <a href="ManagerProduct.php"><button type="button" class="btn btn-primary">Trở lại</button></a>
                        <button name="sbm" class="btn btn-success" type="submit" onclick="return confirm('Bạn có muốn thêm')">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

=======
<?php
include 'config/db.php';
$sql_dm = "select * from dmsanpham";
$query_dm = mysqli_query($connect, $sql_dm);

if (isset($_POST['sbm'])) {
    $ten_sp = $_POST['ten_sp'];

    $anh_sp = $_FILES['anh_sp']['name'];
    $anh_sp_tmp = $_FILES['anh_sp']['tmp_name'];

    $gia_sp = $_POST['gia_sp'];
    $khuyen_mai = $_POST['khuyen_mai'];
    $chi_tiet_sp = $_POST['chi_tiet_sp'];
    $id_dm = $_POST['id_dm'];

    $sql = "insert into sanpham(id_dm ,ten_sp, anh_sp, gia_sp, khuyen_mai, chi_tiet_sp)values('$id_dm','$ten_sp', '$anh_sp', '$gia_sp', '$khuyen_mai', '$chi_tiet_sp')";

    $query = mysqli_query($connect, $sql);
    move_uploaded_file($anh_sp_tmp, 'img/' . $anh_sp);
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
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="card" style="margin-top: 50px; box-shadow: 3px 3px 5px 0px #666;">
            <div class="card-header" style="background: rgba(15, 65, 131, 0.685) !important; color: white;">
                <h2>Thêm sản phẩm</h2>
            </div>


            <div class="card-body">
                <form enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <label for="">Tên sản phẩm</label>
                        <input type="text" name="ten_sp" class="form-control">
                    </div>
                    <div class="form-group" style="margin: 15px 0px;">
                        <label for="">Hình ảnh</label>
                        <input type="file" name="anh_sp">
                    </div>
                    <div class="form-group">
                        <label for="">Giá</label>
                        <input type="number" name="gia_sp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Khuyến mại</label>
                        <select class="form-control" name="khuyen_mai">
                            <option>Có</option>
                            <option>Không</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả</label>
                        <input type="text" name="chi_tiet_sp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Danh mục</label>
                        <select class="form-control" name="id_dm">
                            <?php
                            while ($row_dm = mysqli_fetch_assoc($query_dm)) { ?>
                                <option value="<?php echo $row_dm['id_dm']; ?>">
                                    <?php echo $row_dm['ten_dm']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="button" style="margin-top: 20px;">
                        <a href="ManagerProduct.php"><button type="button" class="btn btn-primary">Trở lại</button></a>
                        <button name="sbm" class="btn btn-success" type="submit" onclick="return confirm('Bạn có muốn thêm')">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

