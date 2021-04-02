<?php $__env->startSection('title','Mail xac nhan mua hang'); ?>
<?php $__env->startSection('main'); ?>

<div id="wrap-inner">
    <div id="khach-hang">
        <h3>Thông tin khách hàng</h3>
        <p>
            <span class="info">Khách hàng: </span>
            Vietpro
        </p>
        <p>
            <span class="info">Email: </span>
            vietpro@gmail.com
        </p>
        <p>
            <span class="info">Điện thoại: </span>
            01234567988
        </p>
        <p>
            <span class="info">Địa chỉ: </span>
            Hà Nội
        </p>
    </div>						
    <div id="hoa-don">
        <h3>Hóa đơn mua hàng</h3>							
        <table class="table-bordered table-responsive">
            <tr class="bold">
                <td width="30%">Tên sản phẩm</td>
                <td width="25%">Giá</td>
                <td width="20%">Số lượng</td>
                <td width="15%">Thành tiền</td>
            </tr>
            <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->name); ?></td>
                    <td class="price"><?php echo e(number_format($item->price*$item->qty,0,',','.')); ?>VND</td>
                    <td><?php echo e($item->qty); ?></td>
                    <td class="price"><?php echo e(number_format($item->price*$item->qty,0,',','.')); ?>VND</td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <!-- <tr>
                    <td>iPhone 6Plus 64GB grey</td>
                    <td class="price">8.500.000 VNĐ</td>
                    <td>2</td>
                    <td class="price">17.000.000VNĐ</td>
                </tr> -->
                <tr>
                    <td colspan="3">Tổng tiền:</td>
                    <td class="total-price"><?php echo e($total); ?></td>
                </tr> 
        </table>
    </div>
    <div id="xac-nhan">
        <br>
        <p align="justify">
            <b>Quý khách đã đặt hàng thành công!</b><br />
            • Sản phẩm của Quý khách sẽ được chuyển đến Địa chỉ có trong phần Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.<br />
            • Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng.<br />
            <b><br />Cám ơn Quý khách đã sử dụng Sản phẩm của Công ty chúng Tôi!</b>
        </p>
    </div>
</div>					
<!-- end main -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>