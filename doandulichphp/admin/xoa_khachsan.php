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
	$connect = mysqli_connect('localhost','root','','duandulich');
	if (!$connect) {
		die('Không thể kết nối :'. mysql_error());
	}
	$xoa = mysqli_query($connect,"DELETE FROM khachsan WHERE id='".$_GET["id"]."'");
	if ($xoa) {
           header("location:index.php");
           setcookie("success", "xóa thành công !", time()+1, "/","", 0);
	  } else{
            header("location:index.php");
            setcookie("error", "xóa không thành công !", time()+1, "/","", 0);
	  } 
?>