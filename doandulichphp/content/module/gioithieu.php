 <?php
 		$blog_detail = mysqli_query($connect,"select * from gioithieu");
 ?>
<div class="container">
	<?php  
		while ($detail = $blog_detail->fetch_assoc()) { ?>
			<div class="title-content">
				<h2><?=$detail['ten']?></h2>
			</div>
			<div class="text-right"><i class="icofont-calendar" style="padding-right: 5px;"></i><?=date('d-m-y',$detail['ngay'])?></div>
			<img src="image/<?php if($detail['hinhanh']!=NULL) echo $detail['hinhanh']; else echo 'error.png';?>">
			<div style="font-size: 16px;margin: 10px 0px;"><?=$detail['noidung']?></div>
		<?php }
	?>
	<div class="col-md-12">
        <div class="binhluan">Bình luận</div>
        <div class="fb-comments" data-href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" data-numposts="5" data-width="100%"></div>
    </div>
</div>