<?php
	$severname = "localhost";
	$username = "root";
	$password = "";
	$db = "exam_result";
	
	$conn = mysql_connect($severname,$username,$password);
	mysql_select_db($db);
	
	$dbh = new PDO("mysql:dbname={$db};host={$severname};port={3306}", $username, $password);

   if(!$dbh){

      echo "unable to connect to database";
   }
?>