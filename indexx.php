<!DOCTYPE html>

<html lang = "en">
    <head>
    <title> Process login.html </title>
    <meta charset = "utf-8" />
    </head>
<body>
    <?php
        //Gets data from text box
        $login = $_POST["login"];
        $Admin = "Admin";
        $Instructor = "Instructor";
        $Student = "Student";
        //Checks either Student, Instructor, or Admin

        if (strcmp($login, $Admin) == 0)
            header("Location:home.html");
        elseif (strcmp($login, $Instructor) == 0)
            header("Location:home.html");
        elseif (strcmp($login, $Student) == 0)
            header("Location:home.html");
        else {
            echo '<script>alert("You did not input a valid username");
            window.location.replace("index.html")
            </script>';
        }
    ?>
</body>