<?php
    session_start()
?>

<nav class="navbar">

    <div class="logo">
        <a href="../index.php"><img src="../assets/images/logo/logo-2.png" alt="MyLogo"></a>
    </div>

    <ul>
        <?php if (!isset($_SESSION['user_id'])): ?>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../about_us/about_us.php">About Us</a></li>
            <li><a href="../services/service.php">Services</a></li>
            <li><a href="../contact/contact.php">Contact</a></li>
            <li><a href="../crops/crops.php">Crops</a></li>
            <li><a href="../Gallery/gallery.php">Gallary</a></li>

            <li><a href="../LoginSingup/login.php">Login</a></li>
            <li><a href="../LoginSingup/registration.php">Register</a></li>

        <?php else: ?>

            <li><a href="../index.php">Home</a></li>
            <li><a href="../about_us/about_us.php">About Us</a></li>
            <li><a href="../services/service.php">Services</a></li>
            <li><a href="../contact/contact.php">Contact</a></li>
            <li><a href="../crops/crops.php">Crops</a></li>
            <li><a href="../Gallery/gallery.php">Gallary</a></li>
            <li><a href="../LoginSingup/profile.php"> <?php echo $_SESSION['user_full_name'] ?> </a> </li>

        <?php endif; ?>



    </ul>
</nav>