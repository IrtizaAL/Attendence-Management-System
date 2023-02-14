<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname ="attendance_management";

$con = mysqli_connect($servername,$username, $password, $dbname );

if($con)
{
	echo"";
}
else
{
	echo"not connected";
}
?>