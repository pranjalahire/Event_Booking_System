<?php
session_start();

// Check if the user is logged in as admin
if (!isset($_SESSION["username"])) {
    header("Location: admin_login.php");
    exit();
}

include('includes/db.php');

// Get the event ID to be deleted
$event_id = $_POST["event_id"];

// Delete related bookings first
$sql_delete_bookings = "DELETE FROM bookings WHERE e_id = $event_id";
if ($conn->query($sql_delete_bookings) === FALSE) {
    echo "Error deleting related bookings: " . $conn->error;
}

// Proceed with deleting the event
$sql = "DELETE FROM events WHERE id = $event_id";
if ($conn->query($sql) === TRUE) {
    // Event deleted successfully
    echo "Event deleted successfully!";
    echo "<p><a href='admin_dashboard.php'>Back to Admin Dashboard</a></p>";
    //header("Location: admin_dashboard.php");
    exit();
} else {
    // Error occurred while deleting event
    echo "Error deleting event: " . $conn->error;
}


$conn->close();
