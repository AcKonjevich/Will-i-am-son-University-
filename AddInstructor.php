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
		<form id="form" action="">
			<label>Instructor's First Name*<br>
			<input type="text" id="first" /></label><br>
			
			<label>Instructor's Last Name*<br>
			<input type="text" id="last" /></label><br>
				
			<label>Instructor's Department<br>
			<input type="text" id="department"/></label><br>
				
			<label>Instructor's Rank<br>
			<select id = "rank">
				<option>Instructor</option>
				<option>Assistant Professor</option>
				<option>Associate Professor</option>
				<option>Professor</option>
			</select></label><br>
				
			<label>Instructor's Email Address*<br>
			<input type="text" id="email"/></label>

			<p>*<span class="required">Required Field</span></p>

			<button type="submit" id="submit">Submit</button><br>
			<input type="reset" name="reset" />
		</form>
		<script src="submit.js"></script>
		<a href="homepage.html">Back</a>
    </body>
</html>