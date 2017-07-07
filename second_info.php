<!DOCTYPE html>
<html>
<head>
<title>PERSONAL INFORMATION</title>
<style type="text/css">

body {
background: #8E0E00;
background: -webkit-linear-gradient(to left, #8E0E00 , #1F1C18); 
background: linear-gradient(to left, #8E0E00 , #1F1C18); 
}

.class1
{
color:lime;
}

.class2
{
color:white;
}

</style>
</head>

<center>
<body>
<div class="class1" id="top">
<p><h1>HELLO USER!</h1><h2>PLEASE ENTER THE FOLLOWING DETAILS AND HELP US KNOW YOU BETTER :) </h2></p>
</div>

<div class="class2" id="info">
<form method="post" action="process2.php">
<br>
USER ID: <input type="text" name="userid" />
<br>
<br>
NAME: <input type="text" name="name" />
<br>
<br>
YOUR AGE: <input type="number" name="age" />
<br>
<br>
YOUR CITY: <input type="text" name="city" />
<br>
<br>
YOUR COUNTRY:<input type="text" name="country" />
<br>
<br>
FAVOURITE MOVIE:<input type="text" name="movie" />
<br>
<br>
FAVOURITE ACTOR:<input type="text" name="actor" />
<br>
<br>
FAVOURITE ACTRESS:<input type="text" name="actress" />
<br>
<br>
DREAM DESTINATION:<input type="text" name="destination" />
<br>
<br>
ARE YOU DONE?  <input type="submit" name="submit" value="ENTER"/>
<br>
</div>

<div id="image-table">
    <table>
        <tr>
            <td style="padding:5px">
                <img src="personal-information.png">
              </td>
            <td style="padding:5px">
                <img src="Female user info.png">
             </td>
        </tr>
    </table>
</div>

</center>

</form>
</body>
</html>