<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<base href="<?php echo e(asset('')); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Demo /Điện thoại shop</title>
<link href="layout/backend/css/bootstrap.min.css" rel="stylesheet">
<link href="layout/backend/css/datepicker3.css" rel="stylesheet">
<link href="layout/backend/css/styles.css" rel="stylesheet">
<script type="text/javascript" src="layout/backend/ckeditor/ckeditor.js"></script>
<script src="layout/backend/js/lumino.glyphs.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Khánh Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo e(Auth::user()->email); ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
						<li><a href="<?php echo e(asset('logout')); ?>"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li class="active"><a href="admin/home"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
			<li><a href="admin/product"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Sản phẩm</a></li>
			<li><a href="admin/category"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Danh mục</a></li>
		<li><a href="admin/detail" id="active1"><svg class="glyph stroked folder"><use xlink:href="#stroked-folder"/></use></svg>Đơn đặt hàng<?php if($alert>0){ ?> <span class="badge badge-light" style="margin-left: 5px"><?php echo $alert ?></span>   <?php }?></a></li>
			<li><a href="admin/comment"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></use></svg>Bình luận</a></li>
			<li><a href="admin/user"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></use></svg> Admin</a></li>
			<li role="presentation" class="divider"></li>
			
		</ul>
    </div><!--/.sidebar-->
    <!--main-->
    <?php echo $__env->yieldContent('main'); ?>
    <!--endmain-->
    <script src="layout/backend/js/jquery-1.11.1.min.js"></script>
	<script src="layout/backend/js/bootstrap.min.js"></script>
	<script src="layout/backend/js/chart.min.js"></script>
	<script src="layout/backend/js/chart-data.js"></script>
	<script src="layout/backend/js/easypiechart.js"></script>
	<script src="layout/backend/js/easypiechart-data.js"></script>
	<script src="layout/backend/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript">
		$(document).ready(function(e){
          $('#active1').click(function(e){
			var data_post={
                    "_token":"<?php echo e(csrf_token()); ?>",
                };
			$.ajax({
			type: "post",
			url: "<?php echo e(asset('admin/detail/updateDetail')); ?>",
			data: data_post,
			success: function (response) {
			}
	     	});
		  });
		});
    //  function update(){
	// 	 console.log(4545);
        // $.ajax({
		// 	type: "post",
		// 	url: "<?php echo e(asset('admin/detail/updateDetail')); ?>",
		// 	data: "_token":"<?php echo e(csrf_token()); ?>",
		// 	success: function (response) {
				
		// 	}
		// });
	//  }
	</script>
	
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel_2\resources\views/layout/master.blade.php ENDPATH**/ ?>