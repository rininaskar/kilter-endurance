<?php
session_start();
include('db_conn.php');

if (!isset($_SESSION['uid']) || $_SESSION['uid'] == 0) {
    header('location:logout.php');
    exit();
}

// Fetch trainer details based on email
if(isset($_GET['email'])) {
    $email = $_GET['email'];
    $sql = "SELECT * FROM trainer WHERE email = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $phone = $row['phone'];
        $experience = $row['experience'];
        $description = $row['description'];
        $profile_image = $row['profile'];  
    } else {
        echo "Trainer not found.";
        exit();
    }
    $stmt->close();
} else {
    echo "Email not provided.";
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <title>Update Trainer</title>
    <style>
        .user-box {
            position: relative;
            margin-bottom: 30px;
        }
        .user-box input, 
        .user-box textarea {
            width: 100%;
            padding: 10px 0;
            border: none;
            border-bottom: 1px solid #000;
            outline: none;
            background: transparent;
            resize: none;
        }
        .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #000;
            pointer-events: none;
            transition: 0.5s;
        }
        .user-box input:focus ~ label, 
        .user-box textarea:focus ~ label,
        .user-box input:valid ~ label, 
        .user-box textarea:valid ~ label {
            top: -18px;
            left: 0;
            color: #007bff;
            font-size: 14px;
        }
        .update-form {
            width: 50%;
            margin: 0 auto;
        }
        .update-form a {
            display: block;
            margin-top: 20px;
            text-align: center;
            background: #007bff;
            border: none;
            outline: none;
            color: #fff;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: 0.3s;
            text-decoration: none;
        }
        .update-form a:hover {
            background: #0056b3;
        }

        /* Adjustments for the email field */
        .user-box input[name="email"] {
            padding-top: 20px; 
        }
        .user-box label[for="email"] {
            top: -20px; 
            color: #03e9f4; /* Match the color with other field titles */
        }

        /* Adjustments for the description field */
        .user-box textarea[name="description"] {
            color: #fff; 
            padding-top: 20px; 
        }
        .user-box label[for="description"] {
            color: #03e9f4; 
        }

        .user-box label[for="profile"] {
            top: -20px; 
            color: #03e9f4; /* Match the color with other field titles */
        }
    </style>
</head>
<body>
    <!-- Your HTML content here -->
    <div class="login-box update-form">
        <h2>Update Trainer</h2>
        <form action="update_trainer_process.php" method="POST" enctype="multipart/form-data">
            <div class="user-box">
                <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>" required readonly>
                <label for="email">Email</label>
            </div>
            <div class="user-box">
                <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
                <label for="name">Name</label>
            </div>
            <div class="user-box">
                <input type="text" name="phone" value="<?php echo htmlspecialchars($phone); ?>" required>
                <label for="phone">Phone</label>
            </div>
            <div class="user-box">
                <input type="number" name="experience" value="<?php echo htmlspecialchars($experience); ?>" required>
                <label for="experience">Experience</label>
            </div>
            <div class="user-box">
                <textarea name="description" rows="4" required><?php echo htmlspecialchars($description); ?></textarea>
                <label for="description">Description</label>
            </div>

            <div class="user-box">
                <label for="profile">Profile Image</label>
                <br>
                <?php if (!empty($profile_image)) { ?>
                    <img src="<?php echo htmlspecialchars($profile_image); ?>" alt="Profile Image" style="max-width: 100px; display: block; margin-bottom: 10px;">
                <?php } ?>
                <input type="file" name="profile">
            </div>


            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <input type="submit" name="Submit" value="Update">
            </a>
        </form>
    </div>
</body>
</html>
<?php
$con->close();
?>
