<?php include 'config.php'; ?>
<?php include 'header.php'; ?>

<div class="container">
    <h2 class="text-center">Register</h2>
    <div class="form-section">
        <form id="registerForm" enctype="multipart/form-data">
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="regEmail">Email Address</label>
                <input type="email" class="form-control" id="regEmail" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="phoneNumber">Phone Number</label>
                <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" id="dob" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" placeholder="Enter your address" required></textarea>
            </div>
            <div class="form-group">
                <label for="profilePicture">Profile Picture</label>
                <input type="file" class="form-control" id="profilePicture" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="regPassword">Password</label>
                <input type="password" class="form-control" id="regPassword" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </form>
    </div>
    <div class="text-center">
        <a href="index.php">Back to Home</a>
    </div>
</div>

<script>
document.getElementById('registerForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent form submission

    const fullName = document.getElementById('fullName').value;
    const email = document.getElementById('regEmail').value;
    const phoneNumber = document.getElementById('phoneNumber').value;
    const dob = document.getElementById('dob').value;
    const address = document.getElementById('address').value;
    const password = document.getElementById('regPassword').value;
    const profilePicture = document.getElementById('profilePicture').files[0];

    // Create a FileReader to read the profile picture
    const reader = new FileReader();
    reader.onloadend = function () {
        // Save to local storage including profile picture data
        localStorage.setItem('userData', JSON.stringify({
            fullName,
            email,
            phoneNumber,
            dob,
            address,
            password,
            profilePicture: reader.result // Base64 string of the image
        }));
    };

    if (profilePicture) {
        reader.readAsDataURL(profilePicture); // Convert image to base64 string
        alert('Registration successful! You can now log in.');
        // Optionally redirect to login
        window.location.href = 'login.php';
    }
});
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
