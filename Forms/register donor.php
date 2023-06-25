<?php
include "config.php";

$Full_Name=$_POST['Full_Name'];
$age=$_POST['age'];
$birthday=$_POST['birthday'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$bloodtype=$_POST['bloodtype'];
$have_u_ever_donated_blood=$_POST['have_u_ever_donated_blood'];
$how_many_times=$_POST['how_many_times'];
$last_date=$_POST['last_date'];
$have_u_ever_had_difficulties=$_POST['have_u_ever_had_difficulties'];
$difficulties_after_donation=$_POST['difficulties_after_donation'];
$doctor_advices=$_POST['doctor_advices'];
$diseases=$_POST['diseases'];
$medications=$_POST['medications'];
$surgeries=$_POST['surgeries'];
$pregnant_abortion_gave_birth_to_a_child=$_POST['pregnant_abortion_gave_birth_to_a_child'];
$hepatities=$_POST['hepatities'];
$typoid=$_POST['typoid'];
$injections=$_POST['injections'];
$new_piercings=$_POST['new_piercings'];
$imprisoned=$_POST['imprisoned'];
$partner_gone_aboard=$_POST['partner_gone_aboard'];
$donated_blood_to_partner=$_POST['donated_blood_to_partner'];
$malaria=$_POST['malaria'];
$dengue=$_POST['dengue'];
$chickenpox=$_POST['chickenpox'];
$tooth_extraction=$_POST['tooth_extraction'];
$antibiotics=$_POST['antibiotics'];
$others=$_POST['others'];
$partner_belongs_to_others=$_POST['partner_belongs_to_others'];

$sql= "insert into register_donor(name,age,address,phone,gender,email,bloodtype,have_u_ever_donated_blood,
how_many_times,last_date,have_u_ever_had_difficulties,difficulties,doctor_advices,diseases,
medications,surgeries,pregnant_abortion,hepatities,typoid,injections,new-piercings,imprisoned,
partner_gone_aboard,donated_blood_to_partner,malaria,degue,chickenpox,tooth_extractions,antibiotics,other,partner_belongs_to_others)
values ('".$Full_Name."','".$age."','".$birthday."','".$address."','".$phone."','".$gender."','".$email."','".$bloodtype."','".$have_u_ever_donated_blood."','".
    $how_many_times."','".$last_date."','".$how_many_times."','".$last_date."','".$have_u_ever_had_difficulties."','".$difficulties_after_donation."','".$doctor_advices
    ."','".$diseases."','".$medications."','".$surgeries."','".$pregnant_abortion_gave_birth_to_a_child."','".$hepatities."','".$typoid."','"
    .$injections."','".$new_piercings."','".$imprisoned."','".$partner_gone_aboard."','".$donated_blood_to_partner."','".$malaria."','".$dengue."','".$chickenpox."','".
    $tooth_extraction."','".$antibiotics."','".$others."','".$partner_belongs_to_others."');";
    
if ($conn->query($sql) === TRUE) {
    echo" guidance record inserted";
  } else {
    echo "Error inserting record: " . $conn->error;
  }


?>