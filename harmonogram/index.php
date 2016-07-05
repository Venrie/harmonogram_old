

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Strona Główna</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" type="text/css" href="calendar.css">
</head>
<body id="body-color">
<div id="sign-in">
    <fieldset id="fieldset"><legend>Zaloguj:</legend>
        <form method="post" action="connectivity.php">
            <label>Imię i nazwisko:</label><br>
            <input type="text" name="name" size = "40" /><br><br>
            <label>Hasło:</label><br>
            <input type="password" name="pass" size = "40" />  <br><br>
            <input id="button" type="submit" name="submit" value="Zaloguj">
        </form>
        <a href="register.html"><button id="button">Zarejestruj się!</button></a>
    </fieldset>
</div>

<?php
include 'calendar.php';

$calendar = new Calendar();
echo $calendar->show();
?>

</body>
</html>

