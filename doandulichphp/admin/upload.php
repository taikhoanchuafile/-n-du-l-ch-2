<?php
$target_dir = "../image/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    
    $uploadOk = 0;
  }
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";

  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    
  } else {
    echo "Sorry, there was an error uploading your file.";
    
  }
}
?>

<?php
    $connect = mysqli_connect('localhost','root','','duandulich');
    if(isset($_POST["submit"])){
        $tentour = $_POST["ten_tour"];
        $diem_den = $_POST["diem_den"];
        $gia = $_POST["gia"];
        $noidung = $_POST["noidung"];
        $hinhanh = basename($_FILES["fileToUpload"]["name"]);
        $upload =         mysqli_query($connect,"
            insert into tour (tentour,hinhanh,gia,diemden,noidung)
            values ('$tentour','$hinhanh','$gia','$diem_den','$noidung')
        ");
        if ($upload) {
           echo '<a href="index.php" class="btn btn-info" style="width: 100%;text-align: center;text-transform: uppercase;">Về trang chủ admin</a>';
        }else{
                    echo "upload không thành công :". mysql_error();
          echo '<a href="index.php" class="btn btn-info" style="width: 100%;text-align: center;text-transform: uppercase;">Về trang chủ admin</a>';
        }
    }
    

?>