<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ke";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve trainer's details using email from URL
if (isset($_GET['email'])) {
    $email = urldecode($_GET['email']);
    
    $sql = "SELECT * FROM trainer WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $trainer = $result->fetch_assoc();
    } else {
        echo "No trainer found with the provided email.";
        exit();
    }
    $stmt->close();
} else {
    echo "No email provided.";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= htmlspecialchars($trainer['name']) ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
        .button-container {
            margin-top: 20px;
        }
        .button-container button {
            margin-right: 10px;
        }
    </style>
</head>
<body class="w3-content" style="max-width:1600px">
  
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-animate-left" style="z-index:3;width:300px; background: #e3e6f3;" id="mySidebar"><br>
    <div class="w3-container">
        <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
            <i class="fa fa-remove"></i>
        </a>
        <img src="<?= htmlspecialchars($trainer['profile']) ?>" style="width:45%;" class="w3-round"><br><br>
        <h4><b><?= htmlspecialchars($trainer['name']) ?></b></h4>
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
        <a href="#"><img src="<?= htmlspecialchars($trainer['profile']) ?>" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
        <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
        <div class="w3-container">
            <h1><b><?= htmlspecialchars($trainer['name']) ?>'s Portfolio</b></h1>
        </div>
    </header>
    
    <!-- Images of Me -->
    <div class="w3-row-padding w3-padding-16" id="about">
        <div class="w3-col m6">
            <img src="<?= htmlspecialchars($trainer['profile']) ?>" alt="Me" style="width:30%">
        </div>
    </div>
  
    <div class="w3-container w3-padding-large" style="margin-bottom:32px">
        <h4><b>About Me</b></h4>
        <p><?= htmlspecialchars($trainer['description']) ?> with <?= htmlspecialchars($trainer['experience']) ?> years of experience.</p>
        <hr>
    
        <!-- Contact Section -->
        <div class="w3-container w3-padding-large">
            <h4 id="contact"><b>Contact Me</b></h4>
            <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
                <div class="w3-third w3-dark-grey">
                    <p><i class="fa fa-envelope w3-xxlarge w3-text-white"></i></p>
                    <p><?= htmlspecialchars($trainer['email']) ?></p>
                </div>
                <div class="w3-third w3-teal">
                    <p><i class="fa fa-map-marker w3-xxlarge w3-text-white"></i></p>
                    <p>India</p>
                </div>
                <div class="w3-third w3-dark-grey">
                    <p><i class="fa fa-phone w3-xxlarge w3-text-white"></i></p>
                    <p><?= htmlspecialchars($trainer['phone']) ?></p>
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
                <button type="submit" name="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Submit</button>
            </form>
            
            <div class="button-container">
               
                <button onclick="location.href='Adashboard.php'" class="w3-button w3-green">Confirm</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const urlParams = new URLSearchParams(window.location.search);
        const name = urlParams.get('name');
        const email = urlParams.get('email');
        const phone = urlParams.get('phone');
        const experience = urlParams.get('experience');
        const description = urlParams.get('description');

        if (name) document.getElementById('name').value = name;
        if (email) document.getElementById('email').value = email;
        if (phone) document.getElementById('phone').value = phone;
        if (experience) document.getElementById('experience').value = experience;
        if (description) document.getElementById('description').value = description;
    });
</script>

</body>
</html>
