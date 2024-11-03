<?php include 'config.php'; ?>
<?php include 'header.php'; ?>

<div class="container">
    <h2 class="text-center">User Profile</h2>
    <div class="form-section">
        <h4>Profile Information</h4>
        <div id="profileInfo"></div>
    </div>
    <div class="text-center">
        <a href="index.php" class="btn btn-primary">Back to Home</a>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</div>

<script>
    // Retrieve user data from local storage
    const userData = JSON.parse(localStorage.getItem('userData'));

    if (userData) {
        // Create profile information elements
        const profileInfoDiv = document.getElementById('profileInfo');
        profileInfoDiv.innerHTML = `
            <p><strong>Full Name:</strong> ${userData.fullName}</p>
            <p><strong>Email:</strong> ${userData.email}</p>
            <p><strong>Phone Number:</strong> ${userData.phoneNumber}</p>
            <p><strong>Date of Birth:</strong> ${userData.dob}</p>
            <p><strong>Address:</strong> ${userData.address}</p>
            <p><strong>Profile Picture:</strong><br><img src="${userData.profilePicture}" alt="Profile Picture" class="img-fluid rounded-circle" style="max-width: 150px;"></p>
        `;
    } else {
        profileInfoDiv.innerHTML = `<p>No user data found. Please <a href="login.php">login</a>.</p>`;
    }
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
