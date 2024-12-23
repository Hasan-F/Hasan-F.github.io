<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="eventhtml.css"> <!-- Optional: Link to CSS file -->
<script src="java.js"></script>
</head>

</head>
<body>
  <?php
    include_once 'header.php'
    ?>
  <div style="margin-bottom: 5%;"></div>


  <h2 style="text-align: center; font-size: 25px; color: rgb(124, 209, 251); font-family: Helvetica, sans-serif;  -webkit-text-stroke-width: 0.5px; -webkit-text-stroke-color: black; font-size: 35px;">Past Events</h2>
<!---
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="flyer" class="numbertext">1 / 3</div>
  <div><img src="https://www.carelick.org/uploads/Annual_Gala_Posters.png" style="max-width:75%; max-height: 75%;"></div>
  <br><br><br>
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <div><img class="flyer" src="https://www.carelick.org/uploads/Your_paragraph_text.jpg" style="max-width:75%; max-height: 75%;"></div>
  <br><br><br>
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div  class="numbertext">3 / 3</div>
  <div><img class="flyer" src="https://www.carelick.org/uploads/WhatsApp_Image_2023-10-03_at_3.34.54_PM.jpeg" style="max-width:75%; max-height: 75%;"></div>
  <br><br><br>
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
</div>
-->

<!---------------------------------------------------------------------------------->

<!-- Container for the image gallery -->
<div class="container">

  <!-- Full-width images with number text -->
  <div class="mySlides" style="display: block;">
    <div class="numbertext">1 / 6</div>
      <img src="site images\img1.jpg" style="width:400px;">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
      <img src="site images\img2.jpg" style="width:400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
      <img src="site images\img3.jpg" style="width:400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
      <img src="site images\img4.jpg" style="width:400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
      <img src="site images\img5.jpg" style="width:400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
      <img src="site images\img6.jpg" style="width:400px">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  
  <!-- Thumbnail images -->
  <div class="row" style="background-color: grey;">
    <div class="column">
      <img class="demo cursor" src="site images\img1.jpg" style="max-width:100%;" onclick="currentSlide(1)" alt="Carelick Gala 2024">
    </div>
    <div class="column">
      <img class="demo cursor" src="site images\img2.jpg" style="max-width:100%;" onclick="currentSlide(2)" alt="Carelick Business Network Meeting 2023">
    </div>
    <div class="column">
      <img class="demo cursor" src="site images\img3.jpg" style="max-width:100%" onclick="currentSlide(3)" alt="Carelick Picnic 2023">
    </div>
    <div class="column">
      <img class="demo cursor" src="site images\img4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Carelick Business Network Meeting 2022">
    </div>
    <div class="column">
      <img class="demo cursor" src="site images\img5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Carelick Gala 2022">
    </div>
    <div class="column">
      <img class="demo cursor" src="site images\img6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Carelick Picnic 2021">
    </div>
  </div>
</div>

</body>
<footer >

  <div class="container">
      <div class="row" >
          <div class="col-sm-5 footer-one footnote" style="padding-right: 15%; font-size: 17px;">
              <h5 class="foot-heading" style="font-weight: bold;">Contact Us</h5>
              <div class="row">
                  <div class="col-sm-6">
                      <div class="name-email" style="padding-right: 50px;" >
                          <p>Salman Akhtar</p>
                          <p> salman@mafna.com</p>
                      </div>
                      <br>
                      <div class="name-email" >
                          <p>Saleem Muhammad</p>
                          <p> saleem@mafna.com</p>
                      </div>

                  </div>

                  <div class="col-sm-6">
                      <div class="name-email">
                          <p>Masih Sabihuddin</p>
                          <p> msabihuddin@gmail.com</p>
                      </div>
                      <br>
                      <div class="name-email">
                          <p>Ahmad Makki</p>
                          <p> makki212@hotmail.com</p>
                      </div>

                  </div>
              </div>
          </div>
          
          <div class="col-sm-4 footer-two footnote" style="padding-right: 15%; font-size: 17px;">
              <!-- <h5 class="foot-heading" style="font-weight: bold;">Address</h5> -->
              <div class="address-foot">
                  <p><strong>Address:</strong></p>
                  <p>475 Sheldon Drive, Cambridge, Ontario, N1T 2B7</p><br>
                  <span><strong>Phone:</strong> (519) 624-4622 </span><br>
                  <span><strong>Fax: </strong> (519) 624-9824</span><br>
              </div>
          </div>
          
          <div class="col-sm-3 social-footer-icons footnote" >
              <h5 class="foot-heading" style="font-weight: bold;">Socials</h5>
              <div class="social-icons icon-foot">
                  <a href="https://www.facebook.com/Carelick-Family-260826064432616" target="_blank"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                  <a href="#"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
                  <a href="#"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
                  <a href="mailto:admin@carelick.org"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
              </div> <br>
          </div>

      </div>
  </div>
  <br>
  <br>
  <hr>
  <br>
  <p style="font-size: 16px;">Copyright © 2024 Carelick Association for Development Inc. - All Rights Reserved</p>
</footer>

</html> 