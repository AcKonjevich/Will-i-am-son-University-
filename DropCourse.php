<!DOCTYPE html>
<html>
<head>
    <h1><title>Drop Course</title></h1>
    <script type="text/javascript"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
	<h1 class = "bluestripe">Drop Course</h1>
    <?php
		include 'session.php';

		// Check if the user is an admin
		if ($_SESSION["user"] != "Admin" && $_SESSION["user"] != "Student") {
			header("Location: home.php");
			exit();
		}
	?>
        
	<form>
		<label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name"><br>
		<pre></pre>
            
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name"><br>
		<pre></pre>
            
        <label>Semester:</label>
        <select = name="semester" id="semester">
			<option>Spring</option>
            <option>Summer</option>
            <option>Fall</option>
        </select><br>
		<pre></pre>
            
        <label>Year:</label>
        <select = name="year" id="year">
			<option>2023</option>
            <option>2024</option>
            <option>2025</option>
            <option>2026</option>
        </select><br>
		<pre></pre>
            
        <label for="course_prefix">Course Prefix:</label>
        <input type="text" id="course_prefix" name="course_prefix"><br>
		<pre></pre>
            
        <label for="course_number">Course Number:</label>
        <input type="text" id="course_number" name="course_number"><br>
		<pre></pre>
            
        <label for="course_section">Course Section:</label>
        <input type="text" id="course_section" name="course_section"><br>
		<pre></pre>
		<pre></pre>
            
        <input type="SUBMIT" name="SUBMIT" class = "mc" id="submit">
   </form>
   <?php include 'footer.php';?>
        <script>
            function validate_First_Name() {
                var First_Name = document.getElementById("first_name");
                var Check_First_Name = First_Name.search();
                if (Check_First_Name.value == "") {
                    alert("Fill in your first name");
                    return false;
                }
                else
                    return true;
            }
            function validate_Last_Name() {
                var Last_Name = document.getElementById("last_name");
                if (Last_Name == "") {
                    alert("Fill in your last name!");
                    return false;
                }
            }
            function validate_Course_Prefix(){
                var Course_Prefix = document.getElementById("course_prefix");
                var Check_Course_Prefix = Course_Prefix.value.search(/^[A-Z],[A-Z],[A-Z]/);
                if (Check_Course_Prefix == "") {
                    alert("Fill in your course prefix!");
                    return false;
                } else if (Check_Course_Prefix == /^[A-Z],[A-Z],[A-Z]/) {
                    alert("The prefix must have 3-4 capital letters!");
                    return false;
                } else
                    return true;
            }
            function validate_Course_Number(){
                var Course_Number = document.getElementById("course_number");
                var Check_Course_Number = Course_Number.value.search(/^[0-4],[0-9],[0-9]/);
                if (Check_Course_Number == ""){
                    alert("Fill in your course number!");
                    return false;
                } else if (Check_Course_Number == /^[0-4],[0-9],[0-9]/) {
                    alert("The course number must have 3 digits below 499!");
                    return false;
                } else
                return true;
            }
            function validate_Course_Section(){
                var Course_Section = document.getElementById("course_section");
                var Check_Course_Section = Course_Section.value.search(/^[0-9],[0-9]/);
                if (Check_Course_Section == ""){
                    alert("Fill in your course section!");
                    return false;
                } else if (Check_Course_Section == /^[0-9],[0-9]/) {
                    alert("The course section must be exactly 2 digits!");
                } else
                    return true;
            }
            function info_form(){
                var First_Name = document.getElementById("first_name");
                var Last_Name = document.getElementById("last_name");
                var Semester = document.getElementById("semester");
                var Year = document.getElementById("year");
                var Course_Prefix = document.getElementById("course_prefix");
                var Course_Number = document.getElementById("course_number");
                var Course_Section = document.getElementById("course_section");

                var info = window.open()

                info.document.write("Your Form");
		        info.document.write("First Name:" + First_Name);
                info.document.write("Last Name:" + Last_Name)
		        info.document.write("Semester:" + Semester);
		        info.document.write("Year:" + Year);
		        info.document.write("Course Prefix" + Course_Prefix);
                info.document.write("Course Number" + Course_Number);   
                info.document.write("Course Section" + Course_Section);        
            }
            document.getElementById("first_name").onsubmit = validate_First_Name();
            document.getElementById("last_name").onsubmit = validate_Last_Name();
            document.getElementById("course_prefix").onsubmit = validate_Course_Prefix;
            document.getElementById("course_number").onsubmit = validate_Course_Number;
            document.getElementById("course_section").onsubmit = validate_Course_Section;
            document.getElementById("submit") = info_form();
            


        </script>
</body>
</html>
