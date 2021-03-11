<?php
   	$connect = mysqli_connect('localhost','root','','duandulich');
   	 mysqli_set_charset($connect, 'UTF8');
   	$tour_sua = mysqli_query($connect,"select * from hosocongty where id='".$_GET['id']."'");
?>
<div class="container" style="width: 1000px;margin: auto;">
<?php
    if(isset($_COOKIE["error"])){
    ?>
    <div class="alert alert-danger">
    <!-- <strong>'Có lỗi!'</strong> <?php echo $_COOKIE["error"]; ?> -->
    <a href="index.php" class="btn btn-info" style="width: 100%;text-align: center;text-transform: uppercase;">Về trang chủ admin</a>
    </div>
    <?php }else{

    } ?>
    <!-- 'end nếu xảy ra lỗi thì hiện thông báo:' -->


    <!-- 'start nếu thành công thì hiện thông báo:' -->
    <?php
    if(isset($_COOKIE["success"])){
    ?>
    <div class="alert alert-success">
    <!-- <strong>'Chúc mừng!'</strong> <?php echo $_COOKIE["success"]; ?> -->
    <a href="index.php" class="btn btn-info" style="width: 100%;text-align: center;text-transform: uppercase;">Về trang chủ admin</a>
    </div>
    <?php }else{

} ?>
<?php
	while ($sua = $tour_sua->fetch_assoc()){ ?>
	
		<form action="" method="post" enctype="multipart/form-data">
		<div>
			TÊN CÔNG TY:
		  <input type="text" class="form-control" name="ten_tour" value="<?=$sua['ten']?>">
		 </div>
		 <div>
		 	SỐ ĐIỆN THOẠI:
		  <input type="number" class="form-control" name="sdt" value="<?=$sua['dienthoai']?>">
		 </div>
        <div>
            EMAIL:
          <input type="text" class="form-control" name="email" value="<?=$sua['email']?>">
         </div>
        <div>
            ĐỊA CHỈ:
          <input type="text" class="form-control" name="diachi" value="<?=$sua['diachi']?>">
         </div>
        <div>
            FANPAGE:
          <input type="text" class="form-control" name="fanpage" value="<?=$sua['fanpage']?>">
         </div>
        <div>
            YOUTUBE:
          <input type="text" class="form-control" name="youtobe" value="<?=$sua['youtobe']?>">
         </div>
        <div>
            WEBSITE:
          <input type="text" class="form-control" name="website" value="<?=$sua['website']?>">
         </div>
        <div>
            ZALO:
          <input type="text" class="form-control" name="zalo" value="<?=$sua['zalo']?>">
         </div>
        <div>
            MÃ SỐ THUÊ:
          <input type="number" class="form-control" name="maso" value="<?=$sua['maso']?>">
         </div>
		  <div>
		  	NỘI DUNG GIỚI THIỆU CÔNG TY:
		    <textarea  rows="8" cols="" title="Viết nội dung cho bài giới thiệu công ty" class="tipS" name="noidung" style="width: 100%"><?=$sua['gioithieu']?></textarea>
		   </div>
		   <div>
		   	Hình ảnh hiện tại:
		   	 <input type="text" name="anhhientai" value="<?=$sua['logo']?>">
		   	 <img src="../image/<?=$sua['logo']?>" style="max-height: 100px;max-width: 100px;margin-top: 10px; ">
		</div>
		<div style="margin: 10px 0px;">
			<input type="file" name="fileToUpload" id="fileToUpload" accept="image/png, image/jpeg">
			
		</div>
		  <input type="submit" value="Upload" name="submit">
		</form>
	
	<?php }
?>
</div>
<?php
    $connect = mysqli_connect('localhost','root','','duandulich');
    mysqli_set_charset($connect, 'UTF8');
    if(isset($_POST["submit"])){
        $tentour = $_POST["ten_tour"];
        $sdt = $_POST["sdt"];
        $noidung = $_POST["noidung"];
        $diachi = $_POST["diachi"];
        $email = $_POST["email"];
        $zalo = $_POST["zalo"];
        $youtobe = $_POST["youtobe"];
        $website = $_POST["website"];
        $maso = $_POST["maso"];
        $fanpage = $_POST["fanpage"];
    	if (isset($_FILES['fileToUpload']))
        {

            if ($_FILES['fileToUpload']['error'] > 0)
            {
                $hinhanh = $_POST["anhhientai"];
            }
            else{
                $hinhanh = basename($_FILES["fileToUpload"]["name"]);
                
            }
        }
        $upload = mysqli_query($connect,"UPDATE hosocongty SET ten='$tentour', dienthoai='$sdt', gioithieu='$noidung', logo='$hinhanh', email='$email', diachi='$diachi', fanpage='$fanpage', zalo='$zalo', youtobe ='$youtobe', website='$website', maso='$maso' WHERE id='".$_GET['id']."'");
        if ($upload) {
           header("location:index.php?com=sua&type=hoso&id=".$_GET['id']."");
           setcookie("success", "upload thành công !", time()+1, "/","", 0);
        }else{
            header("location:index.php?com=sua&type=hoso&id=".$_GET['id']."");
            setcookie("error", "upload không thành công !", time()+1, "/","", 0);
        }
    }
    

?>
<?php // Xử Lý Upload
  
    // Nếu người dùng click Upload
    if (isset($_POST['submit']))
    {
        // Nếu người dùng có chọn file để upload
        if (isset($_FILES['fileToUpload']))
        {
            // Nếu file upload không bị lỗi,
            // Tức là thuộc tính error > 0
            if ($_FILES['fileToUpload']['error'] > 0)
            {
               
            }
            else{
                // Upload file
                move_uploaded_file($_FILES['fileToUpload']['tmp_name'], '../image/'.$_FILES['fileToUpload']['name']);
                
            }
        }
    }
?>

