<!doctype html>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title>Petty Cash - Registration</title>
	    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <link rel="apple-touch-icon" href="apple-icon.png">
	    <link rel="shortcut icon" href="favicon.ico">

	    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.css">
	    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themify-icons.css">
	    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flag-icon.min.css">
	    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/cs-skin-elastic.css">
	    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-select.less"> -->
	    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/scss/style.css">

	    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

	    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

	</head>
	<body class="bg-dark">


	    <div class="sufee-login d-flex align-content-center flex-wrap">
	        <div class="container">
	            <div class="login-content">
	                <div class="login-logo">
	                    <a href="index.html">
	                        <img class="align-content" href="/" src="<?php echo base_url(); ?>assets/images/logo.png" alt="">
	                    </a>
	                </div>
	                <div class="login-form">
	                    <form method="post" action="<?php echo base_url('login/register'); ?>">
	                        <div class="form-group">
	                            <label>User Name</label>
	                            <input type="email" class="form-control" placeholder="User Name" name="full_name">
	                        </div>
	                        <div class="form-group">
	                            <label>Email address</label>
	                            <input type="email" class="form-control" placeholder="Email" name="email">
	                        </div>
	                        <div class="form-group">
	                            <label>Password</label>
	                            <input type="password" class="form-control" placeholder="Password" name="password">
	                        </div>
	                         <div class="form-group">
								<input class="form-control" placeholder="Date of Birth" name="date_of_birth" type="number" value="">
							</div> 
	                        <div class="form-group">
	                        	<label>Mobile Number</label>
								<input class="form-control" placeholder="Mobile No" name="phone_number" type="text" value="">
							</div>
	                        <div class="checkbox">
	                            <label>
	                                <input type="checkbox"> Agree the terms and policy
	                            </label>
	                        </div>
	                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>

	                        <div class="register-link m-t-15 text-center">
	                            <p>Already have account ? <a href="<?php echo base_url('login'); ?>"> Sign in</a></p>
	                        </div>

	                        <?php
							$error_msg=$this->session->flashdata('error_msg');
							if($error_msg){
								echo $error_msg;
							}
							?>

							<?php echo validation_errors(); ?>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>


	    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-2.1.4.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/lib/popper-js/dist/umd/popper.min.js"></script>
	    <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
	    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>


	</body>
</html>