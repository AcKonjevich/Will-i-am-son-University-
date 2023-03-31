<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Display Form Data</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h2 class="bluestripe">New Instructor</h2>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		echo "<p>Instructor's First Name: " . $_POST["first"] . "</p>";
		echo "<p>Instructor's Last Name: " . $_POST["last"] . "</p>";
		echo "<p>Instructor's Department: " . $_POST["department"] . "</p>";
		echo "<p>Instructor's Rank: " . $_POST["rank"] . "</p>";
		echo "<p>Instructor's Email Address: " . $_POST["email"] . "</p>";
	}
	?>

	<a href="home.html">Back</a><br>
	<?php include 'footer.php';?>
</body>
</html>
