
	@extends('layout.master')
	@section('main')
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
						@include('error.note')
						<form action="" method="POST">
						<div class="panel-body">
							<div class="form-group">
								<label>Tên danh mục:</label>
								<input required type="text" name="name" class="form-control" placeholder="Tên danh mục...">
								<button style="margin: 11px 0px -20px 130px;width: 150px;"  class="btn btn-primary" type="submit">Thêm mới</button>
							</div>
						</div>
						{{ csrf_field() }}
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
								  @foreach ($cate as $cates)
				              	<tbody>
									<td>{{$cates->cate_name}}</td>
									<td>
			                    		<a href="admin/category/edit/{{$cates->cate_id}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
			                    		<a href="admin/category/delete/{{$cates->cate_id}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
			                  		</td>
			                  	</tr> 
								</tbody>
								@endforeach
				            </table>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
    @endsection
