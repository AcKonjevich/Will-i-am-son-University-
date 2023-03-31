<!DOCTYPE html>
<html>
<head>
	<title>Form Data</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1>Drop Course Data</h1>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$first_name = $_POST["first_name"];
		$last_name = $_POST["last_name"];
		$semester = $_POST["semester"];
		$year = $_POST["year"];
		$course_prefix = $_POST["course_prefix"];
		$course_number = $_POST["course_number"];
		$course_section = $_POST["course_section"];

		echo "<h1>Form Data</h1>";
		echo "<p>First Name: " . $first_name . "</p>";
		echo "<p>Last Name: " . $last_name . "</p>";
		echo "<p>Semester: " . $semester . "</p>";
		echo "<p>Year: " . $year . "</p>";
		echo "<p>Course Prefix: " . $course_prefix . "</p>";
		echo "<p>Course Number: " . $course_number . "</p>";
		echo "<p>Course Section: " . $course_section . "</p>";
	}
?>

</body>
</html>
