<?php
// Assuming you have a database connection established
include('connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the record from the database
    $query = "DELETE FROM list WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Close the database connection
        $conn->close();
        header("Location: index.php"); // Redirect to the hobbies page
        exit();
    } else {
        echo 'Error deleting hobby.';
    }
} else {
    echo 'Invalid request.';
}

// Close the database connection
$conn->close();
?>