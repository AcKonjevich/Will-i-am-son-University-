<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register Course</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script src="registerCourseValidator.js"></script>
    </head>
    <body>
		<h2 class = "bluestripe">Register Course</h2>
		<form id="form" action="RegisterCourse_Data.php" method="post">
			<label>Student's First Name*<br>
			<input type="text" name="first"></label><br>
				
			<label>Student's Last Name*<br>
			<input type="text" name="last"></label><br>
				
			<label>Semester*<br>
			<select name = "semester">
				<option>Spring</option>
				<option>Summer</option>
				<option>Fall</option>
			</select></label><br>
				
			<label>Year*<br>
			<input type = "text" name="year"></label><br>
				
			<label>Course Prefix*<br>
			<input type="text" name="coursePrefix"></label><br>
				
			<label>Course Number*<br>
			<input type="text" name="courseNumber"></label><br>
				
			<label>Course Section*<br>
			<input type="text" name="courseSection"></label><br>

			<p>*<span class="required">Required Field</span></p>

			<input type="submit" class="mc" name="submit" /><br>
			<input type="reset" class="mc" name="reset" />
		</form>
		<script src="submit.js"></script>
		<a href="homepage.html">Back</a>
		<?php include 'footer.php';?>
    </body>
</html>