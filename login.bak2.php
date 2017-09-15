<?php
	ob_start();
	session_start();
	include('db_config.php');
	
	// it will never let you open index(login) page if session is set
	if ( isset($_SESSION['user'])!="" ) {
		header("Location: admin_index.php");
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
		
			$res="SELECT * FROM uni_admin WHERE username='$name' and password='$pass'";
			$result=mysql_query($res);
			$count = mysql_num_rows($result); // if uname/pass correct it returns must be 1 row
			
			
    
			
			
			
			if (mysql_num_rows($query) != 0) {
					while($row=mysql_fetch_array($result))
					{
				$_SESSION['user'] = $row['username'];
				header("Location:admin_index.php");
					}
			} else {
				$errMSG = "Incorrect Credentials, Try again...";
			}
				
		}
		
	}
	
	
	
	
	
	
	
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>IMS Login</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Inventory Management System</h1>
      </div>
	  <?php
			if ( isset($errMSG) ) {
				
				?>
				 <?php echo $errMSG; ?>
                
                <?php
			}
			?>
	  
	  
	  
	  
	  
      <div class="login-box">
	  
	   
	  
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"autocomplete="off" class="login-form">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
			
            <input type="text" placeholder="username" name="name" autofocus class="form-control"/>
			<span class="text-danger"><?php echo $nameError; ?></span>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input type="password" placeholder="Password" class="form-control" name="pass"/>
			<span class="text-danger"><?php echo $passError; ?></span>
          </div>
          <div class="form-group">
            <div class="utility">
              
              <p class="semibold-text mb-0"><a href="register.php">Create an account</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" name='btn-login' button type="submit">SIGN IN <i class="fa fa-sign-in fa-lg"></i></button>
          </div>
        </form>
       
      </div>
    </section>
  
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/essential-plugins.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins/pace.min.js"></script>
  <script src="js/main.js"></script>
  </body>
</html>
<?php ob_end_flush(); ?>