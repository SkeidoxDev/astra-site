<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
    header("Location: protected.php"); // Redirect to the protected page
    exit;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];
    $correct_password = "AstraIsCool"; // Change this to your real password

    if ($password === $correct_password) {
        $_SESSION['authenticated'] = true; // Store login session
        header("Location: protected.php"); // Redirect to the protected page
        exit;
    } else {
        $error = "Incorrect password. Try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Astra Bot</title>
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
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background-color: #2C2F33;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
        }
        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: none;
        }
        button {
            background-color: #5865F2;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }
        button:hover {
            background-color: #4752C4;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Admin Panel Login</h2>
        <?php if (isset($error)) { echo "<p style='color: red;'>$error</p>"; } ?>
        <form method="post">
            <input type="password" name="password" placeholder="Enter Password" required>
            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>
