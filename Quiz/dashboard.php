<?php
require('db.php');
include("auth.php");
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
<p align="center">Quiz HomePage</p>
<p align="center">Welcome <?php echo $_SESSION['username']; ?>!</p>
<p align="center">Choose a quiz to take</p>
<p align="center"><a href="quiz1a.php">Quiz One</a></p>
<p align="center"><a href="1.php">Quiz Two</a></p>
<p align="center"><a href="result.php">Overall Results</a></p>
<p align="center"> <a href="logout.php">Logout</a></p>
</div>
</body>
</html>
