<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<h1 allign="center">Fantasy Castle Books SPA</h1>
	<body style="background-color:powderblue;">
		<h2>Insert Book</h2>
		<form id="insert" action="insertdata.php" method="post">
		
		Creator: <br><input type="text" name="creator">
		<br>
		Title: <br><input type="text" name="title">
		<br>
		Type: <br>
		<select id="genre" name="type">
			<option>History</option>
			<option>Drama</option>
			<option>Fantasy</option>
			<option>Romance</option>
		</select>
		<br>
		Identifier: 
			<br><input type="text" name="identifier">
			<br>
		Date:
		<br><input type="date" name="date">
		<br>
		Language:
		<br>
		<select id="lang" name="language">
			<option>Arabic</option>
			<option>English</option>
			<option>Persian</option>
			<option>Urdu</option>
		</select>
		<br>
		Description: 
		<br><textarea rows="5" cols="20" name="description"> 
		</textarea> 
		<br><input type="submit" value="submit">
		</form>
		
		<h2>Update Book</h2>
		<form class = "center" action="update.php" method="post">
		ID:<br>
		<input type="text" name="id"><br>
		Creator:<br>
		<input type="text" name="creator"><br>
		Title:<br>
		<input type="text" name="title"><br>
		
		Type: <br>
		<select id="genre" name="type">
			<option>History</option>
			<option>Drama</option>
			<option>Fantasy</option>
			<option>Romance</option>
		</select><br>
		Identifier:<br>
		<input type="text" name="identifier"><br>
		Date:
		<br><input type="date" name="date"><br>
		Language:
		<br>
		<select id="lang" name="language">
			<option>Arabic</option>
			<option>English</option>
			<option>Persian</option>
			<option>Urdu</option>
		</select><br>
		Description:<br>
		<textarea rows="5" cols="20" name="description"> 
		</textarea> <br>

			<input type="submit">

			</form>
			<h2> Delete Book</h2>
		<form action="delete.php" method="post">
		Entre ID:
		<br><input type="text" name="id">
		<input type="submit" value="Delete">
		</form>	
		<table class = "center" allign ="center">
			<tr>
				<th>id</th>
				<th>creator</th>
				<th>title</th>
				<th>type</th>
				<th>identifier</th>
				<th>date</th>
				<th>language</th>
				<th>description</th>
			</tr>
	
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mysql";
	//ini_set('display_errors',1);
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}
	$result = mysqli_query($conn,"SELECT * FROM ebook_metadata;");
	if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
    	?>
			
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['creator']; ?></td>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['type']; ?></td>
				<td><?php echo $row['identifier']; ?></td>
				<td><?php echo $row['date']; ?></td>
				<td><?php echo $row['language']; ?></td>
				<td><?php echo $row['description']; ?></td>
			</tr>
		<?php }
    	
    	}
   	 else{
    	echo "0 results";
    	}
   	 $conn->close();
	?>

	</table>
</body>
</html>