<?php
 		$phuongtien = mysqli_query($connect,"select * from phuongtien order by id desc limit 0,6");
 		$count = count($phuongtien);		
 ?>
<div class="pt">
	<div class="title-content">
		<h2>
			Các phương tiện đề xuất
		</h2>
	</div>
	<div class="intro-pt">
		<p>Hello</p>
	</div>
	<div class="list-pt">
        <?php 
        if($count > 0){
             while ($tien = $phuongtien->fetch_assoc()){ ?>
                <div class="item-dv col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="index.php?com=phuongtien&id=<?=$tien['id']?>"><img src="image/<?php if($tien['hinh']!=NULL) echo $tien['hinh']; else echo 'error.png';?>"></a>
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
	<div class="total">
		<button><a href="index.php?com=phuongtien">XEM TẤT CẢ</a></button>
	</div>
</div>