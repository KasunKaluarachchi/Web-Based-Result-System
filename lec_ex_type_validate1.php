<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];

    if(!isset($_SESSION['sess_username']) && $role!="admin"){
      header('Location: login.php?err=2');
    }
?>


<?php

$bool=TRUE;

if(isset($_POST['position']))
{

if($_GET['position']="warden")
{
	$x=$_POST['txt_year'];
	
$bool=FALSE;
$_SESSION['e_fom']=$x;
echo "<script type='text/javascript'>alert('Successful');window.location = \"lec_ex_anlyz.php\"</script>";
}
}
if(isset($_POST['position1']))
{
if($_GET['position1']="subwarden")
{

}

}
if($bool==TRUE)
{
	
echo "<script type='text/javascript'>alert('Invalid Input');window.location = \"lec_ex_type.php\"</script>";	
}


?>