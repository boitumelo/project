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
      
	 <a class="brand" href="home.php">Home</a>
	  <a class="brand" href="contact.php">Contact Us</a>
	  <a class="brand" href="dist/products.php">Gallery</a>
 
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
      <td width="592"><form id="form1" name="form1" method="post" action="">
       
        <h1 align="left">Administrator Login </h1>
        
         <p align="left">First Name :
          <input type="text" name="firstName" id="fname" />
          </p>
        <p align="left">Last Name :
          <input type="text" name="surname" id="txtLastName" />
          </p>
        
        <p align="left">Password:
          <input type="text" name="password" id="password" />
          </p>
            <p align="left">Repeat password :
          <input type="text" name="password" id="password" />
          </p>
          </p>
        <p align="left">
          <input type="submit" name="btnRegister" id="btnRegister" value="Register" />
         
          <input type="submit" name="btnCancel_Reg" id="btnCancel_Reg" value="Cancel" />
          </p>
		     <footer>
			<div id="Format">

			<p><I>C&T bags &copy; 2014 All Rights Reserved</I></p>
			</div>
		</footer>
          </form>
		  
<?php 
$firstName=strtoupper($_POST['firstName']);
$surname=strtoupper($_POST['surname']);
$pass=$_POST['password'];

/*if (!$fname ||  || !$surname || !$email || !$select || !$address || !$id || !$pass)
{
	echo "fill all the required fields";
	exit;
}*/
$conn=mysql_connect('localhost','projects','bags');

	if(!$conn)
	{
	echo 'Could not connect to the database';	
	exit;
	}
	
	$db = mysql_SELECT_db('c&tbags_db');

	if(!$db)
{
	echo 'Database selection failed';	
	exit;
}

	$insert="insert into admin values(null, '$firstName','$surname','$pass')";
 
$results = mysql_query($insert);

if(!$results)
{
	echo 'submission failed';	
	exit;
}

echo mysql_affected_rows($conn)."Admin Logged in";







 ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>