<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="toggle">
                <button id="login-btn" class="active">Login</button>
                <button id="signup-btn">Signup</button>
            </div>
            <form id="login-form" class="form active" action="login.php" method="POST">
                <h2>Login</h2>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
            <form id="signup-form" class="form" action="signup.php" method="POST">
                <h2>Signup</h2>
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Signup</button>
            </form>
            
        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>
