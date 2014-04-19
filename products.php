
<?php
	include("includes/db.php");
	include("includes/functions.php");
	
	if($_REQUEST['command']=='add' && $_REQUEST['PRODUCT ID']>0){
		$pid=$_REQUEST['PRODUCT ID'];
		addtocart($pid,1);
		header("location:cart.php");
		exit();
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="External.css" />
  
<script language="javascript">
	function addtocart(pid){
		document.form1.productid.value=pid;
		document.form1.command.value='add';
		document.form1.submit();
	}
</script>
</head>


<body>

<div id="box1" align="center">
<div id="FormatNavBar">
        <p align="right"><a href="home.php" target="_top">Home</a> || <a href="about.php" target="_top">About Us</a> ||<a href="UserRegister.php" target="_top">Register</a> || <a href="contact.php">Contact Us</a></p>
        </div><form name="form1">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
</form>
<div align="center">
	<h1 align="center">Products</h1>
	<center><table >
		<?
			$result=mysql_query("select * from product");
			while($row=mysql_fetch_array($result)){
		?>
    	<tr>
        	<td><img src="images/107842_8_1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Reebok travelling bag<?=$row['description']?><br />
                    Price:<big style="color:yellow">
                    	R<?=$row['price']?>250</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		
        	<td><img src="images/205531_25_1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Perry luggage bag<?=$row['description']?><br />
                    Price:<big style="color:yellow">
                    	R<?=$row['price']?>300</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
					<tr>
        	<td><img src="images/203051_1_1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Adidas bagpack<?=$row['description']?><br />
                    Price:<big style="color:yellow">
                    	R<?=$row['price']?>220</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		
			</td>
		
		
		<td><img src="images/213180_5_1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Guess luggage bag<?=$row['description']?><br />
                    Price:<big style="color:yellow">
                    	R<?=$row['price']?>550</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		
			</td>
		
		
		<td><img src="images/213188_7_1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Gucci liggage bag<?=$row['description']?><br />
                    Price:<big style="color:green">
                    	R<?=$row['price']?>750</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		
			</td>
		</tr>
		
		<td><img src="images/213446_3_1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Nike sports bag<?=$row['description']?><br />
                    Price:<big style="color:green">
                    	R<?=$row['price']?>250</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		
			</td>
		</tr>
		
		<td><img src="images/224335_1_1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Eagle bagpack bag<?=$row['description']?><br />
                    Price:<big style="color:green">
                    	R<?=$row['price']?>250</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		</tr>
			</td>
		</tr>
		
		<td><img src="images/234903_1_1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Wert schoolbag <?=$row['description']?><br />
                    Price:<big style="color:green">
                    	R<?=$row['price']?>250</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		</tr>
			</td>
		</tr>
		
		<td><img src="images/237250_4_1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Reebok laptop bag<?=$row['description']?><br />
                    Price:<big style="color:green">
                    	R<?=$row['price']?>350</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		</tr>
			</td>
		</tr>
		
		<td><img src="images/239307_3_1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Nike laptop bag<?=$row['description']?><br />
                    Price:<big style="color:green">
                    	R<?=$row['price']?>450</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		</tr>
			</td>
		</tr>
		
		<td><img src="images/250595_14_1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Puma sports bag<?=$row['description']?><br />
                    Price:<big style="color:green">
                    	R<?=$row['price']?>250</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		</tr>
			</td>
		</tr>
		
		<td><img src="images/260530_2_1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Adidas travelling bag<?=$row['description']?><br />
                    Price:<big style="color:green">
                    	R<?=$row['price']?>250</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		</tr>
			</td>
		</tr>
		
		<td><img src="images/260641_3_1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Kway sports bag<?=$row['description']?><br />
                    Price:<big style="color:green">
                    	R<?=$row['price']?>250</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		</tr>
			</td>
		</tr>
		
		<td><img src="images/269181_2_1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Levi handbag <?=$row['description']?><br />
                    Price:<big style="color:green">
                    	R<?=$row['price']?>200</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		</tr>
			</td>
		</tr>
		
		<td><img src="images/270005_1_3.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Nike sports bag<?=$row['description']?><br />
                    Price:<big style="color:green">
                    	R<?=$row['price']?>255</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		</tr>
			</td>
		</tr>
	
		
		<td><img src="images/271289_2_1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Gucci handbag<?=$row['description']?><br />
                    Price:<big style="color:green">
                    	R<?=$row['price']?>250</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		</tr>
			</td>
		</tr>
		
		<td><img src="images/273085_1_1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Guess handbag <?=$row['description']?><br />
                    Price:<big style="color:green">
                    	R<?=$row['price']?>350</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		</tr>
			</td>
		</tr>
		
		<td><img src="images/273517_3_1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Nike travel bag<?=$row['description']?><br />
                    Price:<big style="color:green">
                    	R<?=$row['price']?>450</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		
			</td>
		
		
		<td><img src="images/273612_4_1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Perry handbag<?=$row['description']?><br />
                    Price:<big style="color:yellow">
                    	R<?=$row['price']?>250</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		</tr>
			</td>
		</tr>
		
		<td><img src="images/273621_2_1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		SissyBoy handbag<?=$row['description']?><br />
                    Price:<big style="color:yellow">
                    	R<?=$row['price']?>250</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		</tr>
			</td>
		</tr>
		
		<td><img src="images/274110_1_1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Reebok handbag<?=$row['description']?><br />
                    Price:<big style="color:green">
                    	R<?=$row['price']?>190</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		</tr>
			</td>
		</tr>
		
		<td><img src="images/274118_4_1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Levis handbag<?=$row['description']?><br />
                    Price:<big style="color:yellow">
                    	R<?=$row['price']?>250</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		</tr>
			</td>
		</tr>
		
		<td><img src="images/274325_2_1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Guess handbag <?=$row['description']?><br />
                    Price:<big style="color:yellow">
                    	R<?=$row['price']?>455</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		
			</td>
		
		
		<td><img src="images/274427_3_1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Guess handbag<?=$row['description']?><br />
                    Price:<big style="color:green">
                    	R<?=$row['price']?>355</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
			</td>
		
			</td>
		
		
		<td><img src="images/20131021_LG-cert-b2s1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Nike luggage bag<?=$row['description']?><br />
                    Price:<big style="color:green">
                    	R<?=$row['price']?>550</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
					</td>
		</tr>
			
		</tr>
		
		
		<td><img src="images/20131021_LG-cert-b3s1.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Reebok luggage bag<?=$row['description']?><br />
                    Price:<big style="color:green">
                    	R<?=$row['price']?>1250</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
				</td>
		</tr>
			</td>
		</tr>
		
		
		
		<td><img src="images/20140401_BP_VN4.jpg" /></td>
            <td>   	<b><?=$row['name']?></b><br />
            		Aliys bagpack bag<?=$row['description']?><br />
                    Price:<big style="color:green">
                    	R<?=$row['price']?>135</big><br /><br />
                    <input type="button" value="Add to Cart" onclick="addtocart(<?=$row['serial']?>)" />
				</td>
		</tr>
			</td>
		</tr>
		
				
        <tr><td colspan="2"><hr size="1" /></td>

        <? } ?>
		 
    </table>
	<input type="button" value="Buy" onclick="addtocart(<?=$row['serial']?>)" action ="cart.php"/>
		
</div><footer>
			<div id="Format">

			<p><I>C&T bags &copy; 2014 All Rights Reserved</I></p>
			</div>
		</footer>
</body>
</html>
