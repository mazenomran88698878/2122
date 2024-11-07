<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Authentication</title>
    <script src="https://kit.fontawesome.com/9e5ba2e3f5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/auth.css">
</head>
<body>
    <div class="wrapper">
    <!-- Left Side (Image) -->
    <div class="left-side">        
        <!-- Movie Title Animation -->
        <div class="movie-titles">
            Welcome to Our Movie! Check Out the Latest Releases!
        </div>

        <!-- Social Media Icons -->
        <div class="social-icons">
            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>

    <!-- Right Side (Form Area) -->
    <div class="right-side">
        <!-- Form container code here -->
    </div>
</div>


        <!-- Right Side (Forms) -->
        <div class="right-side">
            <!-- Login Form -->
            <div class="form-container" id="login">
                <form method="POST" action="">
                    <h2>Login</h2>
                    <div class="form-group">
    <i class="fas fa-envelope"></i>
    <input type="email" id="email" name="email" required>
    <label for="email">Email</label>
</div>
                    <div class="form-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <div class="forgot-pass">
                        <a href="#" onclick="toggleForm('reset')">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn">Login</button>
                    <div class="link">
                        <p>Don't have an account? <a href="#" onclick="toggleForm('register')">Register</a></p>
                    </div>
                </form>
            </div>

            <!-- Register Form -->
            <div class="form-container" id="register">
                <form method="POST" action="">
                    <h2>Register</h2>
                    <div class="form-group">
                        <i class="fas fa-user"></i>
                        <input type="text" name="first_name" required>
                        <label>First Name</label>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-user"></i>
                        <input type="text" name="last_name" required>
                        <label>Last Name</label>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-phone"></i>
                        <input type="text" name="phone" required>
                        <label>Phone Number</label>
                    </div>
                    <!-- Security Question Dropdown -->
                    <div class="form-group">
                        <i class="fas fa-question-circle"></i>
                        <select name="security_question" id="security_question" required>
                            <option value="" disabled selected>Select Security Question</option>
                            <option value="favorite_movie">What is your favorite movie?</option>
                            <option value="first_car">What was the name of your first car?</option>
                            <option value="birth_place">Where were you born?</option>
                            <option value="first_school">What is the name of your first school?</option>
                            <option value="favorite_food">What is your favorite food?</option>
                        </select>
                    </div>

                    <!-- Security Answer Dropdown -->
                    <div class="form-group">
                        <i class="fas fa-lock"></i>
                        <select name="security_answer" id="security_answer" required>
                            <option value="" disabled selected>Select Answer</option>
                            <!-- Answer options will be populated dynamically based on the selected question -->
                        </select>
                    </div>
                    <button type="submit" class="btn">Register</button>
                    <div class="link">
                        <p>Already have an account? <a href="#" onclick="toggleForm('login')">Login</a></p>
                    </div>
                </form>
            </div>

            <!-- Reset Password Form -->
            <div class="form-container" id="reset">
                <form method="POST" action="">
                    <h2>Reset Password</h2>
                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-lock"></i>
                        <input type="text" name="security_answer" required>
                        <label>Security Answer</label>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="new_password" required>
                        <label>New Password</label>
                    </div>
                    <button type="submit" class="btn">Reset Password</button>
                    <div class="link">
                        <p>Remembered your password? <a href="#" onclick="toggleForm('login')">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/auth.js"></script>
</body>
</html>
