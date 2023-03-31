<!DOCTYPE html>
<html>

<head>
    <title>Add Course</title>
    <script type = "text/javascript" src="addCreg.js"></script>
    <script type="text/javascript" src="addChandler.js"></script>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1>Add Course</h1>
    <form name="courseForm" id="courseForm">
        <label for="sem">Semester:</label>
        <select name="Semester" id="sem" required><br>
            <option value="blank"></option><br>
            <option value="sum23">Summer</option><br>
            <option value="fall23">Fall</option><br>
            <option value="spring24">Spring</option><br>
        </select>
        <input type="text" id="year" placeholder="year" min="4" maxlength="4" required><br>
		<pre></pre>

        <label for="coursep">Course Prefix (e.g., CSCI):</label>
        <input type="text" id="coursep" name="coursep" placeholder="ex. MIS" min="3" maxlength="4" required><br>
		<pre></pre>

        <label for="course#">Course Number (e.g., 101, 330, etc.):</label>
        <input type="text" id="course#" name="course#" placeholder="ex. 405" minlenght="3" maxlength="3" required><br>
		<pre></pre>

        <label for="courses">Course Section (e.g., 01, 02):</label>
        <input type="text" id="courses" name="courses" placeholder="ex. 01" minlength="2" maxlength="2" required><br>
		<pre></pre>

        <label for="coursen">Course Name:</label>
        <input type="text" id="coursen" name="coursen"><br>
		<pre></pre>

        <label for="room">Room (e.i., Building and Room Number):</label>
        <input type="text" id="room" name="room" placeholder="ex. Build., ###*" size="10"  minlength="1" maxlength="30"><br>
		<pre></pre>

        <label for="days">Days Offered:</label>
        <select name="days" id="days" required>
            <option value="blank1"></option><br>
            <option value="mwf">Monday, Wednesday, Friday</option><br>
            <option value="tth">Tuesday, Thursday</option><br>
            <option value="m">Monday</option><br>
            <option value="t">Tuesday</option><br>
            <option value="w">Wednesday</option><br>
            <option value="th">Thursday</option><br>
        </select>
		<pre></pre>

        <div id="3day" class="time">
        <label for="tmwf">Times - MWF:</label>
        <select name="tmwf" id="tmwf">
            <option value="blank2"></option><br>
            <option value="8">8:00AM to 8:50AM</option><br>
            <option value="9">9:00AM to 9:50AM</option><br>
            <option value="10">10:00AM to 10:50AM</option><br>
            <option value="11">11:00AM to 11:50AM</option><br>
            <option value="12">12:00PM to 12:50PM</option><br>
            <option value="1">1:00PM to 1:50PM</option><br>
            <option value="2">2:00PM to 2:50PM</option><br>
            <option value="th">3:00PM to 3:50PM</option><br>
        </select>
        </div>
		<pre></pre>

        <div id="2day" class="time">
        <label for="ttth">Times - TTh:</label>
        <select name="ttth" id="ttth">
            <option value="blank3"></option><br>
            <option value="800">8:00AM to 9:15AM</option><br>
            <option value="930">9:30AM to 10:45AM</option><br>
            <option value="1100">11:00AM to 12:15PM</option><br>
            <option value="100">1:00PM to 2:15PM</option><br>
            <option value="230">2:30PM to 3:45PM</option><br>
        </select>
        </div>
		<pre></pre>

        <div id="1day" class="time">
        <label for="tdays">Times - Single Days:</label>
        <select name="tdays" id="tdays">
            <option value="blank4"></option><br>
            <option value="1-4">1:00PM to 4:00PM</option><br>
            <option value="2-5">2:00PM to 5:00PM</option><br>
            <option value="7-930">7:00PM to 9:30PM</option><br>
        </select>
        </div>
		<pre></pre>
        
        <label for="ch">Credit Hours:</label>
        <input type="text" id="ch" name="ch" placeholder="ex. 3" minlenght="1" maxlength="1" required><br>
		<pre></pre>

        <label for="ifname">Instructor First Name:</label>
        <input type="text" id="ifname" name="ifname" placeholder="ex. Robert" minlenght="2" maxlength="50" required><br>
		<pre></pre>

        <label for="ilname">Instructor Last Name:</label>
        <input type="text" id="ilname" name="ilname" placeholder="ex. Van Camp" minlenght="2" maxlength="50" required><br>
		<pre></pre>

        <label for="cap">Enrollment Cap:</label>
        <input type="text" id="cap" name="cap" placeholder="ex. 40" minlenght="2" maxlength="3" required><br>
		<pre></pre>
		<pre></pre>

        <button type="button" id="confirm" style="background-color:#002469; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; color: white">SUBMIT</button>

        <script>
            
            function yearValid(){
                var yearVal = document.getElementById("year").value;
                var validYear = yearVal.search(/^\d{4}/);
                if (Number(validYear) == -1){
                        return false;
                    } else if(yearVal < 2023){
                        return false;
                    } else {
                        return true;
                    }
                }

            function coursepValid(){
                var coursepVal = document.getElementById("coursep").value;
                var validCoursep = coursepVal.search(/^[A-Z]{4}/);
                var validCoursep2 = coursepVal.search(/^[A-Z]{3}/);
                if (Number(validCoursep) == -1 && Number(validCoursep2) == -1){
                    return false;
                } else {
                    return true;
                }
            }

            function coursenumValid(){
                var coursenumVal = document.getElementById("course#").value;
                var validCoursenum = coursenumVal.search(/^\d{3}/);
                if (Number(validCoursenum) == -1){
                    return false;
                } else if(coursenumVal > 499){
                    return false;
                } else {
                    return true;
                }                
            }

            function coursesValid(){
                var coursesVal = document.getElementById("courses").value;
                var validCourses = coursesVal.search(/^\d{2}/);
                if (Number(validCourses) == -1){
                    return false;
                } else {
                    return true;
                }
            }

            function roomValid(){
                var roomVal = document.getElementById("room").value;
                var validRoom = roomVal.search(/^[A-Z][a-z]+, ?[0-9]{2,3}[A-Za-z]?$/);
                if (Number(validRoom) == -1){
                    return false;
                } else {
                    return true;
                } 

            }

            function chValid(){
                var chVal = document.getElementById("ch").value;
                var validCh = chVal.search(/^\d{1}/);
                if (Number(validCh) == -1){
                    return false;
                }else if ( chVal < 1 || chVal > 4){
                    return false;
                } else {
                    return true;
                }
            }

            function ifnameValid(){
                var ifnameVal = document.getElementById("ifname").value;
                var validIfname = ifnameVal.search(/^[A-Z][a-z]+$/); // returns a 0 if valid, -1 if not
                if (Number(validIfname) == -1){
                    return false; 
                } else {
                    return true; 
                }
            }
            function ilnameValid(){
                var ilnameVal = document.getElementById("ilname").value; 
                var validIlname = ilnameVal.search(/^[A-Z][a-z]+$/); 
                if (Number(validIlname) == -1){
                    return false;
                } else {
                    return true; 
                }
            }

            function capValid(){	
                var capVal = document.getElementById("cap").value;
                var validCap = capVal.search(/^\d{2}/); 
                if (validCap == -1){
                    return false;
                }else if(Number(capVal) >99){
                    return false;
                } else {
                    return true; 
                }
            }

            document.getElementById("days").addEventListener("click", daysValid);
            function daysValid(){
                var daySelect = document.getElementById("days").value;
                
                if (String(daySelect) == "blank1"){
                    document.getElementById("3day").style.visibility = "hidden";
                    document.getElementById("2day").style.visibility = "hidden";
                    document.getElementById("1day").style.visibility = "hidden";
                }else if(String(daySelect) == "mwf"){
                    document.getElementById("3day").style.visibility = "visible";
                    document.getElementById("2day").style.visibility = "hidden";
                    document.getElementById("1day").style.visibility = "hidden";
                }else if(String(daySelect) == "tth"){
                    document.getElementById("3day").style.visibility = "hidden";
                    document.getElementById("2day").style.visibility = "visible";
                    document.getElementById("1day").style.visibility = "hidden";
                } else {
                    document.getElementById("3day").style.visibility = "hidden";
                    document.getElementById("2day").style.visibility = "hidden";
                    document.getElementById("1day").style.visibility = "visible";
          }     
        }

        document.getElementById("confirm").addEventListener("click", submitButton);
        function submitButton(){
            if (Boolean(yearValid()) && Boolean(coursepValid()) && Boolean(coursenumValid()) && Boolean(coursesValid()) && Boolean(chValid()) && Boolean(ifnameValid()) && Boolean(ilnameValid()) && Boolean(capValid())){
                alert("Information Submited:\nFirst Name: " + document.getElementById("ifname").value + "\nLast Name: " + document.getElementById("ilname").value +
                "\nCourse Name: " + document.getElementById("coursen").value + "\nCourse Regristration: " + document.getElementById("coursep").value +", " 
                + document.getElementById("course#").value + ", " + document.getElementById("courses").value + document.getElementById("ch").value +
                document.getElementById("cap").value+ "\nDays offered: "+ document.getElementById("days").value + "\nSemester: "+ document.getElementById("sem").value + "\nYear: " + document.getElementById("year").value ); 
            }
            else
            {
                alert("Invalid information entered! Try again."); 
            }
            }
               
        </script>
      </form>

</body>
</html>