<?php
					//connect with mysql
					$con = 	mysqli_connect('localhost','root','');
					//select database
							mysqli_select_db($con,'cs230');
							
					//select query
					$sql = "DELETE FROM ebook_metadata WHERE ID='$_GET[id]'";
					
					//Execute the query
					if(mysqli_query($con,$sql))
						header("refresh:1; url=Table.php");
					else
						echo "Not Deleted!!";
?>