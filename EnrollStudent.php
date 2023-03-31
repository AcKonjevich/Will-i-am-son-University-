<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Enroll Student</title>
<script src="Validation.js; style.css"></script>
<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php
		include 'session.php';

		// Check if the user is an admin
		if ($_SESSION["user"] != "Admin") {
		header("Location: home.php");
		exit();
		}
	?>
	<h1 style="background-size:cover;">Enroll Student</h1>
	
	<form>
		<label for="First_Name">Student’s First Name: </label>
		<input type="text" id="First_Name" name="Student's_First_Name">
			<br />
			<pre></pre>
		<label for="Last_Name">Student’s Last Name: </label>
		<input type="text" id="Last_Name" name="Student's_Last_Name">
			<br />
			<pre></pre>
		<label for="Year">Student's Year:</label>
		<select name="Year" id="Year">
		  <option value="Freshman">Freshman</option>
		  <option value="Sophomore">Sophomore</option>
		  <option value="Junior">Junior</option>
		  <option value="Senior">Senior</option>
		</select>
			<br />
			<pre></pre>
		<label for="Major">Student’s Major:</label> 
		<input type="text" id="Major" name="Student's_Major">
			<br />
			<pre></pre>
		<label for="Email_Address">Student’s Email Address: </label>
		<input type="text" id="Email_Address" name="Student's_Email_Address">
			<br />
			<pre></pre>
			<br />
	
		<input type="SUBMIT" style="background-color:#002469; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; color: white" value="SUBMIT" onclick="displayInfo()">
	</form>
	<?php include 'footer.php';?>
	
	<script>
		function displayInfo() {
		const firstName = document.getElementById("First_Name").value;
  		const lastName = document.getElementById("Last_Name").value;
		const year = document.getElementById("Year").value;
		const major = document.getElementById("Major").value;
		const emailAddress = document.getElementById("Email_Address").value;
			
		if (firstName === '') {
			alert('Please enter your first name');
			return false;
		  } 
		  if (lastName === '') {
			alert('Please enter your last name');
			return false;
		  }
		  if (emailAddress === '') {
			alert('Please enter your email address');
			return false;
		  }
			
		const emailRegex = /^[a-zA-Z]{3}\d{3}@marietta\.edu$/;
		  if (!emailRegex.test(emailAddress)) {
			alert('Please enter a valid email address');
			return false;
		  }
			
		const popup = window.open("", "Popup", "width=800,height=400");
			
		popup.document.write("<html><head><title>Enroll Student Data</title>");
		popup.document.write("<style>body {}");
		popup.document.write("h1 { color: white; background-color: #002469; background-size:cover; font-family: New Roman; text-indent:20px }");
		popup.document.write("p { margin: 10; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; text-indent:20px }</style>");
		popup.document.write("</head><body>");
		
		popup.document.write("<h1>Enroll Student Data</h1>");
		popup.document.write("<p>Student's First and Last Name: " + firstName + ' ' + lastName + "</p>");
		popup.document.write("<p>Student's Year: " + year + "</p>");
		popup.document.write("<p>Student's Major: " + major + "</p>");
		popup.document.write("<p>Student's Email Address: " + emailAddress + "</p>");
		
		popup.document.write("</body></html>");
			
		event.preventDefault();
	  } 
	</script>
</body>
</html>