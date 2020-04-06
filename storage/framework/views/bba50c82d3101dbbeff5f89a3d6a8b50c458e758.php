	<?php $__env->startSection('main'); ?>
        	<div><?php echo $__env->make('error.note', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
        	<table class="table table-striped" style="margin:50px 0px 0px 300px; width:76%">
            	<tr id="tbl-first-row">
                	<td>Stt</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Số điện thoại</td>
                    <td>Địa chỉ</td>
                    <td>Sản phẩm đặt mua</td>
                    <td>Số lượng mua</td>
                    <td>Giá của sản phẩm</td>
                    <td>Tổng số tiền</td>
                    <td>Ngày đặt mua</td>
                    <td>Xóa</td>
                </tr>
                <?php $stt = 1 ?>
                <?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($stt); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->email); ?></td>
                    <td><?php echo e($item->phone); ?></td>
                    <td><?php echo e($item->dress); ?></td>
                    <td><?php echo e($item->product_name); ?></td>
                    <td><?php echo e($item->qty); ?></td>
                    <td><?php echo e(number_format("$item->unit_price",0,",",".")); ?>đ</td>
                    <td><?php echo e(number_format("$item->tong",0,",",".")); ?>đ</td>
                    <td><?php echo e(date('Y-m-d', strtotime($item->created_at))); ?></td>
                    <td><a href="admin/detail/delete/<?php echo e($item->id_id); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a></td>

                </tr>
                <?php $stt++ ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</table>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_2\resources\views/Backend/detail.blade.php ENDPATH**/ ?>