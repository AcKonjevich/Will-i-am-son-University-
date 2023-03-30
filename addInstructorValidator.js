function checkName() {
    var firstName = document.getElementById("first");
    var lastName = document.getElementById("last");
    var department = document.getElementById("department");
    var email = document.getElementById("email");
    var pos = email.value.search (/^[A-Za-z]{3}\d{3}@marietta\.edu$/)

    if (firstName.value == "") {
        alert("Please enter a first name");
        return false;
    }

    else if (!isNaN(firstName.value)) {
        alert("First name must be a string");
        return false;
    }

    else if (lastName.value == "") {
        alert("Please enter a last name");
        return false;
    }

    else if (!isNaN(lastName.value)) {
        alert("Last name must be a string");
        return false;
    }

    else if (department.value != "") {
        if (!isNaN(department.value)) {
        alert("Department must be a string");
        return false;
        }
    }

    else if (pos != 0) {
        alert("Email in incorrect form. \n Correct form:sssddd@marietta.edu \n s = letter d = digit");
        return false;
    }

    else {
        return true;
    }

}