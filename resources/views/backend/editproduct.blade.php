
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
					<div class="panel-heading">Sửa sản phẩm</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên sản phẩm</label>
										<input required type="text" name="name" class="form-control" value="{{$product->product_name}}">
									</div>
									<div class="form-group" >
										<label>Giá sản phẩm</label>
										<input required type="text" name="price" class="form-control" value="{{$product->product_price}}">
									</div>
									<div class="form-group" >
										<label>Ảnh sản phẩm</label>
										<img id="avatar" class="thumbnail" width="300px" src="layout/backend/img/new_seo-10-512.png">
										<input class="input-file" required type="file" name="img" value="{{$product->product_image}}">
									</div>
									<div class="form-group" >
										<label>Phụ kiện</label>
										<input required type="text" name="accessories" class="form-control" value="{{$product->product_phukien}}">
									</div>
									<div class="form-group" >
										<label>Bảo hành</label>
										<input required type="text" name="warranty" class="form-control" value="{{$product->product_baohanh}}">
									</div>
									<div class="form-group" >
										<label>Khuyến mãi</label>
										<input required type="text" name="promotion" class="form-control" value="{{$product->product_khuyenmai}}">
									</div>
									<div class="form-group" >
										<label>Tình trạng</label>
										<input required type="text" name="condition" class="form-control" value="{{$product->product_tinhtrang}}">
									</div>
									<div class="form-group" >
										<label>Trạng thái</label>
										<select required name="status" class="form-control">
											<option value="1" @if ($product->product_trangthai==1) selected @endif>Còn hàng</option>
											<option  value="0" @if ($product->product_trangthai==0) selected @endif>Hết hàng</option>
					                    </select>
									</div>
									<div class="form-group" >
										<label>Miêu tả</label>
										<textarea class="ckeditor" required name="description">{{$product->product_mieuta}}</textarea>
									</div>
									<div class="form-group" >
										<label>Danh mục</label>
										<select required name="cate" class="form-control">
											@foreach ($cate as $item)
											<option value="{{$item->cate_id}}" @if ($product->product_cate==$item->cate_id) selected @endif>{{$item->cate_name}}</option>
											@endforeach
										</select>
									</div>
									<div class="form-group" >
										<label>Sản phẩm nổi bật</label><br>
										Có: <input type="radio" name="featured" @if ($product->product_spdb==1) checked @endif value="1">
										Không: <input type="radio"  @if ($product->product_spdb==0) checked @endif name="featured" value="0">
									</div>
									<button class="btn btn-primary">Sửa</button>
									<a href="admin/product" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
							{{ csrf_field() }}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	@endsection