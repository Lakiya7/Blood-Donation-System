<?php
include "config.php";

$Donor_Name=$_POST['Donor_Name'];
$age=$_POST['age'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$blood_type=$_POST['blood_type'];
$Have_you_ever_donated_blood=$_POST['Have_you_ever_donated_blood'];
$No_of_donation=$_POST['No_of_donation'];

$sql= "insert into reserve_a_date(donor_name,age,address,phone,gender,email,blood_type,have_you_ever_donated_blood,no_of_donations)
    values ('".$Donor_Name."','".$age."','".$address."','".$phone."','".$gender."','".$email."','".$blood_type."','"
    .$Have_you_ever_donated_blood."','".$No_of_donation."');";

if ($conn->query($sql) === TRUE) {
    echo" guidance record inserted";
  } else {
    echo "Error inserting record: " . $conn->error;
  }

?>
