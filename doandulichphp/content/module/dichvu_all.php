 <?php
 		$tour_all = mysqli_query($connect,"select * from tour");
 		$count = mysqli_num_rows($tour_all);
		
 ?>
<div class="DV">
	<div class="title-content">
		<h2>
			Các chuyến tham quan đề xuất
		</h2>
	</div>
	<div class="intro-dv">
		<p>Lựa chọn Chúng tôi bạn sẽ được cung ứng đầy đủ trọn gói các dịch vụ về tổ chức sự kiện (khai trương, khánh thành, động thổ, khởi công, hội nghị khách hàng, hội nghị công ty, hội thảo…). Cung cấp nhân sự thực hiện sự kiện (MC, PG, vũ đoàn, band nhạc, nhạc công, người mẫu…).</p>
	</div>
	<div class="list-dv">
        <?php 
        if($count > 0){
             while ($tour = $tour_all->fetch_assoc()){ ?>
                <div class="item-dv col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="index.php?com=tour&id=<?=$tour['id']?>"><img src="image/<?php if($tour['hinhanh']!=NULL) echo $tour['hinhanh']; else echo 'error.png';?>"></a>
                    <div class="title-dv">
                        <h3><?=$tour['tentour']?></h3>
                        <p><?=$tour['diemden']?></p>
                        <p><?=$tour['gia']?></p>
                        <p><?=$tour['noidung']?></p>
                    </div>
                </div>
            <?php }
        }
         ?>
	</div>
</div>