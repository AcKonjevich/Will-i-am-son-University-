<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Enroll Student</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<h1>Enroll Student Data</h1>
	
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$firstName = $_POST["Student's_First_Name"];
			$lastName = $_POST["Student's_Last_Name"];
			$year = $_POST["Year"];
			$major = $_POST["Student's_Major"];
			$emailAddress = $_POST["Student's_Email_Address"];
			
			echo "<p>Student's First and Last Name: " . $firstName . " " . $lastName . "</p>";
			echo "<p>Student's Year: " . $year . "</p>";
			echo "<p>Student's Major: " . $major . "</p>";
			echo "<p>Student's Email Address: " . $emailAddress . "</p>";
		}
	?>
	<pre></pre>
	<pre></pre>
	<pre></pre>
	<pre></pre>
	<pre></pre>
	<pre></pre>
	
	<button onclick="document.location='EnrollStudent.php'" style="background-color:#002469; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; color: white">BACK</button>
	<?php include 'footer.php';?>
</body>
</html>
