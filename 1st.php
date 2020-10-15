<!DOCTYPE html>
<?php
ob_start();
session_start();
?>
<html>
<head>
<title>login system</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,intial-scale=1.0">
<meta name="keywords" content="dating,online dating,best dating">
<meta name="description" content="here you meet someone special for you">
<link rel="stylesheet" type="text/css" href="css/travel.css">
</head>
<body>
	<header>
	<div class="mainheader">
		<div class="mainstart">
			<marquee direction="left" scrollamount="25" behavior="alternate" padding-top="0";><h1>Intelligent Toursit Guide</h1></marquee>
		</div>
		<div class="logo" align="center">
			<img src="image/login.jpg " width="10%"/>
		</div>
	</div>
</header>

	<form align="center" method="post" action="travellogin.php">
		<h1>Login</h1>
		<label>Enter email</label><br>
		<input type="email" name="email"><br>
		<br>
		<label>Password</label><br>
		<input type="password" name="password"><br>
		<br>
		<br>
		
		
		<input type="submit" name="login">
		<br>
		<br>
		
		<?php
		if(isset($_SESSION['error']))
		{
			echo "<p><font color='red'>". $_SESSION['error']."</font></p>";
			session_destroy();
		}
		?>
		
		
		<a href="2nd.php"><input type="button" value="Register" name="Register"></a>
		
		<br>
		
		<!--<h1>About us</h1><br>
		<p><marquee direction="up" scrollamount="5" behavior="scroll" onmouseover="stop()" onmouseout="start()">Get Home-made Food As Often As You Can. ...
Share And Care. ...
Know When To Say “No” ...
Learn Subtle Techniques To Avoid People. ...
Keep Some Money Stowed Away. ...
Hang Out With Your Roommates At Least Once A Week. ...
Be Friendly With The Hostel Guards/ Warden/ Cook.</marquee></p>
		<br>-->
		
	</form>
	
</body>

</html>