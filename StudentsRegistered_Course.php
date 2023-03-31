<?php
// Check if the user is logged in and redirect to the login page if not
// ...

// Retrieve the list of students registered for the course from the database
// ...

$name_header = "Student's Name";
$year_header = "Student's Year";
$major_header = "Student's Major";
$email_header = "Student's Email";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>View Students Registered in Course</title>
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <h1>Students Registered in Course</h1>
    <table>
      <thead>
        <tr>
          <th>Student's Name</th>
          <th>Student's Year</th>
          <th>Student's Major</th>
          <th>Student's Email</th>
        </tr>
      </thead>
      <tbody>
        <!-- This is where the student data will go -->
      </tbody>
    </table>
    <?php include 'footer.php';?>
  </body>
</html>

