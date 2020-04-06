	
	<?php $__env->startSection('main'); ?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm danh mục
						</div>
						<?php echo $__env->make('error.note', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<form action="" method="POST">
						<div class="panel-body">
							<div class="form-group">
								<label>Tên danh mục:</label>
								<input required type="text" name="name" class="form-control" placeholder="Tên danh mục...">
								<button style="margin: 11px 0px -20px 130px;width: 150px;"  class="btn btn-primary" type="submit">Thêm mới</button>
							</div>
						</div>
						<?php echo e(csrf_field()); ?>

					</form>
					</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách danh mục</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
					                  <th>Tên danh mục</th>
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
								  </thead>
								  <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cates): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				              	<tbody>
									<td><?php echo e($cates->cate_name); ?></td>
									<td>
			                    		<a href="admin/category/edit/<?php echo e($cates->cate_id); ?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
			                    		<a href="admin/category/delete/<?php echo e($cates->cate_id); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
			                  		</td>
			                  	</tr> 
								</tbody>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				            </table>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_2\resources\views/backend/category.blade.php ENDPATH**/ ?>