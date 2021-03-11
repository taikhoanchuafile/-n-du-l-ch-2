
 <?php
 		$blog = mysqli_query($connect,"select * from blog");
 		$count = count($blog);
		
 ?>
<div class="header">
	<div class="box-header container">
		<div class="logo-header">
			<a href="<?=$company['website']?>"><img src="content/img/<?=$company['logo']?>"></a>
		</div>
		<div class="tencongty">
			<h1><?=$company['ten']?></h1>
		</div>
		<div class="seach-header">
			<form>
				<input type="text" name="search" value="">
				<button type="submit" name="timkiem" value="" class=""><i class="icofont-ui-search"></i></button>
			</form>
		</div>
	</div>
	<div id="menu" style="position: relative;">
		<div class="sidebar">
	        <nav class="container">
	            <ul>
	                <li class="home">
	               		<a href="<?=$company['website']?>"><i class="icofont-home"></i></a>
	                </li>
	                <li>
	                	<a href="index.php?com=gioithieu">Về chúng tôi</a><i class="icofont-rounded-right"></i>
<!-- 		                <ul class="cap_2">
		                    <li>1QUE</li>
		                    <li>2QUE</li>
		                    <li>3QUE</li>
	               		</ul> -->
	                </li>
	                <li>
	                	<a href="index.php?com=dulich">Tour du lịch</a><i class="icofont-rounded-right"></i>
                <ul class="cap_2">
		                    <li>
		                    	<a href="#">Miền Bắc</a><i class="icofont-simple-right"></i>
		                    	<ul class="cap_3">
				                    <li>1QUE</li>
				                    <li>1QUE</li>
				                    <li>1QUE</li>
	                			</ul>
		                    </li>
		                    <li>
		                    	<a href="#">Miền Trung</a><i class="icofont-simple-right"></i>
		                    	<ul class="cap_3">
				                    <li>1QUE</li>
				                    <li>1QUE</li>
				                    <li>1QUE</li>
	                			</ul>
		                    </li>
		                    <li>
		                    	<a href="#">Miền Nam</a><i class="icofont-simple-right"></i>
		                    	<ul class="cap_3">
				                    <li>1QUE</li>
				                    <li>1QUE</li>
				                    <li>1QUE</li>
	                			</ul>
		                    </li>
	                	</ul> 
	                </li>
	              <li>
	                	<a href="index.php?com=nhahang">Nhà hàng</a><i class="icofont-rounded-right"></i>
                <ul class="cap_2">
		                    <li>
		                    	<a href="#">Bình dân</a><i class="icofont-simple-right"></i>
		                    	<ul class="cap_3">
				                    <li>1QUE</li>
				                    <li>1QUE</li>
				                    <li>1QUE</li>
	                			</ul>
		                    </li>
		                    <li>
		                    	<a href="#">Theo tour</a><i class="icofont-simple-right"></i>
		                    	<ul class="cap_3">
				                    <li>1QUE</li>
				                    <li>1QUE</li>
				                    <li>1QUE</li>
	                			</ul>
		                    </li>
		                    <li>
		                    	<a href="#">Cao cấp</a><i class="icofont-simple-right"></i>
		                    	<ul class="cap_3">
				                    <li>1QUE</li>
				                    <li>1QUE</li>
				                    <li>1QUE</li>
	                			</ul>
		                    </li>
	                	</ul> 
	                </li>
					<li>
	                	<a href="index.php?com=khachsan">Khách sạn</a><i class="icofont-rounded-right"></i>
                <ul class="cap_2">
		                    <li>
		                    	<a href="#">Gần biển</a><i class="icofont-simple-right"></i>
		                    	<ul class="cap_3">
				                    <li>1QUE</li>
				                    <li>1QUE</li>
				                    <li>1QUE</li>
	                			</ul>
		                    </li>
		                    <li>
		                    	<a href="#">Trung tâm thành phố</a><i class="icofont-simple-right"></i>
		                    	<ul class="cap_3">
				                    <li>1QUE</li>
				                    <li>1QUE</li>
				                    <li>1QUE</li>
	                			</ul>
		                    </li>
		                    <li>
		                    	<a href="#">Cao cấp</a><i class="icofont-simple-right"></i>
		                    	<ul class="cap_3">
				                    <li>1QUE</li>
				                    <li>1QUE</li>
				                    <li>1QUE</li>
	                			</ul>
		                    </li>
	                	</ul> 
	                </li>
					<li>
	                	<a href="index.php?com=phuongtien">Phương tiện</a><i class="icofont-rounded-right"></i>
                <ul class="cap_2">
		                    <li>
		                    	<a href="#">Xe đoàn</a><i class="icofont-simple-right"></i>
		                    	<ul class="cap_3">
				                    <li>1QUE</li>
				                    <li>1QUE</li>
				                    <li>1QUE</li>
	                			</ul>
		                    </li>
		                    <li>
		                    	<a href="#">Máy bay</a><i class="icofont-simple-right"></i>
		                    	<ul class="cap_3">
				                    <li>1QUE</li>
				                    <li>1QUE</li>
				                    <li>1QUE</li>
	                			</ul>
		                    </li>
		                    <li>
		                    	<a href="#">Xe lửa</a><i class="icofont-simple-right"></i>
		                    	<ul class="cap_3">
				                    <li>1QUE</li>
				                    <li>1QUE</li>
				                    <li>1QUE</li>
	                			</ul>
		                    </li>
	                	</ul> 
	                </li>
					<li>
	                	<a href="index.php?com=hanhtrang">Hành trang du lịch</a><i class="icofont-rounded-right"></i>
                <ul class="cap_2">
		                    <li>
		                    	<a href="#">Hành trang phượt</a><i class="icofont-simple-right"></i>
		                    	<ul class="cap_3">
				                    <li>1QUE</li>
				                    <li>1QUE</li>
				                    <li>1QUE</li>
	                			</ul>
		                    </li>
		                    <li>
		                    	<a href="#">Hành trang người lớn</a><i class="icofont-simple-right"></i>
		                    	<ul class="cap_3">
				                    <li>1QUE</li>
				                    <li>1QUE</li>
				                    <li>1QUE</li>
	                			</ul>
		                    </li>
		                    <li>
		                    	<a href="#">Hành trang trẻ em</a><i class="icofont-simple-right"></i>
		                    	<ul class="cap_3">
				                    <li>1QUE</li>
				                    <li>1QUE</li>
				                    <li>1QUE</li>
	                			</ul>
		                    </li>
	                	</ul> 
	                </li>
	            </ul>
	            <div class="icon">
	                <i class="fas fa-bars"></i>
	            </div>
	        </nav>
    	</div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
	$('.icofont-rounded-right').click(function(){
		if ($(this).next().css("display") == "block") {
			$(this).next().css("display","none");
			$(this).css("z-index","8");
			$(this).css("transform","rotate(0deg)");
			$(this).css("top","30px");
			$(this).css("left","unset");
			$(this).css("right","0px");
			$(this).closest('li').css("position","relative");
		}else{
			$(this).next().css("display","block");
			$(this).css("z-index","10");
			$(this).css("transform","rotate(180deg)");
			$(this).css("top","10px");
			$(this).css("left","50px");
			$(this).css("right","unset");
			$(this).closest('li').css("position","unset");		
		};
	});
});
</script>
<script type="text/javascript">
	$(function(){
	$('.icofont-simple-right').click(function(){
		if ($(this).next().css("display") == "block") {
			$(this).next().css("display","none");
			$(this).css("z-index","9");
			$(this).css("transform","rotate(0deg)");
			$(this).css("top","10px");
			$(this).css("left","unset");
			$(this).css("right","0px");
			$(this).closest('li').css("position","relative");
			$('.icofont-rounded-right').css("display","block");
		}else{
			$(this).next().css("display","block");
			$(this).css("z-index","11");
			$(this).css("transform","rotate(180deg)");
			$(this).css("top","10px");
			$(this).css("left","50px");
			$(this).css("right","unset");
			$(this).closest('li').css("position","unset");
			$('.icofont-rounded-right').css("display","none");				
		};
	});
});
</script>