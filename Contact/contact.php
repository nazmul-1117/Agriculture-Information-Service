<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/logo/favicon.ico" type="image/x-icon">
    <title>Contact Us - Agriculture Information Service</title>
    
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/css/contact.css">
</head>
<body>
    <header>
        <!-- <nav>
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="crops.html">Crops Information</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav> -->
        <?php include '../header.php'; ?>

    </header>

    <main>
        <section class="contact">
            <h1>Contact Us</h1>
            <p>If you have any questions or need assistance, please feel free to reach out to us. We are here to help!</p>

            <div class="contact-details">
                <div class="detail">
                    <h3>Phone</h3>
                    <p>+880 1743-886186</p>
                </div>
                <div class="detail">
                    <h3>Email</h3>
                    <p><a href="223002080@student.green.ac.bd">223002080@student.green.ac.bd</a></p>
                    <p><a href="223002088@student.green.ac.bd">223002088@student.green.ac.bd</a></p>
                    <p><a href="223002089@student.green.ac.bd">223002089@student.green.ac.bd</a></p>
                    <p><a href="223002157@student.green.ac.bd">223002157@student.green.ac.bd</a></p>
                </div>
                <address class="detail">
                    <h3>Address</h3>
                    <p>Kanchan, Rupganj, Narayanganj-1461, Dhaka, Bangladesh</p>
                </address>
            </div>

            <h2>You Can Direct Message Us</h2>

            <form class="contact-form" action="submit_contact.php" method="POST">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                </div>

                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Enter the subject" required>
                </div>

                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Write your message" required></textarea>
                </div>

                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Agriculture Information Service. All rights reserved.</p>
    </footer>
</body>
</html>
