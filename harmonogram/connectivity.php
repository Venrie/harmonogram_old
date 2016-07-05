<?php
include ("connection.php");

function SignIn()
{
    session_start();
    if(!empty($_POST['name']))
    {
        $db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
        $sql = "SELECT * FROM websiteusers where name = '$_POST[name]' AND pass = '$_POST[pass]'";
        $result = mysqli_query($db, $sql) or die(mysqli_error($db));
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        if(!empty($row['name']) AND !empty($row['pass']))
        {
            $_SESSION['name'] = $row['pass'];
            echo "Zostales zalogowany.";
        }
        else
        {
            echo "Nieprawidlowa nazwa uzytkownika lub haslo.";
        }
    }

}
if (isset($_POST['submit']))
{
    SignIn();
}

?>