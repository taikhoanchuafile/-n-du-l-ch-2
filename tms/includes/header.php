<?php if($_SESSION['login'])
{?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.html"><i class="fa fa-home"></i></a></li>
			<li class="prnt"><a href="profile.php">Hồ sơ của tôi</a></li>
				<li class="prnt"><a href="change-password.php">Đổi mật khẩu</a></li>
			<li class="prnt"><a href="tour-history.php">Lịch sử tour</a></li>
			<li class="prnt"><a href="issuetickets.php">Vé khiếu nại</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Xin chào :</li>				
			<li class="sig"><?php echo htmlentities($_SESSION['login']);?></li> 
			<li class="sigi"><a href="logout.php" >/ Đăng xuất</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div><?php } else {?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
				<li class="hm"><a href="admin/index.php">Đăng nhập Admin</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Tổng đài : 123-4568790</li>				
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Đăng ký</a></li> 
			<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >/ Đăng nhập</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div>
<?php }?>
<!--- /top-header ---->
<!--- header ---->
<div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="index.php">Viet <span>Travel</span></a>	
		</div>
	
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			<li><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">An toàn &amp; Bảo mật </div></li>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Điều hướng</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Trang chủ</a></li>
							<li><a href="page.php?type=aboutus">Thông tin</a></li>
								<li><a href="package-list.php">Các gói tour</a></li>
								<li><a href="page.php?type=privacy">Chính sách quyền riêng tư</a></li>
								<li><a href="page.php?type=terms">Pháp lý sử dụng</a></li>
								<li><a href="page.php?type=contact">Liên hệ chúng tôi</a></li>
								<?php if($_SESSION['login'])
{?>
								<li>Thắc mắc ?<a href="#" data-toggle="modal" data-target="#myModal3"> / Gửi cho chúng tôi </a>  </li>
								<?php } else { ?>
								<li><a href="enquiry.php"> Yêu cầu tour </a>  </li>
								<?php } ?>
								<div class="clearfix"></div>

						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->	
			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>