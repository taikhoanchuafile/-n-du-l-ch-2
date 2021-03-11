<?php
	if(!isset($_SESSION["loged"])){
		header("location:index.php");
		setcookie("error", "Bạn chưa đăng nhập!", time()+1, "/","", 0);
	}
	 $hoso = mysqli_query($connect,"select * from hosocongty");
	 $company = $hoso->fetch_assoc();

?>


<div class="wrapper">
	<?php include ('module/header.php') ?>
	<?php include ('module/slider.php') ?>
	<?php
		if (isset($_GET['search']))
		{
		 	include "module/timkiem.php";
		 }
		if (isset($_GET['com']) && $_GET['com']=='gioithieu') 
		{
		 	include "module/gioithieu.php";
		 }
		if (isset($_GET['com']) && $_GET['com']=='dulich') 
		{
		 	include "module/dichvu_all.php";
		 }
		if (isset($_GET['id']) && $_GET['com']=='tour') 
		{
		 	include "module/dichvu_detail.php";
		 }
		if(isset($_GET["com"])&& $_GET["com"]=="nhahang")
		{
		 	include "module/nhahang_all.php";
		 } 
		if (isset($_GET['id']) && $_GET['com']=='nha')
		{
		 	include "module/nhahang_detail.php";
		 }
		if(isset($_GET["com"])&& $_GET["com"]=="khachsan")
		{
		 	include "module/khachsan_all.php";
		 } 
		if (isset($_GET['id']) && $_GET['com']=='san') 
		{
		 	include "module/khachsan_detail.php";
		 }
		if (isset($_GET['com']) && $_GET['com']=='phuongtien') 
		{
		 	include "module/phuongtien_all.php";
		 }
		if (isset($_GET['id']) && $_GET['com']=='tien') 
		{
		 	include "module/phuongtien_detail.php";
		 }
		
	?>
	
	<?php include ('module/footer.php') ?>
</div>

