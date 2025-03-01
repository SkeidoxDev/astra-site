<?php
session_start();

// If not logged in, redirect to login page
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            background-color: #23272A;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 50px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background-color: #2C2F33;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        }
        a {
            color: #FF4747;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Welcome to the Admin Panel</h2>
        <p>You are now logged in.</p>
        <a href="logout.php">Logout</a>
    </div>

</body>
</html>
