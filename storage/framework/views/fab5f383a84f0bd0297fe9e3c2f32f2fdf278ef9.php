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
                    <td width="30%">Fullname</td>
                    <td width="25%">Username</td>
                    <td width="25%">Email</td>
                    <td width="5%">Level</td>
                    <td width="5%">Delete</td>
                </tr>
                <?php $stt = 1 ?>
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($stt); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->password); ?></td>
                    <td><?php echo e($item->email); ?></td>
                    <td><?php echo e($item->level); ?></td>
                    <td><a href="admin/user/delete/<?php echo e($item->id); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a></td>
                </tr>
                <?php $stt++ ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</table>
        </div>
    </div>
</div>
</body>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_2\resources\views/backend/admin.blade.php ENDPATH**/ ?>