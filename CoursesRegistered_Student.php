<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
</body>
</html>
<?php
// Retrieve course data for the specified student from the database
$student_id = $_GET['student_id'];
// SQL query to retrieve course data for the specified student
$sql = "SELECT * FROM courses WHERE student_id = $student_id";
$result = mysqli_query($conn, $sql);

// Loop through the query results and format the course data for display
if (mysqli_num_rows($result) > 0) {
    echo '<h1>Courses Registered by Student</h1>';
    echo '<table>';
    echo '<tr><th>Course ID</th><th>Course Name</th><th>Instructor</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['course_id'] . '</td>';
        echo '<td>' . $row['course_name'] . '</td>';
        echo '<td>' . $row['instructor'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo 'No courses found for the specified student.';
}
?>

<!-- HTML code for the page layout and styling -->
<!DOCTYPE html>
<html>
<head>
    <title>View Courses Registered by Student</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
</body>
</html>
