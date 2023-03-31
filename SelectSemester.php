<!DOCTYPE html>
<html>
<head>
	<title>Select Semester</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1>Select Semester</h1>
	<br>
	<form action="ViewStudents_RegisteredSemester.php" method="post">
		<label for="semester">Choose a Semester:</label>
		<select name="semester" id="semester">
			<option value="Fall 2022">Fall 2022</option>
			<option value="Spring 2023">Spring 2023</option>
			<option value="Summer 2023">Summer 2023</option>
		</select>
		<br>
		<pre></pre>
		<button type="submit" style="background-color:#002469; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; color: white">VIEW STUDENTS</button>
	</form>
	<?php include 'footer.php';?>
</body>
</html>
