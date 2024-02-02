<!DOCTYPE html>
<html>
<head>
<?php
$random = bin2hex(openssl_random_pseudo_bytes(32));


echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
echo "<meta http-equiv='Content-Security-Policy' content='default-src: 'self'; script-src: 'self' 'shoppingCart.js' 'nonce-" . $random . "'; connect-src 'self'; base-uri 'self';form-action 'self';>";
?>

<link rel="stylesheet" type="text/css" href="css/style.css"></link>
<script src="shoppingCart.js"></script>
<title>  Digital Keys </title>
</head>
<body>


<!--Header content-->
<div class="header"> 
<a href="index.php" style="text-decoration:none"><img src="key.png" style="width:70px;height:70px;margin-top:5px;"></a>

<h3 class="navigation"><a href="storepage.php" style="text-decoration:none">STORE</a>
<a href="about.php" class="navtxt">ABOUT</a>
</h3>
<p class="logincreate">
<a href="LoginForm.php">login</a>
|
<a href = "RegistrationForm.php"> signup</a>
</p>
</div>

<!--Shopping cart button-->	
<div class="shoppingcartlink">
<?php
echo "<button nonce='" . $random . "' onClick='goToPayment()'>Shopping Cart</button>";
?>
</div>
</div>
	
<div class="main">
<img src="sotf.jpg" style="box-shadow: 0px 4px 4px #161E16;margin-left:60px;margin-top:10px;width:300px;height:300px;">
<p class="gametxt">
</br>
<b>Sons of the Forest</b>
</br>
</br>
Price: $30
</br>
</br>
Sent to find a missing billionaire on a remote island, you find yourself in a cannibal-infested hellscape. Craft, build, and struggle to survive, alone or with friends, in this terrifying new open-world survival horror simulator.
</p>


	

</div>	

<!--Footer content-->
<div class="footer">
  <p style="padding-top:8px">
    Copyright © 2023 Digital Keys. All rights reserved.
  </p>
</footer>
</div>

</body>
</html>
