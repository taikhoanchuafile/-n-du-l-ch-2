<?php
   	$connect = mysqli_connect('localhost','root','','duandulich');
   	 mysqli_set_charset($connect, 'UTF8');
   	$tien_sua = mysqli_query($connect,"select * from phuongtien where id='".$_GET['id']."'");
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

	while ($sua = $tien_sua->fetch_assoc()){ ?>
	
		<form action="" method="post" enctype="multipart/form-data">
		<div>
			Tên phương tiện:
		  <input type="text" class="form-control" name="ten" value="<?=$sua['ten']?>">
		 </div>
		<div>
		  	Số lượng chỗ ngồi:
		    <textarea  rows="4" cols="" title="Viết số lượng chỗ ngồi cho phương tiện" class="tipS" name="chongoi" style="width: 100%"><?=$sua['chongoi']?></textarea>
		</div>
		 <div>
		 	Giá:
		  <input type="text" class="form-control" name="gia" value="<?=$sua['gia']?>">
		 </div>
		<div>
		   	Hình ảnh hiện tại:
		   	 <input type="text" name="anhhientai" value="<?=$sua['hinh']?>">
		   	 <img src="../image/<?=$sua['hinh']?>" style="max-height: 100px;max-width: 100px;margin-top: 10px; ">
		</div>
		  <div>
		  	Nội dung:
		    <textarea  rows="8" cols="" title="Viết nội dung cho phương tiện" class="tipS" name="noidung" style="width: 100%"><?=$sua['noidung']?></textarea>
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
		$chongoi=$_POST["chongoi"];
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
        $upload = mysqli_query($connect,"UPDATE phuongtien SET ten='$ten', chongoi='$chongoi',gia='$gia', hinh='$hinhanh', noidung='$noidung' WHERE id='".$_GET['id']."'");
        if ($upload) {
           header("location:index.php?com=sua&type=phuongtien&id=".$_GET['id']."");
           setcookie("success", "upload thành công !", time()+1, "/","", 0);
           
        }else{
            header("location:index.php?com=sua&type=phuongtien&id=".$_GET['id']."");
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

