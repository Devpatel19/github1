<!DOCTYPE html>
<html>  
<head>
<title>sign up form</title>
<!--<meta http-equiv="refresh" content="5 surl=www.devpatel19.bloger.com"/>-->
<meta name="viewport" content="width=device-width, intial-scale=1"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
<meta name="keyword" content="html,css,photoshop,coreldraw"/>
<meta name="description" content="dev patel is smart"/>

<link rel="stylesheet" type="text/css" href="css/styl.css">
</head>  
<body>
	
	<form action="travelreg.php" method="post">
	<table align="center" cellspacing="5" cellpadding="7" width="80%">
	<caption><h1>Sign up</h1></caption>
	<tr>
	 	<td width="50%" align="right">First name</td>
		<td><input type="text" name="name" required/></td>
	</tr>
	
	<tr>
		<td width="50%" align="right">Last name</td>
		<td><input type="text" name="Lastname"required/></td>
	</tr>
	
	<tr>
		<td width="50%" align="right">Gender</td>
		<td><input type="radio" name="s"/>Male <input type="radio" name="s"/>Female</td>
	</tr>
	
	
	<tr>
		<td width="50%" align="right">Email</td>
		<td><input type="email" name="email" required/></td>
	</tr>
	
	
	<tr>
		<td width="50%" align="right">Password</td>
		<td><input type="password" name="password" required/></td>
	</tr>
	
	
	<tr>
		<td width="50%" align="right">Confirm password</td>
		<td><input type="password" name="cpassword" required/></td>
	</tr>
	
	<tr>
		<td width="50%" align="right">Address</td>
		<td><input type="input" name="address" required/></td>
	</tr>
	
		
	<tr>
		<td width="50%" align="right">Country</td>
		<td>
		<select name="Country">
		<option value="choose">Choose your country</option>
		<option value="india">india</option>
		<option value="u.s.a.">u.s.a.</option>
		<option value="China" >china</option>
		<option value="japan">japan</option>
		</select>
		</td>
	</tr>

		
	<tr>
		<td width="50%" align="right">MobileNo</td>
		<td><input type="number" name="number"required/></td>
	</tr>

	

	
	<tr>
		<td align="center" colspan="2"><input type="submit" value="submit" name="submit">
	</tr>
	
	</table>
	</form>
</body>