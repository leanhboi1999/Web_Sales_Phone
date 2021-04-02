<?php $__env->startSection('title','Trang chi tiet san pham'); ?>
<?php $__env->startSection('main'); ?>
<div id="wrap-inner">
	<div id="product-info">
		<div class="clearfix"></div>
		<h3><?php echo e($detail->prod_name); ?></h3>
		<div class="row">
			<div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
				<img height="220px"src="<?php echo e(asset('storage/app/avatar/'.$detail->prod_image)); ?>">
			</div>
			<div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
				<p>Giá: <span class="price"><?php echo e(number_format($detail->prod_price,0,',','.')); ?>.000VND</span></p>
				<p>Bảo hành: <?php echo e($detail->prod_warranty); ?></p> 
				<p>Phụ kiện: <?php echo e($detail->prod_accessories); ?></p>
				<p>Tình trạng: <?php echo e($detail->prod_condition); ?></p>
				<p>Khuyến mại: <?php echo e($detail->prod_promotion); ?></p>
				<p>Còn hàng: <?php if($detail->prod_status==1): ?> Con hang <?php else: ?> Het hang <?php endif; ?></p>
				<p class="add-cart text-center">
					<a href="<?php echo e(asset('cart/add/'.$detail->id)); ?>" 
					style="text-decoration: none;
					font-weight: bold;
					font-size: 18px;
					background:orangered;
					padding:22px">Đặt hàng online
					</a></p>
			</div>
		</div>							
	</div>
	<div id="product-detail">
		<h3>Chi tiết sản phẩm</h3>
		<p class="text-justify"><?php echo $detail->prod_discription; ?></p>
	</div>
	<div id="comment">
		<h3>Bình luận</h3>
		<div class="col-md-9 comment">
			<form  method="POST">
				<div class="form-group">
					<label for="email">Email:</label>
					<input required type="email" class="form-control" id="email" name="email">
				</div>
				<div class="form-group">
					<label for="name">Tên:</label>
					<input required type="text" class="form-control" id="name" name="name">
				</div>
				<div class="form-group">
					<label for="cm">Bình luận:</label>
					<textarea required rows="10" id="cm" class="form-control" name="content"></textarea>
				</div>
				<div class="form-group text-right">
					<button type="submit" class="btn btn-default">Gửi</button>
				</div>
				<?php echo e(csrf_field()); ?>

			</form>
		</div>
	</div>
	<div id="comment-list">
		<?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<ul>
				<li class="com-title">
					<?php echo e($c->name); ?>

					<br>
					<span><?php echo e(date('Y/m/d H:i',strtotime($c->created_at))); ?></span>	
				</li>
				<li class="com-details">
					<?php echo e($c->content); ?>

				</li>
			</ul>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
</div>					
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>