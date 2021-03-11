<?php
   	$connect = mysqli_connect('localhost','root','','duandulich');
   	 mysqli_set_charset($connect, 'UTF8');
   	$nha_sua = mysqli_query($connect,"select * from nhahang where id='".$_GET['id']."'");
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

	while ($sua = $nha_sua->fetch_assoc()){ ?>
	
		<form action="" method="post" enctype="multipart/form-data">
		<div>
			Tên nhà hàng:
		  <input type="text" class="form-control" name="ten" value="<?=$sua['ten']?>">
		 </div>
		 <div>
		 	Giá:
		  <input type="text" class="form-control" name="gia" value="<?=$sua['gia']?>">
		 </div>
		  <div>
		  	Nội dung:
		    <textarea  rows="8" cols="" title="Viết nội dung cho nhà hàng" class="tipS" name="noidung" style="width: 100%"><?=$sua['noidung']?></textarea>
		   </div>
		<div>
		  	Địa chỉ:
		    <textarea  rows="4" cols="" title="Viết địa chỉ cho nhà hàng" class="tipS" name="diachi" style="width: 100%"><?=$sua['diachi']?></textarea>
		</div>
		   <div>
		   	Hình ảnh hiện tại:
		   	 <input type="text" name="anhhientai" value="<?=$sua['hinh']?>">
		   	 <img src="../image/<?=$sua['hinhanh']?>" style="max-height: 100px;max-width: 100px;margin-top: 10px; ">
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
        $ten = $_POST["ten"];
		$diachi=$_POST["diachi"];
        $gia = $_POST["gia"];
        $noidung = $_POST["noidung"];
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
        $upload = mysqli_query($connect,"UPDATE nhahang SET ten='$ten', diachi='$diachi',gia='$gia', noidung='$noidung', hinh='$hinhanh' WHERE id='".$_GET['id']."'");
        if ($upload) {
           header("location:index.php?com=sua&type=blog&id=".$_GET['id']."");
           setcookie("success", "upload thành công !", time()+1, "/","", 0);
           
        }else{
            header("location:index.php?com=sua&type=blog&id=".$_GET['id']."");
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

