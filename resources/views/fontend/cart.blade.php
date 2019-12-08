@extends('layout_fontend.master')
	@section('main')
	<link rel="stylesheet" href="layout/fontend/css/cart.css">
	<script type="text/javascript">
	function updateCart(quantity,id){
		var data_post={
                    "_token":"{{csrf_token()}}",
                    "id":id,
                    "quantity":quantity,
                };
       $.ajax({
		   type: "post",
		   url: "{{asset('cart/update')}}",
		   data: data_post,
		   dataType: "json",
		   success: function (response) {
			   location.reload;
		   }
	   });
	}
	</script>
					<div id="wrap-inner">
						<div id="list-cart">
							<h3 style="color:red">Giỏ hàng</h3>
							@include('error.note')
							@if ( Cart::getContent()->count()>0)
							<form>
								<table class="table table-bordered .table-responsive text-center">
									<tr class="active">
										<td width="11.111%">Ảnh mô tả</td>
										<td width="22.222%">Tên sản phẩm</td>
										<td width="22.222%">Số lượng</td>
										<td width="16.6665%">Đơn giá</td>
										<td width="16.6665%">Thành tiền</td>
										<td width="11.112%">Xóa</td>
									</tr>
									@foreach ($items as $item)
									<tr>
										<td><img class="img-responsive" style="width:100%" src="img/{{$item->attributes->image}}"></td>
										<td>{{$item->name}}</td>
										<td>
											<div class="form-group">
												<input class="form-control" type="number" value="{{$item->quantity}}" onchange="updateCart(this.value,{{$item->id}})">
											</div>
										</td>
										<td><span class="price">{{number_format("$item->price",0,",",".")}} VNĐ</span></td>
										<td><span class="price">{{number_format($item->price*$item->quantity,0,",",".")}}VNĐ</span></td>
										<td><a href="cart/delete/{{$item->id}}">Xóa</a></td>
									</tr>
									@endforeach
								</table>
								<div class="row" id="total-price">
									<div class="col-md-6 col-sm-12 col-xs-12">										
											Tổng thanh toán: <span class="total-price">{{number_format(Cart::getSubTotal(),0,",",".")}} VNĐ</span>
																													
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<a href="" class="btn btn-success">Mua tiếp</a>
										<a href="cart/showcart" class="btn btn-primary">Cập nhật</a>
										<a href="cart/delete/all" class="btn btn-danger">Xóa giỏ hàng</a>
									</div>
								</div>
							</form>             	                	
						</div>
						 <div id="xac-nhan">
								<h3>Xác nhận mua hàng</h3>
								<form method="POST">
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
									{{ csrf_field() }}
								</form>
							</div>
						 @else
							<h2> Giỏ Hàng Rỗng</h2>
						 @endif
						
					</div>
@endsection