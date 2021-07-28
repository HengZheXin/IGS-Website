<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset = "UTF-8">
        <title>Home</title>
        <link rel = "stylesheet" href="home.css">
        <?php require '../ShareDesign/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require '../ShareDesign/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>

    <body>

<!-- Header -->
<?php require '../ShareDesign/header.php'; ?>

        <div class="header-area">
            <div class="header-text">
                <h2><ins>IGS</ins> Society</h2><br/>
                <p>Sample text. Click to select the text box. Click again or</p>
                <p>double clock to start editing the text.</p>
                <br><br>
            </div>
        </div>
        

<!-- Section 1-->

        <section class="section1">
            <div class="special">
                <p><b>WHAT'S SO SPECIAL ABOUT</b></p>
                <h1>Our Society</h1>
            </div>
            <div class="description">
                <p>Dictum sit amet justo donec enim diam vulputate. Sociis natoque penatibus et</p>
                <p>magnis dis parturient. Molestie ac feugiat sed lectus vestibulum mattis. Vitae</p>
                <p>Dictum sit amet justo donec enim diam vulputate. Sociis natoque penatibus et</p>
                <p>Dictum sit amet justo donec enim diam vulputate. Sociis natoque penatibus et</p>
                <p>Dictum sit amet justo donec enim diam vulputate. Sociis natoque penatibus et</p>
            </div>
            <div class="sec1pic">
                <img src="images/section1pic.png" alt="ps_controller" style="width: 27%">
            </div>
        </section>

<!-- Section 2 -->
        
        <section class="section2">
            <div class="slideshow-container">
                <br><br><br><br>
                <div class="mySlides fade">
                  <img src="images/slide1.png" style="width:60%; height:500px; margin-left: 200px">
                  <div class="slidetext">Caption Text</div>
                </div>
                
                <div class="mySlides fade">
                  <img src="images/slide2.png" style="width:60%; height:500px; margin-left: 200px">
                  <div class="slidetext">Caption Two</div>
                </div>
                
                <div class="mySlides fade">
                  <img src="images/slide1.png" style="width:60%; height:500px; margin-left: 200px">
                  <div class="slidetext">Caption Three</div>
                </div>
                
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                
                </div>
                <br><br>
                
                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
                <br><br><br><br>
                <script>
                var slideIndex = 1;
                showSlides(slideIndex);
                
                function plusSlides(n) {
                  showSlides(slideIndex += n);
                }
                
                function currentSlide(n) {
                  showSlides(slideIndex = n);
                }
                
                function showSlides(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("dot");
                  if (n > slides.length) {slideIndex = 1}    
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none";  
                  }
                  for (i = 0; i < dots.length; i++) {
                      dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";  
                  dots[slideIndex-1].className += " active";
                }
                </script>
        </section>

<!-- Section 3 -->

        <section class="section3">
            <div class="ps4-back">
                <img src="images/ps4-back.png" style="width: 100%">
            </div>
            <div class="ps4-front">
                <img src="images/ps4-front.png" style="width: 550px; height: 670px;">
            </div>
            <div class="sec3nav">
                <a href=""><b>GAMING TOURNAMENT</b></a><br><br>
                <a href=""><b>GAME TRENDS</b></a><br><br>
                <a href=""><b>LATEST NEWS</b></a><br><br>
                <a href=""><b>ABOUT US</b></a><br><br>
            </div>
        </section>

<!-- Section 4 -->

        <section class="section4">
            <div class="sec4-h1">
                <h1><b>Join our community now and</b></h1>
                <h1><b>discuss about popular games</b></h1>
            </div>
            <div class="sec4-p">
                <p><b>COME BACK EVERY MONTH TO</b></p>
                <p><b>CHECK OUT OUR NEWEST UPDATES</b></p>
            </div>
        </section>

<!-- Section 5 -->

        <section class="section5">
            <div class="sec5header">
                <h1>OUR GAME COMMUNITY</h1>
                <p><i>nfaoffnffj kffa ak pfawjafa fahwofnoaf hafafaf</i></p>
                <p><i>nfaoffnffj kffa ak pfhfawff wfa</i></p><br><br>
            </div>
            <div class="rows">
                <div class="row1">
                    <div class="col1">
                        <img class="games" src="images/lol.jpg" alt="League of Legends">
                        <div class="overlay">
                            <div class="text">LEAGUE OF LEGENDS</div>
                        </div>
                    </div>
                    <div class="col2">
                        <img class="games" src="images/genshin.jpg" alt="Genshin Impact">
                        <div class="overlay">
                            <div class="text">GENSHIN IMPACT</div>
                        </div>
                    </div>
                    <div class="col3">
                        <img class="games" src="images/valorant.png" alt="Valorant">
                        <div class="overlay">
                            <div class="text">VALORANT</div>
                        </div>
                    </div>
                
                    <div class="col1">
                        <img class="games" src="images/mobilelegends.png" alt="Mobile Legends: Bang Bang">
                        <div class="overlay">
                            <div class="text">MOBILE LEGENDS: BANG BANG</div>
                        </div>
                    </div>
                    <div class="col2">
                        <img class="games" src="images/apexlegends.png" alt="Apex Legends">
                        <div class="overlay">
                            <div class="text">APEX LEGENDS</div>
                        </div>
                    </div>
                    <div class="col3">
                        <img class="games" src="images/pubg.png" alt="PUBG Mobile">
                        <div class="overlay">
                            <div class="text">PUBG MOBILE</div>
                        </div>
                    </div>
            
                    <div class="col1">
                        <img class="games" src="images/amongus.jpg" alt="Among Us">
                        <div class="overlay">
                            <div class="text">AMONG US</div>
                        </div>
                    </div>
                    <div class="col2">
                        <img class="games" src="images/rainbowsix.jpg" alt="Rainbox Six Siege">
                        <div class="overlay">
                            <div class="text">RAINBOW SIX SIEGE</div>
                        </div>
                    </div>
                    <div class="col3">
                        <img class="games" src="images/fortnite.jpg" alt="Fortnite">
                        <div class="overlay">
                            <div class="text">FORTNITE</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
<!-- Section 6 -->
        <section class="section6">
            <div class="leftpic">
                <img src="images/bottomlogo.png" alt="Logo">
            </div>
            <div class="righttext">
                <h1>JOIN OUR SOCIETY</h1><br>
                <p>We will be always a "house of players" at our core, the NPC began to speak to</p>
                <p>us about a vision for community.</p><br><br><br>
                <a href="">LEARN MORE</a>
            </div>
        </section>
        <!--Footer-->
<hr class = "footerline"><!--css modified horizontal line-->
<footer>
    <div class = "container">
        <div class = "row">
            <section>
                <div class = "footerContent col-md-8"><!--left content-->
                    <p class = "footerContent1">
                        <strong>I</strong><span class = "small footerSubtext">nteractive</span>
                        <strong>G</strong><span class = "small footerSubtext">ame</span>
                        <strong>S</strong><span class = "small footerSubtext">ociety</span>
                    </p>

                    <p class = "footerSubtext2">
                        Our aims is to improve the perception of students towards games and to 
                        develop good relationship with other student organizations of the University and other tertiary institutions.
                        We are a Casual and fun society in KL TARUC. We want you to enjoy your college life !
                        &copy; Tunku Abdul Rahman University College
                    </p>
                    
                    
                    <h4>Follow Us:</h4>
                        <a href="https://www.facebook.com/taruc.igs"><img src = "images/facebook.png"></a>
                        <a href="https://www.instagram.com/taruc.igs/"><img src = "images/instagram.png"></a>
                        <a href="mailto:igs.taruc.society@gmail.com"><img src = "images/gmail.png"></a>
                        <br><br><br>
                </div>
            </section>
            <section>
                <div class = "footcontent col-md-3"><!--middle content-->
                    <h1><strong>S</strong><span class = "small footerSubtext">ociety</span>
                    <strong>O</strong><span class = "small footerSubtext">bjectives</span></h1><br>
                    Detailed Objectives :<br>
                    sharing interests in games can:<br>
                    a. Interact with each others<br>
                    b. Cultivate personal development<br>
                    c. Foster a healthy gaming lifestyle<br>


                </div>
            </section>
            <section>
                <div class = "footcontent col-md-3"><!--right content-->
                    <br>
                </div>
            </section>
        </div>
    </div>
</footer>
<!--Footer-->
    </body>
    

</html>