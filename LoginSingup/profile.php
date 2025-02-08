<?php
session_start();
include_once '../assets/connect_db/connection.php';
// Fetch user info
$user_id = $_SESSION['user_id'];
$user_full_name = $_SESSION['user_full_name'];
$username = $_SESSION['username'];
$user_email = $_SESSION['user_email'];


$message_query = "SELECT id, name, email, subject, message, date_time
    FROM `messages`";
$result = $conn->query($message_query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/logo/favicon.ico" type="image/x-icon">
    <title>AIS-User Profile</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/css/profile.css">

</head>

<body>
    <header>
        <!-- <nav>
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="profile.html" class="active">Profile</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav> -->
        <?php include '../header.php'; ?>
    </header>


    <main>
        <section class="profile">
            <div class="profile-info">
                <h1>Welcome, Mr. <?php echo $user_full_name ?></h1>
                <p>Email: <?php echo $user_email ?></p>
                <p>Member ID: <?php echo $user_id ?></p>
            </div>

            <div class="messages">
                <h2>All Messages</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Message ID</th>
                            <th>Sender</th>
                            <th>Message</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>" . $row['id'] . "</td>
                                        <td>" . $row['name'] . "</td>
                                        <td>" . $row['message'] . "</td>
                                        <td>" . $row['date_time'] . "</td>
                                    </tr>
                                ";
                            }
                        } else {
                            echo "0 results";
                        }

                        $conn->close();
                        ?>
                        

                    </tbody>
                </table>
            </div>

            <div class="message-body">

                

            </div>



        </section>
    </main>

    <footer>
        <p>&copy; 2024 Agriculture Information Service. All rights reserved.</p>
    </footer>
</body>

</html>