<?php include 'config.php'; ?>
<?php include 'header.php'; ?>

<div class="container">
    <h2 class="text-center">Login</h2>
    <div class="form-section">
        <form id="loginForm">
            <div class="form-group">
                <label for="loginEmail">Email Address</label>
                <input type="email" class="form-control" id="loginEmail" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="loginPassword">Password</label>
                <input type="password" class="form-control" id="loginPassword" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <div id="loginMessage" class="alert alert-info mt-3" style="display: none;"></div>
    </div>
    <div class="text-center">
        <a href="index.php">Back to Home</a>
    </div>
</div>

<script>
document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent form submission
    
    const email = document.getElementById('loginEmail').value;
    const password = document.getElementById('loginPassword').value;
    
    // Retrieve user data from local storage
    const userData = JSON.parse(localStorage.getItem('userData'));
    
    // Validate login
    if (userData && userData.email === email && userData.password === password) {
        // Display success message
        const messageDiv = document.getElementById('loginMessage');
        messageDiv.innerText = 'Login successful! Redirecting to your profile...';
        messageDiv.style.display = 'block';

        // Redirect to profile after 2 seconds
        setTimeout(() => {
            window.location.href = 'profile.php';
        }, 2000);
    } else {
        alert('Invalid email or password.');
    }
});
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
