<?php
$conn= new mysqli("localhost","root","","forms");
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
/*else{
	echo "connected";
}


$conn = mysqli_connect( 'localhost','root','','user_db' );

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "user_db";

$conn = mysqli_connect( '$name','$uname','$password','$db_name' );


if (!$conn) {
	echo "Connection Failed!";
	exit();
} */

?>