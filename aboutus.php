<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us | A-X</title>
    <link rel="stylesheet" href="aboutus.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      #map{
        box-shadow: 0px 0px 20px 10px rgba(0,0,0,0.75);
        max-width:500px;
        height:500px;
        float:right;
        overflow:auto;
      }
      #googlemap{
        width: 50%;
        position:absolute;
      }
      /* leaflet */
      #mapid { width: 600px; }
      /* leaflet */
    </style>

</head>
<body>
    
    <div class="about-section">
        <h1 style="font-size:60px">A-X</h1>
        <p>FITNESS IS PERSONAL <br><br>
        Certified Instructors. Experienced Physiotherapists. Personalized Service.</p>
    </div>
    <div >
      <div id="about-map">
        <p><br><b>FITNESS IS FOR EVERYONE</b> <br><br>
          Contact Us <br>
          A-X HQ Office <br>
          kapadia nagar <br>
          kurla west <br>
          400070 <br>
          Maharashtra<br>
          <br><br>
          For general enquiry, please reach out to us on A-X@fitness.com <br><br>
          If you are a health/fitness expert and wish to partner with us, please reach out to us on partner. <br> Support@a-xfitness.com <br><br>
          If you wish to join a company as unique as you, please reach out to us on A-X@fitness.com <br>
        </p>
        
      <div id="map">
         
        <iframe id="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d942.6881617844257!2d72.87227682920994!3d19.074609999193076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDA0JzI4LjYiTiA3MsKwNTInMjIuMiJF!5e0!3m2!1sen!2sin!4v1601824985320!5m2!1sen!2sin"width="70" height="495" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
      <!-- leaflet -->
      <div style="margin: 0 20% 0 20% ;">
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="crossorigin=""/>
            <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="crossorigin=""></script>

            <div id="mapid"></div>

            <iframe src="https://www.google.com/maps/d/embed?mid=1gOK4-dm-JBHUVx-hBxQw7WucyT9sBSkf" width="1200" height="600"></iframe>
        </div>
      <!-- leaflet -->
    </div>
    
    <div class="testimonials">
      <div class="inner">
        <h1>Testimonials</h1>
        <div class="border"></div>

        <div class="row">
          <div class="col">
            <div class="testimonial">
              <img src="images/p1.png" alt="">
              <div class="name">Alex Hales</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <i class="fa fa-quote-left"></i>
              <p>
                I have got World class service from this particuler gym. I have tried three of them before but this one is the best. All trainers are very friendly and helpful. I will recommend this gym to everyone.
              </p>
            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <img src="images/p2.png" alt="">
              <div class="name">Lucy Doe</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <i class="fa fa-quote-left"></i>
              <p>
                Since joining A-X, I've seen increased strength, size and energy levels! The Staff at Go is knowledgeable and accessible.They approach fitness on a level I haven’t experienced at other gyms!
              </p>
            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <img src="images/p3.png" alt="">
              <div class="name">Cassidy</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <i class="fa fa-quote-left"></i>
              <p>
                Trainers are great to work with. Workouts are always changing and challenge each person in class to work to the best of their ability. The people who work out with me are so encouraging and fun.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="dots"><div class="dot active"><span></span></div><div class="dot"><span></span></div></div>
    </div>
    <div class="blog">
      <h1 style="text-align: center;color:#fff;">BLOGS</h1>
      <div class="border"></div>
      <div class="row-1">

        <div class="col">
          <a href="#" class="card">
            <div class="bgimg" style="background-image: url(images/87.jpg);"></div>
            <article>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
              <span>Kezz </span>
            </article>
          </a>
        </div>
        <div class="col">
          <a href="#" class="card">
            <div class="bgimg" style="background-image: url(images/8.jpg);"></div>
            <article>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
              <span>Kezz </span>
            </article>
          </a>
        </div>
        <div class="col">
          <a href="#" class="card">
            <div class="bgimg" style="background-image: url(images/3.jpg);"></div>
            <article>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
              <span>Kezz </span>
            </article>
          </a>
        </div>

      </div>
      
    </div>
    <!-- leaflet map script -->
    <script>

    </script>
    <!-- leaflet map script -->
</body>
</html>
