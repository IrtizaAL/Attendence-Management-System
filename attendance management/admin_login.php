<?php
include("connection.php");
?>

<form method="post" action="">
	
Email: <input type="text" name="email" required ><br><br>
Password: <input type="text" name="password" required ><br><br>
   <button type="submit" class="btn" name="submit">login</button>
	<br>
</form>

<?php

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
	$password = $_POST['password'];
	$query = "SELECT * FROM ADMIN WHERE email = '$email' && password = '$password'";
	$data = mysqli_query($con, $query);
	$total = mysqli_num_rows($data);
    echo $total;
}
	?>