<!DOCTYPE html>
<html>
<head>
	<title>View Students Registered by Semester</title>
	<style type="text/css">
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 10px;
		}
	</style>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1>Students Registered by Semester</h1>
	<form method="post" action="">
		<label for="semester">Select Semester:</label>
		<select name="semester" id="semester">
			<option value="fall">Fall 2023</option>
			<option value="spring">Spring 2024</option>
			<option value="summer">Summer 2024</option>
		</select> 
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<button type="submit" style="background-color:#002469; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; color: white">VIEW STUDENTS</button>
	</form>
	<br>
	<pre></pre>
	<table>
		<tr>
			<th>Student's Name</th>
			<th>Course Prefix</th>
			<th>Course Number</th>
			<th>Section</th>
		</tr>
	</table>
</body>
</html>
