<!DOCTYPE html>
<html>
<head>
    <base href="<?php echo e(asset('')); ?>">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Diệp Mặc Shop - Home</title>
	<link rel="stylesheet" href="layout/frontend/css/bootstrap.min.css">
	<link rel="stylesheet" href="layout/frontend/css/home.css">
	<script type="text/javascript" src="layout/frontend/js/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script type="text/javascript" src="layout/frontend/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript">
		$(function() {
			var pull        = $('#pull');
			menu        = $('nav ul');
			menuHeight  = menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
		});

		$(window).resize(function(){
			var w = $(window).width();
			if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
		});
	</script>
</head>
<body>    
	<!-- header -->
	<header id="header">
		<div class="container">
			<div class="row">
				<div id="logo" class="col-md-3 col-sm-12 col-xs-12">
					<h1>
						<a href="<?php echo e(asset('/')); ?>"><img style="margin-top:30px;" src="img/logo.png"></a>						
						<nav><a id="pull" class="btn btn-danger" href="#">
							<i class="fa fa-bars"></i>
						</a></nav>			
					</h1>
				</div>
				<div id="search" class="col-md-7 col-sm-12 col-xs-12">
					<form action="<?php echo e(asset('seach/')); ?>" method="GET">
					<input type="text" name="text" placeholder="Nhập từ khóa ...">
					<input type="submit" name="submit" value="Tìm Kiếm">
				</form>
				</div>
				<div id="cart" class="col-md-2 col-sm-12 col-xs-12">
					<a class="display" href="cart/showcart">Giỏ hàng</a>
					<a href="#"><?php echo e(Cart::getContent()->count()); ?></a>				    
				</div>
			</div>			
		</div>
	</header><!-- /header -->
	<!-- endheader -->

	<!-- main -->
	<section id="body">
		<div class="container">
			<div class="row">
				<div id="sidebar" class="col-md-3">
					<nav id="menu">
						<ul>
							<li class="menu-item">danh mục sản phẩm</li>
							<?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>			
							<li class="menu-item"><a href="<?php echo e(asset('category/'.$item->cate_id.'/'.$item->cate_slug.'.html')); ?>" title=""><?php echo e($item->cate_name); ?></a></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>						
						</ul>
						<!-- <a href="#" id="pull">Danh mục</a> -->
					</nav>

					<div id="banner-l" class="text-center">
						<div class="banner-l-item">
							<a href="#"><img src="layout/frontend/img/home/banner-l-1.png" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="layout/frontend/img/home/banner-l-2.png" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="layout/frontend/img/home/banner-l-3.png" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="layout/frontend/img/home/banner-l-4.png" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="layout/frontend/img/home/banner-l-5.png" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="layout/frontend/img/home/banner-l-6.png" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="layout/frontend/img/home/banner-l-7.png" alt="" class="img-thumbnail"></a>
						</div>
					</div>
				</div>

				<div id="main" class="col-md-9">
					<!-- main -->
					<!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
					<div id="slider">
						<div id="demo" class="carousel slide" data-ride="carousel">

							<!-- Indicators -->
							<ul class="carousel-indicators">
								<li data-target="#demo" data-slide-to="0" class="active"></li>
								<li data-target="#demo" data-slide-to="1"></li>
								<li data-target="#demo" data-slide-to="2"></li>
							</ul>

							<!-- The slideshow -->
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="layout/frontend/img/home/slide-1.png" alt="Los Angeles" >
								</div>
								<div class="carousel-item">
									<img src="layout/frontend/img/home/slide-2.png" alt="Chicago">
								</div>
								<div class="carousel-item">
									<img src="layout/frontend/img/home/slide-3.png" alt="New York" >
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="carousel-control-prev" href="#demo" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#demo" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>
						</div>
					</div>

					<div id="banner-t" class="text-center">
						<div class="row">
							<div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
								<a href="#"><img src="layout/frontend/img/home/banner-t-1.png" alt="" class="img-thumbnail"></a>
							</div>
							<div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
								<a href="#"><img src="layout/frontend/img/home/banner-t-1.png" alt="" class="img-thumbnail"></a>
							</div>
						</div>					
                    </div>
                    <?php echo $__env->yieldContent('main'); ?>
                </div>
			</div>
		</div>
	</section>
	<!-- endmain -->

	<!-- footer -->
	<footer id="footer">			
		<div id="footer-t">
			<div class="container">
				<div class="row">				
					<div id="logo-f" class="col-md-3 col-sm-12 col-xs-12 text-center">						
						<a href="#"><img src="img/logo.png"></a>		
					</div>
					<div id="about" class="col-md-3 col-sm-12 col-xs-12">
						<h3>About us</h3>
						<p class="text-justify"> Văn hóa cổ đại tin rằng sự tương hỗ giữa âm và dương đã tạo nên vũ trụ và vạn vật. Sự vận động của vũ trụ, bao gồm mọi vật chất, là chiểu theo quy luật tương sinh và sự cân bằng âm dương. Cơ thể người là một tiểu vũ trụ. Tuy nó có cơ chế hoạt động riêng nhưng vẫn có liên hệ với toàn thể vũ trụ.</p>
					</div>
					<div id="hotline" class="col-md-3 col-sm-12 col-xs-12">
						<h3>Hotline</h3>
						<p>Phone Sale: 0399233237 </p>
						<p>Email: Lecongkhanh020996@gmail.com</p>
					</div>
					<div id="contact" class="col-md-3 col-sm-12 col-xs-12">
						<h3>Contact Us</h3>
						<p>Address 1: B8A Nghi Thuận - Nghi Lộc - Nghệ an</p>
						<p>Address 2: Số 106 Tây Tựu  - Việt Nam - Hà Nội</p>
					</div>
				</div>				
			</div>
			<div id="footer-b">				
				<div class="container">
					<div class="row">
						<div id="footer-b-l" class="col-md-6 col-sm-12 col-xs-12 text-center">
							<p>Học viện Công nghệ và phát triển Web Diệp Mặc - www.Diệp mặc.edu.vn</p>
						</div>
						<div id="footer-b-r" class="col-md-6 col-sm-12 col-xs-12 text-center">
							<p>© 2019 Diệp Mặc Academy. All Rights Reserved</p>
						</div>
					</div>
				</div>
				<div id="scroll">
					<a href="#"><img src="layout/frontend/img/home/scroll.png"></a>
				</div>	
			</div>
		</div>
	</footer>
	<!-- endfooter -->
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel_2\resources\views/layout_fontend/master.blade.php ENDPATH**/ ?>