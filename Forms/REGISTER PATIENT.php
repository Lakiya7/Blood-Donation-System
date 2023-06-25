<?php
include "config.php";

$Full_Name=$_POST['Full_Name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$birthday=$_POST['birthday'];
$nic=$_POST['nic'];
$address=$_POST['address'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$bloodType=$_POST['bloodType'];
$GfullName=$_POST['GfullName'];
$Gnic=$_POST['Gnic'];
$Gaddress=$_POST['Gaddress'];
$Gemail=$_POST['Gemail'];
$Gphone=$_POST['Gphone'];

$sql= "insert into register_patient(name,gender,age,birthday,nic,address,email,phone,bloodType,Gname,Gnic,Gaddress,Gemail,Gphone)
    values ('".$Full_Name."','".$gender."','".$age."','".$birthday."','".$nic."','".$address."','".$email."','".$phone."','".$bloodType."','".$GfullName."','".$Gnic."','".$Gaddress.
    "','".$Gemail."','".$Gphone."');";

if ($conn->query($sql) === TRUE) {
    echo" guidance record inserted";
  } else {
    echo "Error inserting record: " . $conn->error;
  }


?>
