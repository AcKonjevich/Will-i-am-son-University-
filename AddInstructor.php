<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add Instructor</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script src="addInstructorValidator.js"></script>
    </head>
    <body>
		<h2>New Instructor</h2>
		<form id="form" action="AddInstructor_Data.php" method="post">
			<label>Instructor's First Name*<br>
			<input type="text" name="first" /></label><br>
			
			<label>Instructor's Last Name*<br>
			<input type="text" name="last" /></label><br>
				
			<label>Instructor's Department<br>
			<input type="text" name="department"/></label><br>
				
			<label>Instructor's Rank<br>
			<select name = "rank">
				<option>Instructor</option>
				<option>Assistant Professor</option>
				<option>Associate Professor</option>
				<option>Professor</option>
			</select></label><br>
				
			<label>Instructor's Email Address*<br>
			<input type="text" name="email"/></label>

			<p>*<span class="required">Required Field</span></p>

			<button type="submit" class="mc" name="submit">Submit</button><br>
			<input type="reset" class="mc" name="reset" />
		</form>
		<script src="submit.js"></script>
		<a href="home.html">Back</a><br>
		<?php include 'footer.php';?>
    </body>
</html>