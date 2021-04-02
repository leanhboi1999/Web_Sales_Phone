<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forms</title>
<base href="<?php echo e(asset('public/backend')); ?>/">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" method="post" action="<?php echo e(asset('login')); ?>">
						<fieldset>
							<?php echo $__env->make('errors.note', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
							<div class="form-group">
								<input class="form-control" placeholder="username" name="name" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" value=<?php echo e(old('email')); ?>>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							
							<div class="right-w3l">
								<input type="submit" class="btn btn-primary" value="Login">

								<a href="<?php echo e(route('provider_login','facebook')); ?>" class="btn btn-primary">Đăng nhập bằng facebook</a>

								<p class="text-center dont-do mt-3">Nếu bạn chưa có tài khoản?
								<a href="<?php echo e(asset('register')); ?>" data-toggle="modal">
									Đăng Ký Ngay
								</a>
								</p>
							</div>
						</fieldset>
						<?php echo e(csrf_field()); ?>

					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
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

	 <?php if(session('thongbao')): ?>
        <script type="text/javascript">
            toastr.success('<?php echo e(session('thongbao')); ?>', 'Thông báo', {timeOut: 5000});
        </script>
    <?php endif; ?>
    <?php if(session('error')): ?>
        <script type="text/javascript">
            toastr.error('<?php echo e(session('error')); ?>', 'Thông báo', {timeOut: 5000});
        </script>
    <?php endif; ?>	
</body>

</html>
