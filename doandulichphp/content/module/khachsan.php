<?php
 		$khachsan = mysqli_query($connect,"select * from khachsan order by id desc limit 0,6");
 		$count = count($khachsan);
		
 ?>
<div class="ks">
	<div class="title-content">
		<h2>
			Các khách sạn đề xuất
		</h2>
	</div>
	<div class="intro-ks">
		<p>Hello</p>
	</div>
	<div class="list-ks">
        <?php 
        if($count > 0){
             while ($san = $khachsan->fetch_assoc()){ ?>
                <div class="item-dv col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="index.php?com=khachsan&id=<?=$san['id']?>"><img src="image/<?php if($san['hinh']!=NULL) echo $san['hinh']; else echo 'error.png';?>"></a>
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
	<div class="total">
		<button><a href="index.php?com=khachsan">XEM TẤT CẢ</a></button>
	</div>
</div>