<?php 

    @include_once 'config.php';

    session_start();

    if( !isset( $_SESSION['admin_name'])){
        header( 'location:../login_form.php' );
    }
    
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href = "styles/admin_panel.css" rel = "stylesheet" type ="text/css" >

    

    <link href = "styles/dashboard.css" rel = "stylesheet" type ="text/css" >
    
    <title>Admin Dashboard</title>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../images/logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">AIMA</span>
                    <span class="profession">Blood Donation <br>Center</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

            <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="Dashboard.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Display Users</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="add.php">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Add New Users</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="Dashboard.php">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Update User</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
    <div class="text">Dashboard 

        <h1 class = "h">Add New<span> Users</span></h1>

            <div class = "d-nav">
            <!--<h3>Hi, <span>Admin</span></h3>-->
            <h3>Welcome <br><span><?php echo  $_SESSION['admin_name'] ?></span></h3>
            <a href = "../logout.php" class = "btn4 ">Logout</a>
    </div>
    
    </div>
        <div id= "2" class = "addNew"><?php include ('add_user.php') ?></div>
        

    </script>
        </div>

    </section>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>



</body>
</html>
