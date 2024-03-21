<!-- process_register.php -->
<?php
include('includes/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = $_POST["email"];
    $mobile_no = $_POST["mobile_no"];


    // Check if the username is already taken
    $check_username_query = "SELECT id FROM users WHERE username = '$username'";
    $check_username_result = $conn->query($check_username_query);

    if ($check_username_result->num_rows > 0) {
        echo "Username already exists. Please choose a different username.";
    } else {
        // Insert user details into the database
        $insert_user_query = "INSERT INTO users (username, password, email, mobile_no) VALUES ('$username', '$password', '$email', '$mobile_no')";

        if ($conn->query($insert_user_query) === TRUE) {
            echo "Registration successful!";
            echo "<p>Please Login <a href='login.php'>Login here</a>.</p>";
            // Redirect to login page or any other page after successful registration
            // header("Location: login.php");
        } else {
            echo "Registration failed: " . $conn->error;
        }
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>