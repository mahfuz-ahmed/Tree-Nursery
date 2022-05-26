<!DOCTYPE html>
<html>
<head>
	 <script type="text/javascript">
        var BASE_URL="<?php echo base_url() ?>";
    </script>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>tools/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>tools/fonts/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>tools/css/auth.css">
</head>
<body>
<div class="container">
	<div class="title_box">
		<div class="row">
			<div class="col-sm-12">
	<nav class="navbar navbar-expand-sm navbar-dark btn-dark btn-info mb-3">
			        <div class="container">
			            <a class="navbar-brand" href="<?php echo base_url() ?>"><b><font face="FreeMono">PLENTIFUL</font></b></a>
			            <ul class="navbar-nav">
			                <li class="nav-item">
			                    <a class="navbar-brand" href="<?php echo base_url() ?>"><font face="FreeMono">Home</font></a>
			                </li>
			                <li class="nav-item">
			                    <a class="navbar-brand" href="<?php echo base_url() ?>"><font face="FreeMono">Contact</font></a>
			                </li>
			                <li class="nav-item">
			                    <a class="navbar-brand" href="<?php echo base_url().'home/login' ?>"><i class="fa fa-sign-in"></i></a>
			                </li>
			            </ul>
			        </div>
			    </nav>
			</div>
		</div>
	</div>
	<div class="login_box">
		<form action="<?php echo base_url().'index.php/home/login' ?>" class="login_user">
		<div class="row">
			<div class="col-sm-12">
				<div class="form-group">
					<label>Enter Username</label>
					<input type="text" name="email" class="form-control" placeholder="username@gmail.com"> 
				</div>
				<div class="form-group">
					<label>Enter Password</label>
					<input type="password" name="password" class="form-control" placeholder="password"> 
				</div> 
				<div class="form-group">
					<button type="submit" class="btn btn-dark">Login</button>
					<a href="javascript:;" class="pull-right"><span class="text-dark">Forgot Password</span></a>
				</div>
			</div>
		</div>
		</form>
		<div class="row">
			<div class="col-sm-12">
				<center><a href="<?php  echo base_url().'home/signup' ?>">Create New Account Click Here <span class="text-dark"><b>Sign Up</b></span></a></center>
			</div>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="<?php echo base_url() ?>tools/js/swiper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>tools/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>tools/js/auth.js"></script>
</body>
</html>