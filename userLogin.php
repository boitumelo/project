<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="External.css" />
  
	<title>Register</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!-- Begin FusionBot.com site search engine code -->
<form name="fbsearch" method="get" action="http://ss779.fusionbot.com/b/q" style="margin:0;">
  <div align="right"><font size="2" face="arial"><a href="http://www.fusionbot.com" target="_blank">Site Search</a>:</font><br />
  <input type="text" name="keys" size="15">
  <input type="submit" value="GO"><br />
  <font face="arial" size="1"><a href="http://ss779.fusionbot.com/b/h?sn=162553863">search tips</a></font> 
  <font face="arial" size="1"><a href="http://ss779.fusionbot.com/b/s?sn=162553863">sitemap</a></font>
  <input type="hidden" name="sitenbr" value="162553863">
  </div>
</form> 
<!-- End FusionBot.com site search engine code -->
<div class="navbar navbar-inverse">
  <div class="navbar-inner">
    <div class="container">
 
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <!-- Be sure to leave the brand out there if you want it shown -->
      
	  <a class="brand" href="#">Home</a>
	  <a class="brand" href="#">Contact Us</a>
	  <a class="brand" href="#">Gallery</a>
 
      <!-- Everything you want hidden at 940px or less, place within here -->
      <div class="nav-collapse collapse">
        <!-- .nav, .navbar-search, .navbar-form, etc -->
      </div>
 
    </div>
  </div>
</div>
  
<body>
<div id="box1" align="center">
 
    <tr>
	<a href="products.php" title="Buy " style="background-image:url(cart.jpg);width:140px;height:140px;display:block;">Buy<br/></a></td><p id="mainnav">
  
      <td width="592"><form id="form1" name="form1" method="post" action="products.php">
       <div id="FormatNavBar">
        <p align="right"><a href="home.php" target="_top">Home</a> || <a href="about.php" target="_top">About Us</a> ||<a href="UserRegister.php" target="_top">Register</a> || <a href="contact.php">Contact Us</a></p>
        </div>
        <h1 align="left">Customer Login </h1>
        
         <p align="left">First Name :
          <input type="text" name="firstName" id="fname" />
          </p>
      
        <p align="left">Password:
          <input type="text" name="password" id="password" />
          </p>
           
        <p align="left">
          <input type="submit" name="btnRegister" id="btnRegister" value="Login" />
         
          <input type="submit" name="btnCancel_Reg" id="btnCancel_Reg" value="Cancel" />
		  <input type="submit" name="forgot" id="forgot" value="Forgot password?" />
          </p>
          </form>
		        <footer>
			<div id="Format">

			<p><I>C&T bags &copy; 2014 All Rights Reserved</I></p>
			</div>
		</footer>
		  
<?php 


session_start();

$firstName=strtoupper($_POST['firstName']);
$pass=$_POST['password'];	

//to protect MySQL injection
$firstName = stripslashes($firstName);
$pass = stripslashes($pass);
$firstName = mysql_real_escape_string($firstName);
$pass = mysql_real_escape_string($pass);

if($firstName && $pass)
{	
	$connect = mysqli_connect ('localhost', 'projects','bags', 'c&tbags_db') or die ("Couldnt connect to the database");
	
	$query = 'SELECT * FROM user WHERE FIRST_NAME="'.$firstName.'" AND PASSWORD ="'.md5($pass).'"';
	
	$result = mysqli_query ($connect, $query) or die (mysql_error());

	$numrows = mysqli_num_rows($result);
	
	if ($numrows != 0)
	{	
		header("Location: home.php");
		$_SESSION['username'] = $firstName;
	}
	else
	{
		die ("Username doesn't exist");
	}
}
else
{
	die ("Please enter a username and password");	
}

 ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
