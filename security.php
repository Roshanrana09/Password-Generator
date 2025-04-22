<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security Tips</title>
    <link rel="stylesheet" href="security.css"> <!-- Link to your updated CSS -->
</head>
<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="navbar-container">
            <h1>Password Generator</h1>
            <nav>
                <a href="Dashboard.php">Dashboard</a>
                <a href="logout.php" class="logout">Logout</a>
            </nav>
        </div>
    </header>

    <!-- Main Content for Security Tips -->
    <main class="container">
        <h2>Security Tips for a Safer Online Experience</h2>
        <div class="security-tips">
            <div class="tip">
                <h3>1. Use Strong, Unique Passwords</h3>
                <p>Ensure that you use strong and unique passwords for all your accounts. Avoid using easily guessable information like birthdays or names. Use a combination of uppercase, lowercase letters, numbers, and symbols.</p>
            </div>
            <div class="tip">
                <h3>2. Enable Two-Factor Authentication (2FA)</h3>
                <p>Where possible, enable two-factor authentication on your accounts. This adds an extra layer of security by requiring you to verify your identity through another method, such as a phone number or app, in addition to your password.</p>
            </div>
            <div class="tip">
                <h3>3. Be Cautious of Phishing Scams</h3>
                <p>Be wary of unsolicited emails or messages that ask for sensitive information like passwords, bank account details, or social security numbers. Always verify the sender before clicking on links or opening attachments.</p>
            </div>
            <div class="tip">
                <h3>4. Update Your Software Regularly</h3>
                <p>Keep your operating system, applications, and antivirus software up to date. This ensures that you have the latest security patches and fixes for known vulnerabilities.</p>
            </div>
            <div class="tip">
                <h3>5. Use a Secure Wi-Fi Connection</h3>
                <p>Avoid using public Wi-Fi for sensitive tasks like banking or logging into accounts. If you must use public Wi-Fi, use a Virtual Private Network (VPN) to encrypt your internet connection.</p>
            </div>
            <div class="tip">
                <h3>6. Review Account Activity Regularly</h3>
                <p>Regularly review your accounts for any unusual activity or unauthorized logins. Most services provide a log of recent account activity, so take advantage of this feature to stay informed.</p>
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
</body>
</html>
