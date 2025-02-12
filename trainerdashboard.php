<?php
session_start();
include('db_conn.php');

if (!isset($_SESSION['uid']) || $_SESSION['uid'] == 0) {
    header('location:logout.php');
    exit();
}

// Handle deletion if delete request is sent
if (isset($_GET['delete_email'])) {
    $delete_email = mysqli_real_escape_string($con, $_GET['delete_email']);
    
    $delete_sql = "DELETE FROM trainer WHERE email = ?";
    $delete_stmt = $con->prepare($delete_sql);

    if ($delete_stmt) {
        $delete_stmt->bind_param("s", $delete_email);
        if ($delete_stmt->execute()) {
            echo "Trainer deleted successfully.";
        } else {
            echo "Error deleting trainer: " . $con->error;
        }
        $delete_stmt->close();
    } else {
        echo "Error preparing delete statement: " . $con->error;
    }
}

// Fetch all trainers
$sql = "SELECT * FROM trainer";
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainer Dashboard</title>
    <link rel="stylesheet" href="css/styled.css">
    <style>
        .go-back-link {
            display: inline-block;
            margin: 10px 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .go-back-link:hover {
            background-color: #0056b3;
        }

        .container {
            position: relative;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Add the go-back link -->
        <a href="adashboard.php" class="go-back-link" style="position: absolute; top: 0px; right: 20px;">Go back to Admin Dashboard</a>
        <a href="#" class="go-back-link" style="position: relative; top: 0px; left: 20px;">All Trainers</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Experience</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['name']) ?></td>
                            <td><?= htmlspecialchars($row['email']) ?></td>
                            <td><?= htmlspecialchars($row['phone']) ?></td>
                            <td><?= htmlspecialchars($row['experience']) ?></td>
                            <td><?= htmlspecialchars($row['description']) ?></td>
                            <td>
                                <a href="update_trainer.php?email=<?= htmlspecialchars($row['email']) ?>&name=<?= htmlspecialchars($row['name']) ?>&phone=<?= htmlspecialchars($row['phone']) ?>&experience=<?= htmlspecialchars($row['experience']) ?>&description=<?= htmlspecialchars($row['description']) ?>">Update</a>
                                <a href="trainerdashboard.php?delete_email=<?= htmlspecialchars($row['email']) ?>" onclick="return confirm('Are you sure you want to delete this trainer?')">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">No trainers found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
$con->close();
?>
