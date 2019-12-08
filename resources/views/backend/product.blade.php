
	  @extends('layout.master')
      @section('main')
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
								@include('error.note')
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="30%">Tên Sản phẩm</th>
											<th>Giá sản phẩm</th>
											<th width="20%">Ảnh sản phẩm</th>
											<th>Danh mục</th>
											<th>Trạng thái</th>
											<th>Sản phẩm</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										<?php $n=1; ?>
										@foreach ($product as $item)
										<tr>
											<td>{{$n}}</td>
											<td>{{ $item->product_name}}</td>
											<td>{{number_format("$item->product_price",0,",",".")}}đ</td>
											<td>
												<img width="100px" src="img/{{ $item->product_image}}" class="thumbnail">
											</td>
										   <td>{{$item->category->cate_name}}</td>
											<td> @if ($item->product_trangthai==1) còn hàng @else hết hàng @endif </td>
											<td> @if ($item->product_spdb==1) Nổi bật @else Mới @endif </td>
											<td>
											<a href="admin/product/edit/{{$item->product_id}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
											<a href="admin/product/delete/{{$item->product_id}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>
										<?php $n++;?>
										@endforeach
									</tbody>
								</table>							
							</div>
						</div>
						<div class="clearfix" style="padding-left: 400px;">
								{{ $product->links() }}
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	 </div>	<!--/.main-->
	 @endsection
