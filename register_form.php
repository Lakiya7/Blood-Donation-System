
<?php 

@include 'config.php';

if( isset($_POST['submit'])){

    $name = mysqli_real_escape_string( $conn, $_POST['name'] );
    $email = mysqli_real_escape_string( $conn, $_POST['email'] );
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $user_type =  $_POST['user_type'];

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query( $conn, $select );

    //Check user already exist....
    if( mysqli_num_rows($result) > 0 ){

        $error[] = 'User already exist!';
    }
    else{

        if( $pass != $cpass ){
            $error[] = 'Password not matched!';
        }
        else{
            $insert = "INSERT INTO user_form( name , email, password, user_type ) VALUES ('$name' , '$email' , '$pass' , '$user_type')";
            mysqli_query( $conn, $insert  );
            //echo 'Registration successfully!';
            header( 'location:login_form.php' );
        }
    }

}

?>





<!DOCTYPE html>

<html>
    <head>
        <title>Register form</title>
        <meta name = "author" content="IT1100_IWT- MLB_WE_01.01_06">
        <meta name = "viewport" content="width = device-width, initial-scale = 1.0" >

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href = "styles/register_style.css" rel = "stylesheet" type ="text/css" >
        
    </head>

    <body>

        <div class = "form-con">

            <form action="" method="POST">

                    <!--LOGO -->
                    <div class ="img-con">
                        <a href = "home.php">
                        <img src = "images/logo.png" alt = "Logo"></a>
                    </div>

                <h3>Register Now</h3>

                <?php
                    if( isset ($error )){
                        foreach( $error as $error ){
                            echo '<span class = "msg-error">' .$error.'</span>';
                        }
                    }
                ?>
                <span class = "text-1">Name</span>
                <input type = "text" name = "name" required placeholder="Enter your name">

                <span class = "text-2">E-mail</span>
                <input type = "email" name = "email" required placeholder="Enter your email">
                
                <span class = "text-1">Password</span>
                <input type = "password" name = "password" required placeholder="Enter your password">

                <input type = "password" name = "cpassword" required placeholder="Confirm your password">


                <select name= "user_type">
                    <option value="user">User</option>
                    <option value="Admin">admin</option>
                </select>

                <input type = "submit" name = "submit" value = "register now" class="form-btn">

                <p>Already have an account? <a href = "login_form.php">Login Now</a></p>
                
                <hr/>
            </form>

                <!--Footer section -->
                <div class = "footer-btm" >
                    &copy; Copyright @ 2022 AIMA Blood Donation Center | All Right Reserved
                </div>

        </div>

    </body>

    </html>

