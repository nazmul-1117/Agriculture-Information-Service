<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../assets/connect_db/connection.php';

    // Get data from the form
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO registration (name, username, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss",$name, $username, $email, $password);

    if ($stmt->execute()) {
        echo "<script>alert('Registration successful!')</script>";
    } else {
        echo "Error: " . $stmt->error;
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
    <title>Registration - Agriculture Information Service</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/css/loginXsingup.css">
</head>
<body>

    <?php include '../header.php'; ?>

    <div class="form-container">
        <h2>Register</h2>
        <form method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" required><br><br>

            <label for="username">Username:</label>
            <input type="text" name="username" required><br><br>
            
            <label for="email">Email:</label>
            <input type="email" name="email" required><br><br>
            
            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>
            
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</body>
</html>
