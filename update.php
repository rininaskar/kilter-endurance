<?php
   include('db_conn.php');
    
   
// Retrieve form data
$id = $_POST['ID'];
$fullName = $_POST['fname'];
$email = $_POST['email'];
$mobileNumber = $_POST['contactno'];


// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// SQL update query
$sql = "UPDATE users SET FullName='$fullName', Email='$email', MobileNumber='$mobileNumber' WHERE ID='$id'";

// Execute update query
if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}

// Close connection
$con->close();
echo "<script type='text/javascript'> document.location ='custdash.php'; </script>";


?>