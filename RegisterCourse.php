<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Course</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script src="registerCourseValidator.js"></script>
</head>
	
<body>
	<h1 class="bluestripe">Register Course</h1>
	<?php
		include 'db_conn.php';
		include 'session.php';

		if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
			$first = $_POST['first'];
			$last = $_POST['last'];
			$semester = $_POST['semester'];
			$year = $_POST['year'];
			$course_prefix = $_POST['coursePrefix'];
			$course_number = $_POST['courseNumber'];
			$course_section = $_POST['courseSection'];

			// Check if all required fields are filled
			if (!empty($first) && !empty($last) && !empty($semester) && !empty($year) && !empty($course_prefix) && !empty($course_number) && !empty($course_section)) {

				// Check if student exists
				$student_query = "SELECT * FROM Students WHERE first_name='$first' AND last_name='$last'";
				$student_result = mysqli_query($conn, $student_query);

				if (mysqli_num_rows($student_result) == 1) {
					$student_row = mysqli_fetch_assoc($student_result);
					$student_id = $student_row['id'];

					// Check if course exists
					$course_query = "SELECT * FROM Courses WHERE prefix='$course_prefix' AND number='$course_number' AND section='$course_section'";
					$course_result = mysqli_query($conn, $course_query);

					if (mysqli_num_rows($course_result) == 1) {
						$course_row = mysqli_fetch_assoc($course_result);
						$course_id = $course_row['id'];

						// Check if student is already enrolled in the course
						$enrollment_query = "SELECT * FROM Enrollments WHERE student_id='$student_id' AND course_id='$course_id'";
						$enrollment_result = mysqli_query($conn, $enrollment_query);

						if (mysqli_num_rows($enrollment_result) == 0) {
							// Register the student for the course
							$register_query = "INSERT INTO Enrollments (student_id, course_id, semester, year) VALUES ('$student_id', '$course_id', '$semester', '$year')";
							$register_result = mysqli_query($conn, $register_query);

							if ($register_result) {
								echo "<p class='success'>Registration successful!</p>";
							} else {
								echo "<p class='error'>Registration failed. Please try again.</p>";
							}
						} else {
							echo "<p class='error'>The student is already enrolled in this course.</p>";
						}
					} else {
						echo "<p class='error'>The course does not exist.</p>";
					}
				} else {
					echo "<p class='error'>The student does not exist.</p>";
				}
			} else {
				echo "<p class='error'>Please fill out all required fields.</p>";
			}
		}
	?>

	<form id="form" action="RegisterCourse_Data.php" method="post">
		<label>Student's First Name*<br>
		<input type="text" name="first" required>
		</label><br>
		<pre></pre>

		<label>Student's Last Name*<br>
		<input type="text" name="last" required>
		</label><br>
		<pre></pre>

		<label>Semester*<br>
			<select name="semester" required>
				<option value="">-- Select Semester --</option>
				<option value="Spring">Spring</option>
				<option value="Summer">Summer</option>
				<option value="Fall">Fall</option>
			</select>
		</label><br>
		<pre></pre>

		<label>Year*<br>
		<input type="text" name="year" required>
		</label><br>
		<pre></pre>

		<label>Course Prefix*<br>
		<input type="text" name="coursePrefix" required>
		</label><br>
		<pre></pre>

		<label>Course Number*<br>
		<input type="text" name="courseNumber" required>
		</label><br>
		<pre></pre>

		<label>Course Section*<br>
		<input type="text" name="courseSection" required>
		</label><br>

		<p>*<span class="required">Required Field</span></p>
		<pre></pre>

		<input type="submit" class="mc" name="submit" /><br>
		<input type="reset" class="mc" name="reset" />
	</form>
	<script src="submit.js"></script>
	<?php include 'footer.php'; ?>
</body>
</html>
