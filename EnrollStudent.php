<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll Student</title>
    <script src="Validation.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class ="bluestripe">Enroll Student</h1>

    <?php
    session_start();

    // Check if the user is an admin
    if (!isset($_SESSION["user"]) || $_SESSION["user"] !== "Admin") {
        header("Location: home.php");
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Connect to the database
        $db_host = "localhost";
        $db_user = "username";
        $db_password = "password";
        $db_name = "database_name";
        $db = mysqli_connect($db_host, $db_user, $db_password, $db_name);
        if (!$db) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $fname = mysqli_real_escape_string($db, $_POST['fname']);
        $lname = mysqli_real_escape_string($db, $_POST['lname']);
        $year = mysqli_real_escape_string($db, $_POST['year']);
        $major = mysqli_real_escape_string($db, $_POST['major']);
        $email = mysqli_real_escape_string($db, $_POST['email']);

        $query = "INSERT INTO students (first_name, last_name, year, major, email) VALUES ('$fname', '$lname', '$year', '$major', '$email')";
        if (mysqli_query($db, $query)) {
            echo "<p class='success'>Student record added successfully!</p>";
        } else {
            echo "<p class='error'>Error adding student record: " . mysqli_error($db) . "</p>";
        }

        mysqli_close($db);
    }
    ?>
	
	<form method="post" onsubmit="return validateEnrollStudent()">
	  <div class="form-group">
		<label for="fname">Student’s First Name:</label>
		<input type="text" id="fname" name="fname" class="form-control" required>
		<span id="fname_error" class="error"></span>
	  </div>
	  <pre></pre>

	  <div class="form-group">
		<label for="lname">Student’s Last Name:</label>
		<input type="text" id="lname" name="lname" class="form-control" required>
		<span id="lname_error" class="error"></span>
	  </div>
	  <pre></pre>

	  <div class="form-group">
		<label for="year">Student’s Year:</label>
		<select id="year" name="year" class="form-control" required>
		  <option value="">-- Select year --</option>
		  <option value="Freshman">Freshman</option>
		  <option value="Sophomore">Sophomore</option>
		  <option value="Junior">Junior</option>
		  <option value="Senior">Senior</option>
		</select>
		<span id="year_error" class="error"></span>
	  </div>
	  <pre></pre>

	  <div class="form-group">
		<label for="major">Student’s Major:</label>
		<input type="text" id="major" name="major" class="form-control" required>
		<span id="major_error" class="error"></span>
	  </div>
	  <pre></pre>

	  <div class="form-group">
		<label for="email">Student’s Email Address:</label>
		<input type="email" id="email" name="email" class="form-control" required>
		<span id="email_error" class="error"></span>
	  </div>
	  <pre></pre>

	  <button type="submit" class="btn btn-primary">Enroll</button>
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
