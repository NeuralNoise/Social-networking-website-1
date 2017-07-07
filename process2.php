<!DOCTYPE html>
<html>
<head>
<style>

body {
background: #A52A2A; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #00d2ff , #928DAB); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #00d2ff , #928DAB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

</style>
</head>
<body>
<center>
<h1>



<?php

    
    $link = mysqli_connect("localhost", "root", "12345", "mydatabase");

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
    $userid = mysqli_real_escape_string($link, $_POST['userid']);
    $name = mysqli_real_escape_string($link, $_POST['name']);
$age = mysqli_real_escape_string($link, $_POST['age']);
$city = mysqli_real_escape_string($link, $_POST['city']);
$country = mysqli_real_escape_string($link, $_POST['country']);
$movie = mysqli_real_escape_string($link, $_POST['movie']);
$actor = mysqli_real_escape_string($link, $_POST['actor']);
$actress = mysqli_real_escape_string($link, $_POST['actress']);
$destination = mysqli_real_escape_string($link, $_POST['destination']);

    // attempt insert query execution
    $sql = "INSERT INTO personalinfo (userid, name, age, city, country, movie, actor, actress, destination) VALUES ('$userid', '$name','$age','$city','$country','$movie','$actor','$actress','$destination')";

    if(mysqli_query($link, $sql)){
        echo "THANK YOU FOR PROVIDING YOUR PERSONAL INFORMATIONS.!!";

$personal_link2="third_profile.php";
echo"<p></p>";
echo '<a href="'.$personal_link2.'">CLICK HERE TO GO TO YOUR PROFILE</a>';
    } 
else
{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // close connection
    mysqli_close($link);
?>

</h1>
</center>
</body>
</html>