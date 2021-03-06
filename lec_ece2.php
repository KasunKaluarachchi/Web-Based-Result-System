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
		<title>Form Wizard - Ace Admin</title>

		<meta name="description" content="and Validation" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/select2.min.css" />

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
							Lecturer | Dr. X
								<?php echo $_SESSION['sess_username'];?>
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

				

				<ul class="nav nav-list">
					

					<li class="">
						<a href="lec_ex_type.php" >
							
							<span class="menu-text">
								Select Exam Format
							</span>

							
						</a>

						<b class="arrow"></b>

						
								</a>
								
							
						
					</li>
					
					<li class="">
						<a href="lec_ica.php" >
							
							<span class="menu-text">
								Add ICA Marks
							</span>

							
						</a>

						<b class="arrow"></b>

						
								
								</a>
						
					</li>
					
					<li class="">
						<a href="lec_ece.php" >
							
							<span class="menu-text">
								Add ECE Marks
							</span>

							
						</a>

						<b class="arrow"></b>

						
								
								</a>
								
							
					</li>

					<li class="">
						<a href="lec_index.php">
							

							<span class="menu-text">
								Change course

								
							</span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="lec_change_password.php">
						
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
							<li class="active"><h4>Level-1S/1G | 2015/2016 | CSC111GC3 | Foundation of Computer Science</h4></li>
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
						<div class="ace-settings-container" id="ace-settings-container">
							
						</div><!-- /.ace-settings-container -->
<div class="page-header">
							<h1>
								Course
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Add ECE Marks
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
											Add ECE Marks
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
										
										
			


<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("exam_result");

//*** Add Condition ***//
if(isset($_POST["hdnCmd"]))
	{
	if($_POST["hdnCmd"] == "Add")
{
	
	
	$strSQL = "INSERT INTO add_ece ";
	$strSQL .="(courseid,coursename,level) ";
	$strSQL .="VALUES ";
	$strSQL .="('".$_POST["txtAddcourseid"]."','".$_POST["txtAddcoursename"]."' ";
	$strSQL .=",'".$_POST["txtAddlevel"]."') ";
	
	$objQuery = mysql_query($strSQL);
	if(!$objQuery)
	{
		echo "Error Save [".mysql_error()."]";
	}
	/* header("location:$_SERVER[PHP_SELF]");
	exit(); */
}
	}

//*** Update Condition ***//
if(isset($_POST["hdnCmd"]))
	{
if($_POST["hdnCmd"] == "Update")
{
	$strSQL = "UPDATE add_course SET ";
	$strSQL .="courseid = '".$_POST["txtEditcourseid"]."' ";
	$strSQL .=",coursename = '".$_POST["txtEditcoursename"]."' ";
	$strSQL .=",level = '".$_POST["txtEditlevel"]."' ";
	
	$strSQL .="WHERE courseid = '".$_POST["hdnEditcourseid"]."' ";
	$objQuery = mysql_query($strSQL);
	if(!$objQuery)
	{
		echo "Error Update [".mysql_error()."]";
	}
	/* header("location:$_SERVER[PHP_SELF]");
	exit(); */
}
	}
//*** Delete Condition ***//
if(isset($_GET["Action"]))
	{
		
if($_GET["Action"] == "Del")
{
	$strSQL = "DELETE FROM add_course ";
		
	$strSQL .="WHERE courseid = '".$_GET["CusID"]."' ";
		
	$objQuery = mysql_query($strSQL);
	if(!$objQuery)
	{
		echo "Error Delete [".mysql_error()."]";
	}
	/* header("location:$_SERVER[PHP_SELF]");
	exit() */;
}
	}
$strSQL = "SELECT * FROM add_ece";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<form name="frmMain" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<input type="hidden" name="hdnCmd" value="">



<table id="dynamic-table" class="table table-striped table-bordered table-hover">

  <tr>
    <th width="91"> <div align="center">Index Number</div></th>
    <th width="98"> <div align="center">Registration Number </div></th>
    
	<th width="91"> <div align="center">Question 01</div></th>
    <th width="98"> <div align="center">Question 02</div></th>
    <th width="91"> <div align="center">Question 03</div></th>
	<th width="91"> <div align="center">Question 04</div></th>
    <th width="98"> <div align="center">Question 05</div></th>
    <th width="91"> <div align="center">Question 06</div></th>
	<th width="91"> <div align="center">Question 07</div></th>
    <th width="98"> <div align="center">Question 08</div></th>
    <th width="91"> <div align="center">Final Marks</div></th>
    <span class="green">
    <th width="10"> <div align="center"><a class="green" href="#"><i class="ace-icon fa fa-pencil bigger-130"></i></a> </div></th></span>
    <th width="10"> <div align="center"><a class="red" href="#"><i class="ace-icon fa fa-trash-o bigger-120"></i></a> </div></th>
  
  
<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>

  <?php
		if(isset($_GET["CusID"]))
		{
			if(isset($_GET["Action"]))
			{
	if($objResult["courseid"] == $_GET["CusID"] and $_GET["Action"] == "Edit")
	{
  ?>
  <tr>
    <td><div align="center">
		<input type="text" name="txtEditcourseid" size="5" value="<?php echo $objResult["courseid"];?>">
		<input type="hidden" name="hdnEditcourseid" size="5" value="<?php echo $objResult["courseid"];?>">
	</div></td>
    <td><input type="text" name="txtEditcoursename" size="20" value="<?php echo $objResult["coursename"];?>"></td>
    <td><input type="text" name="txtEditlevel" size="20" value="<?php echo $objResult["level"];?>"></td>
    
    <td colspan="2" align="right"><div align="center">
      <input name="btnAdd" type="button" id="btnUpdate" value="Update" OnClick="frmMain.hdnCmd.value='Update';frmMain.submit();">
	  <input name="btnAdd" type="button" id="btnCancel" value="Cancel" OnClick="window.location='<?php echo $_SERVER["PHP_SELF"];?>';">
    </div></td>
  </tr>
  <?php
	}
			}
	   }
  else
	{
  ?>
  <tr>
    <td><div align="center"><?php echo $objResult["index_no"];?></div></td>
    <td><?php echo $objResult["reg_no"];?></td>
    
	 <td><?php echo $objResult["q1"];?></td>
    <td><?php echo $objResult["q2"];?></td>
	 <td><?php echo $objResult["q3"];?></td>
    <td><?php echo $objResult["q4"];?></td>
	 <td><?php echo $objResult["q5"];?></td>
    <td><?php echo $objResult["q6"];?></td>
	 <td><?php echo $objResult["q7"];?></td>
    <td><?php echo $objResult["q8"];?></td>
	<td><?php echo $objResult["final"];?></td>
    
    <td align="center"><a href="<?php echo $_SERVER["PHP_SELF"];?>?Action=Edit&CusID=<?php echo $objResult["courseid"];?>">Edit</a></td>
	<td align="center"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='<?php echo $_SERVER["PHP_SELF"];?>?Action=Del&CusID=<?php echo $objResult["courseid"];?>';}">Delete</a></td>
  </tr>
  <?php
	}
  ?>
<?php
}
?>
  <tr>
    <td><div align="center"><input type="text" name="txtAddcourseid" size="3"></div></td>
    <td><input type="text" name="txtAddcoursename" size="5" ></td>
    
	<td><input type="text" name="txtAddcoursename" size="3" ></td>
    <td><input type="text" name="txtAddcoursename" size="3" ></td>
	<td><input type="text" name="txtAddcoursename" size="3" ></td>
    <td><input type="text" name="txtAddcoursename" size="3" ></td>
	<td><input type="text" name="txtAddcoursename" size="3" ></td>
    <td><input type="text" name="txtAddcoursename" size="3" ></td>
	<td><input type="text" name="txtAddcoursename" size="3" ></td>
    <td><input type="text" name="txtAddcoursename" size="3" ></td>
	<td><input type="text" name="txtAddcoursename" size="3" ></td>
    
    
    <td colspan="2" align="right"><div align="center">
      <input name="btnAdd"  button class="btn btn-xs btn-info" size="3"
																i class="ace-icon fa fa-pencil bigger-120"
															  value="Add" OnClick="frmMain.hdnCmd.value='Add';frmMain.submit();">
    </div></td>
	
	
	
	
	
	
	
	
	
  </tr>
  </tr>
  
</table>
</form>
<?php
mysql_close($objConnect);
?>
	
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
