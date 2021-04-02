<?php $__env->startSection('title','Trang Chu'); ?>
<?php $__env->startSection('main'); ?>

<div id="wrap-inner">
	<div class="products">
		<h3>sản phẩm nổi bật</h3>
		<div class="product-list row">
			<?php $__currentLoopData = $productlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="product-item col-md-3 col-sm-6 col-xs-12">
					<a href="#"><img src="<?php echo e(asset('storage/app/avatar/'.$p->prod_image)); ?>" class="img-thumbnail"></a>
					<p><a href="#"><?php echo e($p->prod_name); ?></a></p>
					<p class="price"><?php echo e(number_format($p->prod_price,0,',','.')); ?>.000VND</p>	  
					<div class="marsk">
						<a href="<?php echo e(asset('detail/'.$p->id)); ?>">Xem chi tiết</a>
					</div>                                    
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>                	                	
	</div>

	<div class="products">
		<h3>sản phẩm mới</h3>
		<div class="product-list row">
			<?php $__currentLoopData = $productnew; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="product-item col-md-3 col-sm-6 col-xs-12">
					<a href="#"><img src="<?php echo e(asset('storage/app/avatar/'.$new->prod_image)); ?>" class="img-thumbnail"></a>
					<p><a href="#"><?php echo e($new->prod_name); ?></a></p>
					<p class="price"><?php echo e(number_format($new->prod_price,0,',','.')); ?>.000VND</p>	  
					<div class="marsk">
						<a href="<?php echo e(asset('detail/'.$new->id)); ?>">Xem chi tiết</a>
					</div>                                    
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>    
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>