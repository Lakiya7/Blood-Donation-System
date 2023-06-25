

<!-- Header section -->
<div class = "header">
            <div class ="head-1">Donate Your Blood with Us</div>
                <div class = "logo-nav">
                    <a href = "home.php"><img src = "Images/logo.png" class = "logo"></a>
    
                    <div class = "signin">
                        <div id="myNav" class="overlay">
                        
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <div class="overlay-content">
                                <a href="logout.php">Log out</a>
                                <a href="login_form.php">Sign In</a>
                                <a href="#">Contact us</a>
                            </div>
                        </div>
                        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; <span><?php echo  $_SESSION['user_name'] ?></span></span>
                        <script>
                            function openNav() {
                            document.getElementById("myNav").style.width = "100%";
                            }

                            function closeNav() {
                            document.getElementById("myNav").style.width = "0%";
                            }
                            </script>

                    </div>
                    
    
                </div>

                <nav>
                    <div class = "nav1">
                        <div class ="menu-bar" >
                             <ul>
    
                             <!--Menu bar 01-->
                             <li><a href = "home.php"><i class = "fa fa-fw fa-home"></i>Home</a></li>
                             <li><a href = "html/info.html"><i class = "fa fa-fw fa-info"></i>Info</a>
                               
    
                                
                            <!--Menu bar 02-->
                             <li><a href = "#"><i class = "fa fa-fw fa-clone"></i>Services</a>
                             <!--Sub Menu bar 02-->
                                <div class = "sub-menu-1" >
                                        <ul>
                                            <li><a href = "#">Lab services</a></li>
                                            <li><a href = "#">Training</a></li>
                                            <li><a href = "#">Guidence</a></li>
                                        </ul>
                                    </div>
                            </li>
                            <!--Menu bar 03-->
                            <li><a href = "html/History.html"><i class = "fa fa-fw fa-history"></i>History</a></li>
    
                            <!--Menu bar 04-->
                            <li><a href = "html/About us.html"><i class = "fa fa-fw fa-phone"></i>About Us</a>
                        
                            <!--Sub Menu bar 04-->
                            <div class = "sub-menu-1" >
                                        <ul>
                                            <li><a href = "html/About us.html">Vission</a></li>
                                            <li><a href = "html/About us.html">Mission</a></li>
                                            <li><a href = "html/About us.html">Campaign</a></li>
                                        </ul>
                                    </div></li>
    
                            </ul>
    
                        </div>
                    </div>
                    
    
    
    
    
                    <!-- Search Button -->
                    <div class="search-container">
                        <form action="#"><!-- need to add search php files -->
                        <button type="submit"><i class="fa fa-fw fa-search"></i></button>
                        <input type="text" placeholder="Search.." name="search">
                        
                        </form>
                    </div>
                </nav>

</div>