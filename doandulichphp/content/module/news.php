 <?php
 		$news = mysqli_query($connect,"select * from blog order by id desc limit 0,4");
 		$count_news = count($news);
		
 ?>
<div class="news container">
	 <div class="title-content">
	 	 <h2>Đề xuất</h2>
	 </div>
	 <div class="intro-news"> 
	 	<p>Những nhà hàng và địa điểm được đề xuất</p>
	 </div>
	 <?php 
	 if($count_news > 0){
	 	while ($news_result = $news->fetch_assoc()) { ?>
			<div class="item-news col-lg-3 col-sm-6 col-xs-12">
			 	<div class="img-item">
			 		<a href="index.php?com=blog&id=<?=$news_result['id']?>"><img src="image/<?php if($news_result['hinhanh']!=NULL) echo $news_result['hinhanh']; else echo 'error.png';?>"></a>
			 		<div class="intro-item">
			 			<i class="icofont-calendar"></i><?=$news_result['gia']?>
			 		</div>
			 	</div>		 	
			 	<div class="title-item">
			 		<a href="index.php?com=blog&id=<?=$news_result['id']?>"><h3><?=$news_result['ten']?></h3></a>
			 	</div>
			</div>
	 	<?php }
	 }
	 ?>
</div>