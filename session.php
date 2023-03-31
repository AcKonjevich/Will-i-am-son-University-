<!DOCTYPE html>

<html lang = "en">
    <head>
    <title> Session </title>
    <meta charset = "utf-8" />
    </head>
<body>
    <?php
    if(isset($_SESSION["user"]))
    {
        if(time(-$_SESSION["login_time_stamp"] > 300))
        {
            session_unset();
            session_destroy();
            header("Location:index.html")
        }
    }
    else
    {
        header("Location:index.html")
    }
    ?>
</body>