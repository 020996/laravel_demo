<!DOCTYPE html>
<html>
<head>
<base href="<?php echo e(asset('')); ?>">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forms</title>
<link href="layout/backend/css/bootstrap.min.css" rel="stylesheet">
<link href="layout/backend/css/datepicker3.css" rel="stylesheet">
<link href="layout/backend/css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="layout/backend/js/html5shiv.js"></script>
<script src="layout/backend/js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form action="" method="POST">
						<fieldset>
							<?php echo $__env->make('error.note', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" value="<?php echo e(old('email')); ?>">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<button style="width:100px" type="submit" class="btn btn-primary">Login</button>
							<a style="margin-left:50px" href="login/dangky">Đăng ký?</a>
						</fieldset>
					  <?php echo e(csrf_field()); ?>

					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="layout/backend/js/jquery-1.11.1.min.js"></script>
	<script src="layout/backend/js/bootstrap.min.js"></script>
	<script src="layout/backend/js/chart.min.js"></script>
	<script src="layout/backend/js/chart-data.js"></script>
	<script src="layout/backend/js/easypiechart.js"></script>
	<script src="layout/backend/js/easypiechart-data.js"></script>
	<script src="layout/backend/js/bootstrap-datepicker.js"></script>
	<script>
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
<?php /**PATH C:\xampp\htdocs\laravel_2\resources\views/backend/login.blade.php ENDPATH**/ ?>