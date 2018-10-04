<html>
<head>
<title>Inserting data</title>
</head>
<body>
<?php
					//connect with mysql
					$con = 	mysqli_connect('localhost','root','');
					//select database
							mysqli_select_db($con,'cs230');
							
					//select query
					$sql = "SELECT * FROM ebook_metadata";
					
					//Execute the query
					$records = mysqli_query($con,$sql);
					?>
<table border=1 cellpadding=1 cellspacing=>
			<tr>
					<th>Creator</th>
					<th>Title</th>
					<th>Type</th>
					<th>ISBN</th>
					<th>Release Date</th>
					<th>Language</th>
					<th>Description</th>
			</tr>
			
				<?php	
					while($row = mysqli_fetch_array($records))
					{
							echo "<tr><form action=update.php method=post>";
							echo "<td><input type=text name=creator value='".$row['Creator']."'</td>";
							echo "<td><input type=text name=title value='".$row['Title']."'</td>";
							echo "<td><input type=text name=type value='".$row['Type']."'</td>";
							echo "<td><input type=text name=identifier value='".$row['Identifier']."'</td>";
							echo "<td><input type=text name=date value='".$row['Date']."'</td>";
							echo "<td><input type=text name=language value='".$row['Language']."'</td>";
							echo "<td><input type=text name=description value='".$row['Description']."'</td>";
							echo "<input type=hidden name=id value='".$row['ID']."'>";
							echo "<td><input type=submit>";
							echo "</form></tr>";
					}
			?>
		<form action="MainPage.html">
    <input type="submit" value="Go Back To Home Page" />
</form>
</body>
</html>
