<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <title>About Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, .container {
            width: 100%;
            margin: 20px auto;
            padding: 0;
        }

        .navbar {
            width: 100%;
            height: 100px;
            background-color: #333;
           /*overflow: hidden;*/
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        .navbar .logo {
            float: left;
            padding: 5px 10px;
        }

        .navbar nav {
            float: right;
        }

        .navbar nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar nav ul li {
            position: relative;
        }

        .navbar nav ul li a {
            display: block;
            padding: 5px 10px;
            text-decoration: none;
            color: #fff;
            transition: background-color 0.3s;
        }

        .navbar nav ul li a:hover {
            background-color: #575757;
        }

        .navbar nav ul li ul.dropdown {
            display: none;
            position: absolute;
            background-color: #333;
            top: 100%;
            left: 0;
            width: 200px;
        }

        .navbar nav ul li:hover ul.dropdown {
            display: block;
        }

        .navbar nav ul li ul.dropdown li {
         display: block;
        }

        .navbar nav ul li ul.dropdown li a {
          padding: 5px 50px;
          width: 100%;
        }

        .row {
            margin-top: 50px; /* Adjust based on navbar height */
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .col {
            flex: 1;
            padding: 20px;
        }

        .card {
            background-color: #f4f4f4;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card p {
            margin: 0;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .footer-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .social-icons .icon-link {
            color: #fff;
            margin: 0 10px;
            text-decoration: none;
            font-size: 20px;
        }

        .social-icons .icon-link:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="navbar">
        <img src="images/logo.png" class="logo">
        <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li>
                    <a href="#">TRAINER ▾</a>
                    <ul class="dropdown">
                        <li><a href="portfolio1.php">Portfolio1</a></li>
                        <li><a href="portfolio2.php">Portfolio2</a></li>
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
</div>
<br><br><br><br>
<div>
    <section id="about">
        <div class="container">
            <header class="section-header text-center mb-5 pb-2">
                <h3>About Us</h3>
                <p>Kilter Endurance is a platform that provides the users a perfect environment to ease their anxiety and depression. In this project, we are providing free courses for the users so that they can use them to relax and cope with stress by focusing on something that calms them. As meditation helps to stay centered and keep inner peace.</p>
            </header>
            <div class="row about-cols">
                <div class="col-md-4 wow fadeInUp">
                    <div class="about-col">
                        <div class="img">
                            <img src="img/about-mission.webp" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Our Mission</a></h2>
                        <p class="text-center">Our Mission is to provide a simple and quiet environment where the contemplative life can be developed and protected amidst the complexities of urban living.</p>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-col">
                        <div class="img">
                            <img src="img/about-plan.webp" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-list-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Our Plan</a></h2>
                        <p class="text-center">Our main objective of this project is to motivate meditation so that they can get stress relief from their monotonous life. Also helping to reduce anxiety, depression, insomnia, overthinking and its helps to increase both physical and mental peace and calm....</p>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-col">
                        <div class="img">
                            <img src="img/about-vision.webp" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Our Vision</a></h2>
                        <p class="text-center">Our vision is Practicing Kindness, Clarity and Liberation. To welcome, with appreciation for our diversity, equally people of all cultural, ethnic, and religious backgrounds.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
