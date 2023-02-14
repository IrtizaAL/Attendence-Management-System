<?php
include("connection.php");

$id = $_POST['id'];
$email = $_POST['email'];
$pass = $_POST['password'];


$query ="UPDATE `student` SET `id`='$id',`email`='$email',`password`='$pass' WHERE ";
$run = mysql_query($con, $query);

if($run==TRUE)

echo "hello";

else
 
 echo "no";



?>