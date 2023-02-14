
<!DOCTYPE html>
<html>
<head>
	<title>Registeration and login</title>

</head>
<body>

<h1 align="center" style="margin-top: 50px">Registeration</h1>
<form action="insert.php" method="post" >
	
	<table align="center" style="margin-top: 80px;">
		
		<tr>
			<td>Name :</td><td><input type="text" name="name" required="required"></td>
		</tr>
		<tr>
			<td>Email id:</td><td><input type="email" name="email" required="required"></td>
		</tr>
		<tr>
			<td>password:</td><td><input type="password" name="password" required="required"></td>
		</tr>
		<tr>
			<td>confirm password:</td><td><input type="password" name="confirm_password" required="required"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit"  value="submit"/></td>
		</tr>
	</table>
		<p1>Don't have an Account <a href="login.php"><b> sign In </b></a></p1>

</form>
</body>
</html>