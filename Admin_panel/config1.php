<?php



$conn = mysqli_connect( 'localhost','root','','user_db' );

if (!$conn) {
	die(mysqli_error($conn));
}
/*$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "user_db";

$conn = mysqli_connect( '$name','$uname','$password','$db_name' );


if (!$conn) {
	echo "Connection Failed!";
	exit();
} */

?>