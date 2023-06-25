<?php 

    include 'config.php';
    
    ?>

<!DOCTYPE html>

<html>
    <head>
        <title></title>

        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
-->         <link href = "styles/admin_panel.css" rel = "stylesheet" type ="text/css" >
            <link href = "styles/display.css" rel = "stylesheet" type ="text/css" >
        
    </head>

    <body>
        
    <div class ="container" >
            <form method = "POST">

            <button type="submit" class="btn" name = "Add"> <a href = "add.php">Add New User</a></button>

            <table class="table">

                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">User/Admin</th>
                    <th scope="col">Crud Operations</th>
                    </tr>
                </thead>
                <tbody>


                <?php 
                
                $sql = "select * from user_form";

                $result = mysqli_query( $conn, $sql );

                    if ($result){

                        while( $row = mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $password = $row['password'];
                            $user_type = $row['user_type'];

                            echo' <tr>

                            <th scope="row">'.$id.'</th>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$password.'</td>
                            <td>'.$user_type.'</td>
                            <td>
                                <button class = "btn2"><a href="update1.php? updateid='.$id.'">Update</a></button>
                                <button class = "btn3"><a href="delete.php? deleteid='.$id.'">Delete</a></button>

                                </td>
                            </tr> ';
                        } 
                   
                    }
                
                                
                ?>


                </tbody>
                </table>
        </form>
    </div>
    </body>
</html>