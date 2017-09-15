<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Tables - Ace Admin</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							Head | Department of Computer Science
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<!--  -->

						

						

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/avatar2.png" alt="Jason's Photo" />
								<span class="user-info">
									Admin
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					
					<li class="">
						<a href="Add_Academic_year_tables.php">
							<i class="menu-icon fa fa-calendar"></i>
							<span class="menu-text"> Add Academic Year </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					<li class="">
						<a href="Add_Student_details_tables.php">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text">
								Add Student Details
							</span>

							
						</a>

						<b class="arrow"></b>

						<!--  -->
					</li>
					
					<li class="">
						<a href="Add_Lecturer_details_tables.php">
							<i class="menu-icon glyphicon glyphicon-user"></i>
							<span class="menu-text"> Add Lecturer Details </span>
						</a>

						<b class="arrow"></b>
					</li>

					
					
					
					
					
					
					<li class="active open">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-book"></i>
							<span class="menu-text"> Add Course Details </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="Add_Course_details_1.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Level-1S/1G
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="Add_Course_details_2.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Level-2S/2G
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="active">
								<a href="Add_Course_details_3.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Level-3S/3G/3M
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="Add_Course_details_4.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Level-4S/4M
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text">Assign Lecturers</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="Assign_Course_details_1.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Level-1S/1G
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="Assign_Course_details_2.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Level-2S/2G
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="Assign_Course_details_3.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Level-3S/3G/3M
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="Assign_Course_details_4.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Level-4S/4M
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="widgets.html">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> View Result </span>
						</a>

						<b class="arrow"></b>
					</li>

					

					

					<!--  -->

					<!-- <li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-file-o"></i>

							<span class="menu-text">
								Other Pages

								<span class="badge badge-primary">5</span>
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="faq.html">
									<i class="menu-icon fa fa-caret-right"></i>
									FAQ
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="error-404.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Error 404
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="error-500.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Error 500
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="grid.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Grid
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="blank.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Blank Page
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li> -->
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							

							
							
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<!-- /.ace-settings-container -->
<div class="page-header">
							<h1>
								Course
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Add details
								</small>
							</h1>
						</div>
						<!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								

								<div class="row">
									<div class="col-xs-12">
									

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Add Course details | 3S
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
										
										
			<html>



<body>
<center>
<br>
<?php
include('db_config.php');

$query ="SELECT * FROM course_3s";
$result=mysql_query($query);
$i =0;

?>

<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
  <tr>
  
   <th width="600"> <div align="center">Course ID</div></th>
   <th width="600"> <div align="center">Course Name</div></th>
    <span class="green">
	<th  width="20"> <div ><a class="blue" href="#"><i class="ace-icon glyphicon glyphicon-ok"></i></a> </div></th>
    <th width="70"> <div align="center"><a class="green" href="#"><i class="ace-icon fa fa-pencil bigger-130"></i></a> </div></th></span>
    <th width="70"> <div align="center"><a class="red" href="#"><i class="ace-icon fa fa-trash-o bigger-120"></i></a> </div></th>
	
   
  </tr>

<?php

while($query_row =mysql_fetch_array($result))
   {
	 
	   
echo "<td>";
	   echo '<input type="text" value ="'.$query_row['sub_id'].'" name ="id'.$i.'"/>';
	   echo "</td>";

	  

	   echo "<td>";
	   echo '<input type="text" value ="'.$query_row['sub_name'].'" name ="na'.$i.'"/>';
	   echo "</td>";
		
			echo "<td>";
	    echo '<input type="checkbox" name="check-all'.$i.'" />';
	    echo "</td>";
	   
 
       

echo "<td>";
	    
		
		 echo '<button class="btn btn-white btn-default btn-round" name ="updatebtn1'.$i.'" >
												<i class="ace-icon glyphicon glyphicon-pencil"></i>
												
											</button>';
	    
		
		
		
			
		if(isset($_POST['updatebtn1'.$i.'']))
	    {
	    	if(isset($_POST['check-all'.$i.'']))
	    	{

               $r =$query_row['no'];
               $f =$_POST['id'.$i.''];
				$l =$_POST['na'.$i.''];

                $query ="UPDATE course_3s SET sub_id ='$f', sub_name='$l'  WHERE no ='$r'";
	   
	             $result =mysql_query($query);
	             if(!$result)
	             {
	             
	             	 echo "<script type='text/javascript'>alert('Update failed');window.location = \"Add_Course_details_3.php\"</script>";
	             }
	             else
	             {
	             	 echo "<script type='text/javascript'>alert('Update successfully');window.location = \"Add_Course_details_3.php\"</script>";   	
	             
	                
	             }

	    	}
	    	else
	    	{
	    	
			echo "<script type='text/javascript'>alert('Select the check box');window.location = \"Add_Course_details_3.php\"</script>";
	    		
	    	}
	    	
	    }		

			
	    echo "</td>";

	    echo "<td>";
	    
		
		 echo '<button class="btn btn-white btn-warning btn-bold" name ="deletebtn1'.$i.'" >
												<i class="ace-icon fa fa-trash-o bigger-120 orange"></i>
												
											</button>';
	    
	    if(isset($_POST['deletebtn1'.$i.'']))
	    {
	    	if(isset($_POST['check-all'.$i.'']))
	    	{
                $f =$_POST['id'.$i.''];
             
                 $query ="DELETE FROM course_3s WHERE sub_id ='".$f."'";
	   
	             $result =mysql_query($query);
	             if($result)
	             {
	                echo "<script type='text/javascript'>alert('Delete successfully');window.location = \"Add_Course_details_3.php\"</script>";
	             	
	             }
	             
	             else
	             {

	             	echo "<script type='text/javascript'>alert('Delete is faild');window.location = \"Add_Course_details_3.php\"</script>";
	             
	             }

	    	}
	    	else
	    	{
	    		
	    		echo "<script type='text/javascript'>alert('Select the check box');window.location = \"Add_Course_details_3.php\"</script>";
	    	}
	    
	    }
	    echo "</td>";	

	    

		echo "</tr>";
		$i++;
		 
	  
   
   }
   echo "<tr>";
    
    

    echo "<td>";
    echo '<input type ="text" name = "txtfn"/>';
    echo "</td>";

echo "<td>";
    echo '<input type ="text" name = "txtln"/>';
    echo "</td>";

    
    echo "<td>";
    /* echo '<input type ="submit" value ="Add" name ="addbtn"/>'; */
	echo'<button class="btn btn-white btn-info btn-bold" type ="submit" name ="addbtn1">
												<i class="ace-icon glyphicon glyphicon-plus"></i>
												
											</button>';
											
											
											
											
											

    if(isset($_POST['addbtn1']))
    {
    
		$f =$_POST['txtfn'];
	$r =$_POST['txtln'];
        if(!$f or !$r  )
        {
        	echo "<script type='text/javascript'>alert('Fill all details')</script>";
        }
        else
        {

        	$query ="INSERT INTO course_3s (sub_id, sub_name) VALUES ('$f','$r' )";
	   
	        $result =mysql_query($query);
	         if(!$result)
	             {
	          
	             	echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"Add_Course_details_3.php\"</script>";
	             	
	             }
	             else
	             {

	             	
	             	echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"Add_Course_details_3.php\"</script>";
	             	
	             	
	             }

        }
        
       

    }
   
    echo "</td>";



   echo "</tr>";
?>
</thead>
</table>
</form>

</center>


</body>
			
			
			
			
			
			
			</html>
	
										</div>
										
										
										
										
<div class="table-header">
											Add Course details | 3G
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
										
										
			<html>



<body>
<center>
<br>
<?php
include('db_config.php');

$query ="SELECT * FROM course_3g";
$result=mysql_query($query);
$i =0;

?>

<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
  <tr>
  
   <th width="600"> <div align="center">Course ID</div></th>
   <th width="600"> <div align="center">Course Name</div></th>
    <span class="green">
	<th  width="20"> <div ><a class="blue" href="#"><i class="ace-icon glyphicon glyphicon-ok"></i></a> </div></th>
    <th width="70"> <div align="center"><a class="green" href="#"><i class="ace-icon fa fa-pencil bigger-130"></i></a> </div></th></span>
    <th width="70"> <div align="center"><a class="red" href="#"><i class="ace-icon fa fa-trash-o bigger-120"></i></a> </div></th>
	
   
  </tr>

<?php

while($query_row =mysql_fetch_array($result))
   {
	 
	   
echo "<td>";
	   echo '<input type="text" value ="'.$query_row['sub_id'].'" name ="id'.$i.'"/>';
	   echo "</td>";

	  

	   echo "<td>";
	   echo '<input type="text" value ="'.$query_row['sub_name'].'" name ="na'.$i.'"/>';
	   echo "</td>";
		
			echo "<td>";
	    echo '<input type="checkbox" name="check-all'.$i.'" />';
	    echo "</td>";
	   
 
       

echo "<td>";
	    
		
		 echo '<button class="btn btn-white btn-default btn-round" name ="updatebtn'.$i.'" >
												<i class="ace-icon glyphicon glyphicon-pencil"></i>
												
											</button>';
	    
		
		
		
			
		if(isset($_POST['updatebtn'.$i.'']))
	    {
	    	if(isset($_POST['check-all'.$i.'']))
	    	{

               $r =$query_row['no'];
               $f =$_POST['id'.$i.''];
				$l =$_POST['na'.$i.''];

                $query ="UPDATE course_3g SET sub_id ='$f', sub_name='$l'  WHERE no ='$r'";
	   
	             $result =mysql_query($query);
	             if(!$result)
	             {
	             
	             	 echo "<script type='text/javascript'>alert('Update failed');window.location = \"Add_Course_details_3.php\"</script>";
	             }
	             else
	             {
	             	 echo "<script type='text/javascript'>alert('Update successfully');window.location = \"Add_Course_details_3.php\"</script>";   	
	             
	                
	             }

	    	}
	    	else
	    	{
	    	
			echo "<script type='text/javascript'>alert('Select the check box');window.location = \"Add_Course_details_3.php\"</script>";
	    		
	    	}
	    	
	    }		

			
	    echo "</td>";

	    echo "<td>";
	    
		
		 echo '<button class="btn btn-white btn-warning btn-bold" name ="deletebtn'.$i.'" >
												<i class="ace-icon fa fa-trash-o bigger-120 orange"></i>
												
											</button>';
	    
	    if(isset($_POST['deletebtn'.$i.'']))
	    {
	    	if(isset($_POST['check-all'.$i.'']))
	    	{
                $f =$_POST['id'.$i.''];
             
                 $query ="DELETE FROM course_3g WHERE sub_id ='".$f."'";
	   
	             $result =mysql_query($query);
	             if($result)
	             {
	                echo "<script type='text/javascript'>alert('Delete successfully');window.location = \"Add_Course_details_3.php\"</script>";
	             	
	             }
	             
	             else
	             {

	             	echo "<script type='text/javascript'>alert('Delete is faild');window.location = \"Add_Course_details_3.php\"</script>";
	             
	             }

	    	}
	    	else
	    	{
	    		
	    		echo "<script type='text/javascript'>alert('Select the check box');window.location = \"Add_Course_details_3.php\"</script>";
	    	}
	    
	    }
	    echo "</td>";	

	    

		echo "</tr>";
		$i++;
		 
	  
   
   }
   echo "<tr>";
    
    

    echo "<td>";
    echo '<input type ="text" name = "txtfn"/>';
    echo "</td>";

echo "<td>";
    echo '<input type ="text" name = "txtln"/>';
    echo "</td>";

    
    echo "<td>";
    /* echo '<input type ="submit" value ="Add" name ="addbtn"/>'; */
	echo'<button class="btn btn-white btn-info btn-bold" type ="submit" name ="addbtn">
												<i class="ace-icon glyphicon glyphicon-plus"></i>
												
											</button>';
											
											
											
											
											

    if(isset($_POST['addbtn']))
    {
    
		$f =$_POST['txtfn'];
	$r =$_POST['txtln'];
        if(!$f or !$r  )
        {
        	echo "<script type='text/javascript'>alert('Fill all details')</script>";
        }
        else
        {

        	$query ="INSERT INTO course_3g (sub_id, sub_name) VALUES ('$f','$r' )";
	   
	        $result =mysql_query($query);
	         if(!$result)
	             {
	          
	             	echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"Add_Course_details_3.php\"</script>";
	             	
	             }
	             else
	             {

	             	
	             	echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"Add_Course_details_3.php\"</script>";
	             	
	             	
	             }

        }
        
       

    }
   
    echo "</td>";



   echo "</tr>";
?>
</thead>
</table>
</form>

</center>


</body>
			
			
			
			
			
			
			</html>
	
										</div>	

<div class="table-header">
											Add Course details | 3M
										</div>


										
										<!-- div.dataTables_borderWrap -->
										<div>
										
										
			<html>



<body>
<center>
<br>
<?php
include('db_config.php');

$query ="SELECT * FROM course_3m";
$result=mysql_query($query);
$i =0;

?>

<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
  <tr>
  
   <th width="600"> <div align="center">Course ID</div></th>
   <th width="600"> <div align="center">Course Name</div></th>
    <span class="green">
	<th  width="20"> <div ><a class="blue" href="#"><i class="ace-icon glyphicon glyphicon-ok"></i></a> </div></th>
    <th width="70"> <div align="center"><a class="green" href="#"><i class="ace-icon fa fa-pencil bigger-130"></i></a> </div></th></span>
    <th width="70"> <div align="center"><a class="red" href="#"><i class="ace-icon fa fa-trash-o bigger-120"></i></a> </div></th>
	
   
  </tr>

<?php

while($query_row =mysql_fetch_array($result))
   {
	 
	   
echo "<td>";
	   echo '<input type="text" value ="'.$query_row['sub_id'].'" name ="id'.$i.'"/>';
	   echo "</td>";

	  

	   echo "<td>";
	   echo '<input type="text" value ="'.$query_row['sub_name'].'" name ="na'.$i.'"/>';
	   echo "</td>";
		
			echo "<td>";
	    echo '<input type="checkbox" name="check-all'.$i.'" />';
	    echo "</td>";
	   
 
       

echo "<td>";
	    
		
		 echo '<button class="btn btn-white btn-default btn-round" name ="updatebtn3'.$i.'" >
												<i class="ace-icon glyphicon glyphicon-pencil"></i>
												
											</button>';
	    
		
		
		
			
		if(isset($_POST['updatebtn3'.$i.'']))
	    {
	    	if(isset($_POST['check-all'.$i.'']))
	    	{

               $r =$query_row['no'];
               $f =$_POST['id'.$i.''];
				$l =$_POST['na'.$i.''];

                $query ="UPDATE course_3m SET sub_id ='$f', sub_name='$l'  WHERE no ='$r'";
	   
	             $result =mysql_query($query);
	             if(!$result)
	             {
	             
	             	 echo "<script type='text/javascript'>alert('Update failed');window.location = \"Add_Course_details_3.php\"</script>";
	             }
	             else
	             {
	             	 echo "<script type='text/javascript'>alert('Update successfully');window.location = \"Add_Course_details_3.php\"</script>";   	
	             
	                
	             }

	    	}
	    	else
	    	{
	    	
			echo "<script type='text/javascript'>alert('Select the check box');window.location = \"Add_Course_details_3.php\"</script>";
	    		
	    	}
	    	
	    }		

			
	    echo "</td>";

	    echo "<td>";
	    
		
		 echo '<button class="btn btn-white btn-warning btn-bold" name ="deletebtn3'.$i.'" >
												<i class="ace-icon fa fa-trash-o bigger-120 orange"></i>
												
											</button>';
	    
	    if(isset($_POST['deletebtn3'.$i.'']))
	    {
	    	if(isset($_POST['check-all'.$i.'']))
	    	{
                $f =$_POST['id'.$i.''];
             
                 $query ="DELETE FROM course_3m WHERE sub_id ='".$f."'";
	   
	             $result =mysql_query($query);
	             if($result)
	             {
	                echo "<script type='text/javascript'>alert('Delete successfully');window.location = \"Add_Course_details_3.php\"</script>";
	             	
	             }
	             
	             else
	             {

	             	echo "<script type='text/javascript'>alert('Delete is faild');window.location = \"Add_Course_details_3.php\"</script>";
	             
	             }

	    	}
	    	else
	    	{
	    		
	    		echo "<script type='text/javascript'>alert('Select the check box');window.location = \"Add_Course_details_3.php\"</script>";
	    	}
	    
	    }
	    echo "</td>";	

	    

		echo "</tr>";
		$i++;
		 
	  
   
   }
   echo "<tr>";
    
    

    echo "<td>";
    echo '<input type ="text" name = "txtfn"/>';
    echo "</td>";

echo "<td>";
    echo '<input type ="text" name = "txtln"/>';
    echo "</td>";

    
    echo "<td>";
    /* echo '<input type ="submit" value ="Add" name ="addbtn"/>'; */
	echo'<button class="btn btn-white btn-info btn-bold" type ="submit" name ="addbtn3">
												<i class="ace-icon glyphicon glyphicon-plus"></i>
												
											</button>';
											
											
											
											
											

    if(isset($_POST['addbtn3']))
    {
    
		$f =$_POST['txtfn'];
	$r =$_POST['txtln'];
        if(!$f or !$r  )
        {
        	echo "<script type='text/javascript'>alert('Fill all details')</script>";
        }
        else
        {

        	$query ="INSERT INTO course_3m (sub_id, sub_name) VALUES ('$f','$r' )";
	   
	        $result =mysql_query($query);
	         if(!$result)
	             {
	          
	             	echo "<script type='text/javascript'>alert('Insert is faild');window.location = \"Add_Course_details_3.php\"</script>";
	             	
	             }
	             else
	             {

	             	
	             	echo "<script type='text/javascript'>alert('Insert successfully');window.location = \"Add_Course_details_3.php\"</script>";
	             	
	             	
	             }

        }
        
       

    }
   
    echo "</td>";



   echo "</tr>";
?>
</thead>
</table>
</form>

</center>


</body>
			
			
			
			
			
			
			</html>
	
										</div>	
										
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			
			
			
			
			
			
			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">University of Jaffna</span>
							Department of Computer Science &copy; 2016-2017
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="assets/js/dataTables.buttons.min.js"></script>
		<script src="assets/js/buttons.flash.min.js"></script>
		<script src="assets/js/buttons.html5.min.js"></script>
		<script src="assets/js/buttons.print.min.js"></script>
		<script src="assets/js/buttons.colVis.min.js"></script>
		<script src="assets/js/dataTables.select.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
					
					
					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			
			
					select: {
						style: 'multi'
					}
			    } );
			
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					  },
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					  }		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			
			
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/
			
			
			})
		</script>
	</body>
</html>
