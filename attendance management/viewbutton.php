<?php
include("connection.php");
session_start();
$sid = $_SESSION["id"];

$query = "SELECT `id`, `student_id`, `name`, `status`, `date` FROM `attendance` WHERE `student_id`='$sid'";
	$data = mysqli_query($con, $query);
	$total = mysqli_num_rows($data);
?>
<!DOCTYPE html>
<html>
<body>

<h1>Attendance data</h1>

<table style="width:100%">
  <tr>
    <th>id</th>
    <th>student id</th> 
    <th>name</th>
    <th>status</th> 
    <th>date</th>
  </tr>
  <tr>
<?php
  	while($fet = mysqli_fetch_array($data))
	{
	$id = $fet["id"];
        $stuid = $fet["student_id"];
	$name = $fet["name"];
	$status = $fet["status"];
	$date = $fet["date"];
	?>

    <td><?php echo $id; ?></td>
    <td><?php echo $sid; ?></td>
    <td><?php echo $name; ?></td>
    <td><?php echo $status; ?></td>
    <td><?php echo $date; ?></td>

  </tr>
<?php
}
?>
</table>


</body>
</html>

