<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add Course Data</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
	
<body>
	<h1>Add Course Data</h1>
	
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$semester = $_POST['semester'];
			$year = $_POST['year'];
			$coursep = $_POST['coursep'];
			$course_num = $_POST['course_num'];
			$course_sec = $_POST['course_sec'];
			$course_name = $_POST['course_name'];
			$room = $_POST['room'];
			$days = $_POST['days'];
			$time = $_POST['time'];
			echo "<h2>Course Information:</h2>";
			echo "<p>Semester: $semester</p>";
			echo "<p>Year: $year</p>";
			echo "<p>Course Prefix: $coursep</p>";
			echo "<p>Course Number: $course_num</p>";
			echo "<p>Course Section: $course_sec</p>";
			echo "<p>Course Name: $course_name</p>";
			echo "<p>Room: $room</p>";
			echo "<p>Days Offered: $days</p>";
			echo "<p>Time: $time</p>";
		}
	?>

	<a href="home.html">Back</a><br>
	<?php include 'footer.php';?>
	
</body>
</html>
