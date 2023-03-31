<?php
		include 'session.php';

		// Check if the user is an admin
		if ($_SESSION["user"] != "Admin" && $_SESSION["user"] != "Instructor") {
            header("Location: home.php");
            exit();
		}
// Connect to the database
// ...

// Get the Instructor's ID
/*$instructor_id = $_SESSION['user'];

// Retrieve the list of courses taught by the Instructor from the database
$courses_query = "SELECT * FROM courses WHERE instructor_id = $instructor_id";
$courses_result = mysqli_query($connection, $courses_query);

// Display the list of courses in a dropdown menu
echo "<select name='course_id'>";
while ($course = mysqli_fetch_assoc($courses_result)) {
    echo "<option value='" . $course['id'] . "'>" . $course['name'] . "</option>";
}
echo "</select>";
*/

?>

<!DOCTYPE html>
<html>
  <head>
    <title>View Students Registered in Course</title>
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <h1>Students Registered in Course</h1>
    <form action="view_students.php" method="post">
      <label for="course">Select Course:</label>
      <select id="course" name="course">
        <!-- Options for courses will be added dynamically by PHP -->
      </select>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <button type="submit" style="background-color:#002469; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; color: white">VIEW STUDENTS</button>
    </form>
	  <br>
	  <pre></pre>
    <table>
      <thead>
        <tr>
          <th>Student Name</th>
          <th>Year</th>
          <th>Major</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <!-- This is where the student data will go -->
      </tbody>
    </table>
    <?php include 'footer.php';?>
  </body>
</html>

