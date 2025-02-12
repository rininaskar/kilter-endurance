<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" type="text/css"/>
    <title>Kilter Endurance</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body>
<div class="container">
    <div class="navbar">
        <img src="images/logo.png" class="logo">
        <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="AboutUS.php">ABOUT US</a></li>
                <li>
                    <a href="#">TRAINER ▾</a>
                    <ul class="dropdown">
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

                        // Fetch all trainers
                        $sql = "SELECT email, name FROM trainer";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo '<li><a href="portfolio.php?email=' . urlencode($row["email"]) . '">' . htmlspecialchars($row["name"]) . '</a></li>';
                            }
                        } else {
                            echo '<li>No trainers found</li>';
                        }
                        $conn->close();
                        ?>
                    </ul>
                </li>
                <li>
                    <a href="#">LOGIN ▾</a>
                    <ul class="dropdown">
                        <li><a href="login.php">USER</a></li>
                        <li><a href="Admin.php">ADMIN</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div class="row">
        <div class="col">
            <h1>Kilter Endurance</h1>
            <br><br>
            <h3>Meditation nourishes the mind in the same way that food nourishes the body</h3>
        </div>
        <div class="col">
           <div class="card card1">
                <p>Bhujangasana</p>
           </div>
           <div class="card card2">
                <p>Sukhasana</p>
           </div>
           <div class="card card3">
                <p>Vrikshasana</p>
           </div>
           <div class="card card4">
                <p>Trikonasana</p>
           </div>
           <div class="card card5">
            <p>Natrajasana</p>
       </div>
       <div class="card card6">
        <p>Dhanurasana</p>
   </div>
        </div>
    </div>
</div>
<footer>
  <div class="footer-container">
    <div class="social-icons">
      <a href="#" class="icon-link"><i class="fab fa-facebook-f"></i></a>
      <a href="#" class="icon-link"><i class="fab fa-twitter"></i></a>
      <a href="#" class="icon-link"><i class="fab fa-instagram"></i></a>
      <!-- Add more social media icons as needed -->
    </div>
  </div>
</footer>
</body>
</html>
