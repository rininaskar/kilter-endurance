<?php
session_start();
error_reporting(0);
include ('db_conn.php');
if (strlen($_SESSION['uid'] == 0)) {
    header('location:logout.php');
} else {



    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <title>Welcome Page</title>

        <!-- Icons font CSS-->
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <!-- Font special for pages-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
            rel="stylesheet">

        <!-- Vendor CSS-->
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="css/style.css" rel="stylesheet" media="all">
    </head>
    
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
               
                <div class="card-body">
                    
                    <h1 style="color: blue; text-align: center;">Welcome Users !!</h1>
                          
                </div>
           
        </div>
         <a href="signout.php" class="btn btn-outline btn-default">Logout</a>
    </div>
    

    <body oncontextmenu="return false">
    <div class="box">
        <div id="video_player">
            <video controls poster="" class="video" id="video">
                <source src="./media/7.mp4" type="video/mp4">
                <source src="./media/7.mp4" type="video/mp4">

            </video>
            <div class="scrollBox">
                <div class="box1">
                    <img src="./images/c1.jpg">
                    <div class="box-content">
                        <h3>Singing Bowl sounds OM</h3>
                        <a href="./media/1.mp4" class="btn">Watch</a>
                    </div>
                </div>
                <div class="box1">
                    <img src="./images/c2.jpg">
                    <div class="box-content">
                        <h3>Utthita Parsvakonasana</h3>
                        <a href="./media/2.mp4" class="btn">Watch</a>
                    </div>
                </div>
                <div class="box1">
                    <img src="./images/c3.jpg">
                    <div class="box-content">
                        <h3> URDHVA MUKHA SVANASANA</h3>
                        <a href="./media/3.mp4" class="btn">Watch</a>
                    </div>
                </div>
                <div class="box1">
                    <img src="./images/c4.jpg">
                    <div class="box-content">
                        <h3>Managing Anxious Thoughts And Stress With Mindfulness</h3>
                        <a href="./media/4.mp4" class="btn">Watch</a>
                    </div>
                </div>
                <div class="box1">
                    <img src="./images/c5.jpg">
                    <div class="box-content">
                        <h3>Surya Namaskara</h3>
                        <a href="./media/5.m4v" class="btn">Watch</a>
                    </div>
                </div>
                <div class="box1">
                    <img src="./images/c6.jpg">
                    <div class="box-content">
                        <h3>BAT pose</h3>
                        <a href="./media/6.m4v" class="btn">Watch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

 


        <!-- Jquery JS-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <!-- Vendor JS-->
        <script src="vendor/select2/select2.min.js"></script>
        <script src="vendor/datepicker/moment.min.js"></script>
        <script src="vendor/datepicker/daterangepicker.js"></script>

        <!-- Main JS-->
        <script src="js/global.js"></script>

    </body>

    </html>
    
<?php } ?>