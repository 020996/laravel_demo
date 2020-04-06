	<?php $__env->startSection('main'); ?>
	<link rel="stylesheet" href="layout/fontend/css/cart.css">
	<script type="text/javascript">
	function updateCart(quantity,id){
		var data_post={
                    "_token":"<?php echo e(csrf_token()); ?>",
                    "id":id,
                    "quantity":quantity,
                };
       $.ajax({
		   type: "post",
		   url: "<?php echo e(asset('cart/update')); ?>",
		   data: data_post,
		   dataType: "json",
		   success: function (data) {
			   var price = data['price'];
			   var id = data['id'];
			   var sobital = data['sobital'];
			   console.log(new Intl.NumberFormat().format(price));
			   console.log(price,id,sobital);
			   $("#price"+id).html(new Intl.NumberFormat().format(price));
			   $(".total-price").html(new Intl.NumberFormat().format(sobital))
		   }
	   });
	}
	</script>
					<div id="wrap-inner">
						<div id="list-cart">
							<h3 style="color:red">Giỏ hàng</h3>
							<?php echo $__env->make('error.note', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							<?php if( Cart::getContent()->count()>0): ?>
							<form method="POST" action="">
								<table class="table table-bordered .table-responsive text-center">
									<tr class="active">
										<td width="15%">Ảnh mô tả</td>
										<td width="20%">Tên sản phẩm</td>
										<td width="12%">Số lượng</td>
										<td width="20%">Đơn giá</td>
										<td width="25%">Thành tiền</td>
										<td width="8%">Xóa</td>
									</tr>
									<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><img class="img-responsive" style="width:100%" src="img/<?php echo e($item->attributes->image); ?>"></td>
										<td><?php echo e($item->name); ?></td>
										<td>
											<div class="form-group">
												<input class="form-control" type="number" value="<?php echo e($item->quantity); ?>" onchange="updateCart(this.value,<?php echo e($item->id); ?>)">
											</div>
										</td>
										<td><span class="price"><?php echo e(number_format("$item->price",0,",",".")); ?> VNĐ</span></td>
										<td><span class="price"><span id="price<?php echo e($item->id); ?>"><?php echo e(number_format($item->price*$item->quantity,0,",",".")); ?></span> VNĐ</span></td>
										<td><a href="cart/delete/<?php echo e($item->id); ?>">Xóa</a></td>
									</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</table>
								<div class="row" id="total-price">
									<div class="col-md-6 col-sm-12 col-xs-12">										
											Tổng thanh toán: <span class="total-price"><?php echo e(number_format(Cart::getSubTotal(),0,",",".")); ?></span><span> VNĐ</span>
																													
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<a href="" class="btn btn-success">Mua tiếp</a>
										<a href="cart/showcart" class="btn btn-primary">Cập nhật</a>
										<a href="cart/delete/all" class="btn btn-danger">Xóa giỏ hàng</a>
									</div>
								</div>	             	                	
						</div>
						 <div id="xac-nhan">
								<h3>Xác nhận mua hàng</h3>				
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
							<h2> Giỏ Hàng Rỗng</h2>
						 <?php endif; ?>
						
					</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_fontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_2\resources\views/fontend/cart.blade.php ENDPATH**/ ?>