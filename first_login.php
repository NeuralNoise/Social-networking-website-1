<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Friendzone management system </title>
  <style type="text/css">
body {
background-color: cornflowerblue;
color: black;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 16px;
line-height: 1.5em;
}
a { text-decoration: none; }
h1 { font-size: 1em; }
h1, p {
margin-bottom: 10px;
}
strong {
font-weight: bold;
}
</style>
</head>
<center>
<body>
  <div id="main">
  <div id="login page">
    <h1><strong>WELCOME TO FRIENDZONE!</strong></h1>
    <h1><strong>Please Log In</strong></h1>
    <form method="post" action="process.php">
      <fieldset>
    <p><input type="text" name="user" required value="Username" onBlur="if(this.value=='')this.value='Username'" onFocus="if(this.value=='Username')this.value='' "></p>
    <p><input type="password" name="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "></p>
    <p><a href="#">Forgot Password?</a></p>
    <p><input type="submit" value="Login"></p>
    </fieldset>
    </form>
  </div>
  <div id="front photo">
    <img src="networking.png"/>
  </div>
</body>
</center>
  </html>
