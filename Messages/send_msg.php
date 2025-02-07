<?php
    include_once("../assets/connect_db/connection.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // $name = "Sojib";
    // $email = "sojib@ss.com";
    // $message = "I also love to eat rice but i don't eat.";

    echo "<script> alert('$name'); </script>";

    $sql = "INSERT INTO messages( name, email, message ) VALUES( ?, ?, ?);";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        echo "Message sent successfully!";
        echo '<script>alert("Sent Done")</script>';
        echo '<script>consol.log("execute done");</script>';

    } else {
        echo "Error: " . $stmt->error;
        echo '<script>alert("Sent Failed")</script>';
        echo '<script>consol.log("failed done");</script>';
    }


    $stmt->close();
    $conn->close();

?>
