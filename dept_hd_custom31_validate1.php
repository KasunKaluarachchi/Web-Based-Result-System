 <?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="admin"){
      header('Location: login.php?err=2');
    }
?>
 
 
 
 
 
 <?php 

 include('db_config.php');
  
  
    if(isset($_POST['addbtn']))
    {
		 $dd=$_POST['myHiddenValue'];  

	for($j=1; $j<$dd+1; $j++)
	{
				
	
			$f1 =$_POST['fn'.$j.''];
			
				$p =$_POST['txt_lec'.$j.''];
		$q =$_POST['txt_year'.$j.''];
			
		$array[$j]=	$f1 =$_POST['fn'.$j.''];
			
			
	}
	
	$check=TRUE;
			for($i=1; $i<$dd+1; $i++)
			{		
			for($j=1; $j<$dd+1; $j++)
				{		
					if($i==$j)		
					{
						
					}
					else
					{
						
						if($array[$i]==$array[$j])
						{
							$check=FALSE;
							echo "<script type='text/javascript'>alert('Same objects are repeated');window.location = \"dept_hd_custom31.php?prop_id='.$dd.'\"</script>";
						}
					}
								
							
				}	
			}
			$sum=0;
			for($j=1; $j<$dd+1; $j++)
			{
						
						$p =$_POST['txt_lec'.$j.''];
						$q =$_POST['txt_year'.$j.''];
						$sum = $sum + $p*$q;
						
			}
			if($sum!=100)
			{
				$check=FALSE;
			echo "<script type='text/javascript'>alert('Total marks not equal to 100 ');window.location = \"dept_hd_custom31.php?prop_id='.$dd.'\"</script>";
			}
   
		$format_type=1;
		//$query_dep="SELECT `dep_id` FROM `signup` where username='".$_SESSION['sess_username']."'";
		
		 
		$user = $_SESSION['sess_username'];
    $query_dep = "SELECT signup.dep_id FROM signup WHERE signup.username='$user'";

		$result_dep= mysql_query($query_dep);
		 while($row_dep = mysql_fetch_array($result_dep))
			{
				
				$dept_id = $row_dep['dep_id'];
			}	
	
		
   
   
 $a1=$a4=$a7=$a10=$a13=$a16=$a19=$a22=null;
      $a2=$a3=$a5=$a6=$a8=$a9=$a11=$a12=$a14=$a15=$a17=$a18=$a20=$a21=$a23=$a24=0;
   
		for($j=1; $j<$dd+1; $j++)
			{
			if($j==1 && $j<$dd+1)
			{
				$a1=$_POST['fn'.$j.''];
				$a2=$_POST['txt_lec'.$j.''];
				$a3=$_POST['txt_year'.$j.''];
				$b1=$a1.'-'.$a2;
				if($j==$dd)
				{
					$b=$b1;
				}
			}
			if($j==2 && $j<$dd+1)
			{
				$a4=$_POST['fn'.$j.''];
				$a5=$_POST['txt_lec'.$j.''];
				$a6=$_POST['txt_year'.$j.''];
				$b2=$b1.'|'.$a4.'-'.$a5;
				if($j==$dd)
				{
					$b=$b2;
				}
				
			}
			if($j==3 && $j<$dd+1)
			{
				$a7=$_POST['fn'.$j.''];
				$a8=$_POST['txt_lec'.$j.''];
				$a9=$_POST['txt_year'.$j.''];
				$b3=$b2.'|'.$a7.'-'.$a8;
				if($j==$dd)
				{
					$b=$b3;
				}
			}
			if($j==4 && $j<$dd+1)
			{
				$a10=$_POST['fn'.$j.''];
				$a11=$_POST['txt_lec'.$j.''];
				$a12=$_POST['txt_year'.$j.''];
				$b4=$b3.'|'.$a10.'-'.$a11;
				if($j==$dd)
				{
					$b=$b4;
				}
			}
			if($j==5 && $j<$dd+1)
			{
				$a13=$_POST['fn'.$j.''];
				$a14=$_POST['txt_lec'.$j.''];
				$a15=$_POST['txt_year'.$j.''];
				$b5=$b4.'|'.$a13.'-'.$a14;
				if($j==$dd)
				{
					$b=$b5;
				}
			}
			if($j==6 && $j<$dd+1)
			{
				$a16=$_POST['fn'.$j.''];
				$a17=$_POST['txt_lec'.$j.''];
				$a18=$_POST['txt_year'.$j.''];
				$b6=$b5.'|'.$a16.'-'.$a17;
				if($j==$dd)
				{
					$b=$b6;
				}
			}
			if($j==7 && $j<$dd+1)
			{
				$a19=$_POST['fn'.$j.''];
				$a20=$_POST['txt_lec'.$j.''];
				$a21=$_POST['txt_year'.$j.''];
				$b7=$b6.'|'.$a19.'-'.$a20;
				if($j==$dd)
				{
					$b=$b7;
				}
			}
			if($j==8 && $j<$dd+1)
			{
				$a22=$_POST['fn'.$j.''];
				$a23=$_POST['txt_lec'.$j.''];
				$a24=$_POST['txt_year'.$j.''];
				$b8=$b7.'|'.$a22.'-'.$a23;
				if($j==$dd)
				{
					$b=$b8;
				}
			}
			
		}
		if($check==TRUE)
		{
		 $query ="INSERT INTO `evaluation_method`( `dep_id`, `custom_id`, `no_of_objs`, `obj1`, `no_obj1`, `con_obj_1`, `w1`, `obj2`, `no_obj2`, `con_obj_2`, `w2`, `obj3`, `no_obj3`, `con_obj_3`, `w3`, `obj4`, `no_obj4`, `con_obj_4`, `w4`, `obj5`, `no_obj5`, `con_obj_5`, `w5`, `obj6`, `no_obj6`, `con_obj_6`, `w6`, `obj7`, `no_obj7`, `con_obj_7`, `w7`, `obj8`, `no_obj8`, `con_obj_8`, `w8`) 
		 VALUES ('$dept_id','1','$dd','$a1','$a2','$a2','$a3','$a4','$a5','$a5','$a6','$a7','$a8','$a8','$a9','$a10','$a11','$a11','$a12','$a13','$a14','$a14','$a15','$a16','$a17','$a17','$a18','$a19','$a20','$a20','$a21','$a22','$a23','$a23','$a24')";
	        $result =mysql_query($query);
			
			
		 $query2=	"INSERT INTO `dis_method`(`dep_id`, `custom_id`, `srt_format`) VALUES ('$dept_id','1','$b')";
			 $result2 =mysql_query($query2);
			 
		echo "<script type='text/javascript'>alert('Successfully created');window.location = \"dept_hd_view_method.php\"</script>";
		}
   
	}
   
   
  ?> 