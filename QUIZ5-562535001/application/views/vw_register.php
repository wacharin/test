<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>System Register</title>

	<link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet">
  	<script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
  	<script src="<?php echo base_url('js/jquery-1.11.3.min.js');?>"></script>

</head>
<body>
</br>
</br>

 		<form class="form-horizontal" method="post" action="<?php echo base_url('index.php/register');?>">
			 <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Username :</label>
					<div class="col-sm-6">
					    <input type="text" class="form-control" name="username" id="inputEmail3" placeholder="username">
				   </div>
			  </div>

			    <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Password :</label>
					<div class="col-sm-6">
					    <input type="password" class="form-control" name="password" id="inputEmail3" placeholder="password">
				   </div>
			   </div>

			    <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Name :</label>
					<div class="col-sm-6">
					    <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="name">
				   </div>
			   </div>

			    <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Lastname :</label>
					<div class="col-sm-6">
					    <input type="text" class="form-control" name="lastname" id="inputEmail3" placeholder="lastname">
				   </div>
			   </div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-13">
						<button type="submit" class="btn btn-default">เพิ่มข้อมูล</button>
					</div>
				</div>

		</form>



	 
</body>
</html>