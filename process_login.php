<!-- process_login.php -->
<?php
session_start();
include('includes/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            $_SESSION["username"] = $username;
            $_SESSION["userid"] = $row["id"];
            header("Location: index.php");
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>