<?php
    include_once("../assets/connect_db/connection.php");
// include_once "../connect_db/connection.php";

echo '<script> alert("XXX") </script>';
echo '<script> Console.log("BCCC") </script>';

// Get input data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert data into the database
$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Message sent successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
