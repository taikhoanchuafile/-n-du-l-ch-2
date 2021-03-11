 <?php
 		$phuongtien_detail = mysqli_query($connect,"select * from phuongtien where id='".$_GET['id']."'");
 		$tien_orther = mysqli_query($connect,"select * from phuongtien where id!='".$_GET['id']."'");
 ?>
<style type="text/css">
.container .datphuongtien div h2 {
    font-family: Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif;
}
</style>

<div class="container">
	<?php  
		while ($detail = $phuongtien_detail->fetch_assoc()) { ?>
			<div class="title-content">
				<h2><?=$detail['ten']?></h2>
			</div>
			<img src="image/<?php if($detail['hinh']!=NULL) echo $detail['hinh']; else echo 'error.png';?>">
			<div class="intro-ks">
				<div><?=$detail['noidung']?></div>
				<div>Số lượng chỗ ngồi: <?=$detail['chongoi']?></div>
				<div>Giá: <?php if($detail['gia'] > 0)echo number_format($detail['gia'],0, ',', '.').' <span style="color: red;"><sup>đ</sup></span>';else echo 'Liên hệ'; ?> </div>
			</div>
		<?php }
	?>
	<div class="datphuongtien">
				<div>
				  <h2><em><strong>Liên hệ thông tin công ty để đặt phương tiện</strong></em></h2>
				</div>
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
    <div class="tien_orther">
    		<div class="title-content">
		<h2>
			CÁC PHƯƠNG TIỆN KHÁC
		</h2>
	</div>
	<div class="list-pt">
        <?php 
        if($count > 0){
             while ($tien = $tien_orther->fetch_assoc()){ ?>
                <div class="item-dv col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="index.php?com=tien&id=<?=$tien['id']?>"><img src="image/<?php if($tien['hinh']!=NULL) echo $tien['hinh']; else echo 'error.png';?>"></a>
                    <div class="title-ks">
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
</div>