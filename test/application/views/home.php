<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('css/bootstrap-theme.min.css');?>">
<script src="<?php echo base_url('js/jquery-1.11.2.min.js');?>"></script>
<script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>

</head>

<body>
	<nav class=" navbar-default ">
		<div class="container">
			<div class="navbar-header ">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="‪#‎bs‬-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url('index.php/find');?> ">ค้นหา</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-lift">
					<li class="hidden">
						<a href="‪#‎page‬-top"></a>
					</li>
					<li class="page-scroll">
						<a href="<?php echo base_url('index.php/Checklogin');?> ">เข้าสู่ระบบ</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	</br>
	</br>
		<div class="row">
			<div class="container">
				<form class="form-horizontal" role="form" method="post" action="<?php echo base_url('index.php/find');?>" >
					<div class="form-group dd">
						<label for="inputEmail3" class="col-sm-2 control-label ">ค้นหา</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" name="name">
						</div>
						<button type="submit" class="btn btn-info">ค้นหา</button>
					</div>

				</form>
			</div>
		</div>
		<div class="row vv">
		<?php

		if($book)
		{
			foreach($book->result() as $lb)
			{
				echo 'รหัสหนังสือ :'.$lb->bookid.'<br>';
				echo 'ชื่อหนังสือ :'.$lb->bookname.'<br>';
				echo 'ชื่อผู้แต่ง :'.$lb->bookauthor.'<br>';
				echo '###############################'.'<br>';
			}
		}
		else
		{
		}

		?>
		</div>
</body>
</html>