<?php
session_start();
include('db_conn.php');

if (!isset($_SESSION['uid']) || $_SESSION['uid'] == 0) {
    header('location:logout.php');
    exit();
}

if (isset($_POST['Submit'])) {
    $original_email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $experience = $_POST['experience'];
    $description = $_POST['description'];
    $profile_image = null;

    // Check if a new image is uploaded
    if ($_FILES['profile']['size'] > 0) {
        // Process image upload
        $image_name = $_FILES['profile']['name'];
        $image_tmp = $_FILES['profile']['tmp_name'];
        $image_extension = pathinfo($image_name, PATHINFO_EXTENSION);
        $image_path = 'uploads/' . uniqid() . '.' . $image_extension;  // Store images in 'uploads' directory with unique name
        
        // Move the uploaded image to the desired location
        if (move_uploaded_file($image_tmp, $image_path)) {
            $profile_image = $image_path;
        } else {
            echo "Error uploading image.";
            exit();
        }
    }

    // Update the trainer details in the database
    if ($profile_image) {
        $sql = "UPDATE trainer SET name = ?, phone = ?, experience = ?, description = ?, profile = ? WHERE email = ?";
        $stmt = $con->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("ssisss", $name, $phone, $experience, $description, $profile_image, $original_email);
        }
    } else {
        $sql = "UPDATE trainer SET name = ?, phone = ?, experience = ?, description = ? WHERE email = ?";
        $stmt = $con->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("ssiss", $name, $phone, $experience, $description, $original_email);
        }
    }

    if ($stmt->execute()) {
        echo "Trainer details updated successfully.";
        header("Location: trainerdashboard.php");
        exit();
    } else {
        echo "Error updating trainer: " . $con->error;
    }
    $stmt->close();
}
$con->close();
?>
