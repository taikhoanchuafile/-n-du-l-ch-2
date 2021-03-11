<div class="footer">
			<div class="content-footer container">
				<div class="intro-footer">
					<div class="title-intro">
						VỀ CHÚNG TÔI
						<div class="border-intro"></div>
					</div>
					<div class="text-logo">
						<?=$company['gioithieu']?>
					</div>
					<div class="icon-footer">
						<button><a href="#"><i class="fab fa-pinterest-p"></i></a></button>
						<button><a href="#"><i class="fab fa-google-plus-g"></i></a></button>
						<button><a href="#"><i class="fab fa-facebook-f"></i></a></button>
						<button><a href="#"><i class="icofont-vimeo"></i></a></button>
						<button><a href="#"><i class="fab fa-twitter"></i></a></button>
					</div>
				</div>
				<div class="intro-footer">
					<div class="title-intro">
						THÔNG TIN LIÊN HỆ
						<div class="border-intro"></div>
					</div>
					<div class="list-intro">
						<ul>
							<li id="sdt">
								<i class="fas fa-phone-alt"></i><?=$company['dienthoai']?>
							</li>
							<li id="gmail">
								<i class="fas fa-envelope"></i><?=$company['email']?>
							</li>
							<li id="adress">
								<i class="fas fa-map-marker-alt"></i><?=$company['diachi']?>
							</li>
						</ul>
					</div>
				</div>
				<div class="intro-footer fb">
					<div class="title-intro" id="title-fanpage">
						fanpage
						<div class="border-intro"></div>
					</div>
					<div class="fanpage">
                        <div class="fb-page" data-href="<?=$company['fanpage']?>" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?=$company['fanpage']?>" class="fb-xfbml-parse-ignore"><a href="<?=$company['fanpage']?>"><?=$company['ten']?></a></blockquote></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0" nonce="Izrsi2ep"></script>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<p>Mã số thuế công ty: <?=$company['maso']?></p>
			</div>
</div>