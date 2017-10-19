<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];

    if(!isset($_SESSION['sess_username']) && $role!="admin"){
      header('Location: login.php?err=2');
    }
?>
<?php

include('db_config.php');
	$x1 = $_POST['txt_year'];
$_SESSION['m_obj']=$x1;
//7
	
	$y = $_POST['inputInfo1'];
$_SESSION['m_obj_q']=$y;	

	//8
	if($y>8 || $y<=1 || $y==""){
		
	echo "<script type='text/javascript'>alert('Out of range.');window.location = \"lec_ex_anlyz.php\"</script>";
		
		
	}
	$user = $_SESSION['sess_username'];
    $query_dep = "SELECT signup.dep_id FROM signup WHERE signup.username='$user'";

		$result_dep= mysql_query($query_dep);
		 while($row_dep = mysql_fetch_array($result_dep))
			{
				
				$dept_id = $row_dep['dep_id'];
				
				//2
			}
	
	$yr=$_SESSION['uu'];//4
	

	$ex_fm=$_SESSION['e_fom'];//6

	$query2 = "SELECT id FROM dis_method WHERE dep_id='$dept_id' AND srt_format='$ex_fm'";
	$result2= mysql_query($query2);
		 while($row2 = mysql_fetch_array($result2))
			{
				
				$id2 = $row2['id'];
				
				//2
			}

	$sub=$_SESSION['u1'];//5
	
	
	$user = $_SESSION['sess_username'];
    $query3 = "SELECT signup.lec_id FROM signup WHERE signup.username='$user'";

		$result3= mysql_query($query3);
		 while($row3 = mysql_fetch_array($result3))
			{
				
				$id3 = $row3['lec_id'];
				
			}
	$test1=$_SESSION['num2'];
	

	$x=1;
	$a1=$a3=$a5=$a7=$a9=$a11=$a13=null;
			 $a2=$a4=$a6=$a8=$a10=$a12=$a14=0;
	for($i=1; $i<=$test1; $i++)
	{
		$val1='obj'.$i;

			$query1 = "SELECT `$val1` FROM evaluation_method WHERE dep_id='$dept_id' AND id='$id2'";
			$result1= mysql_query($query1);
		 while($row = mysql_fetch_array($result1))
			{
				
				$num = $row[$val1];
			}	
			
			if($num!=$x1)	
			{
			
			$val11='obj'.$i;	

			$val2='no_'.$val11;

				

			
			$query3 = "SELECT id FROM ac_year WHERE dep_id='$dept_id' AND year='$yr'";
			$result3= mysql_query($query3);
		 while($row3 = mysql_fetch_array($result3))
			{
				
				$yr_id = $row3['id'];
				
			}	
			

			$tnam=$yr_id.'_'.$sub.'_'.$num;
		
							
			$query2 = "CREATE TABLE $tnam (st_index varchar(10) NOT NULL
											
										  
										 )";
										 
							 $result2 =mysql_query($query2);
			 
		
			  $query4 = " ALTER TABLE $tnam	ADD Total double(5,2)"	;		
			 $result4 =mysql_query($query4);
			 
			 
			 
			 if($x==1)
			 {
				 $a1 = $num;
				 $a2 = $tnam;
				 
				 
				 
				
			 }
			 if($x==2)
			 {
				 $a3 = $num;
				 $a4 = $tnam;
				
				
			 }
			 if($x==3)
			 {
				 $a5 = $num;
				 $a6 = $tnam;
				
			 }
			  if($x==4)
			 {
				 $a7 = $num;
				 $a8 = $tnam;
				 
			 }
			 if($x==5)
			 {
				 $a9 = $num;
				 $a10 = $tnam;
				 
			 }
			 if($x==6)
			 {
				 $a11 = $num;
				 $a12 = $tnam;
				
			 }
			 if($x==7)
			 {
				 $a13 = $num;
				 $a14 = $tnam;
				
			 }
			 
			 
			 
			 
			 $x++;
			 
				}
			

					
	}


			$q_exm="SELECT id FROM dis_method WHERE dep_id='$dept_id' AND srt_format='$ex_fm'";
			 $r_exm =mysql_query($q_exm);
	
			 while($row_exm = mysql_fetch_array($r_exm))
			{
				
				$exm_id = $row_exm ['id'];
				
			}
	

			$query_insert="INSERT INTO `exam_format`( `dep_id`, `lec_id`, `ac_id`, `courseid`, `method_id`, `main_object`, `no_qstn`, `obj1`, `obj1_tb1`, `obj2`, `obj1_tb2`, `obj3`, `obj1_tb3`, `obj4`, `obj1_tb4`, `obj5`, `obj1_tb5`, `obj6`, `obj1_tb6`, `obj7`, `obj1_tb7`, `save_state`) 
			VALUES ('$dept_id','$id3 ','$yr','$sub','$exm_id','$x1','$y','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','1')";
			 $result_insert =mysql_query($query_insert);
	
	
	
	
	
	
$_SESSION['yr']=$yr;
$_SESSION['sb']=$sub;
		
	echo "<script type='text/javascript'>alert('Successful');window.location = \"lec_sub.php\"</script>";	
		
		

	
	
			
			
			
			
			
			
			
			
?>