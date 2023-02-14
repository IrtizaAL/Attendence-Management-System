<?php
session_start();

require 'connection.php';
$name = $_SESSION["name"];
$id = $_SESSION["id"];
$status = $_POST['capital'];
$date = date('m-d-yy');
// echo $pass;
// echo $email;
// echo $name;

//$con = mysqli_connect('localhost', 'root', '','attendance_management');


$qu ="SELECT `id`, `student_id`, `name`, `status`, `date` FROM `attendance` WHERE date='$date' AND student_id='$id'";
$data = mysqli_query($con, $qu);
	$total = mysqli_num_rows($data);
	// echo $total;
if($total>0)
{
echo "already mark";
}
else
{
	$query = "INSERT INTO `attendance`(`student_id`,`name`, `status`, `date`) VALUES ('$id','$name','$status','$date')";

$run = mysqli_query($con, $query);

if($run == TRUE)
     echo "Data insert sucessful";
 else
 	echo "error !";

}
?>