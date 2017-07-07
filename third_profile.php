<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 3px solid black;
}

body {
background: #00d2ff; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #00d2ff , #928DAB); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #00d2ff , #928DAB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        
}

input[type=submit]{
-moz-box-shadow:inset 0px 1px 0px 0px #fbafe3;
	-webkit-box-shadow:inset 0px 1px 0px 0px #fbafe3;
	box-shadow:inset 0px 1px 0px 0px #fbafe3;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff5bb0), color-stop(1, #ef027d) );
	background:-moz-linear-gradient( center top, #ff5bb0 5%, #ef027d 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bb0', endColorstr='#ef027d');
	background-color:#ff5bb0;
	-webkit-border-top-left-radius:20px;
	-moz-border-radius-topleft:20px;
	border-top-left-radius:20px;
	-webkit-border-top-right-radius:20px;
	-moz-border-radius-topright:20px;
	border-top-right-radius:20px;
	-webkit-border-bottom-right-radius:20px;
	-moz-border-radius-bottomright:20px;
	border-bottom-right-radius:20px;
	-webkit-border-bottom-left-radius:20px;
	-moz-border-radius-bottomleft:20px;
	border-bottom-left-radius:20px;
	text-indent:0;
	border:1px solid #ee1eb5;
	display:inline-block;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	height:65px;
	line-height:65px;
	width:131px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #c70067



}

</style>
</head>
<body>
<center>
<div>
<img src="yourprofile.gif"/>
</div>
<br>

<?php
$con=mysqli_connect("localhost","root","12345","mydatabase");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM personalinfo ORDER BY ID DESC LIMIT 1");

echo "<table border='1'>
<tr>

<th><h3>  USERID  </h3></th>
<th><h3>  NAME  </h3></th>
<th><h3>  AGE  </h3></th>
<th><h3>  CITY  </h3></th>
<th><h3> COUNTRY  </h3></th>
<th><h3>  MOVIE  </h3></th>
<th><h3>  ACTOR  </h3></th>
<th><h3>  ACTRESS  </h3></th>
<th><h3>  DESTINATION  <h3></th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td><h2>" . $row['userid'] . "</h2></td>";
echo "<td><h2>" . $row['name'] . "</td></h2>";
echo "<td><h2>" . $row['age'] . "</td></h2>";
echo "<td><h2>" . $row['city'] . "</td></h2>";
echo "<td><h2>" . $row['country'] . "</td></h2>";
echo "<td><h2>" . $row['movie'] . "</td></h2>";
echo "<td><h2>" . $row['actor'] . "</td></h2>";
echo "<td><h2>" . $row['actress'] . "</td></h2>";
echo "<td><h2>" . $row['destination'] . "</td></h2>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?> 

<br>
<h2> YOUR RECENT PHOTOS </h2>
</center>
<tr>
<td><img src="graduation.jpg"/></td>
<td><img src="holiday.jpg"/></td>
<td><img src="bday.jpg"/></td>
</tr>

<center>
<br><br><br>
<tr>
<form action="addf.php">
<td><input type="submit" name="button1" value="ADD FRIEND">
</td>
&nbsp;
</form>
<br>
<form action="flist.php">
<td><input type="submit" name="button2" value="SEE FRIENDLIST">
</td>
&nbsp;
</form>
<br>
<form action="msg.php">
<td><input type="submit" name="button3" value="SEND MESSAGE">
</td>
&nbsp;
</form>
<br>
<form action="events.php">
<td><input type="submit" name="button3" value="EVENTS">
</td>
&nbsp;
</form>
<br>
<form action="logout.php">
<td><input type="submit" name="button3" value="LOG OUT">
</td>
&nbsp;
</form>
</tr>
</center>
</body>
</html>