<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register | CowKino.com</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="../Asset/style/style.css" />
</head>
<body>

    <?php
    include "./header.php";
    ?>

    <main class="login-section">
        <div class="login-container">
            
            <div class="login-image">
                <div class="overlay"></div>
                <div class="content-text">
                    <h2>Join the Largest Cattle Market.</h2>
                    <p>Create an account to start selling your livestock or find the best breeds near you.</p>
                </div>
                <img src="https://images.unsplash.com/photo-1595304958318-7b44e05b1842?q=80&w=1920&auto=format&fit=crop" 
                     alt="Cattle Herd"
                     onerror="this.style.display='none'">
            </div>

            <div class="login-form-wrapper">
                <div class="form-content">
                    <div class="form-header">
                        <h1>Create Account</h1>
                        <p>Join us today! It takes less than a minute.</p>
                    </div>

                    <form id="registerForm"
                    method="POST"
                    action="../controller/createUserController.php"
                    >
                        
                        <div class="input-group">
                            <label for="fullname">Full Name</label>
                            <div class="input-field">
                                <i class="ph ph-user input-icon"></i>
                                <input type="text" id="fullname" name="fullname" placeholder="e.g. Rahim Uddin" required>
                            </div>
                        </div>

                        <div class="input-group">
                            <label for="email">Email Address</label>
                            <div class="input-field">
                                <i class="ph ph-envelope input-icon"></i>
                                <input type="email" id="email" name="email" placeholder="farmer@example.com" required>
                            </div>
                        </div>

                        <div class="input-group">
                            <label for="phone">Phone Number</label>
                            <div class="input-field">
                                <i class="ph ph-phone input-icon"></i>
                                <input type="tel" id="phone" name="phone" placeholder="+880 1XXX XXXXXX" required>
                            </div>
                        </div>

                        <div class="input-group">
                            <label for="password">Password</label>
                            <div class="input-field">
                                <i class="ph ph-lock-key input-icon"></i>
                                <input type="password" id="password" name="password" class="pass-input" required>
                                <i class="ph ph-eye-slash toggle-pass" onclick="toggleOnePass(this, 'password')"></i>
                            </div>
                        </div>

                        <div class="input-group">
                            <label for="confirm-password">Confirm Password</label>
                            <div class="input-field">
                                <i class="ph ph-check-circle input-icon"></i>
                                <input type="password" id="confirm-password" name="confirm_password" class="pass-input" required>
                                <i class="ph ph-eye-slash toggle-pass" onclick="toggleOnePass(this, 'confirm-password')"></i>
                            </div>
                        </div>

                        <div class="form-actions" style="justify-content: flex-start; gap: 0.5rem;">
                            <input type="checkbox" id="terms" required style="width: auto; margin-top: 3px;">
                            <label for="terms" style="font-size: 0.85rem; color: #4B5563; font-weight: 400; margin:0;">
                                I agree to the <a href="#" style="color:var(--primary); font-weight:600;">Terms & Privacy</a>
                            </label>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary btn-full btn-lg">Create Account</button>

                        <p class="signup-link">Already have an account? <a href="login.html">Log In</a></p>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container footer-content">
            <div class="footer-col brand-col">
                <a href="#" class="footer-logo">
                    <i class="ph-fill ph-cow"></i> CowKino<span class="highlight">.com</span>
                </a>
                <p>Connecting farms, creating value. The trusted platform for buying and selling livestock securely.</p>
            </div>
            <div class="footer-col links-col">
                <h4>Quick Links</h4>
                <div class="footer-nav">
                    <a href="#">Home</a>
                    <a href="#about">About Us</a>
                    <a href="#market">Marketplace</a>
                    <a href="#contact">Contact</a>
                    <a href="#">Privacy Policy</a>
                </div>
            </div>
            <div class="footer-col social-col">
                <h4>Follow Us</h4>
                <div class="socials">
                    <a href="#" aria-label="Facebook"><i class="ph ph-facebook-logo"></i></a>
                    <a href="#" aria-label="Twitter"><i class="ph ph-twitter-logo"></i></a>
                    <a href="#" aria-label="Instagram"><i class="ph ph-instagram-logo"></i></a>
                    <a href="#" aria-label="YouTube"><i class="ph ph-youtube-logo"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 CowKino. All rights reserved.</p>
        </div>
    </footer>

    <script src="/Asset/Js/script.js"></script>
    <script>
        // Simple function to toggle password visibility for specific inputs
        function toggleOnePass(icon, inputId) {
            const input = document.getElementById(inputId);
            const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
            input.setAttribute('type', type);
            
            // Toggle Icon Class
            if(type === 'text') {
                icon.classList.remove('ph-eye-slash');
                icon.classList.add('ph-eye');
            } else {
                icon.classList.remove('ph-eye');
                icon.classList.add('ph-eye-slash');
            }
        }
    </script>
</body>
</html>