<?php


$x =$_POST['inputInfo'];
$n=(int)$x;
	
	if($x=="")
	{
		
	echo "<script type='text/javascript'>alert('Empty field');window.location = \"dept_hd_custom21.php\"</script>";
		
	}
	if($n>8||$n<=0)
	{
		echo "<script type='text/javascript'>alert('Objects range must 1-8');window.location = \"dept_hd_custom21.php\"</script>";
		
		
	}
	if($n<=8||$n>0)
	{
		echo "<script type='text/javascript'>alert('Successful');window.location = \"dept_hd_custom31.php?prop_id='.$n.'\"</script>";
		
		
	}


?>