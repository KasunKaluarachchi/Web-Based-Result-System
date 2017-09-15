<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("exam_result");

//*** Add Condition ***//
if($_POST["hdnCmd"] == "Add")
{
	$strSQL = "INSERT INTO add_course ";
	$strSQL .="(courseid,coursename,level) ";
	$strSQL .="VALUES ";
	$strSQL .="('".$_POST["txtAddcourseid"]."','".$_POST["txtAddcoursename"]."' ";
	$strSQL .=",'".$_POST["txtAddlevel"]."') ";
	
	$objQuery = mysql_query($strSQL);
	if(!$objQuery)
	{
		echo "Error Save [".mysql_error()."]";
	}
	//header("location:$_SERVER[PHP_SELF]");
	//exit();
}

//*** Update Condition ***//
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
	//header("location:$_SERVER[PHP_SELF]");
	//exit();
}

//*** Delete Condition ***//
if($_GET["Action"] == "Del")
{
	$strSQL = "DELETE FROM add_course ";
	$strSQL .="WHERE courseid = '".$_GET["CusID"]."' ";
	$objQuery = mysql_query($strSQL);
	if(!$objQuery)
	{
		echo "Error Delete [".mysql_error()."]";
	}
	//header("location:$_SERVER[PHP_SELF]");
	//exit();
}

$strSQL = "SELECT * FROM add_course";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<form name="frmMain" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<input type="hidden" name="hdnCmd" value="">
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">courseid </div></th>
    <th width="98"> <div align="center">courseName </div></th>
    <th width="198"> <div align="center">Level </div></th>
    
    <th width="30"> <div align="center">Edit </div></th>
    <th width="30"> <div align="center">Delete </div></th>
  </tr>
<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>

  <?php
	if($objResult["courseid"] == $_GET["CusID"] and $_GET["Action"] == "Edit")
	{
  ?>
  <tr>
    <td><div align="center">
		<input type="text" name="txtEditcourseid" size="5" value="<?php echo $objResult["courseid"];?>">
		<input type="hidden" name="hdnEditcourseid" size="5" value="<?php echo $objResult["courseid"];?>">
	</div></td>
    <td><input type="text" name="txtEditcoursename" size="20" value="<?php echo $objResult["courseName"];?>"></td>
    <td><input type="text" name="txtEditlevel" size="20" value="<?php echo $objResult["level"];?>"></td>
    
    <td colspan="2" align="right"><div align="center">
      <input name="btnAdd" type="button" id="btnUpdate" value="Update" OnClick="frmMain.hdnCmd.value='Update';frmMain.submit();">
	  <input name="btnAdd" type="button" id="btnCancel" value="Cancel" OnClick="window.location='<?php echo $_SERVER["PHP_SELF"];?>';">
    </div></td>
  </tr>
  <?php
	}
  else
	{
  ?>
  <tr>
    <td><div align="center"><?php echo $objResult["courseid"];?></div></td>
    <td><?php echo $objResult["coursename"];?></td>
    <td><?php echo $objResult["level"];?></td>
    
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
    <td><div align="center"><input type="text" name="txtAddcourseid" size="5"></div></td>
    <td><input type="text" name="txtAddcoursename" size="20"></td>
    <td><input type="text" name="txtAddlevel" size="20"></td>
    
    <td colspan="2" align="right"><div align="center">
      <input name="btnAdd" type="button" id="btnAdd" value="Add" OnClick="frmMain.hdnCmd.value='Add';frmMain.submit();">
    </div></td>
  </tr>
</table>
</form>
<?php
mysql_close($objConnect);
?>
</body>
</html>