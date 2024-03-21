<!-- index.php -->
<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

include('includes/db.php');

// Fetch and display available events
$sql = "SELECT * FROM events";
$result = $conn->query($sql);

$user_id = $_SESSION["userid"];
$bookings = "SELECT event_name FROM bookings,users,events Where bookings.u_id=users.id and bookings.e_id=events.id and bookings.u_id=$user_id";
$b_result = $conn->query($bookings);
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


    <title>Event Booking System - Events</title>
</head>

<body class="bg-success-subtle">
    <header>
        <h1 style="text-align:center; color:darkslategray; font-family: 'Brush Script MT', cursive; font-size:80px">Event Booking System - Events</h1>
    </header>
    <main>
        <h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>
        <p>Available Events:</p>

        <?php
        if ($result->num_rows > 0) {
            echo "<div class='container'>";
            echo "<div class='row row-cols-1 row-cols-md-3 g-4 '>";
            while ($row = $result->fetch_assoc()) {
                echo "<div class='col'>";
                echo "<div class='card btn btn-outline-success'>";
                // echo "<div>";
                echo "<h3>" . $row["event_name"] . "</h3>";
                echo "<p>Date: " . $row["event_date"] . "</p>";
                echo "<p>Location: " . $row["event_location"] . "</p>";
                echo "<p>Available Seats: " . $row["available_seats"] . "</p>";
                echo "<p>Fees: " . $row["event_fees"] . "</p>";
                echo "<a href='book_event.php?id=" . $row["id"] . "'>Book Now</a>";
                echo "</div>";
                echo "</div>";
            }
            echo "</div>";
            echo "</div>";
        } else {
            echo "No events available.";
        }
        ?>
        <p>Your Bookings:</p>
        <?php
        if ($b_result->num_rows > 0) {
            echo "<div class='container'>";
            echo "<div class='row row-cols-1 row-cols-md-3 g-4 '>";
            while ($row = $b_result->fetch_assoc()) {
                echo "<div class='col'>";
                echo "<div class='card btn btn-outline-warning'>";
                // echo "<div>";
                echo "<h3>" . $row["event_name"] . "</h3>";

                echo "</div>";
                echo "</div>";
            }
            echo "</div>";
            echo "</div>";
        } else {
            echo "No Bookings.";
        }
        ?>

    </main>
    <footer>
        <p><a href="logout.php">Logout</a></p>
    </footer>
</body>

</html>