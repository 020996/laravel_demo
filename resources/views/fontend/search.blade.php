@extends('layout_fontend.master')
@section('main')
	<link rel="stylesheet" href="layout/fontend/css/search.css">
					 <div id="wrap-inner">
						<div class="products">
							<h3>Tìm kiếm với từ khóa: <span>{{$seach}}</span></h3>
							<div class="product-list row">
										@foreach ($products as $item)
										<div class="product-item col-md-3 col-sm-6 col-xs-12">
											<a href="#"><img src="img/{{ $item->product_image}}" class="img-thumbnail"></a>
											 <p><a href="#">{{$item->product_name}}</a></p>
											 <p class="price">{{number_format("$item->product_price",0,",",".")}}VNĐ</p>	  
											<div class="marsk">
												<a href="{{asset('detail/'.$item->product_id.'/'.$item->product_slug.'.html')}}">Xem chi tiết</a>
											</div>                      	                        
										</div> 
										@endforeach                                 
							</div>                	                	
						</div>

						<div id="pagination">
							<ul class="pagination pagination-lg justify-content-center">
									{{$products->links()}}
							</ul>
						</div>
					</div>
@endsection
