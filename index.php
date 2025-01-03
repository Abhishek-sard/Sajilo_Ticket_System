<?php include 'includes/db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-container">
        <h1>User-Login</h1>
        <form action="home.php" method="POST">
            <input type="text" name="name" placeholder="Enter Your Name" required>
            <input type="text" name="address" placeholder="Enter Your Address" required>
            <input type="email" name="gmail" placeholder="Enter Your Gmail" required>
            <input type="text" name="contact" placeholder="Enter Your Contact" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
