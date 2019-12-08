@extends('layout_fontend.master')
@section('main')
	<link rel="stylesheet" href="layout/frontend/css/details.css">
					<div id="wrap-inner">
						<div id="product-info">
							<div class="clearfix"></div>
							<h3>{{$product->product_name}}</h3>
							<div class="row">
								<div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
									<img style="width: 250px;margin-top: 50px;" src="img/{{ $product->product_image}}">
								</div>
								<div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
									<p>Giá: <span class="price">{{number_format("$product->product_price",0,",",".")}}</span></p>
									<p>Bảo hành: {{$product->product_baohanh}}</p> 
									<p>Phụ kiện: {{$product->product_phukien}}</p>
									<p>Tình trạng: {{$product->product_tinhtrang}}</p>
							     	<p>Khuyến mại: {{$product->product_khuyenmai}}</p>
									<p>Còn hàng: @if ($product->product_trangthai==1)
										Còn hàng
									@else
										Hết Hàng
									@endif</p>
									<p class="add-cart text-center"><a href="cart/add/{{$product->product_id}}">Đặt hàng online</a></p>
								</div>
							</div>							
						</div>
						<div id="product-detail">
							<h3>Chi tiết sản phẩm</h3>
							<p>{!!$product->product_mieuta!!}</p>
						</div>
						<div id="comment">
							<h3>Bình luận</h3>
							<div class="col-md-9 comment">
								<form action="" method="POST">
									<div class="form-group">
										<label for="email">Email:</label>
										<input required type="email" class="form-control" id="email" name="email">
									</div>
									<div class="form-group">
										<label for="name">Tên:</label>
										<input required type="text" class="form-control" id="name" name="name">
									</div>
									<div class="form-group">
										<label for="cm">Bình luận:</label>
										<textarea required rows="10" id="cm" class="form-control" name="content"></textarea>
									</div>
									<div class="form-group text-right">
										<button type="submit" class="btn btn-default">Gửi</button>
									</div>
									{{ csrf_field() }}
								</form>
							</div>
						</div>
					</div>
					<div id="comment-list">
						@foreach ($comment as $item)
						<ul>
							<li class="com-title">
								{{$item->com_name}}
								<br>
							<span>{{date('d/m/Y H:i',strtotime($item->created_at))}}</span>	
							</li>
							<li class="com-details">
								{{$item->com_content}}
							</li>
						</ul>
						@endforeach
					</div>					
					<!-- end main -->
@endsection
