<?php
			include 'session.php';

			// Check if the user is an admin
			if ($_SESSION["user"] != "Admin" && $_SESSION["user"] != "Student") {
				header("Location: home.php");
				exit();
			}
// Start the PHP session and include any required files here

// Check if the user is logged in and redirect to the login page if not
// ...

// Retrieve the list of courses registered by the student from the database
// ...

$prefix_header = "Prefix";
$number_header = "Number";
$section_header = "Section";
$name_header = "Course Name";
$time_header = "Days and Time";
$room_header = "Room";
$credit_header = "Credit Hours";
$instructor_header = "Instructor";
$enrollment_header = "Enrollment Cap";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>View Courses</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <h1>View Courses Registered</h1>
    <table>
      <thead>
        <tr>
          <th height="100"><?php echo $prefix_header; ?></th>
          <th><?php echo $number_header; ?></th>
          <th><?php echo $section_header; ?></th>
          <th><?php echo $name_header; ?></th>
          <th><?php echo $time_header; ?></th>
          <th><?php echo $room_header; ?></th>
          <th><?php echo $credit_header; ?></th>
          <th><?php echo $instructor_header; ?></th>
          <th><?php echo $enrollment_header; ?></th>
        </tr>
      </thead>
      <tbody>
        <!-- This is where the course data will go -->
      </tbody>
    </table>
    <?php include 'footer.php';?>
  </body>
</html>

