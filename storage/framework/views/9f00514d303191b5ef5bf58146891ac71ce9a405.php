	<?php $__env->startSection('main'); ?>
<style>
#navbar{
	margin-top:50px;}
#tbl-first-row{
	font-weight:bold;}
#logout{
	padding-right:30px;}		
</style>
</head>
<body>

<div class="container">
    <div class="row">
    	<div class="col-sm-12">
        	<div><?php echo $__env->make('error.note', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
        	<table style="width:100%; margin: 50px 0px 0px 110px;" class="table table-striped">
            	<tr id="tbl-first-row">
                	<td width="5%">Stt</td>
                    <td width="30%">Name</td>
                    <td width="25%">Email</td>
                    <td width="10%">Sản phẩm</td>
                    <td width="25%">Comment</td>
                    <td width="15%">Xóa</td>
                </tr>
                <?php $stt = 1 ?>
                <?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($stt); ?></td>
                    <td><?php echo e($item->com_name); ?></td>
                    <td><?php echo e($item->com_email); ?></td>
                    <td><?php echo e($item->product->product_name); ?></td>
                    <td><?php echo e($item->com_content); ?></td>
                    <td><a href="admin/comment/delete/<?php echo e($item->id); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a></td>
                </tr>
                <?php $stt++ ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</table>
        </div>
    </div>
</div>
</body>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_2\resources\views/Backend/comment.blade.php ENDPATH**/ ?>