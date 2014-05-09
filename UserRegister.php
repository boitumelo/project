
<?php 

$firstName=strtoupper($_POST['firstName']);
$surname=strtoupper($_POST['surname']);
$cell=$_POST['cell'];
$email=$_POST['email'];
$co=$_POST['country'];
$city=$_POST['city'];
$add=$_POST['address'];
$pass=$_POST['password'];
$pass1=$_POST['password1'];

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
$insert="insert into customer values(null, '$firstName','$surname','$pass','$email','$co','$city','$add','$pass')";
  echo $query;
 
$results = mysql_query($insert);

if(!$results)
{
	echo 'submission failed';	
	exit;
}

echo mysql_affected_rows($conn)."user added in";
 ?>
	


  
