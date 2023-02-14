<?php
include("connection.php");

$query = "SELECT `id`, `email`, `password` FROM `student`";
	$data = mysqli_query($con, $query);
	$total = mysqli_num_rows($data);
	
?>
<!DOCTYPE html>
<html>
<body>

<h1>View Student Attendance Record</h1>

<table style="width:100%">
  <tr>
    <th>id</th> 
    <th>email</th>
    <th>password</th> 
    <th>action</th>
    
  </tr>

  <tr>
  	<?php
  	while($fet = mysqli_fetch_array($data))
	{
	$id = $fet["id"];
	$email = $fet["email"];
	$password = $fet["password"];
	?>

    <td><?php echo $id; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $password; ?></td>
    <td><a href="edit.php" >edit</a></td>
    <td><a href="delete.php">delete</a></td>

  </tr>
<?php
}
?>
</table>


</body>
</html>