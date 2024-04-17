<!-- book_event.php -->
<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

include('includes/db.php');
$user_id = $_SESSION["userid"];
// Check if the event ID is provided in the URL
if (isset($_GET['id'])) {
    $event_id = $_GET['id'];

    // Retrieve event details
    $sql = "SELECT * FROM events WHERE id = $event_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $event = $result->fetch_assoc();
    } else {
        echo "Event not found.";
        exit();
    }
} else {
    echo "Invalid request.";
    exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the booking
    $username = $_SESSION["username"];

    // Check if seats are available
    if ($event["available_seats"] > 0) {
        // Update available seats in the database
        $new_available_seats = $event["available_seats"] - 1;
        $update_sql = "UPDATE events SET available_seats = $new_available_seats WHERE id = $event_id";

        $entry = "INSERT INTO bookings (u_id, e_id) VALUES ('$user_id', '$event_id')";
        if ($conn->query($entry) === TRUE) {
            echo "<h2 style='text-align:center; color:darkslategray; font-family: 'Brush Script MT', cursive; font-size:40px'>Registration successful!..</h2>";
        } else {
            echo "Registration failed: " . $conn->error;
        }

        if ($conn->query($update_sql) === TRUE) {
            echo "<h2 style='text-align:center; color:darkslategray; font-family: 'Brush Script MT', cursive; font-size:40px'>Booking successful! Enjoy the event.</h2>";
            // Additional logic, such as sending confirmation emails, can be added here.
        } else {
            echo "Booking failed: " . $conn->error;
        }
    } else {
        echo "Sorry, the event is fully booked.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Event Booking System - Book Event</title>
</head>

<body class="bg-success-subtle">
    <header>
        <h1 style="text-align:center; color:darkslategray; font-family: 'Brush Script MT', cursive; font-size:80px">Event Booking System - Book Event</h1>
    </header>
    <main>
        
        <h2>&nbsp;&nbsp;&nbsp;Welcome, <?php echo $_SESSION["username"]; ?>!</h2>
        <h3>&nbsp;&nbsp;&nbsp;Event Details:</h3>
        <p><strong>&nbsp;&nbsp;&nbsp;Event Name:</strong> <?php echo $event["event_name"]; ?></p>
        <p><strong>&nbsp;&nbsp;&nbsp;Event Date:</strong> <?php echo $event["event_date"]; ?></p>
        <p><strong>&nbsp;&nbsp;&nbsp;Event Location:</strong> <?php echo $event["event_location"]; ?></p>
        <p><strong>&nbsp;&nbsp;&nbsp;Available Seats:</strong> <?php echo $event["available_seats"]; ?></p>
        <p><strong>&nbsp;&nbsp;&nbsp;Fees:</strong> <?php echo $event["event_fees"]; ?></p>

        <form action="" method="post">
            <button type="submit">&nbsp;&nbsp;&nbsp;Book Now</button>
        </form>

        <p><a href="index.php">&nbsp;&nbsp;&nbsp;Back to Events</a></p>
        
    </main>
    <footer>
        <p><a href="logout.php">Logout</a></p>
    </footer>
</body>

</html>