<?php
include "config.php";

$Full_Name=$_POST['Full_Name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$specialNotes=$_POST['specialNotes'];

$sql= "insert into reserve_a_guide(name,phone,email,special_notes)
    values ('".$Full_Name."','".$phone."','".$email."','".$specialNotes."');";
    
if ($conn->query($sql) === TRUE) {
    echo" guidance record inserted";
  } else {
    echo "Error inserting record: " . $conn->error;
  }


?>