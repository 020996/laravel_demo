@extends('layout.master')
	@section('main')
<style>
#navbar{
	margin-top:50px;}
#tbl-first-row{
	font-weight:bold;}
#logout{
	padding-right:30px;}		
</style>
</head>
<body>

<div class="container">
    <div class="row">
    	<div class="col-sm-12">
        	<div>@include('error.note')</div>
        	<table style="width:100%; margin: 50px 0px 0px 110px;" class="table table-striped">
            	<tr id="tbl-first-row">
                	<td width="5%">Stt</td>
                    <td width="30%">Name</td>
                    <td width="25%">Email</td>
                    <td width="10%">Sản phẩm</td>
                    <td width="25%">Comment</td>
                    <td width="15%">Xóa</td>
                </tr>
                <?php $stt = 1 ?>
                @foreach ($comment as $item)
                <tr>
                    <td>{{$stt}}</td>
                    <td>{{$item->com_name}}</td>
                    <td>{{$item->com_email}}</td>
                    <td>{{$item->product->product_name}}</td>
                    <td>{{$item->com_content}}</td>
                    <td><a href="admin/comment/delete/{{$item->id}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a></td>
                </tr>
                <?php $stt++ ?>
                @endforeach
			</table>
        </div>
    </div>
</div>
</body>
@endsection

