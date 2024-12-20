<header>
    <div class="header-img"></div>
</header>

<nav class="navbar">
    <ul>

        <?php if (!isset($_SESSION['user_id'])): ?>
            <li><a href="../home/home.html">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="services/services.html">Services</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Crops</a></li>
            <li><a href="#">Gallary</a></li>

            <li><a href="LoginSingup/login.php">Login</a></li>
            <li><a href="LoginSingup/registration.php">Register</a></li>

        <?php else: ?>

            <li><a href="../home/home.html">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="services/services.html">Services</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Crops</a></li>
            <li><a href="#">Gallary</a></li>

            <?php echo $_SESSION['user_full_name']?>
        <?php endif; ?>



    </ul>
</nav>