<?php
 		$nhahang = mysqli_query($connect,"select * from nhahang order by id desc limit 0,6");
 		$count = count($nhahang);
		
 ?>
<div class="NH">
	<div class="title-content">
		<h2>
			Các nhà hàng đề xuất
		</h2>
	</div>
	<div class="intro-nh">
		<p>Hello</p>
	</div>
	<div class="list-nh">
        <?php 
        if($count > 0){
             while ($nha = $nhahang->fetch_assoc()){ ?>
                <div class="item-dv col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="index.php?com=nhahang&id=<?=$nha['id']?>"><img src="image/<?php if($nha['hinhanh']!=NULL) echo $nha['hinhanh']; else echo 'error.png';?>"></a>
                    <div class="title-dv">
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
	<div class="total">
		<button><a href="index.php?com=nhahang">XEM TẤT CẢ</a></button>
	</div>
</div>