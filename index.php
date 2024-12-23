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
    <link rel="stylesheet" href="Messages/message.css">

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

    <!-- <div class="container">
        <aside class="sidebar">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="#">Crop Information</a></li>
                <li><a href="#">Market Prices</a></li>
                <li><a href="#">Weather Forecast</a></li>
                <li><a href="#">News & Updates</a></li>
                <li><a href="#">Resources</a></li>
            </ul>
        </aside>

        <main class="content">
            <h1>Welcome to AgriConnect</h1>
            <p>Your one-stop shop for all your agricultural needs.</p>
            <p>We provide farmers with the knowledge and resources to:</p>
            <ul>
                <li>Improve crop yields</li>
                <li>Access the latest market information</li>
                <li>Plan for weather events</li>
                <li>Stay informed about the latest agricultural practices</li>
            </ul>
            <a href="#" class="btn">Explore Now</a> <br /><br />


            <p>
                origins of agriculture, the active production of useful plants or animals in ecosystems that have been
                created by people. Agriculture has often been conceptualized narrowly, in terms of specific combinations
                of activities and organisms—wet-rice production in Asia, wheat farming in Europe, cattle ranching in the
                Americas, and the like—but a more holistic perspective holds that humans are environmental engineers who
                disrupt terrestrial habitats in specific ways. Anthropogenic disruptions such as clearing vegetation or
                tilling the soil cause a variety of localized changes; common effects include an increase in the amount
                of light reaching ground level and a reduction in the competition among organisms. As a result, an area
                may produce more of the plants or animals that people desire for food, technology, medicine, and other
                uses. <br /><br />

                Over time, some plants and animals have become domesticated, or dependent on these and other human
                interventions for their long-term propagation or survival. Domestication is a biological process in
                which, under human selection, organisms develop characteristics that increase their utility, as when
                plants provide larger seeds, fruit, or tubers than their wild progenitors. Known as cultigens,
                domesticated plants come from a wide range of families (groups of closely related genera that share a
                common ancestor; see genus). The grass (Poaceae), bean (Fabaceae), and nightshade or potato (Solanaceae)
                families have produced a disproportionately large number of cultigens because they have characteristics
                that are particularly amenable to domestication. <br /><br />

                Domesticated animals tend to have developed from species that are social in the wild and that, like
                plants, could be bred to increase the traits that are advantageous for people. Most domesticated animals
                are more docile than their wild counterparts, and they often produce more meat, wool, or milk as well.
                They have been used for traction, transport, pest control, assistance, and companionship and as a form
                of wealth. Species with abundant domesticated varieties, or breeds, include the dog (Canis lupus
                familiaris), cat (Felis catus), cattle (Bos species), sheep (Ovis species), goat (Capra species), swine
                (Sus species), horse (Equus caballus), chicken (Gallus gallus), and duck and goose (family Anatidae).
                <br /><br />

                Because it is a cultural phenomenon, agriculture has varied considerably across time and space.
                Domesticated plants and animals have been (and continue to be) raised at scales ranging from the
                household to massive commercial operations. This article recognizes the wide range of activities that
                encompass food production and emphasizes the cultural factors leading to the creation of domesticated
                organisms. It discusses some of the research techniques used to discern the origins of agriculture as
                well as the general trajectory of agricultural development in the ancient societies of Southwest Asia,
                the Americas, East Asia, Southeast Asia, the Indian subcontinent, and Europe. For specific techniques of
                habitat alteration and plant propagation, see horticulture. For techniques of animal propagation, see
                livestock farming; poultry farming.<br /><br />
            </p>
            <br><br>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo delectus soluta ipsum, modi tenetur, ipsa
                dolore officiis voluptatibus voluptates odio dicta eveniet tempore perferendis quaerat et, sunt fugiat
                quas quia earum at eos ipsam. Rem autem assumenda eos inventore, repellendus doloribus. Ex sunt illo
                nisi? A nihil nemo aperiam dicta deserunt, blanditiis natus, maxime est laboriosam vero vel illum
                temporibus amet. Qui veniam voluptatibus quam cum, consectetur, odit praesentium quisquam explicabo,
                sequi molestias nisi reiciendis similique voluptatum et soluta aspernatur corrupti. Nihil dignissimos,
                esse adipisci iste vero commodi iure suscipit quod debitis blanditiis soluta repellat, porro incidunt
                maiores saepe itaque.
            </p>
        </main>
    </div> -->




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

                <button type="submit" class="submit-btn">Send Message</button>
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