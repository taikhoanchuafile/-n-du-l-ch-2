 <?php
 		$blog_detail = mysqli_query($connect,"select * from blog where id='".$_GET['id']."'");
		$blog_orther = mysqli_query($connect,"select * from blog where id!='".$_GET['id']."'");
		$count_blog = count($blog_orther);
 ?>
<div class="container">
	<?php  
		while ($detail = $blog_detail->fetch_assoc()) { ?>
			<div class="title-content">
				<h2><?=$detail['ten']?></h2>
			</div>
			<div class="text-right"><i class="icofont-calendar" style="padding-right: 5px;"></i><?=$detail['gia']?></div>
			<img src="image/<?php if($detail['hinhanh']!=NULL) echo $detail['hinhanh']; else echo 'error.png';?>">
			<div style="font-size: 16px;margin: 10px 0px;"><?=$detail['noidung']?></div>
		<?php }
	?>
	<div class="col-md-12">
        <div class="binhluan">Bình luận</div>
        <div class="fb-comments" data-href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" data-numposts="5" data-width="100%"></div>
    </div>
	 <div class="title-content">
	 	 <h2>Đề xuất</h2>
	 </div>
	 <div class="intro-news text-center"> 
	 	<p>Những nhà hàng và địa điểm được đề xuất</p>
	 </div>
	 <?php 
	 if($count_blog > 0){
	 	while ($news_orther = $blog_orther->fetch_assoc()) { ?>
			<div class="item-news col-lg-3 col-sm-6 col-xs-12">
			 	<div class="img-item">
			 		<a href="index.php?com=blog&id=<?=$news_orther['id']?>"><img src="image/<?php if($news_orther['hinhanh']!=NULL) echo $news_orther['hinhanh']; else echo 'error.png';?>"></a>
			 		<div class="intro-item">
			 			<i class="icofont-calendar"></i><?=$detail['gia']?>
			 		</div>
			 	</div>		 	
			 	<div class="title-item">
			 		<a href="index.php?com=blog&id=<?=$news_orther['id']?>"><h3><?=$news_orther['ten']?></h3></a>
			 	</div>
			</div>
	 	<?php }
	 }
	 ?>
</div>