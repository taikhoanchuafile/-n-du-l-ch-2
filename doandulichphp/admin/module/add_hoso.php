<form action="" method="post" enctype="multipart/form-data">
  <input type="text" class="form-control" name="ten_tour" placeholder="Tên Công Ty">
  <input type="number" class="form-control" name="sdt" placeholder="Số Điện Thoại">
  <input type="text" class="form-control" name="email" placeholder="Email">
  <input type="text" class="form-control" name="diachi" placeholder="Địa Chỉ">
  <input type="text" class="form-control" name="zalo" placeholder="Zalo">
  <input type="text" class="form-control" name="youtobe" placeholder="Youtobe">
  <input type="text" class="form-control" name="website" placeholder="Website">
  <input type="text" class="form-control" name="fanpage" placeholder="Fanpage">
  <input type="text" class="form-control" name="maso" placeholder="Mã số thuế">
    <textarea  rows="8" cols="" title="Viết nội dung cho tour" class="tipS" name="noidung" style="width: 100%"></textarea>
  <div>LOGO CÔNG TY: <input type="file" name="fileToUpload" id="fileToUpload"></div>
  <input type="submit" value="Upload Image" name="submit">
</form>
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
        $hinhanh = basename($_FILES["fileToUpload"]["name"]);
        $upload =         mysqli_query($connect,"
            insert into hosocongty (ten,dienthoai,email,gioithieu,diachi,logo,zalo,website,youtobe,fanpage,maso)
            values ('$tentour','$sdt','$email','$noidung','$diachi','$hinhanh','$zalo','$website','$youtobe', '$fanpage', '$maso')
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
