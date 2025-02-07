<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../assets/connect_db/connection.php';

    // Get data from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the user exists in the database
    $stmt = $conn->prepare("SELECT id, name, username, email, password FROM registration WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $name, $username, $email, $hashed_password);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        // Verify password
        if (password_verify($password, $hashed_password)) {
            // Store user info in session
            $_SESSION['user_id'] = $id;
            $_SESSION['user_full_name'] = $name;
            $_SESSION['username'] = $username;
            $_SESSION['user_email'] = $email;

            header("Location: profile.php");
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "No user found with this email.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/logo/favicon.ico" type="image/x-icon">

    <title>Login - Agriculture Information Service</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/css/loginXsingup.css">
</head>
<body>
    
    <?php include '../header.php'; ?>
    

    <div class="form-container">
        <h2>Login</h2>
        <form method="POST" action="login.php">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="registration.php">Register</a></p>
    </div>
</body>
</html>
