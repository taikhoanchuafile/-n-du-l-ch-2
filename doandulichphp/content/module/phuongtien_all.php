 <?php
 		$tien_all = mysqli_query($connect,"select * from phuongtien");
 		$count = mysqli_num_rows($tien_all);
		
 ?>
<style type="text/css">
body,td,th {
    font-size: 18px;
}
</style>

<div class="pt">
	<div class="title-content">
		<h2>
			Các phương tiện được đề xuất
		</h2>
	</div>
	<div class="intro-pt">
		<p>Đầy đủ các loại dịch vụ nhà hàng cho bạn lựa chọn. Với nhiều nhà hàng trải dài trên khắp đất nước và các địa điểm du lịch. Mong muốn đem lại cho bạn trải nghiệm tốt nhất.</p>
	</div>
	<div class="list-pt">
        <?php 
        if($count > 0){
             while ($tien = $tien_all->fetch_assoc()){ ?>
                <div class="item-dv col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="index.php?com=tien&id=<?=$tien['id']?>"><img src="image/<?php if($tien['hinh']!=NULL) echo $tien['hinh']; else echo 'error.png';?>"></a>
                    <div class="title-pt">
                        <h3><?=$tien['ten']?></h3>
                        <p><?=$tien['chongoi']?></p>
                        <p><?=$tien['gia']?></p>
                        <p><?=$tien['noidung']?></p>
                    </div>
                </div>
            <?php }
        }
         ?>
	</div>
</div>