<!-- process_admin_add_event.php -->
<?php
session_start();
include('includes/db.php');

if (!isset($_SESSION["username"])) {
    header("Location: admin_login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $event_name = $_POST["event_name"];
    $event_date = $_POST["event_date"];
    $event_location = $_POST["event_location"];
    $available_seats = $_POST["available_seats"];
    $event_fees = $_POST["event_fees"];

    $sql = "INSERT INTO events (event_name, event_date, event_location, available_seats,event_fees) VALUES ('$event_name', '$event_date', '$event_location', '$available_seats','$event_fees')";

    if ($conn->query($sql) === TRUE) {
        echo "Event added successfully!";
        echo "<p><a href='admin_dashboard.php'>Back to Admin Dashboard</a></p>";
    } else {
        echo "Event addition failed: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>