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
				<div class="panel-heading">Sign up</div>
				<div class="panel-body">

				<?php if(Session::has('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(Session::get('message')); ?>

                </div>
                <?php endif; ?>
					<form role="form" method="post" action="<?php echo e(asset('register')); ?>">
						<fieldset>
							<?php echo $__env->make('errors.note', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
							<div class="form-group">
								<input class="form-control" placeholder="username" name="name" type="text" autofocus="">
							</div>

							<?php if($errors->has('name')): ?>
							<div class="text-danger">
								<?php $__currentLoopData = $errors->get('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li><?php echo e($err); ?></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
							<?php endif; ?>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" value=<?php echo e(old('email')); ?>>
							</div>

							<?php if($errors->has('email')): ?>
                        	<div class="text-danger">
                            <?php $__currentLoopData = $errors->get('email'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($err); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>

							<?php if($errors->has('password')): ?>
							<div class="text-danger">
								<?php $__currentLoopData = $errors->get('password'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li><?php echo e($err); ?></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
							<?php endif; ?>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">	
							</div>

							<?php if($errors->has('confirm_password')): ?>
							<div class="text-danger">
								<?php $__currentLoopData = $errors->get('confirm_password'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li><?php echo e($err); ?></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
							<?php endif; ?>
							<div class="form-group">
		
								<input type="text" class="form-control" placeholder="adress" name="adress">
								<?php if($errors->has('adress')): ?>
								<div class="text-danger">
									<?php $__currentLoopData = $errors->get('adress'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li><?php echo e($err); ?></li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
								<?php endif; ?>
							</div>
							<div class="form-group">
								
								<input type="text" class="form-control" placeholder="Phone" name="phone">
								<?php if($errors->has('phone')): ?>
								<div class="text-danger">
									<?php $__currentLoopData = $errors->get('phone'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li><?php echo e($err); ?></li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
								<?php endif; ?>
							</div>
							<div class="form-group">
								
								<input type="text" class="form-control" placeholder="Age" name="age">
								<?php if($errors->has('age')): ?>
								<div class="text-danger">
									<?php $__currentLoopData = $errors->get('age'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li><?php echo e($err); ?></li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
								<?php endif; ?>
							</div>
							<input type="submit" class="btn btn-primary" value="Sign up">
							
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
</body>

</html>
