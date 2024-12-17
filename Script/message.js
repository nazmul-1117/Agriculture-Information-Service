
//add child form on main window

const messengerBtn = document.getElementById('messengerBtn');
const modal = document.createElement('div');

modal.classList.add('modal');
modal.innerHTML = `
    <div class="modal-content">
        <span class="close">&times;</span>

        <h2>Contact Us</h2>
        <form id="messageForm" action="send_msg.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit" class="btn">Send Message</button>
        </form>
    </div>
`;

document.body.appendChild(modal);

const span = document.getElementsByClassName("close")[0];
span.onclick = function() {
    modal.style.display = "none";
}

messengerBtn.addEventListener('click', () => {
    modal.style.display = "block";
});

modal.style.display = "none";

// Handle form submission (using AJAX or Fetch API)

// const messageForm = document.getElementById('messageForm');

// messageForm.addEventListener('submit', (event) => {
//     event.preventDefault(); 

//     const message = document.getElementById('message').value;

//     // Send data to server (using AJAX or Fetch API)
//     fetch('send_msg.php', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/x-www-form-urlencoded' 
//         },
//         body: `message=${encodeURIComponent(message)}` 
//     })
//     .then(response => response.text())
//     .then(data => {
//         console.log(data); // Handle server response (e.g., success/error message)
//         modal.style.display = "none"; 
//         // Optionally, display a success message to the user
//     })
//     .catch(error => {
//         console.error('Error:', error);
//     });
// });




// Reset form
document.getElementById('messageForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission
    this.reset(); 
    // alert("Form submitted and reset!"); 
  });