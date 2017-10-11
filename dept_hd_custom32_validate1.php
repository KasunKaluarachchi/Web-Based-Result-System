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
$dd1=$_POST['myHiddenValue1'];		 




	for($j=1; $j<$dd+1; $j++)
	{
				
	
		$f1 =$_POST['fn'.$j.''];
		$p =$_POST['txt_lec'.$j.''];
		$q =$_POST['txt_year'.$j.''];
		$array[$j]=$_POST['fn'.$j.''];
			
			
	}
	
	
		for($j=1; $j<$dd1+1; $j++)
	{
				
	
		$f12 =$_POST['fn1'.$j.''];
		$p1 =$_POST['txt_lec1'.$j.''];
		$q1 =$_POST['txt_year1'.$j.''];
		$q12 =$_POST['txt_year12'.$j.''];
			
		$array1[$j]=$_POST['fn1'.$j.''];
			
			
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
							echo "<script type='text/javascript'>alert('Same objects are repeated');window.location = \"dept_hd_custom32.php?prop_id='.$dd.'?prop_id='.$dd1.'\"</script>";
						}
					}
								
							
				}	
			}
			
			
				for($i=1; $i<$dd1+1; $i++)
			{		
			for($j=1; $j<$dd1+1; $j++)
				{		
					if($i==$j)		
					{
						
					}
					else
					{
						
						if($array1[$i]==$array1[$j])
						{
							$check=FALSE;
							echo "<script type='text/javascript'>alert('Same objects are repeated');window.location = \"dept_hd_custom32.php?prop_id='.$dd.'?prop_id='.$dd1.'\"</script>";
						}
					}
								
							
				}	
			}
			
				for($i=1; $i<$dd1+1; $i++)
			{		
			for($j=1; $j<$dd1+1; $j++)
				{
					
					if($array[$i]==$array1[$j])
						{
							$check=FALSE;
							echo "<script type='text/javascript'>alert('Same objects are repeated');window.location = \"dept_hd_custom32.php?prop_id='.$dd.'?prop_id='.$dd1.'\"</script>";
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
			
				for($j=1; $j<$dd1+1; $j++)
			{
						
						$p1 =$_POST['txt_year1'.$j.''];
						$q1 =$_POST['txt_year12'.$j.''];
						$sum = $sum + $p1*$q1;
						
			}
			
			
			if($sum!=100)
			{
				$check=FALSE;
			echo "<script type='text/javascript'>alert('Total marks not equal to 100 ');window.location = \"dept_hd_custom32.php?prop_id='.$dd.'?prop_id='.$dd1.'\"</script>";
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
	
		
   
   
 $a1=$a5=$a9=$a13=$a17=$a21=$a25=$a29=null;
      $a2=$a3=$a4=$a6=$a7=$a8=$a10=$a11=$a12=$a14=$a15=$a16=$a18=$a19=$a20=$a22=$a23=$a24=$a26=$a27=$a28=$a30=$a31=$a32=0;
   
		for($j=1; $j<$dd+1; $j++)
			{
			if($j==1 && $j<$dd+1)
			{
				$a1=$_POST['fn'.$j.''];
				$a2=$_POST['txt_lec'.$j.''];
				$a3=$_POST['txt_lec'.$j.''];
				$a4=$_POST['txt_year'.$j.''];
				$b1=$a1.'-'.$a2;
				if($j==$dd)
				{
					$b=$b1;
				}
				
			}
			if($j==2 && $j<$dd+1)
			{
				$a5=$_POST['fn'.$j.''];
				$a6=$_POST['txt_lec'.$j.''];
				$a7=$_POST['txt_lec'.$j.''];
				$a8=$_POST['txt_year'.$j.''];
				$b2=$b1.'|'.$a5.'-'.$a6;
				if($j==$dd)
				{
					$b=$b2;
				}
				
			}
			if($j==3 && $j<$dd+1)
			{
				$a9=$_POST['fn'.$j.''];
				$a10=$_POST['txt_lec'.$j.''];
				$a11=$_POST['txt_lec'.$j.''];
				$a12=$_POST['txt_year'.$j.''];
				$b3=$b2.'|'.$a9.'-'.$a10;
				if($j==$dd)
				{
					$b=$b3;
				}
			}
			if($j==4 && $j<$dd+1)
			{
				$a13=$_POST['fn'.$j.''];
				$a14=$_POST['txt_lec'.$j.''];
				$a15=$_POST['txt_lec'.$j.''];
				$a16=$_POST['txt_year'.$j.''];
				$b4=$b3.'|'.$a13.'-'.$a14;
				if($j==$dd)
				{
					$b=$b4;
				}
			}
			if($j==5 && $j<$dd+1)
			{
				$a17=$_POST['fn'.$j.''];
				$a18=$_POST['txt_lec'.$j.''];
				$a19=$_POST['txt_lec'.$j.''];
				$a20=$_POST['txt_year'.$j.''];
				$b5=$b4.'|'.$a17.'-'.$a18;
				if($j==$dd)
				{
					$b=$b5;
				}
			}
			if($j==6 && $j<$dd+1)
			{
				$a21=$_POST['fn'.$j.''];
				$a22=$_POST['txt_lec'.$j.''];
				$a23=$_POST['txt_lec'.$j.''];
				$a24=$_POST['txt_year'.$j.''];
				$b6=$b5.'|'.$a21.'-'.$a22;
				if($j==$dd)
				{
					$b=$b6;
				}
			}
			if($j==7 && $j<$dd+1)
			{
				$a25=$_POST['fn'.$j.''];
				$a26=$_POST['txt_lec'.$j.''];
				$a27=$_POST['txt_lec'.$j.''];
				$a28=$_POST['txt_year'.$j.''];
				$b7=$b6.'|'.$a25.'-'.$a26;
				if($j==$dd)
				{
					$b=$b7;
				}
			}
			if($j==8 && $j<$dd+1)
			{
				$a29=$_POST['fn'.$j.''];
				$a30=$_POST['txt_lec'.$j.''];
				$a31=$_POST['txt_lec'.$j.''];
				$a32=$_POST['txt_year'.$j.''];
				$b8=$b7.'|'.$a29.'-'.$a30;
				if($j==$dd)
				{
					$b=$b8;
				}
			}
			
		}
		
		
		
		
		
		
		$j=1;
		
		for($e=1; $e<$dd+$dd1+1; $e++)
			{
				
			if($e>$dd && $e==1)
			{
				if(isset($_POST['fn1'.$j.'']))
				
				{
					$a1=$_POST['fn1'.$j.''];
				}
				
				
				if(isset($_POST['txt_lec1'.$j.'']))
				{
					$a2=$_POST['txt_lec1'.$j.''];
				}
				
				
				if(isset($_POST['txt_year1'.$j.'']))
				{
					$a3=$_POST['txt_year1'.$j.''];
				}
				
				if(isset($_POST['txt_year12'.$j.'']))
				{
					$a4=$_POST['txt_year12'.$j.''];
				}
				$b=$b.'|'.$a1.'-Max('.$a3.'/'.$a2.') ';
				
					
				
				
					$j++;
			}
			if($e>$dd && $e==2)
			{
				if(isset($_POST['fn1'.$j.'']))
				{
					$a5=$_POST['fn1'.$j.''];
				}
				if(isset($_POST['txt_lec1'.$j.'']))
				{
					$a6=$_POST['txt_lec1'.$j.''];
				}
				if(isset($_POST['txt_year1'.$j.'']))
				{
					$a7=$_POST['txt_year1'.$j.''];
				}
				if(isset($_POST['txt_year12'.$j.'']))
				{
					$a8=$_POST['txt_year12'.$j.''];
				}
				$b=$b.'|'.$a5.'-Max('.$a7.'/'.$a6.') ';
				$j++;
			}
			if($e>$dd && $e==3 )
			{
				if(isset($_POST['fn1'.$j.'']))
				{
					$a9=$_POST['fn1'.$j.''];
				}
				if(isset($_POST['txt_lec1'.$j.'']))
				{
					$a10=$_POST['txt_lec1'.$j.''];
				}
				if(isset($_POST['txt_year1'.$j.'']))
				{
					$a11=$_POST['txt_year1'.$j.''];
				}
				if(isset($_POST['txt_year12'.$j.'']))
				{
					$a12=$_POST['txt_year12'.$j.''];
				}
				$b=$b.'|'.$a9.'-Max('.$a10.'/'.$a11.') ';
				$j++;
				
			}
			
			if($e>$dd && $e==4)
			{
				if(isset($_POST['fn1'.$j.'']))
				{
					$a13=$_POST['fn1'.$j.''];
				}
				
				if(isset($_POST['txt_lec1'.$j.'']))
				{
					$a14=$_POST['txt_lec1'.$j.''];
				}
				
				if(isset($_POST['txt_year1'.$j.'']))
				{
					$a15=$_POST['txt_year1'.$j.''];
				}
				
				if(isset($_POST['txt_year12'.$j.'']))
				{
					$a16=$_POST['txt_year12'.$j.''];
				}
				
				$b=$b.'|'.$a13.'-Max('.$a15.'/'.$a14.') ';
				$j++;
			
			}
			if($e>$dd && $e==5)
			{
				if(isset($_POST['fn1'.$j.'']))
				{
					$a17=$_POST['fn1'.$j.''];
				}
				
				if(isset($_POST['txt_lec1'.$j.'']))
				{
					$a18=$_POST['txt_lec1'.$j.''];
				}
				
				if(isset($_POST['txt_year1'.$j.'']))
				{
					$a19=$_POST['txt_year1'.$j.''];
				}
				
				if(isset($_POST['txt_year12'.$j.'']))
				{
					$a20=$_POST['txt_year12'.$j.''];
				}
				
				$b=$b.'|'.$a17.'-Max('.$a19.'/'.$a18.') ';
				$j++;
				
			}
			if($e>$dd && $e==6)
			{
				if(isset($_POST['fn1'.$j.'']))
				{
					$a21=$_POST['fn1'.$j.''];
				}
				if(isset($_POST['txt_lec1'.$j.'']))
				{
					$a22=$_POST['txt_lec1'.$j.''];
				}
				if(isset($_POST['txt_year1'.$j.'']))
				{
					$a23=$_POST['txt_year1'.$j.''];
				}
				if(isset($_POST['txt_year12'.$j.'']))
				{
					$a24=$_POST['txt_year12'.$j.''];
				}
				$b=$b.'|'.$a21.'-Max('.$a23.'/'.$a22.') ';
				$j++;
			}
			if($e>$dd && $e==7)
			{
				if(isset($_POST['fn1'.$j.'']))
				{
					$a25=$_POST['fn1'.$j.''];
				}
				if(isset($_POST['txt_lec1'.$j.'']))
				{
					$a26=$_POST['txt_lec1'.$j.''];
				}
				if(isset($_POST['txt_year1'.$j.'']))
				{
					$a27=$_POST['txt_year1'.$j.''];
				}
				if(isset($_POST['txt_year12'.$j.'']))
				{
					$a28=$_POST['txt_year12'.$j.''];
				}
				$b=$b.'|'.$a25.'-Max('.$a27.'/'.$a26.') ';
				$j++;
			}
			if($e>$dd && $e==8)
			{
				if(isset($_POST['fn1'.$j.'']))
				{
					$a29=$_POST['fn1'.$j.''];
				}
				if(isset($_POST['txt_lec1'.$j.'']))
				{
					$a30=$_POST['txt_lec1'.$j.''];
				}
				if(isset($_POST['txt_year1'.$j.'']))
				{
					$a31=$_POST['txt_year1'.$j.''];
				}
				if(isset($_POST['txt_year12'.$j.'']))
				{
					$a32=$_POST['txt_year12'.$j.''];
				}
				$b=$b.'|'.$a29.'-Max('.$a31.'/'.$a30.') ';
				$j++;
			}
			
		}
		
		
		
		
		
		
	$t=$dd+$dd1;	
		
		
		if($check==TRUE)
		{
		 $query ="INSERT INTO `evaluation_method`( `dep_id`, `custom_id`, `no_of_objs`, `obj1`, `no_obj1`, `con_obj_1`, `w1`, `obj2`, `no_obj2`, `con_obj_2`, `w2`, `obj3`, `no_obj3`, `con_obj_3`, `w3`, `obj4`, `no_obj4`, `con_obj_4`, `w4`, `obj5`, `no_obj5`, `con_obj_5`, `w5`, `obj6`, `no_obj6`, `con_obj_6`, `w6`, `obj7`, `no_obj7`, `con_obj_7`, `w7`, `obj8`, `no_obj8`, `con_obj_8`, `w8`) 
		 VALUES ('$dept_id','1','$t','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28','$a29','$a30','$a31','$a32')";
	        $result =mysql_query($query);
			
			
		 $query2=	"INSERT INTO `dis_method`(`dep_id`, `custom_id`, `srt_format`) VALUES ('$dept_id','1','$b')";
			 $result2 =mysql_query($query2);
			 
		echo "<script type='text/javascript'>alert('Successfully created');window.location = \"dept_hd_view_method.php\"</script>";
		}
   
	}
   
   
  ?> 