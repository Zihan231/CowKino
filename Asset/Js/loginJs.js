document.addEventListener('DOMContentLoaded', () => {
    // --- Existing Navbar Code Here ---


    // =========================================
    // Login Page Functionality
    // =========================================
    
    const togglePasswordBtn = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    const loginForm = document.getElementById('loginForm');

    // 1. Password Visibility Toggle
    // Only run if elements exist (so it doesn't error on the homepage)
    if (togglePasswordBtn && passwordInput) {
        togglePasswordBtn.addEventListener('click', () => {
            // Check current type
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            // Toggle eye icon styles
            togglePasswordBtn.classList.toggle('ph-eye-slash');
            togglePasswordBtn.classList.toggle('ph-eye');
        });
    }

    // 2. Prevent default form submission for demo
    if (loginForm) {
        loginForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const email = document.getElementById('email').value;
            // In a real app, send this data to backend
            alert(`Demo Login Attempt for: ${email}\n(Backend integration needed)`);
            console.log("Logging in...");
        });
    }
});