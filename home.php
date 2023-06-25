

<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta name = "author" content="IT1100_IWT- MLB_WE_01.01_06">
        <meta name = "viewport" content="width = device-width, initial-scale = 1.0" >

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link href = "styles/header.css" rel = "stylesheet" type ="text/css" >

        <link href = "styles/slider.css" rel = "stylesheet" type ="text/css" >
        

        <!--slide show java script link -->
        <script src="js/slider.js"></script>
        <!--Scroll up button java script link -->
        <script src="js/home.js"></script>
        
    </head>

    <body>
        
    <?php require 'header.php' ?>

        <!-- scroll Up btn -->
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class = "fa fa-fw fa-arrow-up"></i></button>
            <script>
                //Get the button
                var mybutton = document.getElementById("myBtn");
            </script>


    <!-- Body section -->
        <div class ="b1">
            <div class="slideshow-container">

                <div class="mySlides fade">
                <div class="numbertext">1 / 5</div>
                <img src="images/1.jpg" style="width:100%">
                <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 5</div>
                    <img src="images/2.jpg" style="width:100%">
                    <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 5</div>
                    <img src="images/3.jpg" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">4 / 5</div>
                    <img src="images/4.jpg" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">5 / 5</div>
                    <img src="images/5.2.jpg" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

        </div>
        <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
                <span class="dot" onclick="currentSlide(4)"></span> 
                <span class="dot" onclick="currentSlide(5)"></span> 
            </div>


            <script>
                carousel();

                let slideIndex = 1;
                showSlides(slideIndex);

            </script>

            <a href = "login_form.php" ><button class="button-2" id = "button2"><span>Donate Now </span></a></button>

            <div class = "row">

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="images/blood-1.png" alt="Avatar" style="width:250px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Blood Availability </h1> 
                        <p><i class="fa fa-fw fa-search"></i>Search</p> 
                        
                    </div>
                </div>
                </div>

                <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="images/blood-2.png" alt="Avatar" style="width:250px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Blood Bank</h1> 
                        <p><i class="fa fa-fw fa-search"></i>Search</p>
                    </div>
                </div>
                </div>

                <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="images/blood-4.png" alt="Avatar" style="width:250px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Remain Blood</h1>
                        <i class="fa fa-solid fa fa-triangle-exclamation fa fa-fade"></i> 
                        <p>We Are <br>laking from<br> <span>A+</span> Blood</p> 
                        
                    </div>
                </div>
                </div>


            </div>

            
                
            <div class = "row-camp">

                <div class = "camp-1">
                    
                        <h3><span>*</span> Latest Blood campaign</h3>
                        <img src = "images/camp1.jpeg">
                        <button class="button-3"><span>Register </span></button>
                    
                </div>

                <div class = "camp-2">
                    
                    <!-- Add to the css part images -->
                </div>

        

                <!--<a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a> -->

                

            </div>
            
            <!--Footer 2nd upper section-->
                <div class = "row-coll">

                    <div class = "text-coll">
                        <h1>TYPES OF DONATION</h1>
                        <h3>Blood makes up five liters of the human body and is made up of various vital components, including whole blood, platelets, and plasma.</h3>
                        <h4>Each component has a variety of medicinal applications and may be utilized for a variety of medical treatments. The optimal contribution for you is determined by your blood donation.</h4>
                    </div>


                    <div class = "coll-1">
                    <br><p>WHOLE BLOOD : </p><br>
                            <button type="button" class="collapsible">Open Collapsible +</button>
                                <div class="content">
                                    <p>Whole blood is simply our blood as it flows in our bodies - with none of its components separated or removed. In medicine, whole blood is an uncommon type of transfusion.</p>
                                </div>
                        

                        <div class = "coll-1">
                        <br><p>A PLASMA</p><br>
                            <button type="button" class="collapsible">Open Collapsible +</button>
                                <div class="content">
                                    <p>Plasma is the clear, straw-colored liquid portion of blood that remains after red blood cells, white blood cells, platelets and other cellular components are removed. It is the single largest component of human blood, comprising about 55 percent, and contains water, salts, enzymes, antibodies and other proteins.</p>
                                 </div>

                        <div class = "coll-1">
                        <br><p>A PLATELET</p><br>
                            <button type="button" class="collapsible">Open Collapsible +</button>
                                <div class="content">
                                    <p>Platelets, also known as thrombocytes, are blood cells. They form in your bone marrow, a sponge-like tissue in your bones. Platelets play a major role in blood clotting. Normally, when one of your blood vessels is injured, you start to bleed.</p>
                                </div>
                        </div>

                    </div>
                    </div> 
            </div>

            <script>
                    var coll = document.getElementsByClassName("collapsible");
                        var i;

                        for (i = 0; i < coll.length; i++) {
                            coll[i].addEventListener("click", function() {
                                this.classList.toggle("active");
                                var content = this.nextElementSibling;
                                if (content.style.display === "block") {
                                content.style.display = "none";
                                } else {
                                content.style.display = "block";
                                }
                            });
                        }

                    </script>

        </div>

        <?php require 'footer.php' ?>

    </body>
</html>