<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/logo/favicon.ico" type="image/x-icon">
    <title>AIS-Agriculture Information Service</title>

    <!-- Agriculture Information Service -->

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/main_home.css">
    <link rel="stylesheet" href="assets/css/message.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <nav class="navbar">

        <div class="logo">
            <a href="#"><img src="assets/images/logo/logo-2.png" alt="MyLogo"></a>
        </div>

        <ul>
            <?php if (!isset($_SESSION['user_id'])): ?>
                <li><a href="index.php">Home</a></li>
                <li><a href="about_us/about_us.php">About Us</a></li>
                <li><a href="services/service.php">Services</a></li>
                <li><a href="contact/contact.php">Contact</a></li>
                <li><a href="crops/crops.php">Crops</a></li>
                <li><a href="Gallery/gallery.php">Gallary</a></li>

                <li><a href="LoginSingup/login.php">Login</a></li>
                <li><a href="LoginSingup/registration.php">Register</a></li>

            <?php else: ?>
                <li><a href="index.php">Home</a></li>
                <li><a href="about_us/about_us.php">About Us</a></li>
                <li><a href="services/service.php">Services</a></li>
                <li><a href="contact/contact.php">Contact</a></li>
                <li><a href="crops/crops.php">Crops</a></li>
                <li><a href="Gallery/gallery.php">Gallary</a></li>

                <li><a href="LoginSingup/profile.php"><?php echo $_SESSION['user_full_name'] ?> </a> </li>

                <li><a href="LoginSingup/logout.php">Logout</a></li>

            <?php endif; ?>
        </ul>
    </nav>

    <header>
        <div class="header-img"></div>
    </header>

    <section class="about dark-theme">
        <div class="about-content">
            <h2>About Agriculture</h2>
            <br />
            <h1>Agriculture Information Service (AIS)</h1>
            <p>The <span class="highlight">Agriculture Information Service (AIS)</span> provides farmers with essential
                knowledge, advice, and technology to improve agricultural practices and productivity. Its key roles
                include:</p>
            <br />
            <ul>
                <li>Disseminating information on farming techniques, pest control, and policies.</li>
                <br />
                <li>Offering expert advice and training on modern and sustainable agriculture.</li>
                <br />
                <li>Using ICT tools like mobile apps and online platforms for updates on markets, and technology.</li>
                <br />
                <li>Linking farmers to markets and ensuring fair pricing.</li>
                <br />
                <li>Collaborating on research and promoting innovative farming solutions.</li>
            </ul>
            <br />
            <br />
            <p>In Bangladesh, <span class="highlight">AIS</span> operates under the Ministry of Agriculture, focusing on
                technology promotion, media outreach, and direct farmer support via helplines and online services.</p>
        </div>
        <div class="about-image">
            <img src="home/about.jpeg" alt="About Image">
        </div>
    </section>

    <section class="menu">
        <h2>Our Menu</h2>
        <div class="menu-items">
            <div class="menu-item">
                <img src="home/m1.jpg" alt="Menu 1">
                <h3>Modern Farming Techniques</h3>
                <p>Learn the latest techniques in crop cultivation, pest control, and sustainable farming to maximize
                    productivity and quality.</p>
            </div>
            <div class="menu-item">
                <img src="home/m2.jpg" alt="Menu 2">
                <h3>Smart Agriculture Tools</h3>
                <p>Discover how ICT tools, mobile apps, and digital platforms provide real-time updates on weather,
                    market trends, and farming technology.</p>
            </div>
            <div class="menu-item">
                <img src="home/m3.jpeg" alt="Menu 3">
                <h3>Farmer Support & Training</h3>
                <p>Get access to expert advice, research collaborations, and training programs designed to empower
                    farmers with the skills and knowledge they need.</p>
            </div>
        </div>
    </section>

    <section class="gallery">
        <h2>Gallery</h2>
        <div class="image-grid">
            <div class="image-item">
                <img src="home/g1.jpg" alt="Image 1">
            </div>
            <div class="image-item">
                <img src="home/g2.jpg" alt="Image 2">
            </div>
            <div class="image-item">
                <img src="home/g3.jpg" alt="Image 3">
            </div>
            <div class="image-item">
                <img src="home/g4.jpg" alt="Image 4">
            </div>
        </div>
    </section>







    <!-- modal content -->
    <!-- Modal -->
    <div id="messageModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModalBtn">&times;</span>
            <h2>Send Us a Message</h2>

            <!-- User Input Form -->
            <form id="messageForm">
                <label for="name">Name:</label>
                <input type="text" id="name" placeholder="Your Name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="Your Email" required>

                <label for="message">Message:</label>
                <textarea id="message" rows="4" placeholder="Your Message" required></textarea>

                <button type="submit" class="submit-btn btn">Send Message</button>
            </form>
        </div>
    </div>

    <!-- Messenger Button -->
    <button id="messengerBtn" class="messenger">
        <i class="fa-brands fa-facebook-messenger"></i>
    </button>

    <footer>
        <p>&copy; 2024 All About Agriculture Information Service All rights reserved.</p>
    </footer>

    <script src="Messages/message.js"></script>
</body>

</html>