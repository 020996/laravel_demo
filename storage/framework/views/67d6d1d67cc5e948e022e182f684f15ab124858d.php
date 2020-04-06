<?php $__env->startSection('main'); ?>
	<link rel="stylesheet" href="layout/fontend/css/search.css">
					 <div id="wrap-inner">
						<div class="products">
							<h3>Tìm kiếm với từ khóa: <span><?php echo e($seach); ?></span></h3>
							<div class="product-list row">
										<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<div class="product-item col-md-3 col-sm-6 col-xs-12">
											<a href="#"><img src="img/<?php echo e($item->product_image); ?>" class="img-thumbnail"></a>
											 <p><a href="#"><?php echo e($item->product_name); ?></a></p>
											 <p class="price"><?php echo e(number_format("$item->product_price",0,",",".")); ?>VNĐ</p>	  
											<div class="marsk">
												<a href="<?php echo e(asset('detail/'.$item->product_id.'/'.$item->product_slug.'.html')); ?>">Xem chi tiết</a>
											</div>                      	                        
										</div> 
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                 
							</div>                	                	
						</div>

						<div id="pagination">
							<ul class="pagination pagination-lg justify-content-center">
									<?php echo e($products->links()); ?>

							</ul>
						</div>
					</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout_fontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_2\resources\views/fontend/search.blade.php ENDPATH**/ ?>