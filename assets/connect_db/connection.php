<?php
// Database connection details
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

echo '<script>alert("Connection Done")</script>';

// Get message from POST data
//$message = $_POST['message'];

// Prepare and execute SQL statement


// $sql = "INSERT INTO msg (`message`) VALUES (?)";
// $stmt = $conn->prepare($sql);

// $stmt->bind_param("s", $name); 
// $stmt->bind_param("s", $message); 
// $stmt->bind_param("s", $message); 

// Set parameters
// $name = $_POST['name'];
// $email = $_POST['email'];
// $message = $_POST['message'];

// // $name = "Fuad";
// // $email = "fuad@gmail.com";
// // $message = "We eat rice.";

// $sql = "INSERT INTO messages( name, email, message ) VALUES( ?, ?, ?);";
// $stmt = $conn->prepare($sql);

// // Bind parameters (s = string, i = integer, d = double, etc.)
// $stmt->bind_param("sss", $name, $email, $message);



// // // Execute the statement
// // $stmt->execute();

// if ($stmt->execute()) {
//     echo "Message sent successfully!";
// } else {
//     echo "Error: " . $stmt->error;
// }


?>