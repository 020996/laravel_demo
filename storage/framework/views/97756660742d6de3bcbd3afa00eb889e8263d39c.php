<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
    <div class="row" style="margin:50px auto;">
    	<div class="col-sm-6">
        	<form method="post">
            	<div class="form-group">
                	<label>Tên đăng nhập </label>
                    <input type="text" name="name" class="form-control" placeholder="name" required />
                </div>
                <div class="form-group">
                	<label>Password</label>
                    <input type="password" name="pass" class="form-control" placeholder="password" required />
                </div>
                <div class="form-group">
                	<label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="email" required />
                </div>
                <div class="form-group">
                	<label>Level</label>
                    <select name="level" class="form-control">
                    	<option value="1">Admin</option>
                    </select>
                </div>
                <input type="submit" name="submit" value="Đăng Ký" class="btn btn-primary" />
                <?php echo e(csrf_field()); ?>

            </form>
        </div>
    </div>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel_2\resources\views/backend/adduser.blade.php ENDPATH**/ ?>