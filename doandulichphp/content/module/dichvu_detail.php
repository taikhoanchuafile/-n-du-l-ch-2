 <?php
 		$tour_detail = mysqli_query($connect,"select * from tour where id='".$_GET['id']."'");
 		$tour_orther = mysqli_query($connect,"select * from tour where id!='".$_GET['id']."'");
 ?>
<div class="container">
	<?php  
		while ($detail = $tour_detail->fetch_assoc()) { ?>
			<div class="title-content">
				<h2><?=$detail['tentour']?></h2>
			</div>
			<img src="image/<?php if($detail['hinhanh']!=NULL) echo $detail['hinhanh']; else echo 'error.png';?>">
			<div class="intro-dv">
				<div><?=$detail['noidung']?></div>
				<div>Điểm đến: <?=$detail['diemden']?></div>
				<div>Giá: <?php if($detail['gia'] > 0)echo number_format($detail['gia'],0, ',', '.').' <span style="color: red;"><sup>đ</sup></span>';else echo 'Liên hệ'; ?> </div>
			</div>
		<?php }
	?>
	<div class="dattour">
				<div>Liên hệ thông tin công ty để đặt tour</div>
		<div>Số điện thoại: <?=$company['dienthoai']?></div>
		<div>Gmail: <?=$company['email']?></div>
		<div>Địa chỉ: <?=$company['diachi']?></div>
	</div>
	<div class="col-md-12">
        <div class="binhluan">Bình luận</div>
        <div class="fb-comments" data-href="<?php echo 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" data-numposts="5" data-width="100%"></div>
        <div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0" nonce="giM2s8us"></script>
    </div>
    <div class="tour_orther">
    		<div class="title-content">
		<h2>
			CÁC TOUR KHÁC
		</h2>
	</div>
	<div class="list-dv">
        <?php 
        if($count > 0){
             while ($tour = $tour_orther->fetch_assoc()){ ?>
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
</div>