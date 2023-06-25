<?php 

@include 'config.php';

session_start();

if( isset($_POST['submit'])){

    //$name = mysqli_real_escape_string( $conn, $_POST['name'] );
    $email = mysqli_real_escape_string( $conn, $_POST['email'] );
    $pass = $_POST['password'];
    //$cpass = md5( $_POST['cpassword'] );
    //$user_type =  $_POST['user_type'];

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query( $conn, $select );

    //Check user already exist....
    if( mysqli_num_rows($result) > 0 ){

        $row = mysqli_fetch_array( $result );
        
        if( $row['user_type'] == 'Admin'){

            $_SESSION['admin_name'] = $row['name'];
            header('location:Admin_panel/dashboard.php');
        }

            else if( $row['user_type'] == 'user'){

                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_email'] = $row['email'];

                header('location:user_page.php');
            }

                else{
                    $error[] = 'Incorrect email or Password!';
                }
        }

}

?>



<!DOCTYPE html>

<html>
    <head>
        <title>Login form</title>
        <meta name = "author" content="IT1100_IWT- MLB_WE_01.01_06">
        <meta name = "viewport" content="width = device-width, initial-scale = 1.0" >

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href = "styles/signup_style.css" rel = "stylesheet" type ="text/css" >
        
        <style>
            hr{
                width: auto;
            }
        </style>
        
    </head>

    <body>

        <div class = "form-con">

            <form action="" method="POST">

                    <div class ="img-con">
                        <a href = "home.php">
                        <img src = "images/logo.png" alt = "Logo"></a>
                    </div>

                <h3>SIGN IN</h3>
                <?php
                    if( isset ($error )){
                        foreach( $error as $error ){
                            echo '<span class = "msg-error">' .$error.'</span>';
                        }
                    }
                ?>
                <!--<input type = "text" name = "name" required placeholder="Enter your name"> -->
                <span class = "text-1">E-mail</span>
                <input type = "email" name = "email" required placeholder="Enter your email">

                <span class = "text-2">Password </span>
                <input type = "password" name = "password" required placeholder="Enter your password">
                <!--<input type = "password" name = "cpassword" required placeholder="Confirm your password"> -->

                <!--<select name= "user_type">
                    <option value="user">User</option>
                    <option value="Admin">admin</option>
                </select> -->
                <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe">Remember me</label>
                <input type = "submit" name = "submit" value = "Login now" class="form-btn">

                <p>Don't have an account? <a href = "register_form.php">register Now</a></p>

                <hr/>
                
            </form>

            <div class = "footer-btm" >
                &copy; Copyright @ 2022 AIMA Blood Donation Center | All Right Reserved
            </div>

        </div>

    </body>

    </html>

