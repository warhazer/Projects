<?php
require('db.php');
include("auth.php");
					//select query
					$sql1 = "SELECT result,quiztaken FROM users";
					//Execute the query
					$records = mysqli_query($con,$sql1);
					$k = 0;
					$a = 0;
					while($row = mysqli_fetch_array($records))
					{
						$k = $row['result'];
						$a = $row['quiztaken'];
						
					}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body style="background-color:powderblue;">
<div class="form">
<p align="center">Quiz Result Page</p>
<p align="center">Welcome <?php echo $_SESSION['username']; ?> to your results</p>
<p align="center"></p>
<p align="center">Total number of quizes taken: <?php echo $a; ?></p>
<p align="center">You've answered <?php echo $a*10; ?> questions</p>
<p align="center">You've got <?php echo $k; ?> questions correct</p>
<p align="center">You've answered <?php echo ($a*10)-$k; ?> questions incorrectly</p>
<p align="center"><a href="dashboard.php">Home Page</a></p>
<p align="center"> <a href="logout.php">Logout</a></p>
</div>
</body>
</html>