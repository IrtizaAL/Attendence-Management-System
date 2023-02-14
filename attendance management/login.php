<?php
include("connection.php");
?>

<form method="post" action="">
	
Email: <input type="text" name="email" required ><br><br>
Password: <input type="text" name="password" required ><br><br>
   <button type="submit" class="btn" name="submit">login</button>
	<br>
	<p1>Already a Member <a href="Register.php"><b> sign In </b></a></p1>
</form>


<?php
session_start();

if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query = "SELECT * FROM STUDENT WHERE email = '$email' && password = '$password'";
	$data = mysqli_query($con, $query);
	$total = mysqli_num_rows($data);
	$fet = mysqli_fetch_array($data);
	//echo $total;
if(($total)>0)
{
	$name = $fet["name"];
	$_SESSION["name"] = $name;
	$id = $fet["id"];
	$_SESSION["id"] = $id;
	//echo "login sucessful";
	header("Location: homepage.php");
}
else
{
	echo "login failed";
}
}


?>