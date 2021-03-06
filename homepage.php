<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-X | Fitness</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="homepage.css">
    <style>
        #login-logo{
            position: absolute;
            top:0%;
            left:400%;
            height:15.8%;
            width:22%;
            border-radius: 50%;
            filter:invert();
            margin-top:13%;
        }
    </style>
</head>
<body class="scroll-bar" style="position:relative;display:flex;flex-direction: column;">
    <?php
        if(@$_GET["mssg"] == true){
            $msg = $_GET["mssg"];
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
        ?>
        
        
    <div>
        <img src="images/87.1.jpg" alt="" style="	display:block;
        width:100%; 
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        overflow-y: auto;">
    </div>
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
                    <a href="#">JOIN US</a>
                </li>
                <li>
                    <a href="aboutus.php">ABOUT US</a>
                </li>
                <li> 
                    <a  onclick="onlogout()" style="cursor: pointer;color:whitesmoke">Logout</a>
                </li>
                <!-- <li>
                    <a href="#" id="cart">Cart</a>
                    <a href="#"><img src="images/Icon metro-cart.svg" class="Icon_metro-cart_bj"alt=""></img></a>  
                </li> -->
                <li>
                    <a  id="cart">Profile</a>
                    
                    <img src="images/profile icon.png"  name="profilehp" onclick="profile();" class="profile" style="margin-top:5px ;margin-left:20px;margin-right:-10px;cursor:pointer;width:35px;height:35px;">
                    
                </li>
            </ul>
            <div class="burgers" id="burgerss" >
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
            </div>
        </nav>
    </header>
<!--  -->

<!--  -->

<div class="bg-modal-login">
    <div class="modal-content">
        <div id='close-login-btn' style="opacity: 0.75;">&times</div>
            <img src="images/A-X.png" alt="A-X" id="login-logo">
                <form action="#"  class="input-login">
                        <span class="login-title">Login</span>
                        <input type="email" placeholder="email" class="login-email"/><br>
                        <input type="password" placeholder="password" class="login-pass" /><br>
                        <input type="submit"  value="Login"class="login-btns"></input><br>
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
                <form action="#" class="input-signin">
                        <h3>Create an account</h3>
                        <input type="email" placeholder="email" class="email-signin" required/><br>
                        <input type="pass1" placeholder="password" class="pass-signin" required/><br>
                        <input type="pass2" placeholder="Confirm password" class="pass-signin" required/><br>
                        <input type="submit" value="Sign-in" class="signin-btns" ><br>
                        <p class="agreement"><span>&#8226;</span> By Continuing you agree too the <a href="#" class='terms-n-privacy'>Terms of Services</a> and <a href="#" class='terms-n-privacy'>Privacy policy</a></p>
                        <input type="submit" value=""class="continue-sign" ><label>Continue with</label><br>
                        <p class="back-to-login">already have an account? <a  style="text-decoration: none;	color: rgb(0, 153, 255);" id="go-back-to-login">Login</a></p>
                        <div class="log-social">
                            <span class="fab fa-google"></span>
                            <span class="fab fa-facebook-f"></span>
                            <span class="fab fa-twitter"></span>
                        </div>
                        
                </form>
    </div>
</div>

<!--  -->


<div >
    <div class="type" style="max-width:80.33%">
        <div style="padding: 40px 0;">
            <p style="color: rgb(255, 255, 255);font-family:Arial,sans-serif;font-size: 30px;text-transform: uppercase; padding-bottom: 20px;text-align: center;">Workouts</p>
            <div class="type-grid">
                <div style="cursor: pointer;">
                    <p class="inbox-cont">crossfit</p>
                    <div>
                        <div style="width: 100%;height: 100%;overflow: hidden;">
                            <img src="images/crossfit.png" alt="img" class=" inbox-img">
                        </div>
                    </div>
                </div>
                <div style="cursor: pointer">
                            <p class="inbox-cont">Cardio</p>
                            <div>
                                <div style="width: 100%;height: 100%;overflow: hidden;">
                            <img src="images/cardio.jpg" alt="img" class=" inbox-img">
                        </div>
                    </div>
                </div>
                <div style="cursor: pointer;">
                    <p class="inbox-cont">Dance Fitness</p>
                    <div>
                        <div style="width: 100%;height: 100%;overflow: hidden;">
                            <img src="images/dance.png" alt="img" class=" inbox-img">
                        </div>
                    </div>
                </div>
                <div style="cursor: pointer;">
                    <p class="inbox-cont">S&amp;C</p>
                    <div>
                        <div style="width: 100%;height: 100%;overflow: hidden;">
                        <img src="images/coach.png" alt="img" class=" inbox-img">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>


<!--  -->

    
    <!-- PRICING SECTION STARTS HERE-->

    <div id="pricing" class="pricing-area section-padding">
        <!-- <div class="cont">
            <div  class="packs">All Center Unlimited Packs</div>
            <div class="membership">Membership</div>
            <h4 color="#ffffff" class="benefits">ENJOY THE BENEFITS OF</h4>
            
            <div class="listofbenefit">
                <div class="pricelists">
                    <p class="firstlist">ALL</p>
                    <p class="firstlist">Center Access</p>
                </div>
                <div class="pricelists">
                    <p class="firstlist" style="font-size:50px;">&#8734</p>
                    <p class="firstlist">Unlimited
                Classes</p>
                </div>
                <div class="pricelists">
                    <p class="firstlist">FREE</p>
                    <p  class="firstlist">Membership
                    Pauses</p>
                </div>
                <div class="lists">
                    <p class="firstlist">100%</p>
                    <p class="firstlist">Safe
                    Workouts</p>
                </div>
            </div>
        </div> -->

        <h1 style="text-align: center;color:rgb(255, 255, 255);">OUR PRICING</h1>
        <div class="border"></div>
        <div class="container">
             <div class="row">
                <!--  -->
                <div class="col">
                    <div class="single-pricing">
                        <h2>Beginner</h2>
                        <p class="line3"></p>
                        <p class="price-section">
                            <sup>$</sup>
                            <span>29</span>
                            <sub>/mo</sub>
                        </p>
                        <ul class="deals">
                            <li>6 Days a week</li>
                            <li>Dedicated Trainer</li>
                            <li>Diet Plan included</li>
                            <li>Morning &amp; evening Batch</li>
                            <li>Yoga Classes</li>
                        </ul>
                        <a href="#">Enroll Now</a>
                    </div>
                </div>
                <!--  -->
                <div class="col">
                    <div class="single-pricing active">
                        <h2>Proffesional</h2>
                        <p class="line3"></p>
                        <p class="price-section">
                            <sup>$</sup>
                            <span>99</span>
                            <sub>/mo</sub>
                        </p>
                        <ul class="deals">
                            <li>6 Days a week</li>
                            <li>Dedicated Trainer</li>
                            <li>Diet Plan included</li>
                            <li>Morning &amp; evening Batch</li>
                            <li>Yoga Classes</li>
                        </ul>
                        <a href="#">Enroll Now</a>
                    </div>
                </div>
                <!--  -->
                <div class="col">
                    <div class="single-pricing">
                        <h2>Moderate</h2>
                        <p class="line3"></p>
                        <p class="price-section">
                            <sup>$</sup>
                            <span>49</span>
                            <sub>/mo</sub>
                        </p>
                        <ul class="deals">
                            <li>6 Days a week</li>
                            <li>Dedicated Trainer</li>
                            <li>Diet Plan included</li>
                            <li>Morning &amp; evening Batch</li>
                            <li>Yoga Classes</li>
                        </ul>
                        <a href="#">Enroll Now</a>
                    </div>
                </div>
                <!--  -->
             </div>
        </div>
    </div>

    <!-- PRICING SECTION ENDS HERE -->



<!--  -->



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
                  <a href="#" target="terms.php">Our Team</a>
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
       function onlogout(){
        var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "logout.php");
            xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xmlhttp.send();
            xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState === 4) {
                        if( xmlhttp.status == 200 ) {

                            window.location.href = "index.php"; 

                        } else if( xmlhttp.status >= 500 ) {

                            console.log("error") 

                        } else if ( xmlhttp.status >= 402 && xmlhttp.status <= 420 ) {

                            console.log("error") 
                        } else if( xmlhttp.status == 400 || xmlhttp.status == 401 ) {
                            console.log("error") 
                        }

                    }
                };
       }

       function profile(){
            window.location.href = "profile.php"; 
       }
</script>

<script src="homepage.js"></script>

</body>



</html> 