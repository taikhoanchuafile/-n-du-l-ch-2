 <?php
 		$nha_all = mysqli_query($connect,"select * from nhahang");
 		$count = mysqli_num_rows($nha_all);
		
 ?>
<style type="text/css">
body,td,th {
    font-size: 18px;
}
</style>

<div class="NH">
	<div class="title-content">
		<h2>
			Các nhà hàng được đề xuất
		</h2>
	</div>
	<div class="intro-nh">
		<p>Đầy đủ các loại dịch vụ nhà hàng cho bạn lựa chọn. Với nhiều nhà hàng trải dài trên khắp đất nước và các địa điểm du lịch. Mong muốn đem lại cho bạn trải nghiệm tốt nhất.</p>
	</div>
	<div class="list-nh">
        <?php 
        if($count > 0){
             while ($nha = $nha_all->fetch_assoc()){ ?>
                <div class="item-dv col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="index.php?com=nha&id=<?=$nha['id']?>"><img src="image/<?php if($nha['hinh']!=NULL) echo $nha['hinh']; else echo 'error.png';?>"></a>
                    <div class="title-nh">
                        <h3><?=$nha['ten']?></h3>
                        <p><?=$nha['diachi']?></p>
                        <p><?=$nha['gia']?></p>
                        <p><?=$nha['noidung']?></p>
                    </div>
                </div>
            <?php }
        }
         ?>
	</div>
</div>