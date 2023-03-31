<!DOCTYPE html>
<html lang="en">
<head>
<title>Home Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<header>
  <h2 class = "bluestripe">Home Page</h2>
</header>

<section>
  <nav>
    <?php
    include 'session.php';
    if ($_SESSION["user"] == "Student")
    {
        echo '<ul>';
        echo '<li><a href="registerCourse.php">Register Course</a></li>';
        echo '<li><a href="DropCourse.php">Drop Course</a></li>';
        echo '<li><a href="userManual.html">User Manual</a></li>';
        echo '<br>';
        echo '<li><a href="CoursesRegistered_Student.php">View Courses Registered by Student</a></li>';
        echo '</ul>';
    }
    
    elseif ($_SESSION["user"] == "Instructor")
    {
        echo '<ul>';
        echo '<li><a href="AddCourse.php">Add Course</a></li>';
        echo '<li><a href="userManual.html">User Manual</a></li>';
        echo '</ul>';
        echo '<br>';
        echo '<ul>';
        echo '<li><a href="StudentsRegistered_Course.php">View Students Registered in Course</a></li>';
        echo '<li><a href="ViewCourses_TaughtbyInstructor.php">View Courses Taught by Instructor</li>';
        echo '</ul>';
    }
    
    elseif ($_SESSION["user"] == "Admin")
    {
        echo '<ul>';
        echo '<li><a href="EnrollStudent.php">Enroll Student</a></li>';
        echo '<li><a href="addInstructor.php">Add Instructor</a></li>';
        echo '<li><a href="AddCourse.php">Add Course</a></li>';
        echo '<li><a href="registerCourse.php">Register Course</a></li>';
        echo '<li><a href="DropCourse.php">Drop Course</a></li>';
        echo '<li><a href="userManual.html">User Manual</a></li>';
        echo '<li><a href="programmersManual.html">Programmer Manual</a></li>';
        echo '</ul>';
        echo '<br><br>';
        echo '<ul>';
        echo '<li><a href="CoursesRegistered_Student.php">View Courses Registered by Student</a></li>';
        echo '<li><a href="StudentsRegistered_Course.php">View Students Registered in Course</a></li>';
        echo '<li><a href="ViewCourses_TaughtbyInstructor.php">View Courses Taught by Instructor</li>';
        echo '<li><a href="ViewStudents_RegisteredSemester.php">View Students Registered by Semester</a></li>';
        echo '<li><a href="CoursesRegistered_Student_Admin.php">Admin:View Courses Registered by Student</a></li>';
        echo '<li><a href="StudentsRegistered_Course_Instructor_Admin.php">Admin:View Students Registered in Course</a></li>';
        echo '<li><a href="ViewCourses_TaughtbyInstructor_Admin.php">Admin:View Courses Taught by Instructor</li>';
        echo '<li><a href="SelectSemester.php">Semester Selection</a></li>';
        echo '</ul>';
    }
    ?>
  </nav>
  
  <article>
    <h1>Campus</h1>
    <p>This campus is full of history, knowledge, and excitement, to which our students are able to use to grow.</p>
    <p>Even though there our graduating seniors leave with the knowledge given to them, our new students get to continue the process all over again.</p>
  </article>
</section>
  

<footer>
  <p>Welcome to MC!</p>
</footer>

</body>
</html>

