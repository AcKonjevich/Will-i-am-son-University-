<!DOCTYPE html>

<html lang = "en">
    <head>
    <title> Session </title>
    <meta charset = "utf-8" />
    </head>
<body>
    <?php
    session_start();
    $user = $_SESSION["user"];
    echo "<p> Hello, $user </p>";
    echo '<a style=color:red; href=index.html>Logout </a>';
    if(!isset($_SESSION["user"]))
        header("Location:index.html")
    ?>
</body>