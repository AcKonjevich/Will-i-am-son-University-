<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Display Form Data</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1>Add Instructor Data</h1>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		echo "<h2>Form Data:</h2>";
		echo "<p>Instructor's First Name: " . $_POST["first"] . "</p>";
		echo "<p>Instructor's Last Name: " . $_POST["last"] . "</p>";
		echo "<p>Instructor's Department: " . $_POST["department"] . "</p>";
		echo "<p>Instructor's Rank: " . $_POST["rank"] . "</p>";
		echo "<p>Instructor's Email Address: " . $_POST["email"] . "</p>";
	}
	?>
</body>
</html>
