<!DOCTYPE html>
<html lang="en">
<head>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
 
</head>

<body>
<div align="center">
<h2>Add Into Database</h2>
<form id="create">

    Name:<input type="text" name="name">
			<br/>
    URL:<input type="text" name="url">
			<br/>
    Description:<input type="text" name="theDesc">
			<br/>
	
    <input type="submit" name="submit" value="Add">
</form><br>

<h2>Retrieve From Database</h2>
<form id="retrieve">

    ID: <input type="text" name="id">
			<br/>
	
    <input type="submit" name="submit" value="Retrieve By ID"><br>
	
    Name:<input type="text" name="retname">
			<br/>
	
    <input type="submit" name="submit" value="Retrieve By Name">
	
</form> <br>
<div id="tablediv">
    <table class="tg">
        <tr>
            <th class="tg-yw4l">ID</th>
            <th class="tg-yw4l">Name</th>
            <th class="tg-yw4l">URL</th>
            <th class="tg-yw4l">Description</th>
            <th class="tg-yw4l">Date</th>
        </tr>
    </table>
</div>

<h2>Update Row by ID</h2>
<form id="update">

    ID:<input type="text" name="id"> 
			<br/>
    Name: <input type="text" name="name"> 
			<br/>
    URL: <input type="text" name="url"> 
			<br/>
    Description:<input type="text" name="theDesc"> 
			<br/>
	
    <input type="submit" name="submit" value="Update">
	
</form>

<h2>Delete by ID</h2>
<form id="delete">

    ID: <input type="text" name="id">
			<br/>
	
    <input type="submit" name="submit" value="Delete">
	
</form>
</div>
</body>

</html>