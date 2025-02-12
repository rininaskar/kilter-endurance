<?php
include('db_conn.php');

// Check if the ID parameter is set
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare a SQL statement to delete the row
    $sql = "DELETE FROM users WHERE ID = ?";

    // Prepare the statement
    $stmt = $con->prepare($sql);

    if ($stmt) {
        // Bind the parameter
        $stmt->bind_param("i", $id); // assuming 'id' is an integer

        // Execute the statement
        if ($stmt->execute()) {
            header("Location: custdash.php"); // Redirect back to the display page
            exit();
        } else {
            echo "Error deleting row: " . $con->error;
        }
    } else {
        echo "Error preparing statement: " . $con->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$con->close();
?>