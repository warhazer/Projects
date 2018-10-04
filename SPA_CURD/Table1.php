<html>
<head>
<title>Inserting data</title>
</head>
<body>
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
					//connect with mysql
					$con = 	mysqli_connect('localhost','root','');
					//select database
							mysqli_select_db($con,'cs230');
							
					//select query
					$sql = "SELECT * FROM ebook_metadata";
					
					//Execute the query
					$records = mysqli_query($con,$sql);
					
					while($row = mysqli_fetch_array($records))
					{
							//echo "<tr><form action="update.php"method=post>";
							echo "<td>".$row['Creator']."</td>";
							echo "<td>".$row['Title']."</td>";
							echo "<td>".$row['Type']."</td>";
							echo "<td>".$row['Identifier']."</td>";
							echo "<td>".$row['Date']."</td>";
							echo "<td>".$row['Language']."</td>";
							echo "<td>".$row['Description']."</td>";
							echo "</tr>";
					}
			?>
		<form action="MainPage.html">
    <input type="submit" value="Go Back To Home Page" />
</form>
</body>
</html>
