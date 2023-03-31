function checkName() {
    var firstName = document.getElementById("first");
    var lastName = document.getElementById("last");
    var year = document.getElementById("year");
    var prefix = document.getElementById("coursePrefix");
    var number = document.getElementById("courseNumber");
    var section = document.getElementById("courseSection");

    /* First Name Validators*/
    if (firstName.value == "") {
        alert("Please enter a first name");
        return false;
    }

    else if (!isNaN(firstName.value)) {
        alert("First name must be a string");
        return false;
    }

    /* Last Name Validators*/
    else if (lastName.value == "") {
        alert("Please enter a last name");
        return false;
    }

    else if (!isNaN(lastName.value)) {
        alert("Last name must be a string");
        return false;
    }

    /*Year Validators*/
    else if (year.value == "") {
        alert("Please enter a year");
        return false;
    }

    else if (year.value.search(/^\d{4}$/) != 0) {
        alert("Year must consist of four digits");
        return false;
    }

    else if(year.value < 2023) {
        alert("Year cannot be before 2023");
        return false;
    }

    /*Course Prefix Validators*/
    else if (prefix.value == "") {
        alert("Please enter a course prefix");
        return false;
    }

    else if(prefix.value.search(/^[A-Z]{3}$/) != 0 && prefix.value.search(/^[A-Z]{4}$/) != 0) {
        alert("Course prefix can only be 3 or 4 capital letters");
        return false;
    }

    /*Course Number Validators*/
    else if (number.value == "") {
        alert("Please enter a course number");
        return false;
    }

    else if(number.value.search(/^[1-4]\d{2}$/) != 0) {
        alert("Course number must be a three digit number less than 500")
        return false;
    }

    /*Course Section Validators*/
    else if (section.value == "") {
        alert("Please enter a course section");
        return false;
    }

    else if(section.value.search(/^\d{2}$/) != 0) {
        alert("Course section must be a two digit number")
        return false;
    }

    /*Valid*/
    else {
        return true;
    }

}// JavaScript Document