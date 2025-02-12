<!DOCTYPE html>
  <html>
  <title>David Warner</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../style.css">
  <style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
  </style>
  <body class="w3-content" style="max-width:1600px">
  
  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-collapse w3-animate-left" style="z-index:3;width:300px;   background: #e3e6f3;" id="mySidebar"><br>
    <div class="w3-container">
      <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
        <i class="fa fa-remove"></i>
      </a>
      <img src="images/P1.jpg" style="width:45%;" class="w3-round"><br><br>
      <h4><b>David Warner</b></h4>
    </div>
    
    <div class="w3-panel w3-large">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
  </nav>
  
  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
  
  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px">
  
    <!-- Header -->
    <header id="portfolio">
      <a href="#"><img src="" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
      <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
      <div class="w3-container">
      <h1><b>My Portfolio</b></h1>
      </div>
    </header>
     <!-- Images of Me -->
    <div class="w3-row-padding w3-padding-16" id="about">
      <div class="w3-col m6">
        <img src="images/P1.jpg" alt="Me" style="width:30%">
      </div>
    </div>
  
    <div class="w3-container w3-padding-large" style="margin-bottom:32px">
      <h4><b>About Me</b></h4>
      <p>Creative and passionate about fitness and yoga with 4 years of experience designing and creating a variety of yoga routines and shows. Skilled in constructing goal set and holding a good amount of positiveness.</p>
      <hr>
    
    
    <!-- Contact Section -->
    <div class="w3-container w3-padding-large">
      <h4 id="contact"><b>Contact Me</b></h4>
      <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
        <div class="w3-third w3-dark-grey">
          <p><i class="fa fa-envelope w3-xxlarge w3-text-white"></i></p>
          <p>warnerdavid@gmail.com</p>
        </div>
        <div class="w3-third w3-teal">
          <p><i class="fa fa-map-marker w3-xxlarge w3-text-white"></i></p>
          <p>India</p>
        </div>
        <div class="w3-third w3-dark-grey">
          <p><i class="fa fa-phone w3-xxlarge w3-text-white"></i></p>
          <p>9876543021</p>
        </div>
      </div>
      <hr class="w3-opacity">
      <form action="portfolio.php" method="post">
        <div class="w3-section">
          <label>Name</label>
          <input class="w3-input w3-border" type="text" name="name" required>
        </div>
        <div class="w3-section">
          <label>Email</label>
          <input class="w3-input w3-border" type="text" name="email" required>
        </div>
        <div class="w3-section">
          <label>Message</label>
          <input class="w3-input w3-border" type="text" name="message" required>
        </div>
        <input type="text" value="David Warner" name="pname" hidden>
        <button type="submit" name="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Submit</button>
      </form>
    </div>
  </script>
  
  </body>
  </html>
  
</body>
</html>