<?php
include 'config/db.php';
	$id = $_GET['id'];
	$sql = "delete from tk where id='$id'";
	$query = mysqli_query($connect,$sql);
	header('location: QuanLyTK.php');
 ?>