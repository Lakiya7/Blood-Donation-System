<?php
include "config.php";

$Full_Name=$_POST['Full_Name'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$bloodtype=$_POST['bloodtype'];
$date=$_POST['date'];
$specialNotes=$_POST['specialNotes'];


/*$data=addslashes(file_get_contents($_FILES['myfile']['tmp_name']));

$sqlUpload = "INSERT INTO blood_request_form(attachment) VALUES('{$data}')";

$stmt = $conn->prepare($sqlUpload);


$stmt->execute();*/


$sql= "insert into blood_request_form(name,age,phone,gender,email,bloodtype,date,specialnotes)
    values ('".$Full_Name."','".$age."','".$phone."','".$gender."','".$email."','".$bloodtype."','".$date."','".$specialNotes."');";

if ($conn->query($sql) === TRUE) {
    echo" guidance record inserted";
  } else {
    echo "Error inserting record: " . $conn->error;
  }



?>
