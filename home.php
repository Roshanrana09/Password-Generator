<?php
// Starting session
session_start();

// Check if the user is logged in; if not, redirect to login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Password Generator</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="navbar-left">
            <h1>Password Generator</h1>
        </div>
        <div class="navbar-right">
            <a href="logout.php" class="logout">Logout</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="service-container">
        <h2>Welcome to the Password Generator</h2>
        <p>Select a platform to generate secure passwords:</p>

        <div class="service-list">
            <!-- Updated platforms -->
            <a href="dashboard.php?service=Google" class="service-card">
                <img src="Images/Google.png" alt="Google">
                <h3>Google</h3>
            </a>
            <a href="dashboard.php?service=Gmail" class="service-card">
                <img src="Images/Gmail.png" alt="Gmail">
                <h3>Gmail</h3>
            </a>
            <a href="dashboard.php?service=Instagram" class="service-card">
                <img src="Images/Instagram.png" alt="Instagram">
                <h3>Instagram</h3>
            </a>
            <a href="dashboard.php?service=Facebook" class="service-card">
                <img src="Images/Facebook.png" alt="Facebook">
                <h3>Facebook</h3>
            </a>
            <a href="dashboard.php?service=LinkedIn" class="service-card">
                <img src="Images/LinkedIn.png" alt="LinkedIn">
                <h3>LinkedIn</h3>
            </a>
            <a href="dashboard.php?service=Snapchat" class="service-card">
                <img src="Images/Snapchat.png" alt="Snapchat">
                <h3>Snapchat</h3>
            </a>
            <a href="dashboard.php?service=Outlook" class="service-card">
                <img src="Images/Outlook.png" alt="Outlook">
                <h3>Outlook</h3>
            </a>
            <a href="dashboard.php?service=Twitter" class="service-card">
                <img src="Images/Twitter.png" alt="Twitter">
                <h3>Twitter</h3>
            </a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Password Generator. All Rights Reserved.</p>
    </footer>
</body>
</html>
