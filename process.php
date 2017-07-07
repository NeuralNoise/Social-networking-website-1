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
    $user = mysqli_real_escape_string($link, $_POST['user']);
    $password = mysqli_real_escape_string($link, $_POST['password']);

    // attempt insert query execution
    $sql = "INSERT INTO loginfo (userid, password) VALUES ('$user', '$password')";

    if(mysqli_query($link, $sql)){
        echo "Logged in successfully!!";

$personal_link="second_info.php";
echo"<p></p>";
echo '<a href="'.$personal_link.'">Click here to enter your details</a>';
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