// === Load Navbar and Attach Toggle Logic ===
fetch('/assets/helper/navbar.html')
  .then(res => res.text())
  .then(data => {
    document.getElementById('navbar').innerHTML = data;

    // Wait for DOM to update with injected navbar
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');
    const icon = menuToggle.querySelector('i');

    // Toggle menu on button click
    menuToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      menuToggle.classList.toggle('open');

      // Switch icon
      if (menuToggle.classList.contains('open')) {
        icon.classList.remove('fa-bars');
        icon.classList.add('fa-times');
      } else {
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
      }
    });

    // Close menu when a link is clicked
    navLinks.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        navLinks.classList.remove('active');
        menuToggle.classList.remove('open');
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
      });
    });
  });

// === Load Footer ===
fetch('assets/helper/footer.html')
  .then(res => res.text())
  .then(data => {
    document.getElementById('footer').innerHTML = data;
  });
