<?php $__env->startSection('title','Gio hang'); ?>
<?php $__env->startSection('main'); ?>
<link rel="stylesheet" href="css/cart.css">
<script type="text/javascript">
	function updatecart(qty,rowId){
		$.get(
			'<?php echo e(asset('cart/update')); ?>',
			{qty:qty,rowId:rowId},
			function()
			{
				location.reload();
			}
		)
		
	}
</script>
<div id="wrap-inner">
	<div id="list-cart">
		<h3>Giỏ hàng</h3>
		<?php if(Cart::count()>=1): ?>
		<form>
			<table class="table table-bordered .table-responsive text-center">
				<tr class="active">
					<td width="11.111%">Ảnh mô tả</td>
					<td width="22.222%">Tên sản phẩm</td>
					<td width="22.222%">Số lượng</td>
					<td width="16.6665%">Đơn giá</td>
					<td width="16.6665%">Thành tiền</td>
					<td width="11.112%">Xóa</td>
				</tr>
				<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><img height="150px"class="img-responsive" src="<?php echo e(asset('storage/app/avatar/'.$item->options->image)); ?>"></td>
					<td><?php echo e($item->name); ?></td>
					<td>
						<div class="form-group">
							<input class="form-control" type="number" value="<?php echo e($item->qty); ?>" onchange="updatecart(this.value,'<?php echo e($item->rowId); ?>')">
						</div>
					</td>
					<td><span class="price"><?php echo e(number_format($item->price,0,',','.')); ?></span></td>
					<td><span class="price"><?php echo e(number_format($item->price*$item->qty,0,',','.')); ?>VND</span></td>
					<td><a href="<?php echo e(asset('cart/delete/'.$item->rowId)); ?>">Xóa</a></td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</table>
			<div class="row" id="total-price">
				<div class="col-md-6 col-sm-12 col-xs-12">										
						Tổng thanh toán: <span class="total-price"><?php echo e($total); ?>VND</span>
																								
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<a href="<?php echo e(asset('/')); ?>" class="my-btn btn">Mua tiếp</a>
					<a href="#" class="my-btn btn">Cập nhật</a>
					<a href="<?php echo e(asset('cart/delete/all')); ?>" class="my-btn btn">Xóa giỏ hàng</a>
				</div>
			</div>
		</form> 
		<div id="xac-nhan">
			<h3>Xác nhận mua hàng</h3>
			<form method="POST" action="<?php echo e(asset('complete')); ?>">
				<div class="form-group">
					<label for="email">Email address:</label>
					<input required type="email" class="form-control" id="email" name="email">
				</div>
				<div class="form-group">
					<label for="name">Họ và tên:</label>
					<input required type="text" class="form-control" id="name" name="name">
				</div>
				<div class="form-group">
					<label for="phone">Số điện thoại:</label>
					<input required type="number" class="form-control" id="phone" name="phone">
				</div>
				<div class="form-group">
					<label for="add">Địa chỉ:</label>
					<input required type="text" class="form-control" id="add" name="add">
				</div>
				<div class="form-group text-right">
					<button type="submit" class="btn btn-default">Thực hiện đơn hàng</button>
				</div>
				<?php echo e(csrf_field()); ?>

			</form>
		</div>
		<?php else: ?> 
		<h2>Gio hang trong</h2>
		<?php endif; ?>
	</div>
</div>
<?php $__env->stopSection(); ?>  


<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>