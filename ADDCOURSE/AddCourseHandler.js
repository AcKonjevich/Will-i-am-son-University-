//Test Semester and Year
//year must consist of four digits.
//year cannot be before 2021
function semesterYear(){
	var yearEnt = document.getElementById("year").value;
   var validYear = yearEnt.search(/^\d{4}/);
   if (Number(validYear) == -1){
		document.getElementById("yearP").innerHTML = "<span style='color: red; font: bold;'>Not a valid entry</span>";
        return false;
    } else if(yearEnt < 2021){
		document.getElementById("yearP").innerHTML = "<span style='color: red; font: bold;'>Not a valid entry</span>";
        return false;
	} else {
        document.getElementById("yearP").innerHTML = "";
		return true;
	}
}

//Course Prefix
//Required field
//Must have either 3 or 4 capital letters.
function coursePget(){
    var cPreEnt = document.getElementById("coursePrefix").value;
	var validCPre = cPreEnt.search(/^[A-Z]{4}/);
	var validCPre2 = cPreEnt.search(/^[A-Z]{3}/);
	if (Number(validCPre) == -1 && Number(validCPre) == -1){
		document.getElementById("coursePrefixP").innerHTML = "<span style='color: red; font: bold;'>Not a valid entry</span>";
        return false;
	} else {
        document.getElementById("coursePrefixP").innerHTML = "";
		return true;
	}
    
}

//Course Number
//Required field
//Must have exactly 3 digits (e.g., 101, 310, 080)
//Cannot be larger than 499 since we don’t have graduate courses.
function courseNumber(){
	var cNumEnt = document.getElementById("courseNumber").value;
	var validCNum = cNumEnt.search(/^\d{3}/);
	if (Number(validCNum) == -1){
		document.getElementById("courseNumberP").innerHTML = "<span style='color: red; font: bold;'>Not a valid entry</span>";
        return false;
    } else if(cNumEnt > 499){
		document.getElementById("courseNumberP").innerHTML = "<span style='color: red; font: bold;'>Not a valid entry</span>";
        return false;
	} else {
        document.getElementById("courseNumberP").innerHTML = "";
		return true;
	}
}

//Course Section
//Required field
//Must have exactly 2 digits (e.g., 01)
function courseSection(){
	var cNumEnt = document.getElementById("section").value;
	var validCNum = cNumEnt.search(/^\d{2}/);
	if (Number(validCNum) == -1){
		document.getElementById("courseSectionP").innerHTML = "<span style='color: red; font: bold;'>Not a valid entry</span>";
        return false;
    } else {
        document.getElementById("courseSectionP").innerHTML = "";
		return true;
	}
}

//Room (i.e., Building and Room Number)
//Not required
//Must be formatted as a building name and room number. The room number can be 2 or 3 digits, and it may end with a letter.
function roomCheck(){
	var rmEnt= document.getElementById("room").value;
	var validrm = rmEnt.search(/^[A-Z][a-z]+, ?[0-9]{2,3}[A-Za-z]?$/);
	if (Number(validrm) == -1){
		document.getElementById("roomP").innerHTML = "<span style='color: red; font: bold;'>Not a valid entry</span>";
        return false;
    } else {
        document.getElementById("roomP").innerHTML = "";
		return true;
	} 

}

//Days Offered
//No validation required since this is a drop down list.
function daysOffered(){
	var offered = "";
	var offDom = document.getElementById("daysOffered").value;
    //alert(offDom);
    //alert(String(offDom));
	//offered = offDom.options[offDom.selectedIndex].value;
	//alert(offered)
    if (String(offDom)== "t0"){
    	w3.hide('#MWF');
    	w3.hide('#TueThur');
		w3.hide('#anyDayTime');
        document.getElementById("DayText").innerHTML = "<span style='color: red; font: bold;'>Not a valid entry</span>";
    }else if(String(offDom) == "Monday/Wednesday/Friday"){
		  w3.show('#MWF');
		  w3.hide('#TueThur');
		  w3.hide('#anyDayTime');
	}else if(String(offDom) == "Tuesday/Thursday"){
		  w3.hide('#MWF');
		  w3.show('#TueThur');
		  w3.hide('#anyDayTime');
	  } else {
		  w3.hide('#MWF');
		  w3.hide('#TueThur');
		  w3.show('#anyDayTime');
	  }     
    }



//Credit Hours
//Required field
//Must be formatted as a number between 0 and 4 hours.
function creditHours(){
	var hours = document.getElementById("credithours").value;
    var validhr = hours.search(/^\d{1}/);
	if (Number(validhr) == -1){
		document.getElementById("credithoursP").innerHTML = "<span style='color: red; font: bold;'>Not a valid entry</span>";
        return false;
	}else if ( hours < 1 || hours >4){
        document.getElementById("credithoursP").innerHTML = "<span style='color: red; font: bold;'>Not a valid entry</span>";
        return false;
    } else {
        document.getElementById("credithoursP").innerHTML = "";
		return true;
	}
}


//Instructor First Name/Instructor Last Name
//Required field
//Must be a valid name consisting of letters. Spaces are allowed.
function firstNameCheck(){
    var nameEntered = document.getElementById("iFName").value;
    var validName = nameEntered.search(/^[A-Z][a-z ]+$/); // returns a 0 if valid, -1 if not
    if (Number(validName) == -1){
        //it was invalid
        document.getElementById("iFNameP").innerHTML = "<span style='color: red; font: bold;'>Not a valid entry</span>";
        return false; 
    } else {
        //it was valid
        document.getElementById("iFNameP").innerHTML = "";
        return true; 
    }
}
function lastNameCheck(){
    var nameEntered1 = document.getElementById("iLName").value; 
    var validName1 = nameEntered1.search(/^[A-Z][a-z ]+$/); 
    if (Number(validName1) == -1){
        document.getElementById("iLNameP").innerHTML = "<span style='color: red; font: bold;'>Not a valid entry</span>";
        return false;
    } else {
        document.getElementById("iLNameP").innerHTML = "";
        return true; 
    }
}

//Enrollment Cap
//Required field
//Must be a number with two digits.
function enrollmentCap(){	
    var eCapEnt = document.getElementById("enrollmentcap").value;
    var validCap = eCapEnt.search(/^\d{2}/); 
    if (validCap == -1){
        document.getElementById("enrollmentcapP").innerHTML = "<span style='color: red; font: bold;'>Not a valid entry</span>";
        return false;
}else if(Number(eCapEnt) >99){
	document.getElementById("enrollmentcapP").innerHTML = "<span style='color: red; font: bold;'>Not a valid entry</span>";
        return false;
    } else {
        document.getElementById("enrollmentcapP").innerHTML = "";
        return true; 
    }
}

function submitInfo(){

    if (Boolean(semesterYear()) && Boolean(coursePget()) && Boolean(courseNumber()) && Boolean(courseSection()) && Boolean(creditHours()) && Boolean(firstNameCheck()) && Boolean(lastNameCheck()) && Boolean(enrollmentCap()))
    {
        alert("Information Submited:\nFirst Name: " + document.getElementById("iFName").value + "\nLast Name: " + document.getElementById("iLName").value +
        "\nCourse Name: " + document.getElementById("courseName").value + "\nCourse Regristration: " + document.getElementById("coursePrefix").value +", " 
		+ document.getElementById("courseNumber").value + ", " + document.getElementById("section").value + document.getElementById("credithours").value +
		document.getElementById("enrollmentcap").value+ "\nDays offered: "+ document.getElementById("daysOffered").value + "\nSemester: "+ document.getElementById("semester").value + "\nYear: " + document.getElementById("year").value ); 
    }
    else
    {
        alert("Information was not submitted due to incorrect information"); 
    }
}
