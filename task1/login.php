<html>
    <head>
        <title>LOGIN</title>
    </head>
</html>

<?php
    session_start();
    if ($_POST["userName"] == 'daniyal' && $_POST["password"] == 'k180141')
    {
        $_SESSION["Login"] = "YES";
        echo "<h1>You are now logged correctly in</h1>";
        echo "<p><a href='document.php'>Link to protected file</a></p>";
    }
    else
    {
        $_SESSION["Login"] = "NO";
        echo "<h1>You are NOT logged correctly in</h1>";
        echo "<p><a href='login.html'>Login Again</a></p>";
    }
?>
