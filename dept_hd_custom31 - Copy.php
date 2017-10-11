<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="admin"){
      header('Location: login.php?err=2');
    }
?>


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
					<a href="admin_index.php" class="navbar-brand">
						<small>
							<?php echo $_SESSION['sess_username'];?>
 | University Of Jaffna
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<!--  -->
                         
						

						

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								
								<span class="user-info">
									
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
									<a href="logout.php">
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
						<a href="dept_hd_academic_year.php">
							
							<span class="menu-text">Add Accademic Year</span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="dept_hd_index.php">
							
							<span class="menu-text">Add Course</span>
						</a>

						<b class="arrow"></b>
					</li>
					
					<li class="">
						<a href="dept_hd_add_lecturer.php">
							
							<span class="menu-text">Add Lecturer</span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="dept_hd_assign_lecturer.php">
							
							<span class="menu-text">Assign Lecturer</span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="dept_hd_evalution.php">
							
							<span class="menu-text">Evalution Object</span><br>
							
						</a>

						<b class="arrow"></b>
					</li>
					
					<li class="active">
						<a href="dept_hd_custom1.php">
							
							<span class="menu-text">Custom Evalution Method</span><br>
							
						</a>

						<b class="arrow"></b>
					</li>
					
					<li class="">
						<a href="dept_hd_view_method.php">
							
							<span class="menu-text">View Evalution Method</span><br>
							
						</a>

						<b class="arrow"></b>
					</li>
					
					
					
					<br>
					
					
					<li class="">
						<a href="dept_hd_Default_view.php">
							
							<span class="menu-text">View Default Evalution Method</span><br>
							
						</a>

						<b class="arrow"></b>
					</li>
					
					<br>
					
					<li class="">
						<a href="dept_hd_change_password.php">
						
							<span class="menu-text">Change Passwords</span>
						</a>

						<b class="arrow"></b>
					</li>
					
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
								Add Default Evaluation Format
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i><br>
									<h4>* You can add maximum 8 objects.</h4>
								
									
								</small>
							</h1>
						</div>
						<!-- /.page-header -->

						<div class="row">
							
								<!-- PAGE CONTENT BEGINS -->
								

								<div class="row">
									<div class="col-xs-12">
									

										
										<!-- /.ace-settings-container -->

						<!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
							
			<html>


<body>
<center>
<br>
<?php
include('db_config.php');

/* $query ="SELECT * FROM add_course where add_course.dep_id=(SELECT dep_id FROM signup where signup.username='".$_SESSION['sess_username']."')";


$result=mysql_query($query); */

$user1 = $_SESSION['sess_username'];

$deptid_query="SELECT `dep_id` FROM `signup` WHERE `username`='$user1'";
$deptid_result=mysql_query($deptid_query) or die(mysql_error()); 
 $row = mysql_fetch_array($deptid_result) or die(mysql_error());

 
	
    
	



?>

<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
  <tr>
  
   <th width="100"> <div align="center">Evaluation object</div></th>
   <th width="10"> <div align="center">No: of instances per object</div></th>
   <th width="10"> <div align="center">Per object weight</div></th>
    <input type="hidden" name="myHiddenValue" value="<?php 
	 $id1=$_GET['prop_id'];
$loc=$id1[2];
$num=(int)$loc;
	
	echo $num ?>" />
   
   
  </tr>

<?php


   
   $i =1;
   $j=1;
   $k=1;
   
   if(isset($_GET['prop_id']))
    {
   $id1=$_GET['prop_id'];
$loc=$id1[2];
$num=(int)$loc;
global $num;
	}
   
  for($x=0; $x<$num; $x++)
  {	  
   echo "<tr>";
    
    $query_drop = "SELECT obj FROM evaluation_object WHERE evaluation_object.dep_id=(SELECT signup.dep_id FROM signup WHERE signup.username='".$_SESSION['sess_username']."')";

	$result2=mysql_query($query_drop);

   echo "<td>";
    
	echo '<input type ="hidden" name ="'.$i.'"><select name="fn'.$i.'">';
	
	
	
	
	
	
		while($row = mysql_fetch_array($result2))
		{
			
			echo "<option value='".$row['obj']."'>".$row['obj']." </option>";
			
			
		}
		
	echo "</select>";	
	
	echo '</input>';
    echo "</td>";
	$i++;
	
	
	
	echo "<td>";
    echo '<input type ="text" name ="txt_lec'.$j.'"/>';
    echo "</td>";
$j++;
	
	
	
	echo "<td>";
    echo '<input type ="text" name ="txt_year'.$k.'"/>';
    echo "</td>";
	$k++;


    
 echo "</tr>";
		







		
											
											
  }										

  



   

?>
</thead>
</table>

   <button class="btn-primary" name ="addbtn" >Create Default Format</button>
   
  <?php 

 
  
  
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
	
		
   
   
 // $a1=$a4=$a7=$a10=$a13=$a16=$a19=$a22=null;
      //$a2=$a3=$a5=$a6=$a8=$a9=$a11=$a12=$a14=$a15=$a17=$a18=$a20=$a21=$a23=$a24=0;
   
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
   
   
   
   
   
   
   
   
   
   
   
   
   
</form>











</center>


</body>
</html>				
							
							
							
							
							
							

								

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
							<span class="blue bolder">Ace</span>
							Application &copy; 2013-2014
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
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.Default.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/wizard.min.js"></script>
		<script src="assets/js/jquery.validate.min.js"></script>
		<script src="assets/js/jquery-additional-methods.min.js"></script>
		<script src="assets/js/bootbox.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>
		<script src="assets/js/select2.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			
				$('[data-rel=tooltip]').tooltip();
			
				$('.select2').css('width','200px').select2({allowClear:true})
				.on('change', function(){
					$(this).closest('form').validate().element($(this));
				}); 
			
			
				var $validation = false;
				$('#fuelux-wizard-container')
				.ace_wizard({
					//step: 2 //optional argument. wizard will jump to step "2" at first
					//buttons: '.wizard-actions:eq(0)'
				})
				.on('actionclicked.fu.wizard' , function(e, info){
					if(info.step == 1 && $validation) {
						if(!$('#validation-form').valid()) e.preventDefault();
					}
				})
				//.on('changed.fu.wizard', function() {
				//})
				.on('finished.fu.wizard', function(e) {
					bootbox.dialog({
						message: "Thank you! Your information was successfully saved!", 
						buttons: {
							"success" : {
								"label" : "OK",
								"className" : "btn-sm btn-primary"
							}
						}
					});
				}).on('stepclick.fu.wizard', function(e){
					//e.preventDefault();//this will prevent clicking and selecting steps
				});
			
			
				//jump to a step
				/**
				var wizard = $('#fuelux-wizard-container').data('fu.wizard')
				wizard.currentStep = 3;
				wizard.setState();
				*/
			
				//determine selected step
				//wizard.selectedItem().step
			
			
			
				//hide or show the other form which requires validation
				//this is for demo only, you usullay want just one form in your application
				$('#skip-validation').removeAttr('checked').on('click', function(){
					$validation = this.checked;
					if(this.checked) {
						$('#sample-form').hide();
						$('#validation-form').removeClass('hide');
					}
					else {
						$('#validation-form').addClass('hide');
						$('#sample-form').show();
					}
				})
			
			
			
				//documentation : http://docs.jquery.com/Plugins/Validation/validate
			
			
				$.mask.definitions['~']='[+-]';
				$('#phone').mask('(999) 999-9999');
			
				jQuery.validator.addMethod("phone", function (value, element) {
					return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
				}, "Enter a valid phone number.");
			
				$('#validation-form').validate({
					errorElement: 'div',
					errorClass: 'help-block',
					focusInvalid: false,
					ignore: "",
					rules: {
						email: {
							required: true,
							email:true
						},
						password: {
							required: true,
							minlength: 5
						},
						password2: {
							required: true,
							minlength: 5,
							equalTo: "#password"
						},
						name: {
							required: true
						},
						phone: {
							required: true,
							phone: 'required'
						},
						url: {
							required: true,
							url: true
						},
						comment: {
							required: true
						},
						state: {
							required: true
						},
						platform: {
							required: true
						},
						subscription: {
							required: true
						},
						gender: {
							required: true,
						},
						agree: {
							required: true,
						}
					},
			
					messages: {
						email: {
							required: "Please provide a valid email.",
							email: "Please provide a valid email."
						},
						password: {
							required: "Please specify a password.",
							minlength: "Please specify a secure password."
						},
						state: "Please choose state",
						subscription: "Please choose at least one option",
						gender: "Please choose gender",
						agree: "Please accept our policy"
					},
			
			
					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},
			
					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
						$(e).remove();
					},
			
					errorPlacement: function (error, element) {
						if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
							var controls = element.closest('div[class*="col-"]');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
						}
						else if(element.is('.select2')) {
							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
						}
						else if(element.is('.chosen-select')) {
							error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
						}
						else error.insertAfter(element.parent());
					},
			
					submitHandler: function (form) {
					},
					invalidHandler: function (form) {
					}
				});
			
				
				
				
				$('#modal-wizard-container').ace_wizard();
				$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
				
				
				/**
				$('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
					$(this).closest('form').validate().element($(this));
				});
				
				$('#mychosen').chosen().on('change', function(ev) {
					$(this).closest('form').validate().element($(this));
				});
				*/
				
				
				$(document).one('ajaxloadstart.page', function(e) {
					//in ajax mode, remove remaining elements before leaving page
					$('[class*=select2]').remove();
				});
			})
		</script>
	</body>
</html>
