<!-- admin_add_event.php -->
<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: admin_login.php");
    exit();
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


    <title>Event Booking System - Add Event</title>
</head>
<body class="bg-success-subtle">
    <header>
        <h1 style="text-align:center; color:darkslategray; font-family: 'Brush Script MT', cursive; font-size:80px">Event Booking System - Add Event</h1>
    </header>
    <main>
        <form action="process_admin_add_event.php" method="post" style="max-width: 400px; margin: 0 auto;">
            <label for="event_name" style="display: block; margin-bottom: 8px;">Event Name:</label>
            <input type="text" id="event_name" name="event_name" required style="width: 100%; padding: 8px; margin-bottom: 16px;">

            <label for="event_date" style="display: block; margin-bottom: 8px;">Event Date:</label>
            <input type="date" id="event_date" name="event_date" required style="width: 100%; padding: 8px; margin-bottom: 16px;">

            <label for="event_location" style="display: block; margin-bottom: 8px;">Event Location:</label>
            <input type="text" id="event_location" name="event_location" required style="width: 100%; padding: 8px; margin-bottom: 16px;">

            <label for="available_seats" style="display: block; margin-bottom: 8px;">Available Seats:</label>
            <input type="number" id="available_seats" name="available_seats" min="1" required style="width: 100%; padding: 8px; margin-bottom: 16px;">

            <label for="event_fees" style="display: block; margin-bottom: 8px;">Event Fees:</label>
            <input type="text" id="event_fees" name="event_fees" required>

            <button type="submit" class="btn btn-success">Add Event</button>
        </form>
    </main>
</body>
</html>

