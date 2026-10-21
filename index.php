<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBSC Student Information System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header Title Area -->
    <div class="system-header">
        <p class="institution-name">Northern Bukidnon State College</p>
        <h1 class="system-title">Book Borrowing System</h1>
    </div>

    <!-- Card Container -->
    <div class="card-container">

        <!-- Login Form -->
        <form id="loginForm" class="auth-form active" action="login.php" method="POST">
            <div class="input-group">
                <label for="login-id">Student ID</label>
                <input type="text" id="login-id" name="username" required placeholder="Enter your Student ID">
            </div>

            <div class="input-group">
                <label for="login-pass">Password</label>
                <input type="password" id="login-pass" name="password" required placeholder="Enter your password">
            </div>

            <button type="submit" class="univ-btn">Login</button>

            <p class="switch-prompt">
                Don't have an account? <a href="#" onclick="showForm('register'); return false;">Register here</a>
            </p>
        </form>

        <!-- Register Form -->
        <form id="registerForm" class="auth-form" action="register.php" method="POST">
            <div class="input-group">
                <label for="reg-id">Student ID / Username</label>
                <input type="text" id="reg-id" name="username" required placeholder="Enter your Student ID">
            </div>

            <div class="input-group">
                <label for="reg-email">Institutional Email</label>
                <input type="email" id="reg-email" name="email" required placeholder="student@nbsc.edu.ph">
            </div>

            <div class="input-group">
                <label for="reg-pass">Password</label>
                <input type="password" id="reg-pass" name="password" required placeholder="Create password">
            </div>

            <button type="submit" class="univ-btn reg-btn">Register Student Account</button>

            <p class="switch-prompt">
                Already registered? <a href="#" onclick="showForm('login'); return false;">Login here</a>
            </p>
        </form>

    </div>

    <script>
        function showForm(formType) {
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');

            if (formType === 'register') {
                loginForm.classList.remove('active');
                registerForm.classList.add('active');
            } else {
                registerForm.classList.remove('active');
                loginForm.classList.add('active');
            }
        }
    </script>

</body>
</html>