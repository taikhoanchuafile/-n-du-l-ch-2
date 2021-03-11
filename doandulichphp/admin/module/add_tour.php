<form action="" method="post" enctype="multipart/form-data">
  <input type="text" class="form-control" name="ten_tour" placeholder="Tên tour">
  <input type="text" class="form-control" name="diem_den" placeholder="Điểm đến">
   <input type="number" class="form-control" name="gia" placeholder="Giá Tour">
    <textarea  rows="8" cols="" title="Viết nội dung cho tour" class="tipS" name="noidung" style="width: 100%"></textarea>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload" name="submit">
</form>
<?php
    $connect = mysqli_connect('localhost','root','','duandulich');
    mysqli_set_charset($connect, 'UTF8');
    if(isset($_POST["submit"])){
        $tentour = $_POST["ten_tour"];
        $diem_den = $_POST["diem_den"];
        $gia = $_POST["gia"];
        $noidung = $_POST["noidung"];
        $hinhanh = basename($_FILES["fileToUpload"]["name"]);
        $upload =  mysqli_query($connect,"insert into tour (tentour,hinhanh,gia,noidung,diemden) values ('$tentour','$hinhanh','$gia','$noidung','$diem_den')
        ");
        if ($upload) {
            echo "upload thành công ^^";
           echo '<a href="index.php" class="btn btn-info" style="width: 100%;text-align: center;text-transform: uppercase;">Về trang chủ admin</a>';
           header("location:index.php");
        }else{
                    echo "upload không thành công :". mysql_error();
          echo '<a href="index.php" class="btn btn-info" style="width: 100%;text-align: center;text-transform: uppercase;">Về trang chủ admin</a>';
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
