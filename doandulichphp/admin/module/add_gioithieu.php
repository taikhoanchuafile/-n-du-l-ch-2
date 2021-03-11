<form action="" method="post" enctype="multipart/form-data">
  <input type="text" class="form-control" name="ten_tour" placeholder="title">
    <textarea  rows="8" cols="" title="Viết nội dung cho tour" class="tipS" name="noidung" style="width: 100%"></textarea>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
<?php
    $connect = mysqli_connect('localhost','root','','duandulich');
    mysqli_set_charset($connect, 'UTF8');
    if(isset($_POST["submit"])){
        $tentour = $_POST["ten_tour"];
        $ngay = time();
        $noidung = $_POST["noidung"];
        $hinhanh = basename($_FILES["fileToUpload"]["name"]);
        $upload =         mysqli_query($connect,"
            insert into gioithieu (ten,hinhanh,ngay,noidung)
            values ('$tentour','$hinhanh','$ngay','$noidung')
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
