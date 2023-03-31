<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register Course - Confirmation</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <h2 class="bluestripe">Registration Confirmation</h2>
        
        <?php
            $first = $_POST['first'];
            $last = $_POST['last'];
            $semester = $_POST['semester'];
            $year = $_POST['year'];
            $coursePrefix = $_POST['coursePrefix'];
            $courseNumber = $_POST['courseNumber'];
            $courseSection = $_POST['courseSection'];
            
            // Display confirmation message
            echo "<p>Thank you for registering, $first $last! You have successfully registered for the $coursePrefix $courseNumber-$courseSection course in the $semester $year semester.</p>";
        ?>
        
        <a href="home.html">Back</a><br>
	    <?php include 'footer.php';?>
    </body>
</html>
