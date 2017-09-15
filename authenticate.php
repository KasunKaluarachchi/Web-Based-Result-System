<?php 
	require 'db_config.php';

	session_start();

	$username = "";
	$password = "";
	
	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}
	if (isset($_POST['password'])) {
		$password = $_POST['password'];
		$password =md5($password);
	}
	
	echo $username ." : ".$password;

	$q = 'SELECT * FROM signup WHERE username=:username AND password=:password';

	$query = $dbh->prepare($q);

	$query->execute(array(':username' => $username, ':password' => $password));


	if($query->rowCount() == 0){
		header('Location: login.php?err=1');
	}else{

		$row = $query->fetch(PDO::FETCH_ASSOC);

		session_regenerate_id();
		$_SESSION['sess_user_id'] = $row['id'];
		$_SESSION['sess_username'] = $row['username'];
        $_SESSION['sess_userrole'] = $row['type'];

        echo $_SESSION['sess_userrole'];
		session_write_close();

		if( $_SESSION['sess_userrole'] == "admin"){
			header('Location: admin_index.php');
		}
		else if( $_SESSION['sess_userrole'] == "dept_head"){
			header('Location: dept_hd_index.php');
		}
		else if( $_SESSION['sess_userrole'] == "fact_head"){
			header('Location: fact_hd_index.php');
		}
		else{
			header('Location: lec_index.php');
		}
		
		
	}


?>