<html>


<body>
<center>
<br>
<?php
include('db_config.php');

$query ="SELECT * FROM ac_year";
$result=mysql_query($query);
$i =0;

?>

<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
<table style ="font-family: arial; font-size: 15"  width="600" border="1" cellpadding="1" cellspacing="1" align="center">
  <tr>
  
  
   
   <td>Academic Year</td>


   <td>Update</td>
   <td>Delete</td>
   <td>Check box</td>
   
  </tr>

<?php

while($query_row =mysql_fetch_array($result))
   {
	 
	   


	  

	   echo "<td>";
	   echo '<input type="text" value ="'.$query_row['year'].'" name ="fn'.$i.'"/>';
	   echo "</td>";

	   
 
       

	    echo "<td>";
	    echo '<input type="submit" value ="Update" name ="updatebtn'.$i.'" />';
	    
	    if(isset($_POST['updatebtn'.$i.'']))
	    {
	    	if(isset($_POST['check-all'.$i.'']))
	    	{

               $r =$query_row['id'];
               $f =$_POST['fn'.$i.''];
        

                $query ="UPDATE ac_year SET year ='$f'  WHERE id ='$r'";
	   
	             $result =mysql_query($query);
	             if(!$result)
	             {
	             
	             	 echo "<script type='text/javascript'>alert('Update failed');window.location = \"test2.php\"</script>";
	             }
	             else
	             {
	             	 echo "<script type='text/javascript'>alert('Update successfully');window.location = \"test2.php\"</script>";   	
	             
	                
	             }

	    	}
	    	else
	    	{
	    	
			echo "<script type='text/javascript'>alert('Select the check box');window.location = \"test2.php\"</script>";
	    		
	    	}
	    	
	    }
			
	    echo "</td>";

	    echo "<td>";
	    echo '<input type="submit" value ="Delete" name ="deletebtn'.$i.'" />';
	    
	    if(isset($_POST['deletebtn'.$i.'']))
	    {
	    	if(isset($_POST['check-all'.$i.'']))
	    	{
                $f =$_POST['fn'.$i.''];
             
                 $query ="DELETE FROM ac_year WHERE year ='".$f."'";
	   
	             $result =mysql_query($query);
	             if($result)
	             {
	                echo "<script type='text/javascript'>alert('Delete successfully');window.location = \"test2.php\"</script>";
	             	
	             }
	             
	             else
	             {

	             	echo "<script type='text/javascript'>alert('Delete is faild');window.location = \"test2.php\"</script>";
	             
	             }

	    	}
	    	else
	    	{
	    		
	    		echo "<script type='text/javascript'>alert('Select the check box')</script>";
	    	}
	    
	    }
	    echo "</td>";	

	    echo "<td>";
	    echo '<input type="checkbox" name="check-all'.$i.'" />';
	    echo "</td>";

		echo "</tr>";
		$i++;
		 
	  
   
   }
   echo "<tr>";
    
    

    echo "<td>";
    echo '<input type ="text" name = "txtfn"/>';
    echo "</td>";



    
    echo "<td>";
    echo '<input type ="submit" value ="Add" name ="addbtn"/>';

    if(isset($_POST['addbtn']))
    {
    
		$f =$_POST['txtfn'];

        if(!$f   )
        {
        	echo "<script type='text/javascript'>alert('Fill all details')</script>";
        }
        else
        {

        	$query ="INSERT INTO ac_year (year ) VALUES ('$f' )";
	   
	        $result =mysql_query($query);
	         if(!$result)
	             {
	          
	             	echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"test2.php\"</script>";
	             	
	             }
	             else
	             {

	             	
	             	echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"test2.php\"</script>";
	             	
	             	
	             }

        }
        
       

    }
   
    echo "</td>";



   echo "</tr>";
?>

</table>
</form>
<a href ="exa1.php">Back </a>
</center>


</body>
</html>
