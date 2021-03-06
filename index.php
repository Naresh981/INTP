<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
    <title>A-X | Fitness</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="index.css">
    <style>
        .parallax {
        background-image: url("images/top2.6.jpg");
        min-height: 1080px; 
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }
        #login-logo{
            position: absolute;
            top:0%;
            left:39%;
            height:15.8%;
            width:22%;
            border-radius: 50%;
            filter:invert();
            margin-top:13%;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body class="scroll-bar" style="position:relative;display:flex;flex-direction: column;">

        <?php
        if(@$_GET["mssg"] == true){
            $msg = $_GET["mssg"];
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
        ?>
        <?php
        if(@$_GET["update"] == true){
            $mmsssg = $_GET["update"];
            echo "<script type='text/javascript'>alert('$mmsssg');</script>";
        }
        ?>

    <section>
        <!-- <img src="images/top2.6.jpg" class="bgimp"id="hp-bg-img"alt="" > -->
        <img src="images/87.1.jpg" class="bgimp-mob" id="hp-bg-img-mob"alt="">
    </section>
    
    <header class="main-header">
        <div class="brand-logo-area">
                <a href="" class="brand-logo-name" onMouseOver="this.style.color='#F5F5F5'" onMouseOut="this.style.color='#F5F5F5.'" style="text-decoration: none">A-X</a>
        </div>
        <nav>
            <ul class="nav-links">
                <li>
                    <a href="#">ONLINE PT</a>
                </li>
                <li>
                    <a href="#">DASHBOARD</a>
                </li>
                <li>
                    <a href="#">WORKOUT</a>
                </li>
                <li>
                    <a href="#">SHOP</a>
                </li>
                
                <li>
                    <a href="aboutus.php">ABOUT US</a>
                </li>
                <!-- <li>
                    <a href="#" id="cart">Cart</a>
                    <a href="#"><img src="images/Icon metro-cart.svg" class="Icon_metro-cart_bj"alt=""></img></a>  
                </li> -->
                <li>
                    <a href="#" id="cart">Profile</a>
                    <img src="images/profile icon.png"  class="profile" id="login-button" >
                </li>
                <!-- <li > 
                    <a  style="cursor:pointer;color:whitesmoke">Login</a>
                
                </li> -->

                
            </ul>
            <div class="burgers" id="burgerss" >
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
            </div>
        </nav>
    </header>
<!--  -->
<div class="text-musc ">
    <p class='welcome'>GetFIT with A-X</p><br>
    <p>INCREASE YOUR</p>
    <p>
      <span class="word stamina">STAMINA</span>
      <span class="word muscle">MUSCLE</span>
      <span class="word performance">PERFORMANCE</span>
      <span class="word LEVEL">LEVEL</span>

    </p><br>

    <h6>Get fit and stay healthy from the comfort of your home with A-X</h6>
    <p class="home-btn">
        <a href="homepage.php" class="active">Get Started</a>
        <a href="#" class="active1" onclick="scrolling();">Learn More</a>
    </p>
</div>

<!--  -->

<div class="bg-modal-login">
    <div class="modal-content">
        <div id='close-login-btn' style="opacity: 0.75;">&times</div>
            <img src="images/A-X.png" alt="A-X" id="login-logo">
                <form action="login.php" method="POST"  class="input-login">
                        <span class="login-title">Login</span>
                        
                        <?php 
                        if(@$_GET['Empty']==true)
                        {
                            $msgg = $_GET["Empty"];
                            echo "<script type='text/javascript'>alert('$msgg');</script>";
                        
                            }
                        ?>


                        <?php
                                if(@$_GET["Invalid"] == true){
                                    $mmsg = $_GET["Invalid"];
                                    echo "<script type='text/javascript'>alert('$mmsg');</script>";
                                }
                        ?>

                        
                        <input  type="email" id="logintext1"placeholder="email" name ="login-mail"class="login-email" required/><br>
                        <input type="password" placeholder="password" class="login-pass" name="login-pass"required/><br>
                        <input type="submit"  value="Login"class="login-btns" name="login-php" onclick="validate()"></input><br>
                        <a href="#" class="forgot-pass">forgot your password?</a><br>
                        <input type="submit" value=""class="continue-log" ><label>Continue with</label><br>
                        <div class="login-social">
                            <span class="fab fa-google"></span>
                            <span class="fab fa-facebook-f"></span>
                            <span class="fab fa-twitter"></span>
                        </div>
                        <p class="dont-ve-acc">don't have an account? <a href="#" style="color: rgb(0, 153, 255);text-decoration:none" id="signup-from-login">Sign up</a></p>   
                </form>
    </div>
</div>
<div class="bg-modal-signin">
    <div class="modal-content-signin">
        <div id='close-sign-btn' style="opacity: 0.75;">&times</div>
                <form action="signin.php" method="POST"class="input-signin">
                        <h3>Create an account</h3>
                        <input  type="email" id="signintext1" name ="mail" placeholder="email" class="email-signin"  required/><br>
                        <input  type="password" id="signinpass1" placeholder="password" class="pass-signin" required/><br>
                        <input  type="password" id="signinpass2" name="pass" placeholder="Confirm password" class="pass-signin" required/><span id='message'></span><br>
                        <input type="submit" value="Sign-in" class="signin-btns" name="submit-signin" onclick="signinvalidate()"><br>
                        <p class="agreement"><span>&#8226;</span> By Continuing you agree to the <a href="#" class='terms-n-privacy'>Terms of Services</a> and <a href="#" class='terms-n-privacy'>Privacy policy</a></p>
                        <input type="submit" value=""class="continue-sign" ><label>Continue with</label><br>
                        <p class="back-to-login">already have an account? <a href="#" style="text-decoration: none;	color: rgb(0, 153, 255);" id="go-back-to-login">login</a></p>
                        <div class="log-social">
                            <span class="fab fa-google"></span>
                            <span class="fab fa-facebook-f"></span>
                            <span class="fab fa-twitter"></span>
                        </div>
                        
                </form>
    </div>
</div>

<!--  -->

<div class="parallax"></div>




    <div id="jumpp"class="container full-height-grow" >
        <div style="flex-grow: 1">
            
            <div id="about" class="about-area section-padding">
                <div class="container-abt">
        
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="about-video">
                                
                                <form>
                                    <div class="single-video">
                                        <div class="buttons">
                                            <button class="button" type="button" id="play-button" onclick="playVid()">PLAY</button>
                                            <button class="button" type="button" id="pause-button" onclick="pauseVid()">PAUSE</button>
                                            <button class="button" type="button" id="normal-button" onclick="normalVid()">NORMAL SCREEN</button>
                                            <button class="button" type="button" id="full-button" onclick="openFullscreen()">FULL SCREEN</button>   

                                            </div>
                                        <video id="myVideo"src="images/videoplayback.mp4" class="video-play mfp-iframe" controls>    
                                        </video><br>
                                            
                                        
                                        <!-- <div class="video-button">
                                            <input type="button" class="button" onclick="Play" value=""/>
                                            <input type="button" class="button" onclick="" value=""/>
                                            <input type="button" class="button" onclick="" value=""/>
                                            <input type="button" class="button" onclick="" value=""/>
                                        </div> -->

                                    </div>
                                </form>
                            </div>
                        </div>
        
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="about-main">
                                <h3>About <b><span>A-X</span></b></h3>
                                <h2>Welcome to our World</h2>
                                <p class="line1"></p>
                                <div class="single-about">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen</p>
                                </div>
                                <a href="#">Contact Us</a>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>




        </div>
    </div>

    <div id="trainer" class="trainer-area section-padding">
        <div class="container">
            <div class="row">
                 <div class="col-md-12">
                     <div class="section-header">
                         <h2>Our Trainers</h2>
                         <p class="line1"></p>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                     <div class="single-team">
                         <img src="images/me.jpg" alt="">
                         <div class="team-text">
                             <h2>Naresh</h2>
                             <h5>Head Trainer</h5>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                     <div class="single-team">
                         <img src="images/haadi.jpg" alt="">
                         <div class="team-text">
                             <h2>ABDUL HAADI</h2>
                             <h5>Fitness Trainer</h5>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                     <div class="single-team">
                         <img src="images/idris.jpg" alt="">
                         <div class="team-text">
                             <h2>IDRIS MAN</h2>
                             <h5>Boxing Trainer</h5>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                     <div class="single-team">
                         <img src="images/tawa.png" alt="">
                         <div class="team-text">
                             <h2>TAWHEED</h2>
                             <h5>Yoga Trainer</h5>
                         </div>
                     </div>
                 </div>
             </div>
        </div>
    </div>
 
    <div id="services" class="services-area section-padding">
        <div class="container">
            <div class="row">
                 <div class="col-md-12">
                     <div class="section-header">
                         <h2>Our Services</h2>
                         <p class="line1"></p>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                     <div class="single-service">
                        
                         <div class="service-icon">
                            <img src="https://img.icons8.com/ios-glyphs/30/000000/bench-press--v2.png" style="filter: invert();line-height:1.7;font-weight:400;margin-top: 12px;">                         </div>
                         <div class="services-text">
                             <h2>Diet Plan</h2>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi rerum excepturi, corporis aperiam dolores delectus!</p>
                             <a href="">Read More</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                     <div class="single-service">
                         <div class="service-icon">
                                <img src="https://img.icons8.com/ios-glyphs/30/000000/stepper.png" style="filter: invert();line-height:1.7;font-weight:400;margin-top: 12px;">
                         </div>
                         <div class="services-text">
                             <h2>Body Building</h2>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi rerum excepturi, corporis aperiam dolores delectus!</p>
                             <a href="">Read More</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                     <div class="single-service">
                         <div class="service-icon">                          
                            <img src="https://img.icons8.com/ios-glyphs/30/000000/pullups.png"style="filter: invert();line-height:1.7;font-weight:400;margin-top: 12px;">
                         </div>
                         <div class="services-text">
                             <h2>Personal Trainer</h2>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi rerum excepturi, corporis aperiam dolores delectus!</p>
                             <a href="">Read More</a>
                         </div>
                     </div>
                 </div>
             </div>
        </div>
    </div>


<!--  -->

<!-- FOOTER -->

<footer>
    <div class="main-content">
      <div class="left box">
        <h2>About us</h2>
          <div class="content">
              <div class="about-content">
                  <a href="index.php" >Home</a>
                  <a href="aboutus.php">Contact Us</a>
                  <a href="#" target="#">Our Team</a>
                  <a href="#">Careers</a>
              </div>
          </div>
      </div>
      <div class="center box">
        <h2>Address</h2>
          <div class="content">
              <div class="place">
                  <span class="fas fa-map-marker-alt"></span>
                  <span class="text">BKC-KURLA</span>
              </div>
              <div class="phone">
                  <span class="fas fa-phone-alt"></span>
                  <span class="text">+91-xxxxxxxxxx</span>
              </div>
              <div class="email">
                  <span class="fas fa-envelope"></span>
                  <span class="text">A-X@fitness.com</span>
              </div>
          </div>
      </div>
      <div class="right box">
        <h2>Connect us</h2>
          <div class="content">
              <div class="social">
                  <a href="#"><span class="fab fa-facebook-f"></span></a>
                  <a href="#"><span class="fab fa-twitter"></span></a>
                  <a href="#"><span class="fab fa-instagram"></span></a>
                  <a href="#"><span class="fab fa-youtube"></span></a>
              </div>
          </div>
      </div>
    </div>
  <!-- Copyright -->
      <div class="footer-copyright" style="text-align: center;">
          &copy; 2020 Copyright | Designed by Team 7
      <a href=""></a>
      </div>
  <!-- Copyright -->
</footer>

<!-- FOOTER -->

<script>
    window.addEventListener('scroll',function(){
        let header =document.querySelector('header');
        let windowPosition = window.scrollY>0;
        header.classList.toggle('scrolling-active',windowPosition);
    })
    function scrolling() { 
        $(window).scrollTop($('#jumpp').position().top);
        } 

    // loginvalidation
        function validate(){
            var text = document.getElementById("logintext1").value;
            if(text==""||text==null){
                alert("enter email")
            }else{
                var regx = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/g;
            
                if(regx.test(text)){
                    
                }
                else{
                    alert('enter valid email')
                    
                    
                }
            }  
        }  
        


        // signin

        function signinvalidate(){
            var text = document.getElementById("signintext1").value;
            if(text==""||text==null){
                alert("enter email")
            }else{
                var regx = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/g;
                if(regx.test(text)){
                    var pass = document.getElementById("signinpass1").value;
                var password = document.getElementById("signinpass2").value;
                if(pass=="" || pass==null) {alert("enter pass")}
                else{
                        if(pass.length<6){
                            alert("password must be greater than 6 character")
                            }else{
                                if (pass != password) {
                                alert("Passwords Do not match");
                            }
                                else {
                                    
                            }
                        }
                    }
                }
                else{
                    alert('enter valid email') 
                }
            }  
        }  
        

        function signinmyFunction() {
                   
            }  
            var vid = document.getElementById("myVideo"); 

            function playVid() { 
            vid.play(); 
            } 

            function pauseVid() { 
            vid.pause(); 
            } 
            function normalVid() { 
            vid.normalize(); 
            } 
            function openFullscreen() {
            if (vid.requestFullscreen) {
                vid.requestFullscreen();
            } else if (vid.webkitRequestFullscreen) { /* Safari */
                vid.webkitRequestFullscreen();
            } else if (vid.msRequestFullscreen) { /* IE11 */
                vid.msRequestFullscreen();
            }}
            var main = function(){
                var video = $("#myVideo")
                var theaterToggle = $(".theater-toggle")
                
                theaterToggle.click(function(){
                    video.toggleClass("theater");
                });
                };

$(document).ready(main)
</script>

<script src="index.js"></script>
</body>



</html> 