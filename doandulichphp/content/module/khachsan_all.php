 <?php
 		$san_all = mysqli_query($connect,"select * from khachsan");
 		$count = mysqli_num_rows($san_all);
		
 ?>
<style type="text/css">
body,td,th {
    font-size: 18px;
}
</style>

<div class="ks">
	<div class="title-content">
		<h2>
			Các khách sạn được đề xuất
		</h2>
	</div>
	<div class="intro-ks">
		<p>Đầy đủ các loại dịch vụ nhà hàng cho bạn lựa chọn. Với nhiều nhà hàng trải dài trên khắp đất nước và các địa điểm du lịch. Mong muốn đem lại cho bạn trải nghiệm tốt nhất.</p>
	</div>
	<div class="list-ks">
        <?php 
        if($count > 0){
             while ($san = $san_all->fetch_assoc()){ ?>
                <div class="item-dv col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="index.php?com=san&id=<?=$san['id']?>"><img src="image/<?php if($san['hinh']!=NULL) echo $san['hinh']; else echo 'error.png';?>"></a>
                    <div class="title-ks">
                        <h3><?=$san['ten']?></h3>
                        <p><?=$san['diachi']?></p>
                        <p><?=$san['gia']?></p>
                        <p><?=$san['noidung']?></p>
                    </div>
                </div>
            <?php }
        }
         ?>
	</div>
</div>