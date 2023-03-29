<?php
session_start();

// Check if the user is logged in and redirect to the login page if not
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit();
}

// Check if the user is an admin
if ($_SESSION["user_type"] != "admin") {
  header("Location: index.php");
  exit();
}

// Connect to the database
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "mydb";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check if the connection was successful
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the list of students from the database
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

// Check if there are any students in the database
if (mysqli_num_rows($result) > 0) {
  echo "<h1>List of Students</h1>";
  echo "<ul>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>" . $row["first_name"] . " " . $row["last_name"] . "</li>";
  }
  echo "</ul>";
} else {
  echo "No students found.";
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>View Courses Registered by Student - Admin</title>
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <h1>View Courses Registered by Student - Admin</h1>
    <table>
      <thead>
        <tr>
          <th>Prefix</th>
          <th>Number</th>
          <th>Section</th>
          <th>Course Name</th>
          <th>Days Offered and Time</th>
          <th>Room</th>
          <th>Credit Hours</th>
          <th>Instructor</th>
          <th>Enrollment Cap</th>
        </tr>
      </thead>
      <tbody>
        <!-- This is where the course data will go -->
      </tbody>
    </table>
	  <br>
	  <pre></pre>
	<a href='home.php'><button type="button" style="background-color:#002469; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; color: white">BACK</button><a/>
  </body>
</html>


