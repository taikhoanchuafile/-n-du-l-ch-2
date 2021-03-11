<?php
	if(!isset($_SESSION["loged"])){
		header("location:index.php");
		setcookie("error", "Bạn chưa đăng nhập!", time()+1, "/","", 0);
	}

?>
<div class="container"> 
	<?php
		if(isset($_GET["com"]) and $_GET["type"]=="tour" and $_GET["com"]=="them"){
			include "module/add_tour.php";
		}
		if(isset($_GET["com"]) and $_GET["type"]=="blog" and $_GET["com"]=="them"){
			include "module/add_blog.php";
		}
		if(isset($_GET["com"]) and $_GET["type"]=="khachsan" and $_GET["com"]=="them"){
			include "module/add_khachsan.php";
		}
		if(isset($_GET["com"]) and $_GET["type"]=="phuongtien" and $_GET["com"]=="them"){
			include "module/add_phuongtien.php";
		}
		if(isset($_GET["com"]) and $_GET["type"]=="gioithieu" and $_GET["com"]=="them"){
			include "module/add_gioithieu.php";
		}
		if(isset($_GET["com"]) and $_GET["type"]=="hoso" and $_GET["com"]=="them"){
			include "module/add_hoso.php";
		}
		if(isset($_GET["com"]) and $_GET["type"]=="tour" and $_GET["com"]=="sua"){
			include "sua.php";
		}
		if(isset($_GET["com"]) and $_GET["type"]=="blog" and $_GET["com"]=="sua"){
			include "sua_blog.php";
		}
		if(isset($_GET["com"]) and $_GET["type"]=="khachsan" and $_GET["com"]=="sua"){
			include "sua_khachsan.php";
		}
		if(isset($_GET["com"]) and $_GET["type"]=="phuongtien" and $_GET["com"]=="sua"){
			include "sua_phuongtien.php";
		}
		if(isset($_GET["com"]) and $_GET["type"]=="gt" and $_GET["com"]=="sua"){
			include "sua_gioithieu.php";
		}
		if(isset($_GET["com"]) and $_GET["type"]=="hoso" and $_GET["com"]=="sua"){
			include "sua_hoso.php";
		}
		if(isset($_GET["com"]) and $_GET["type"]=="tour" and $_GET["com"]=="xoa"){
			include "xoa.php";
		}
		if(isset($_GET["com"]) and $_GET["type"]=="blog" and $_GET["com"]=="xoa"){
			include "xoa_blog.php";
		}
		if(isset($_GET["com"]) and $_GET["type"]=="khachsan" and $_GET["com"]=="xoa"){
			include "xoa_khachsan.php";
		}
		if(isset($_GET["com"]) and $_GET["type"]=="phuongtien" and $_GET["com"]=="xoa"){
			include "xoa_phuongtien.php";
		}
		if(!isset($_GET["com"])){
			include "module/tour.php";
			include "module/blog.php";
			include "module/khachsan.php";
			include "module/phuongtien.php";
			include "module/gioithieu.php";
			include "module/hoso.php";
		}
	?>
</div>