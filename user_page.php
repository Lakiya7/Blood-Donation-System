
<?php 

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];
$user_email = $_SESSION['user_email'];

if(!isset($user_id)){
    header('location:login_form.php');
}




//get prev.. results
/*$sql = "select * from user_info where id = $user_id ";
$result = mysqli_query( $conn , $sql );
$row = mysqli_fetch_assoc($result);

$name = $row['userId'];
$address = $row['address'];
$age = $row['age'];
$email = $row['email'];
$mobile = $row['mobile'];
$lastname = $row['lastname'];*/
//$password =$_POST['password'];
//$user_type = $row['user_type'];


//Get values Only click submit button..
if( isset($_POST['submit'])){

    //$id =  $_POST['id'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $lastname = $_POST['lastname'];

    $insert = "INSERT INTO user_info( address , age , email , mobile , lastname ) VALUES ('$address' , '$age' , '$email' , '$mobile' , '$lastname')";
            mysqli_query( $conn, $insert  );
            //echo 'Registration successfully!';
            header( 'location:user_page.php' );

    /*$sql = "update user_info set address='$address',age='$age',email='$email', mobile ='$mobile',lastname ='$lastname'
    where userid=$id";

    $result = mysqli_query( $conn , $sql );

    if( $result ){
        //echo "Updated successfully";
    }
    else{
        die(mysqli_error($conn));
    } */
}




?>








<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta name = "author" content="IT1100_IWT- MLB_WE_01.01_06">
        <meta name = "viewport" content="width = device-width, initial-scale = 1.0" >

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link href = "styles/user_page.css" rel = "stylesheet" type ="text/css" >
        

        <!--slide show java script link -->
        <script src="js/slider.js"></script>
        <!--Scroll up button java script link -->
        <script src="js/home.js"></script>
        
    </head>

    <body>
        
    <?php require 'user_header.php' ?>

        <!-- scroll Up btn -->
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class = "fa fa-fw fa-arrow-up"></i></button>
            <script>
                //Get the button
                var mybutton = document.getElementById("myBtn");
                 // When the user scrolls down 20px from the top of the document, show the button
                 window.onscroll = function() {scrollFunction()};

                    function scrollFunction() {
                        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                            mybutton.style.display = "block";
                        } else {
                        mybutton.style.display = "none";
                        }
                    }
            </script>


    <!-- Body section -->
        <div class ="b1">
            
        <!--user section-->

                <div class = "content">
                    <h1>Welcome <span><?php echo  $_SESSION['user_name'] ?></span></h1>
                </div>

                    <div class = "row-user">

                        <div class = "col-user1">

                            <div class = "user-form">

                                    <form action="#">

                                        <div class="img-con">
                                            <img class = "p-img">
                                            <br>
                                            <label class="pp">Profile Photo</label><br><br>
                                            
                                            <!--<input id="image" type="file" name="profile_photo" placeholder="Photo" required="" capture> -->
                                        </div>

                                        <div class = "name-con">
                                            <span class = "text-1">User id</span>
                                                <div class = "col-name" >
                                                    <input type="text" id="u_id" name="id" placeholder="Your User Id.." autocomplete="off" autocomplete="off" value = <?php echo $user_id;?> >
                                                </div>  
                                        </div>

                                        <div class = "name-con">
                                            <span class = "text-1">Name</span>
                                                <div class = "col-name" >
                                                    <input type="text" id="fname" name="firstname" placeholder="Your first name.." autocomplete="off" autocomplete="off" value = <?php echo $user_name;?>>
                                                    <input type="text" id="lname" name="lastname" placeholder="Your last name.." >
                                                </div>  
                                        </div>

                                        <div class = "name-con">
                                            <span class = "text-1">Address</span>
                                                <div class = "col-name" >
                                                    <input type="text" id="address" name="address" placeholder="Your address.." >
                                                </div>  
                                        </div>

                                        <div class = "name-con">
                                            <span class = "text-1">Age</span>
                                                <div class = "col-name" >
                                                    <input type="text" id="age" name="age" placeholder="Your age.." >
                                                </div>  
                                        </div>


                                        <div class = "name-con">
                                            <span class = "text-1">Email</span>
                                                <div class = "col-name" >
                                                    <input type="email" id="email" name="email" placeholder="Your email.." autocomplete="off" value = <?php echo $user_email;?>>
                                                </div>  
                                        </div>

                                        <div class = "name-con">
                                            <span class = "text-1">Mobile</span>
                                                <div class = "col-name" >
                                                    <input type="text" id="mobile" name="mobile" placeholder="Your mobile.."  >
                                                </div>  
                                        </div>

                                            <input type="submit" name = "submit" value="SAVE">
                                            <br><br><hr>

                                    </form>

                                </div>
                            </div>

                        <div class = "col-user1">

                                    <div class ="user-form" >

                                        <div class = "btn-form">
                                            <h3 class = "update">FORMS</h3><br><br>

                                            <button type="submit" id = "submit2" class="btn" name = "submit" onclick="window.location.href='Forms/blood request form.html'">Blood Reservation Form</button>
                                            <button type="submit" id = "submit2" class="btn" name = "submit" onclick="window.location.href='Forms/date reservation form.html'">Date Reservation Form</button>
                                            <button type="submit" id = "submit2" class="btn" name = "submit" onclick="window.location.href='Forms/registter donor.html'">Donor Registration From</button>
                                           <button type="submit" id = "submit2"class="btn" name = "submit" onclick="window.location.href='Forms/register patient.html'">Patient Registration From</button>
                                            <button type="submit" id = "submit2"class="btn" name = "submit" onclick="window.location.href='Forms/guider.html'">Guider Request From</button>
                                        </div>

                                            <hr>
                                            <form method = "POST" class = "pwd-form">

                                                <h3 class = "update">Change Password</h3><br><br>

                                                        <div class = "pass-con">
                                                            <span class = "text-1">Current password</span>
                                                                <div class = "col-name" >
                                                                    <input type="password" id="mobile" name="mobile" placeholder="Your old password..">
                                                                </div>  
                                                        </div>
                                                        
                                                        <div class = "pass-con">
                                                            <span class = "text-1">New password</span>
                                                                <div class = "col-name" >
                                                                    <input type="password" id="mobile" name="mobile" placeholder="Your New password..">
                                                                </div>  
                                                        </div>

                                                        <div class = "pass-con">
                                                            <span class = "text-1">Re-Enter password</span>
                                                                <div class = "col-name" >
                                                                    <input type="password" id="mobile" name="mobile" placeholder="Re-Enter password..">
                                                                </div>  
                                                        </div>

                                                    <!-- <div class="check-btn">
                                                        <input type="checkbox" class="form-check-input">
                                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                    </div> -->

                                                    
                                                <button type="submit" class="btn" name = "submit">Update</button>
                                                <br><br><hr>
                                            </form>
                                    </div>
                            
                        </div>

                </div>

        </div>

        <?php require 'footer.php' ?>

    </body>
</html>