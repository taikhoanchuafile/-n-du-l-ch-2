       <?php
        // Nếu người dùng submit form thì thực hiện
        if (isset($_REQUEST['timkiem'])) 
        {
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_GET['search']);
 
            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            } 
            else
            {
                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
				$result = mysqli_query($connect,"select * from tour where tentour like '%$search%'");
				$results = mysqli_query($connect,"select * from nhahang where ten like '%$search%'");
				$resul = mysqli_query($connect,"select * from khachsan where ten like '%$search%'");
 
                // Đếm số đong trả về trong sql.
                $num = mysqli_num_rows($result);
				$nums = mysqli_num_rows($results);
				$nu = mysqli_num_rows($resul);
 
                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if (($num > 0 && $search != "")||($nums>0 && $search!="")||($nu>0&&$search!="") )
                {
                    // Dùng $num để đếm số dòng trả về.
                    echo "$num kết quả về tour du lịch, $nums kết quả về nhà hàng và $nu kết quả cho khách sạn<b>$search</b>";
 
                } 
                else {
                    echo "Khong tim thay ket qua!";
                }
            }
        }
        ?>  
        <div style="text-align: center;font-size: 26px;">KẾT QUẢ TÌM KIẾM</div>
        <div class="container">
        <?php 
             while ($rows = $result->fetch_assoc()){ ?>
                <div class="item-dv col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="#"><img src="image/<?php if($rows['hinhanh']!=NULL) echo $rows['hinhanh']; else echo 'error.png';?>"></a>
                    <div class="title-nh">
                        <h3><?=$rows['tentour']?></h3>
                        <p><?=$rows['diemden']?></p>
                        <p><?=$rows['gia']?></p>
                        <p><?=$rows['noidung']?></p>
                    </div>
                </div>
            <?php }
         ?>
		<?php 
             while ($rowss= $results->fetch_assoc()){ ?>
                <div class="item-dv col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="#"><img src="image/<?php if($rowss['hinh']!=NULL) echo $rowss['hinh']; else echo 'error.png';?>"></a>
                    <div class="title-nh">
                        <h3><?=$rowss['ten']?></h3>
                        <p><?=$rowss['diachi']?></p>
                        <p><?=$rowss['gia']?></p>
                        <p><?=$rowss['noidung']?></p>
                    </div>
                </div>
            <?php }
         ?>
			<?php 
             while ($rowsss= $resul->fetch_assoc()){ ?>
                <div class="item-dv col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="#"><img src="image/<?php if($rowsss['hinh']!=NULL) echo $rowsss['hinh']; else echo 'error.png';?>"></a>
                    <div class="title-nh">
                        <h3><?=$rowss['ten']?></h3>
                        <p><?=$rowsss['diachi']?></p>
                        <p><?=$rowsss['gia']?></p>
                        <p><?=$rowsss['noidung']?></p>
                    </div>
                </div>
            <?php }
         ?>
        </div>