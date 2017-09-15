<?php



	include('db_config.php');
	$query2 = 'SELECT * FROM `add_course`';
	
			if($query2_run = mysql_query($query2))
					{
						$count = mysql_num_rows($query2_run);
							if($count == null)
								{
									echo "No records".mysql_error();
								}
							else
								{
			while($query2_row=mysql_fetch_assoc($query2_run))
										{
											$courseid = $query2_row['courseid'];
											$coursename = $query2_row['coursename'];
											$level = $query2_row['level'];
										
										/* {id:"",name:"$courseid",stock:"$coursename",ship:"$level"}, */
				echo "<tr><td>".$courseid."</td><td>".$coursename."</td><td>".$level."</td></tr>";
										}
				}
					}

				else
					{
						echo "Query Failed".mysql_error();
					}
			?> 