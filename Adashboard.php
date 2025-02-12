<?php
session_start();
error_reporting(0);
include('db_conn.php');
if (strlen($_SESSION['uid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Welcome Page</title>

   

    <!-- Main CSS-->
    <link href="css/style.css" rel="stylesheet" media="all">
    <style>
    
    </style>
</head>

<body>

    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
               
                <div class="card-body">
                    
                    <h1 style="color: blue; text-align: center;">Welcome  Admin !!</h1>
                          
                </div>
           
        </div>
         <a href="Admin.php" class="btn btn-outline btn-default">LOGOUT</a>
         <a href="custdash.php" class="btn btn-outline btn-default">TOTAL USERS</a>
         <a href="trainerdashboard.php" class="btn btn-outline btn-default">TOTAL TRAINERS</a>
         <a href="yogaform.php" class="btn btn-outline btn-default">TRAINER ENTRIES</a>
    </div>

    
        
  
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>




</body>

</html>

<?php }  ?>