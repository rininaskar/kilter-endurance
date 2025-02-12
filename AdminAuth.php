<?php
session_start();
error_reporting(0);
include('db_conn.php');
if(isset($_POST['Submit']))
  {
    $emailcon=$_POST['emailcont'];
    $password=$_POST['password'];
    $query=mysqli_query($con,"select ID from admin where Email='$emailcon' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['uid']=$ret['ID'];
     
echo "<script type='text/javascript'> document.location ='Adashboard.php'; </script>";

   }
    else{
    echo "<script>alert('Invalid Details');</script>";
    }
  }
  ?>
 <h1 style="color: red;"> LOGIN &nbsp; FAILED</h1>
<button id="sub" onclick="window.location.href = 'Admin.php';">Try Again</button>