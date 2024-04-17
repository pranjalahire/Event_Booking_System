<!-- admin_dashboard.php -->

<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: admin_login.php");
    exit();
}

include('includes/db.php');

// Fetch and display available events
$sql = "SELECT * FROM events";
$result = $conn->query($sql);

$sql1 = "SELECT * FROM users";
$result1 = $conn->query($sql1);

$sql2 = "SELECT * FROM bookings";
$result2 = $conn->query($sql2);

// $user_id = $_SESSION["userid"];
// $bookings = "SELECT event_name FROM bookings,users,events Where bookings.u_id=users.id and bookings.e_id=events.id and bookings.u_id=$user_id";
// $b_result = $conn->query($bookings);
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


    <title>Admin dashboard</title>
</head>

<body class="bg-success-subtle">
    <header>
        <h1 style="text-align:center; color:darkslategray; font-family: 'Brush Script MT', cursive; font-size:80px">Admin dashboard</h1>
    </header>
    <main>
        <h2 style=" color:darkslategray; font-family: 'Brush Script MT', cursive; font-size:40px">&nbsp;&nbsp;&nbsp;" Welcome, <?php echo $_SESSION["username"]; ?>! "</h2>
        <!-- <p>Admin functionality goes here..</p> -->

        <p style=" color:darkslategray; font-family: 'Brush Script MT', cursive; font-size:40px">&nbsp;&nbsp;&nbsp;Available Events:</p>
        <p><a href="admin_add_event.php">&nbsp;&nbsp;&nbsp;Add Event</a></p>
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

                echo "<form action='process_delete_event.php' method='post'>";
                echo "<input type='hidden' name='event_id' value='" . $row["id"] . "'>";
                echo "<button type='submit'>Delete</button>";
                echo "</form>";

                // echo "<a href='book_event.php?id=" . $row["id"] . "'>Book Now</a>";
                echo "</div>";
                echo "</div>";
            }
            echo "</div>";
            echo "</div>";
        } else {
            echo "No events available.";
        }
        ?>

        <br>
        <p style=" color:darkslategray; font-family: 'Brush Script MT', cursive; font-size:40px">&nbsp;&nbsp;&nbsp;Total Bookings:</p>
        <div class="container">
            <table style="border-collapse: collapse; width: 100%;  border: 1px solid;
            ">
                <thead>
                    <tr>
                        <th style='border:1px solid; text-align:left; padding:8px;'>Booking ID</th>
                        <th style='border:1px solid; text-align:left; padding:8px;'>User ID</th>
                        <th style='border:1px solid; text-align:left; padding:8px;'>Event ID</th>
                        <th style='border:1px solid; text-align:left; padding:8px;'>Booking Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result2->num_rows > 0) {
                        // echo "<div class='container'>";

                        // echo "<div class='row row-cols-1 row-cols-md-3 g-4 '>";
                        while ($row = $result2->fetch_assoc()) {
                            // echo "<div class='col'>";
                            // echo "<div class='card btn btn-outline-warning'>";
                            echo "<tr>";
                            echo "<td style='border:1px solid; text-align:left; padding:8px;'>" . $row["id"] . "</td>";
                            echo "<td style='border:1px solid; text-align:left; padding:8px;'> " . $row["u_id"] . "</td>";
                            echo "<td style='border:1px solid; text-align:left; padding:8px;'>" . $row["e_id"] . "</td>";
                            echo "<td style='border:1px solid; text-align:left; padding:8px;'>" . $row["booking_date"];



                            echo "</td>";


                            echo "</tr>";
                            // echo "</div>";
                            // echo "</div>";
                        }
                        // echo "</div>";
                        // echo "</div>";
                    } else {
                        // echo "No Bookings.";
                        echo "<tr><td colspan='8'>No bookings found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <br>


        <p style=" color:darkslategray; font-family: 'Brush Script MT', cursive; font-size:40px">&nbsp;&nbsp;&nbsp;Total Users:</p>
        <div class="container">
            <table style="border-collapse: collapse; width: 100%;  border: 1px solid;  ">
                <thead>
                    <tr>
                        <th style='border:1px solid; text-align:left; padding:8px;'>User ID</th>
                        <th style='border:1px solid; text-align:left; padding:8px;'>User Name</th>
                        <th style='border:1px solid; text-align:left; padding:8px;'>Email</th>
                        <th style='border:1px solid; text-align:left; padding:8px;'>Contact</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result1->num_rows > 0) {
                        // echo "<div class='container'>";
                        // echo "<div class='row row-cols-1 row-cols-md-3 g-4 '>";
                        while ($row = $result1->fetch_assoc()) {
                            // echo "<div class='col'>";
                            // echo "<div class='card btn btn-outline-warning'>";
                            echo "<tr>";
                            echo "<td style='border:1px solid; text-align:left; padding:8px;'>" . $row["id"] . "</td>";
                            echo "<td style='border:1px solid; text-align:left; padding:8px;'>" . $row["username"] . "</td>";
                            echo "<td style='border:1px solid; text-align:left; padding:8px;'>" . $row["email"] . "</td>";
                            echo "<td style='border:1px solid; text-align:left; padding:8px;'>" . $row["mobile_no"] . "</td>";
                            echo "</tr>";
                            // echo "</div>";
                            // echo "</div>";
                        }
                        // echo "</div>";
                        // echo "</div>";
                    } else {
                        echo "<tr><td colspan='8'>No users found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </main>
    <footer>
        <p><a href="logout.php">&nbsp;&nbsp;&nbsp;Logout</a></p>
    </footer>
</body>

</html>