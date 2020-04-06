	  
      <?php $__env->startSection('main'); ?>
	 <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách sản phẩm</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="admin/product/add" class="btn btn-primary">Thêm sản phẩm</a>
								<?php echo $__env->make('error.note', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<table class="table table-bordered" style="margin-top:20px; text-align: center;">				
									<thead>
										<tr align="center" class="bg-primary">
											<th>ID</th>
											<th width="30%">Tên Sản phẩm</th>
											<th>Giá sản phẩm</th>
											<th width="20%">Ảnh sản phẩm</th>
											<th>Danh mục</th>
											<th>Trạng thái</th>
											<th>Sản phẩm</th>
											<th style="width:180px">Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										<?php $n=1; ?>
										<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td><?php echo e($n); ?></td>
											<td><?php echo e($item->product_name); ?></td>
											<td><?php echo e(number_format("$item->product_price",0,",",".")); ?>đ</td>
											<td>
												<img width="100px" src="img/<?php echo e($item->product_image); ?>" class="thumbnail">
											</td>
										   <td><?php echo e($item->category->cate_name); ?></td>
											<td> <?php if($item->product_trangthai==1): ?> còn hàng <?php else: ?> hết hàng <?php endif; ?> </td>
											<td> <?php if($item->product_spdb==1): ?> Nổi bật <?php else: ?> Mới <?php endif; ?> </td>
											<td>
											<a href="admin/product/edit/<?php echo e($item->product_id); ?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
											<a href="admin/product/delete/<?php echo e($item->product_id); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
											</td>
										</tr>
										<?php $n++;?>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</tbody>
								</table>							
							</div>
						</div>
						<div class="clearfix" style="padding-left: 400px;">
								<?php echo e($product->links()); ?>

						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	 </div>	<!--/.main-->
	 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_2\resources\views/backend/product.blade.php ENDPATH**/ ?>