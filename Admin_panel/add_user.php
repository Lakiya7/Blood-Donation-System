
<?php 

    include 'config.php';

    //Get values Only click submit button..
    if( isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password =  $_POST['password'];
        $user_type = $_POST['user_type'];

        $sql = "INSERT INTO user_form ( name, email, password, user_type ) 
        VALUES ('$name','$email','$password' , '$user_type' )";

        $result = mysqli_query( $conn , $sql );

        if( $result ){
            echo "Data inserted successfully";
            header('location:Dashboard.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }

?>

<!DOCTYPE html>

<html>
    <head>
        <title></title>

        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
        <link href = "styles/admin_panel.css" rel = "stylesheet" type ="text/css" >
        
    </head>

    <body>
        
    <div class ="container" >
            <form method = "POST">

            <h3 class = "update">Add New User</h3>

                 <div class="mb-3">
                    <label class="form-label">User Name</label>
                    <input type="text" class="form-control" name = "name" placeholder = "Enter User name..." autocomplete="off" >
                </div>
            

                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name = "email" placeholder = "Enter email..." autocomplete="off" >
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name = "password" placeholder = "Enter Password..." autocomplete="off">
                </div>

                <select name= "user_type">
                    <option value="user">User</option>
                    <option value="Admin">admin</option>
                </select>

                <!-- <div class="check-btn">
                    <input type="checkbox" class="form-check-input">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->

            <button type="submit" class="btn" name = "submit">Update</button>
        </form>
    </div>
    </body>
</html>