<?php
include ("connection.php");

if (isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $slackname = $_POST["slackname"];
    $pass = $_POST["pass"];

    $name = mysqli_real_escape_string($db, $name);
    $email = mysqli_real_escape_string($db, $email);
    $slackname = mysqli_real_escape_string($db, $slackname);
    $pass = mysqli_real_escape_string($db, $pass);
    $pass = md5($pass);

    $sql = "SELECT email FROM websiteusers WHERE email='$email'";
    $result = mysqli_query($db, $sql) or die(mysqli_error($db));
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1)
    {
        echo "Sorry...This email already exist..";
    }
    else
    {
        $query = mysqli_query($db, "INSERT INTO websiteusers (name, email, slackname, pass)VALUES ('$name', '$email', '$slackname', '$pass')");

        if($query)
        {
            echo "Thank You! you are now registered.";
        }
    }
}


?>