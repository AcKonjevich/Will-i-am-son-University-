<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Instructor</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script src="addInstructorValidator.js"></script>
</head>
    
<body>
	<h1 class = "bluestripe">New Instructor</h1>
		
	<?php
	session_start();

	// Check if the user is an admin
	if (!isset($_SESSION["user"]) || $_SESSION["user"] !== "Admin") {
		header("Location: home.php");
		exit();
	}

	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		// Connect to the database
		$db_host = "localhost";
		$db_user = "username";
		$db_password = "password";
		$db_name = "database_name";
		$db = mysqli_connect($db_host, $db_user, $db_password, $db_name);
		if (!$db) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$first = mysqli_real_escape_string($db, $_POST['first']);
		$last = mysqli_real_escape_string($db, $_POST['last']);
		$department = mysqli_real_escape_string($db, $_POST['department']);
		$rank = mysqli_real_escape_string($db, $_POST['rank']);
		$email = mysqli_real_escape_string($db, $_POST['email']);

		$query = "INSERT INTO instructors (first_name, last_name, department, rank, email) VALUES ('$first', '$last', '$department', '$rank', '$email')";
		if (mysqli_query($db, $query)) {
			echo "<p class='success'>Instructor record added successfully!</p>";
		} else {
			echo "<p class='error'>Error adding instructor record: " . mysqli_error($db) . "</p>";
		}

		mysqli_close($db);
	}
	?>

	<form id="form" action="AddInstructor_Data.php" method="post">
		<label>Instructor's First Name*<br>
		<input type="text" name="first" /></label><br>
		<pre></pre>
			
		<label>Instructor's Last Name*<br>
		<input type="text" name="last" /></label><br>
		<pre></pre>
				
		<label>Instructor's Department<br>
		<input type="text" name="department"/></label><br>
		<pre></pre>
				
		<label>Instructor's Rank<br>
		<select name = "rank">
			<option>Instructor</option>
			<option>Assistant Professor</option>
			<option>Associate Professor</option>
			<option>Professor</option>
		</select></label><br>
		<pre></pre>
				
		<label>Instructor's Email Address*<br>
		<input type="text" name="email"/></label>

		<p>*<span class="required">Required Field</span></p>
		<pre></pre>

		<button type="submit" class="mc" name="submit">Submit</button><br>
		<input type="reset" class="mc" name="reset" />
	</form>
	<script src="submit.js"></script>
	<br>
	<?php include 'footer.php';?>
</body>
</html>
