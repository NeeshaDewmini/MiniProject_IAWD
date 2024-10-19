




document.getElementById('loginForm').addEventListener('submit', function(e) {
  e.preventDefault();  // Prevent form from submitting

  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  // Check if the credentials are correct
  if (email === 'gamezone@gmail.com' && password === '123') {
    // Redirect to admin.html if credentials are correct
    window.location.href = '/GZ[1]/index.php';
  } else {
    // Display error message if credentials are incorrect
    document.getElementById('error-message').style.display = 'block';
  }
});

// Handle "Go Back" button redirect to HomePage.html
document.getElementById('goBackButton').addEventListener('click', function() {
  window.location.href = '/GZ[1]/HomePage.php';
});
