<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>System Login</title>

	<link href="<?php echo base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
	<script src="<?php echo base_url ('js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url ('js/jquery-1.11.3.min.js') ?>"></script>
</head>
<body>
</br>
</br>
	<div class="row col-md-12">
		<div class="container">
			<form class="form-horizontal" method="post" action="<?php echo base_url ('index.php/login'); ?>">
			  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
				    <div class="col-sm-6">
				     	<input type="text" class="form-control" name="username" id="inputEmail3" placeholder="Username">
			   		</div>
			  </div>


			   <form class="form-horizontal">
			 <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-6">
				    <input type="password" class="form-control" name="password" id="inputEmail3" placeholder="Password">
			   </div>
	  		</div>

	  		 <div class="form-group">
    			<div class="col-sm-offset-2 col-sm-10">
      				<button type="submit" class="btn btn-default">Sign in</button>
   				 </div>
  			</div>
							
		
	</div>
		
	</div>

</body>
</html>


