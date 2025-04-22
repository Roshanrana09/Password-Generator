<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator Dashboard</title>
    <link rel="stylesheet" href="dashboard.css"> <!-- Link to your CSS -->
</head>
<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="navbar-container">
            <h1>Password Generator</h1>
            <nav>
                <a href="home.php">Home</a>
                <a href="security.php">Security Tips</a>
                <a href="logout.php" class="logout">Logout</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container">
        <h2>Welcome to the Password Generator Dashboard</h2>
        <p>Generate secure passwords for your accounts with just one click!</p>

        <!-- Password Generator Section -->
        <div class="password-generator">
            <label for="password-length">Password Length:</label>
            <input type="number" id="password-length" min="8" max="50" value="12">

            <div class="options">
                <label><input type="checkbox" id="include-uppercase" checked> Include Uppercase</label>
                <label><input type="checkbox" id="include-lowercase" checked> Include Lowercase</label>
                <label><input type="checkbox" id="include-numbers" checked> Include Numbers</label>
                <label><input type="checkbox" id="include-symbols" checked> Include Symbols</label>
            </div>

            <button onclick="generatePassword()">Generate Password</button>
            <div class="generated-password">
                <label for="password-output">Generated Password:</label>
                <input type="text" id="password-output" readonly>
                <button onclick="copyToClipboard()">Copy</button>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div>
            <p>&copy; 2024 Password Generator. All Rights Reserved.</p>
            <p>
                <a href="#">Privacy Policy</a> |
                <a href="#">Terms of Service</a> |
                <a href="#">Contact Us</a>
            </p>
        </div>
    </footer>

    <!-- JavaScript for Password Generator -->
    <script src="dashboard.js"></script>
</body>
</html>
