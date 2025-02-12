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

// Retrieve form data
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $experience = $_POST['experience'];
    $description = $_POST['description'];

    // File upload handling
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["profile"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["profile"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["profile"]["size"] > 500000) {
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)) {
            // Prepare SQL statement
            $sql = "INSERT INTO trainer (name, email, phone, experience, description, profile) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssiss", $name, $email, $phone, $experience, $description, $target_file);

            // Execute SQL statement
            if ($stmt->execute() === TRUE) {
                // Redirect to portfolio page
                header("Location: portfolio.php?email=" . urlencode($email));
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    $conn->close();
} else {
    echo "Form submission failed.";
}
?>
