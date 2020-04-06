@extends('layout.master')
	@section('main')
        	<div>@include('error.note')</div>
        	<table class="table table-striped" style="margin:50px 0px 0px 300px; width:76%">
            	<tr id="tbl-first-row">
                	<td>Stt</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Số điện thoại</td>
                    <td>Địa chỉ</td>
                    <td>Sản phẩm đặt mua</td>
                    <td>Số lượng mua</td>
                    <td>Giá của sản phẩm</td>
                    <td>Tổng số tiền</td>
                    <td>Ngày đặt mua</td>
                    <td>Xóa</td>
                </tr>
                <?php $stt = 1 ?>
                @foreach ($detail as $item)
                <tr>
                    <td>{{$stt}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->dress}}</td>
                    <td>{{$item->product_name}}</td>
                    <td>{{$item->qty}}</td>
                    <td>{{number_format("$item->unit_price",0,",",".")}}đ</td>
                    <td>{{number_format("$item->tong",0,",",".")}}đ</td>
                    <td>{{date('Y-m-d', strtotime($item->created_at))}}</td>
                    <td><a href="admin/detail/delete/{{$item->id_id}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a></td>

                </tr>
                <?php $stt++ ?>
                @endforeach
			</table>

@endsection

