// Modal Logic
const messageBtn = document.getElementById("messengerBtn");
const messageModal = document.getElementById("messageModal");
const closeModalBtn = document.getElementById("closeModalBtn");
const messageForm = document.getElementById("messageForm");

// Open Modal
messageBtn.addEventListener("click", () => {
  messageModal.style.display = "block";
});

// Close Modal
closeModalBtn.addEventListener("click", () => {
  messageModal.style.display = "none";
});

// Close Modal when clicking outside
window.addEventListener("click", (event) => {
  if (event.target === messageModal) {
    messageModal.style.display = "none";
  }
});


// Form Submission
messageForm.addEventListener("submit", (event) => {
  event.preventDefault();

  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const message = document.getElementById("message").value;

  // Send data to PHP using Fetch API
  // Messages/send_msg.php
  fetch("Messages/send_msg.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded"
    },
    body: `name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&message=${encodeURIComponent(message)}`
  })
  .then(response => response.text())
  .then(data => {
    alert(data); // Show server response
    messageModal.style.display = "none";
    messageForm.reset();
  })
  .catch(error => {
    console.error("Error:", error);
    alert("An error occurred while submitting the form.");
  });
});
