<?php

if (!isset($_SESSION["username"])) {
  header("Location: index.html");
  exit();
}

// Check if the user is an admin
if ($_SESSION["user_type"] != "admin") {
  header("Location: home.php");
  exit();
}
// Retrieve list of all instructors
// Code to retrieve the list of instructors from the database goes here
$instructors = array("Instructor A", "Instructor B", "Instructor C");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve selected instructor
  $selected_instructor = $_POST["instructor"];

  // Redirect to page displaying courses taught by selected instructor
  header("Location: view_courses_by_instructor.php?instructor=" . urlencode($selected_instructor));
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Select Instructor</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <h1>Courses Taught by Instructor - Admin</h1>
  <form method="post">
    <label for="instructor">Select an Instructor:</label>
    <select name="instructor" id="instructor">
      <?php foreach ($instructors as $instructor) { ?>
        <option value="<?php echo $instructor; ?>"><?php echo $instructor; ?></option>
      <?php } ?>
    </select>
	  <pre></pre>
    <br>
    <button type="submit" style="background-color:#002469; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; color: white">VIEW COURSES</button>
  </form>
</body>
</html>

