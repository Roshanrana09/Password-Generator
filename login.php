<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Check if user exists
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $user['name'];
            header("Location: home.php"); // Redirect to Home Page
            exit;
        } else {
            echo "Invalid password! <a href='index.php'>Go back</a>";
        }
    } else {
        echo "User not found! <a href='index.php'>Go back</a>";
    }
    $conn->close();
}
?>
