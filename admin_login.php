<!-- admin_login.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Admin - Login</title>
</head>

<body class="bg-success-subtle">
    <header>
        <h1 style="text-align:center; color:darkslategray; font-family: 'Brush Script MT', cursive; font-size:80px">Admin - Login</h1>
    </header>

    <div class="container">
        <main style="margin:5px; background-color:#BCD4E6">

            <form action="process_admin_login.php" method="post" style="margin:auto;">
                <label for="username">Admin Username:</label>
                <input type="text" id="username" name="username" required style="margin: 10px;">
                <br>
                <label for="password">Admin Password:</label>
                <input type="password" id="password" name="password" required style="margin: 10px;">
                <br>
                <button type="submit" class="btn btn-success" style="margin: 10px;">Login</button>
            </form>
            <!-- <p>Dont have an account? <a href="register.php">Register here</a>.</p> -->

        </main>
    </div>


</body>

</html>