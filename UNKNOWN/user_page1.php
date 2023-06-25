<?php 

    @include 'config.php';

    session_start();

    if( !isset( $_SESSION['user_name'])){
        header( 'location:login_form.php' );
    }
    
?>



<!DOCTYPE html>

<html>
    <head>
        <title>User Page</title>
        <meta name = "author" content="IT1100_IWT- MLB_WE_01.01_06">
        <meta name = "viewport" content="width = device-width, initial-scale = 1.0" >

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href = "styles/user_style.css" rel = "stylesheet" type ="text/css" >
        
    </head>

    <body>

        <div class ="container">

            <div class = "content">
                <h3>Hi, <span>User</span></h3>
                <h1>Welcome <span><?php echo  $_SESSION['user_name'] ?></span></h1>
                <p>This is an User page </p>
                <a href = "login_form.php" class = "btn ">Login</a>
                <a href = "register_form.php" class = "btn ">Register</a>
                <a href = "logout.php" class = "btn ">Logout</a>
            </div>
        </div>

    </body>

    </html>

