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
        	<table style="width:60%; margin: 50px 0px 0px 200px;" class="table table-striped">
            	<tr id="tbl-first-row">
                	<td width="5%">Stt</td>
                    <td width="30%">Fullname</td>
                    <td width="25%">Username</td>
                    <td width="25%">Email</td>
                    <td width="5%">Level</td>
                    <td width="5%">Delete</td>
                </tr>
                <?php $stt = 1 ?>
                @foreach ($user as $item)
                <tr>
                    <td>{{$stt}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->password}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->level}}</td>
                    <td><a href="admin/user/delete/{{$item->id}}">Delete</a></td>
                </tr>
                <?php $stt++ ?>
                @endforeach
			</table>
        </div>
    </div>
</div>
</body>
@endsection

