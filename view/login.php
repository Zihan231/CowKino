<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | CowKino.com</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:wght@600;700;800&display=swap"
      rel="stylesheet"
    />
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
            <h2>Welcome back to the farm.</h2>
            <p>Track your cattle sales and connect with buyers instantly.</p>
          </div>
          <img
            src="https://images.stockcake.com/public/1/7/d/17d3ac65-91b4-48c0-83c0-b97528deaf6d_large/cow-eating-grass-stockcake.jpg"
            alt="Cow Grazing"
            onerror="this.style.display='none'"
          />
        </div>

        <div class="login-form-wrapper">
          <div class="form-content">
            <div class="form-header">
              <h1>Sign In</h1>
              <p>Enter your details to access your account.</p>
            </div>

            <form id="loginForm">
              <div class="input-group">
                <label for="email">Email Address</label>
                <div class="input-field">
                  <i class="ph ph-envelope input-icon"></i>
                  <input
                    type="email"
                    id="email"
                    placeholder="farmer@example.com"
                    required
                  />
                </div>
              </div>

              <div class="input-group">
                <label for="password">Password</label>
                <div class="input-field">
                  <i class="ph ph-lock-key input-icon"></i>
                  <input
                    type="password"
                    id="password"
                    placeholder="••••••••"
                    required
                  />
                  <i
                    class="ph ph-eye-slash toggle-pass"
                    id="togglePassword"
                  ></i>
                </div>
              </div>

              <div class="form-actions">
                <label class="remember-me">
                  <input type="checkbox" /> <span>Remember me</span>
                </label>
                <a href="#" class="forgot-pass">Forgot Password?</a>
              </div>

              <button type="submit" class="btn btn-primary btn-full btn-lg">
                Sign In
              </button>

              <div class="divider"><span>Or continue with</span></div>
              <div class="social-btns">
                <button type="button" class="social-btn">
                  <i class="ph-bold ph-google-logo"></i> Google
                </button>
                <button type="button" class="social-btn">
                  <i class="ph-bold ph-facebook-logo"></i> Facebook
                </button>
              </div>

              <p class="signup-link">
                Don't have an account? <a href="#">Register here</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </main>

    <footer class="footer">
      <div class="container footer-content">
        <div class="footer-col brand-col">
          <a href="#" class="footer-logo">
            <i class="ph-fill ph-cow"></i> CowKino<span class="highlight"
              >.com</span
            >
          </a>
          <p>
            Connecting farms, creating value. The trusted platform for buying
            and selling livestock securely.
          </p>
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
            <a href="#" aria-label="Facebook"
              ><i class="ph ph-facebook-logo"></i
            ></a>
            <a href="#" aria-label="Twitter"
              ><i class="ph ph-twitter-logo"></i
            ></a>
            <a href="#" aria-label="Instagram"
              ><i class="ph ph-instagram-logo"></i
            ></a>
            <a href="#" aria-label="YouTube"
              ><i class="ph ph-youtube-logo"></i
            ></a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 CowKino. All rights reserved.</p>
      </div>
    </footer>

    <script src="/Asset/Js/script.js"></script>
    <script>
      // Inline script for password toggle specific to this page
      const toggleBtn = document.getElementById("togglePassword");
      const passInput = document.getElementById("password");
      if (toggleBtn) {
        toggleBtn.addEventListener("click", () => {
          const type =
            passInput.getAttribute("type") === "password" ? "text" : "password";
          passInput.setAttribute("type", type);
          toggleBtn.classList.toggle("ph-eye-slash");
          toggleBtn.classList.toggle("ph-eye");
        });
      }
    </script>
  </body>
</html>
