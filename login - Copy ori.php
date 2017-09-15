<?php
	ob_start();
	session_start();
	include('db_config.php');
	
	// it will never let you open index(login) page if session is set
	if ( isset($_SESSION['user'])!="" ) {
		header("Location: admin_index.php");
		exit;
	}
	elseif ( isset($_SESSION1['user'])!="" ) {
		header("Location: fact_index.php");
		exit;
	}
	elseif ( isset($_SESSION2['user'])!="" ) {
		header("Location: dept_index.php");
		exit;
	}
	elseif ( isset($_SESSION3['user'])!="" ) {
		header("Location: lec_index.php");
		exit;
	}
	$nameError ="";
	$passError ="";
	$emailError="";
	$error = false;
	
	if( isset($_POST['btn-login']) ) {	
		
		// prevent sql injections/ clear user invalid inputs
		$name = trim($_POST['name']);
		$name = strip_tags($name);
		$name = htmlspecialchars($name);
		
		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		$pass =md5($pass);
		
		$admin = trim("admin");
		$admin = strip_tags($admin);
		$admin = htmlspecialchars($admin);
		
		$fact_head = trim('fact_head');
		$fact_head = strip_tags($fact_head);
		$fact_head = htmlspecialchars($fact_head);
		
		$dept_head = trim('dept_head');
		$dept_head = strip_tags($dept_head);
		$dept_head = htmlspecialchars($dept_head);
		
		$lecturer = trim('lecturer');
		$lecturer = strip_tags($lecturer);
		$lecturer = htmlspecialchars($lecturer);
		
		// prevent sql injections / clear user invalid inputs
		
		if(empty($name)){
			$error = true;
			$nameError = "Please enter your name.";
		}
		
		
		if(empty($pass)){
			$error = true;
			$passError = "Please enter your password.";
		}
		
		// if there's no error, continue to login
		if (!$error) {
			
			 // password hashing using SHA256
		
			$res="SELECT username,password FROM signup WHERE username='$name' and password='$pass' ";
			$result=mysql_query($res);
			$count = mysql_num_rows($result);			// if uname/pass correct it returns must be 1 row
			
			
			$res1="SELECT username,password FROM `signup` WHERE username='$name' and password='$pass' ";
			$result1=mysql_query($res1);
			$count1 = mysql_num_rows($result1);
			
			$res2="SELECT username,password FROM `signup` WHERE username='$name'  and password='$pass'";
			$result2=mysql_query($res1);
			$count2 = mysql_num_rows($result1);
			
			$res3="SELECT username,password,type FROM `signup` WHERE username='$name' and password='$pass' ";
			$result3=mysql_query($res1);
			$count3 = mysql_num_rows($result1);
			
			if (mysql_num_rows($result) != 0) 
			{
					while($row=mysql_fetch_array($result))
					{
				$_SESSION['user'] = $row['username'];
				header("Location:admin_index.php");
					}
			}
			
			elseif (mysql_num_rows($result1) != 0) 
			{
					while($row=mysql_fetch_array($result1))
					{
				$_SESSION1['user'] = $row['username'];
				header("Location:fact_index.php");
					}
			}
			
			elseif (mysql_num_rows($result2) != 0) 
			{
					while($row=mysql_fetch_array($result2))
					{
				$_SESSION2['user'] = $row['username'];
				header("Location:dept_index.php");
					}
			}
			
			elseif (mysql_num_rows($result3) != 0) 
			{
					while($row=mysql_fetch_array($result3))
					{
				$_SESSION3['user'] = $row['username'];
				header("Location:lec_index.php");
					}
			}
			else 
				{
				$errMSG = "$name $pass $count";
				}
				
		}
		
	}
	
	
	
	
	
	
	
?>






<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page - Ace Admin</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red"></span>
									<span class="white" id="id-text2">University of Jaffna</span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy; Web Based Result System</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Please Enter Your Information
											</h4>
												
											<div class="space-6"></div>
												
											<?php
											if ( isset($errMSG) ) {
												
												?>
												 <?php echo $errMSG; ?>
												
												<?php
											}
											?>
												
											<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"autocomplete="off" class="login-form">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="name" placeholder="Username" />
															<i class="ace-icon fa fa-user"></i>
															<?php echo $nameError; ?>
															
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Password" name="pass"/>
															<i class="ace-icon fa fa-lock"></i>
															<?php echo $passError; ?>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Remember Me</span>
														</label>

														<button class="width-35 pull-right btn btn-sm btn-primary" name='btn-login' type="submit">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											
										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div>
												<a href="#" data-target="#forgot-box" class="forgot-password-link">
													<i class="ace-icon fa fa-arrow-left"></i>
													I forgot my password
												</a>
											</div>

											
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key"></i>
												Retrieve Password
											</h4>

											<div class="space-6"></div>
											<p>
												Enter your email and to receive instructions
											</p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="ace-icon fa fa-lightbulb-o"></i>
															<span class="bigger-110">Send Me!</span>
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												Back to login
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.forgot-box -->

								<!-- /.signup-box -->
							</div><!-- /.position-relative -->

							<!-- <div class="navbar-fixed-top align-right">
								<br />
								&nbsp;
								<a id="btn-login-dark" href="#">Dark</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-blur" href="#">Blur</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-light" href="#">Light</a>
								&nbsp; &nbsp; &nbsp;
							</div> -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
	</body>
</html>
