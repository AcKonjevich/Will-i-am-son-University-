<?php
$prefix_header = "Course Prefix";
$number_header = "Course Number";
$section_header = "Section";
$name_header = "Course Name";
$time_header = "Days Offered and Time";
$room_header = "Room";
$credit_header = "Credit Hours";
$enrollment_header = "Enrollment Cap";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>View Courses Taught by Instructor</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Courses Taught by Instructor</h1>
    <table>
      <thead>
        <tr>
          <th height="53"><?php echo $prefix_header; ?></th>
          <th><?php echo $number_header; ?></th>
          <th><?php echo $section_header; ?></th>
          <th><?php echo $name_header; ?></th>
          <th><?php echo $time_header; ?></th>
          <th><?php echo $room_header; ?></th>
          <th><?php echo $credit_header; ?></th>
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

