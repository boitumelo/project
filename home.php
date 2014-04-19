<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="External.css" />
<title>Welcome</title>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>

<body>

<div img src="j.jpg">
<div id="box1">
<align="left"><img src="WP_002011.jpg" width="350" height="260" alt="" align="right"/>
<td style="padding-left:0px" title ="LOGIN ">
<a href="products.php" title="Buy " style="background-image:url(cart.jpg);width:140px;height:140px;display:block;">Buy<br/></a></td><p id="mainnav">
     
     <p>Have an account?</p>
       <div id="button">
<!-- Begin FreeButtons.org -->
<style>#web-buttons-idn5pm2 a{display:block;color:transparent;} #web-buttons-idn5pm2 a:hover{background-position:left bottom;}a#web-buttons-idn5pm2a {display:none}</style>
<table id="web-buttons-idn5pm2" width=0 cellpadding=0 cellspacing=0 border=0><tr>
<td style="padding-left:0px" title ="LOGIN ">
<a href="UserLogin.php" title="LOGIN " style="background-image:url(btn5pm2.png);width:90px;height:34px;display:block;"><br/></a></td>
<td style="padding-left:0px" title ="SIGN UP">
<a href="UserRegister.php" title="SIGN UP" style="background-image:url(bth5pm2.png);width:90px;height:34px;display:block;"><br/></a></td>
</tr></table><a id="web-buttons-idn5pm2a" href="http://freebuttons.org">Start Button Hover by FreeButtons.org v2.0</a>
<!-- End FreeButtons.org -->
     
  
     </p>
    <h1><font size="50" color = "yellow" >C&T BAGS</font></h1>
</div>
<div align="right">
  <div class="main">
  <table width="1053" border="0">
  <tr>
   
   <div id="FormatNavBar">
        <p align="right"><a href="home.php" target="_top">Home</a> || <a href="userLogin.php">Login</a>|| <a href="about.php" target="_top">About Us</a> || <a href="contact.php">Contact Us || <a href="products.php">Gallery </a></p>
      </div>
    <?php
	
        $pictures = array('213446_3_1.jpg','237250_4_1.jpg','260641_3_1.jpg','258103_3_1.jpg','274325_2_1.jpg','271289_2_1.jpg','270005_1_3.jpg');
		shuffle($pictures);
		
		for($i = 0; $i<1;$i++ )
		{
	 //$pictures = new SimpleImage();
     //$pictures->load($_FILES['uploaded_image']['tmp_name']);     
    
     //$pictures->save('./images/photo'.$a.'.jpg');
     //body("Location: people.php");
     //exit; 
	        //$pictures[$i]->resize(300, 300);
			echo "<td align=\"center\"><img src=\" ";
			echo $pictures[$i];
			echo "\"/></td>";
		}

	?>
   
  </div>
  <div align="left">

    <td width="747"><div class="main"></div>
      <div align="center">
        <p id="pic" align="center">&nbsp; </p>
        <p>C & T Bags is an online shop where</p>
		<p>you can buy all types of designer bags selected and </p>
		<p>styled by your favourite magazines, be it travelling bags, hand bags, schoolbags, </p>
		<p>and shopping bags. Shopping on C & T Bags is easy, hassle-free and fun.</p>
		<p>It's also completely safe. Stay up to date on the latest trends, build up your wishlist,</p>
		<p>add items to your basket, and shop yourself fabulous. </p>
			<p>**C & T Bags** delivers free of charge</p>
			<p>in South Africa, either door to</p>
			<p>door or door to counter, depending on where you're based. And, on the off chance</p>
			<p>you're not completely delighted with your purchase, you can return it FREE OF CHARGE</p>
			<p>within 30 days of receiving it. </p>
</p>
      </div></td>
  </tr>
</table>
<p>&nbsp;</p>
</div>
</div>
 <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
   
  <table width="1032" border="0">
    <tr>
      <td width="377" height="130"><a href="http://www.facebook.com"><img src="f.jpg" width="95" height="99" /></a></td>
      </table>
 
      <footer>
			<div id="Format">

			<p><I>C&T bags &copy; 2014 All Rights Reserved</I></p>
			</div>
		</footer>
    </tr>
  
  
  
</div>

</body>
</html>