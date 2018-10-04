<?php
//connect with mysql
					$con = 	mysqli_connect('localhost','root','');
					//select database
							mysqli_select_db($con,'cs230');
							
					//UPDATE query
					$sql = "UPDATE ebook_metadata SET Creator ='$_POST[creator]',Title ='$_POST[title]',Type ='$_POST[type]',Identifier ='$_POST[identifier]',Date ='$_POST[date]',Language ='$_POST[language]',Description ='$_POST[description]' WHERE ID = '$_POST[id]'";
					
					//Execute the query
					if(mysqli_query($con,$sql)){
					header("refresh:1; url=in.php");}
					else{
					echo "Not Updated";}
						
?>
