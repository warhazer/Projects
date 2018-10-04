<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cs230";
	
	$con = mysqli_connect($servername, $username, $password);
	
	if(!$con)
	{
		echo 'Not connected to server';
	}
	if(!mysqli_select_db($con,'cs230'))
	{
		echo 'Database not selected';
	}
	
	$Creator = $_POST['creator'];
	$Title = $_POST['title'];
	$Type = $_POST['type'];
	$Identifier = $_POST['identifier'];
	$Date = $_POST['date'];
	$Language = $_POST['language'];
	$Description = $_POST['description'];
	
	$sql = "INSERT INTO ebook_metadata(Creator,Title,Type,Identifier,Date,Language,Description) VALUES ('$Creator','$Title','$Type','$Identifier','$Date','$Language','$Description')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Not inserted';
	}
	else
	{
		echo 'Inserted';
	}
	
	header("refresh:1; url=Form.html");
	
	



?>