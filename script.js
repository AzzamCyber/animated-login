// Initialize AOS
AOS.init({
    duration: 1000,
    once: false,
    mirror: true
});

// Switch to Register Form
function switchToRegister() {
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');
    
    // Slide out login form
    loginForm.classList.add('form-slide-out-left');
    
    setTimeout(() => {
        loginForm.classList.add('hidden-form');
        loginForm.classList.remove('form-slide-out-left');
        
        // Show register form
        registerForm.classList.remove('hidden-form');
        registerForm.classList.add('form-slide-in-right');
        
        // Re-initialize AOS for register form
        AOS.refresh();
        
        setTimeout(() => {
            registerForm.classList.remove('form-slide-in-right');
        }, 600);
    }, 600);
}

// Switch to Login Form
function switchToLogin() {
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');
    
    // Slide out register form
    registerForm.classList.add('form-slide-out-right');
    
    setTimeout(() => {
        registerForm.classList.add('hidden-form');
        registerForm.classList.remove('form-slide-out-right');
        
        // Show login form
        loginForm.classList.remove('hidden-form');
        loginForm.classList.add('form-slide-in-left');
        
        // Re-initialize AOS for login form
        AOS.refresh();
        
        setTimeout(() => {
            loginForm.classList.remove('form-slide-in-left');
        }, 600);
    }, 600);
}

// Form Validation for Register
document.querySelector('#registerForm form').addEventListener('submit', function(e) {
    const password = this.querySelector('input[name="password"]').value;
    const confirmPassword = this.querySelector('input[name="confirm_password"]').value;
    
    if (password !== confirmPassword) {
        e.preventDefault();
        alert('Password dan Konfirmasi Password tidak sama!');
    }
});

// Add ripple effect on button click (CSS part is missing for .ripple, so this might not work visually without adding ripple CSS)
document.querySelectorAll('.btn-primary').forEach(button => {
    button.addEventListener('click', function(e) {
        const ripple = document.createElement('span');
        const rect = this.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = e.clientX - rect.left - size / 2;
        const y = e.clientY - rect.top - size / 2;
        
        ripple.style.width = ripple.style.height = size + 'px';
        ripple.style.left = x + 'px';
        ripple.style.top = y + 'px';
        
        // You would need a CSS class for .ripple, e.g., for animation
        // ripple.classList.add('ripple'); 
        
        this.appendChild(ripple);
        
        setTimeout(() => ripple.remove(), 600);
    });
});
