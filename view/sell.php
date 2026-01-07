<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
  header('location: login.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sell Your Cow | CowKino.com</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="../Asset//style/style.css" />
</head>
<body>
    <?php
    include "./header.php";
    ?>
    <main class="login-section">
        <div class="login-container">
            
            <div class="login-image sell-image-side">
                <div class="overlay"></div>
                <div class="content-text">
                    <h2>Get the Best Price.</h2>
                    <p>Reach thousands of buyers instantly.</p>
                    
                    <ul class="sell-tips">
                        <li><i class="ph-fill ph-check-circle"></i> Upload clear photos</li>
                        <li><i class="ph-fill ph-check-circle"></i> State the correct weight</li>
                        <li><i class="ph-fill ph-check-circle"></i> Verify vaccination history</li>
                    </ul>
                </div>
                <img src="https://images.unsplash.com/photo-1596733430284-f7437764b1a9?q=80&w=1920&auto=format&fit=crop" 
                     alt="Farmer with Cow"
                     onerror="this.style.display='none'">
            </div>

            <div class="login-form-wrapper">
                <div class="form-content" style="max-width: 450px;">
                    <div class="form-header">
                        <h1>List Your Cattle</h1>
                        <p>Fill in the details below to post your ad.</p>
                    </div>

                    <form id="sellForm">
                        
                        <div class="input-group">
                            <label for="cowName">Cow Name / Title</label>
                            <div class="input-field">
                                <i class="ph ph-tag input-icon"></i>
                                <input type="text" id="cowName" placeholder="e.g. Healthy Australian Friesian" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="input-group">
                                <label for="breed">Breed</label>
                                <div class="input-field">
                                    <i class="ph ph-paw-print input-icon"></i>
                                    <select id="breed" required>
                                        <option value="" disabled selected>Select Breed</option>
                                        <option value="Holstein">Holstein Friesian</option>
                                        <option value="Brahman">Brahman</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Sahiwal">Sahiwal</option>
                                        <option value="RedChittagong">Red Chittagong</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <i class="ph ph-caret-down select-arrow"></i>
                                </div>
                            </div>

                            <div class="input-group">
                                <label for="price">Price (USD)</label>
                                <div class="input-field">
                                    <i class="ph ph-currency-dollar input-icon"></i>
                                    <input type="number" id="price" placeholder="1200" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="input-group">
                                <label>Weight (kg)</label>
                                <div class="input-field">
                                    <input type="number" placeholder="450" style="padding-left: 1rem;">
                                </div>
                            </div>
                            <div class="input-group">
                                <label>Age (Yrs)</label>
                                <div class="input-field">
                                    <input type="number" placeholder="3.5" step="0.1" style="padding-left: 1rem;">
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <label>Upload Photos</label>
                            <div class="file-upload-box">
                                <input type="file" id="cowImage" accept="image/*" multiple hidden>
                                <div class="upload-content" onclick="document.getElementById('cowImage').click()">
                                    <i class="ph ph-cloud-arrow-up"></i>
                                    <p>Click to upload or drag images here</p>
                                    <span>Max 5MB per image</span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <label for="description">Description (Optional)</label>
                            <textarea id="description" rows="3" placeholder="Describe health, food habits, location..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-full btn-lg">Post Ad Now</button>

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
</body>
</html>