<?php $__env->startSection('title','Danh muc san pham'); ?>
<?php $__env->startSection('main'); ?>

<div id="wrap-inner">
	<div class="products">
		<h3><?php echo e($cate->cate_name); ?></h3>
		<div class="product-list row">
			<?php $__currentLoopData = $categori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="product-item col-md-3 col-sm-6 col-xs-12">
					<a href="#"><img src="<?php echo e(asset('storage/app/avatar/'.$i->prod_image)); ?>" class="img-thumbnail"></a>
					<p><a href="#"><?php echo e($i->prod_name); ?></a></p>
					<p class="price"><?php echo e(number_format($i->prod_price,0,',','.')); ?>.000VND</p>	  
					<div class="marsk">
						<a href="<?php echo e(asset('detail/'.$i->id)); ?>">Xem chi tiết</a>
					</div>                                    
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>                	                	
	</div>

	<div id="pagination">
		
		<?php echo e($categori->links()); ?>

	</div>
</div>
<?php $__env->stopSection(); ?>			
					
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>