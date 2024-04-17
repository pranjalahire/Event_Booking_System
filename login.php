<!-- login.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Event Booking System - Login</title>
</head>

<body class="bg-success-subtle">
    <header>
        <h1 style="text-align:center; color:darkslategray; font-family: 'Brush Script MT', cursive; font-size:80px">Event Booking System - Login</h1>
    </header>

    <div class="container">
        <main style="margin:5px; background-color:#BCD4E6">

            <form action="process_login.php" method="post" style="margin:auto;">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required style="margin: 10px;">
                <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required style="margin: 10px;">
                <br>
                <button type="submit" class="btn btn-success" style="margin: 10px;">Login</button>
            </form>
            <p>Dont have an account? <a href="register.php">Register here</a>.</p>

        </main>
    </div>


    <div class="container">
        <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="event2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="event1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="event3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="card text-center">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-body-secondary">
            2 days ago
        </div>
    </div>

</body>

</html>