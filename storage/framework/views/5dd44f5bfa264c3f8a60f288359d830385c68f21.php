<?php $__env->startSection('title','Trang ket qua tim kiem'); ?>
<?php $__env->startSection('main'); ?>
<link rel="stylesheet" href="css/search.css">
<div id="wrap-inner">
	<div class="products">
		<h3>Tìm kiếm với từ khóa: <span><?php echo e($keyword); ?></span></h3>
		<div class="product-list row">
			<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

	<!-- <div id="pagination">
		<ul class="pagination pagination-lg justify-content-center">
			<li class="page-item">
				<a class="page-link" href="#" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
					<span class="sr-only">Previous</span>
				</a>
			</li>
			<li class="page-item disabled"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item">
				<a class="page-link" href="#" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
					<span class="sr-only">Next</span>
				</a>
			</li>
		</ul>
	</div> -->
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>