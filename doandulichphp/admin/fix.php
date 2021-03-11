<?php
    $connect = mysqli_connect('localhost','root','','duandulich');
    if(isset($_POST["submit"])){
        $tentour = $_POST["ten_tour"];
        $diem_den = $_POST["diem_den"];
        $gia = $_POST["gia"];
        $noidung = $_POST["noidung"];
        $hinhanh = basename($_FILES["fileToUpload"]["name"]);
        $upload = mysqli_query($connect,"UPDATE tour SET tentour='$tentour', diemden='$diem_den', gia='$gia', noidung='$noidung', hinhanh='$hinhanh' WHERE id='".$_GET['id']."'");
        if ($upload) {
           echo '<a href="index.php" class="btn btn-info" style="width: 100%;text-align: center;text-transform: uppercase;">Về trang chủ admin</a>';
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
                echo 'File Upload Bị Lỗi';
            }
            else{
                // Upload file
                move_uploaded_file($_FILES['fileToUpload']['tmp_name'], '../image/'.$_FILES['fileToUpload']['name']);
                
            }
        }
    }
?>
