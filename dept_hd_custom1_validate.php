<?php




if(empty($_POST['check'])){
	echo "<script type='text/javascript'>alert('Select method');window.location = \"dept_hd_custom1.php\"</script>";
}
else if($_POST['check']=="1")
{
echo "<script type='text/javascript'>alert('Successful');window.location = \"dept_hd_custom21.php\"</script>";	
}
else
{
	echo "<script type='text/javascript'>alert('Successful');window.location = \"dept_hd_custom22.php\"</script>";	
}

//echo "$l1";



/* 
	if($l1=="")
	{
		
	echo "<script type='text/javascript'>alert('Select method');window.location = \"dept_hd_custom2.php?prop_id='.$x.'\"</script>";
		
	}
	else
	{
		echo "<script type='text/javascript'>alert('Successful');window.location = \"dept_hd_custom3.php?prop_id='.$x.'\"</script>";
		
		
	} */



?>