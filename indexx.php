<!DOCTYPE html>

<html lang = "en">
    <head>
    <title> Process login.html </title>
    <meta charset = "utf-8" />
    </head>
<body>
    <?php
        session_start();
        //Gets data from text box
        $login = $_POST["login"];
        $Admin = "Admin";
        $Instructor = "Instructor";
        $Student = "Student";
        //Checks either Student, Instructor, or Admin

        if (strcmp($login, $Admin) == 0) {
            $_SESSION["user"] = "Admin";
            header("Location:home.php");
        }
        elseif (strcmp($login, $Instructor) == 0) {
            $_SESSION["user"] = "Instructor";
            header("Location:home.php");
        }
        elseif (strcmp($login, $Student) == 0) {
            $_SESSION["user"] = "Student";
            header("Location:home.php");
        }
        else {
            echo '<script>alert("You did not input a valid username");
            window.location.replace("index.html")
            </script>';
        }
    ?>
</body>