










<?php

include_once("../connect_db/connection.php");

echo '<script>alert("Sent KK")</script>';
echo '<script>consol.log("include done");</script>';

// Database credentials (replace with your own)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ais";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data from $_POST
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// **Important:** Use prepared statements to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO messages(name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);

if ($stmt->execute()) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error; // Replace $sql with actual prepared statement
}

$stmt->close();
$conn->close();

?>

?>