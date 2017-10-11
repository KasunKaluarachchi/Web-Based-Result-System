<?php


$x =$_POST['inputInfo1'];
$y =$_POST['inputInfo2'];

$n1=(int)$x;
$n2=(int)$y;
$t=$n1+$n2;


	if($n2=="" && $n1!=""&& $n1<9)
	{
		
	echo "<script type='text/javascript'>alert('Use method 1');window.location = \"dept_hd_custom1.php\"</script>";
		
	}
	
	
	if($t>8||$t<1)
	{
	echo "<script type='text/javascript'>alert('Sum of the object range must 1-8');window.location = \"dept_hd_custom22.php\"</script>";
		
	}
	
	if($t<8||$t>0)
	{
		echo "<script type='text/javascript'>alert('Successful');window.location = \"dept_hd_custom32.php?prop_id='.$n1.'?prop_id='.$n2.'\"</script>";
		
		
	}
	

?>