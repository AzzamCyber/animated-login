<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register - Modern Design</title>
    
    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        
        /* Background Animation */
        .animated-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            position: relative;
            overflow: hidden;
        }
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        /* Floating Particles */
        .particle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 20s infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) translateX(0) rotate(0deg); }
            25% { transform: translateY(-100px) translateX(50px) rotate(90deg); }
            50% { transform: translateY(-200px) translateX(-50px) rotate(180deg); }
            75% { transform: translateY(-100px) translateX(-100px) rotate(270deg); }
        }
        
        .particle:nth-child(1) { width: 80px; height: 80px; top: 10%; left: 10%; animation-delay: 0s; }
        .particle:nth-child(2) { width: 60px; height: 60px; top: 20%; right: 20%; animation-delay: 2s; }
        .particle:nth-child(3) { width: 100px; height: 100px; bottom: 20%; left: 15%; animation-delay: 4s; }
        .particle:nth-child(4) { width: 50px; height: 50px; bottom: 30%; right: 10%; animation-delay: 6s; }
        .particle:nth-child(5) { width: 70px; height: 70px; top: 50%; left: 30%; animation-delay: 8s; }
        .particle:nth-child(6) { width: 90px; height: 90px; top: 40%; right: 30%; animation-delay: 10s; }
        
        /* Glassmorphism */
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }
        
        /* Form Container Animation */
        .form-container {
            transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }
        
        .form-slide-out-left {
            animation: slideOutLeft 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards;
        }
        
        .form-slide-in-right {
            animation: slideInRight 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards;
        }
        
        .form-slide-out-right {
            animation: slideOutRight 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards;
        }
        
        .form-slide-in-left {
            animation: slideInLeft 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards;
        }
        
        @keyframes slideOutLeft {
            0% { transform: translateX(0) rotateY(0deg); opacity: 1; }
            100% { transform: translateX(-100%) rotateY(-90deg); opacity: 0; }
        }
        
        @keyframes slideInRight {
            0% { transform: translateX(100%) rotateY(90deg); opacity: 0; }
            100% { transform: translateX(0) rotateY(0deg); opacity: 1; }
        }
        
        @keyframes slideOutRight {
            0% { transform: translateX(0) rotateY(0deg); opacity: 1; }
            100% { transform: translateX(100%) rotateY(90deg); opacity: 0; }
        }
        
        @keyframes slideInLeft {
            0% { transform: translateX(-100%) rotateY(-90deg); opacity: 0; }
            100% { transform: translateX(0) rotateY(0deg); opacity: 1; }
        }
        
        /* Input Focus Animation */
        .input-field {
            transition: all 0.3s ease;
        }
        
        .input-field:focus {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(138, 43, 226, 0.3);
        }
        
        /* Button Hover Effect */
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary:before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }
        
        .btn-primary:hover:before {
            width: 300px;
            height: 300px;
        }
        
        .btn-primary:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 35px rgba(138, 43, 226, 0.5);
        }
        
        /* Pulse Glow Effect */
        @keyframes pulseGlow {
            0%, 100% {
                box-shadow: 0 0 20px rgba(138, 43, 226, 0.5),
                            0 0 40px rgba(138, 43, 226, 0.3),
                            0 0 60px rgba(138, 43, 226, 0.2);
            }
            50% {
                box-shadow: 0 0 30px rgba(138, 43, 226, 0.7),
                            0 0 60px rgba(138, 43, 226, 0.5),
                            0 0 90px rgba(138, 43, 226, 0.3);
            }
        }
        
        .btn-primary:hover {
            animation: pulseGlow 2s infinite;
        }
        
        /* Icon Animation */
        .icon-bounce {
            animation: bounce 2s infinite, rotate360 10s linear infinite;
        }
        
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        @keyframes rotate360 {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Floating Animation for Icons */
        .float-animation {
            animation: floatUpDown 3s ease-in-out infinite;
        }
        
        @keyframes floatUpDown {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }
        
        /* Shake Animation */
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }
        
        /* Scale Pulse Animation */
        @keyframes scalePulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        /* Gradient Text Animation */
        .gradient-text {
            background: linear-gradient(90deg, #fff, #f093fb, #fff, #667eea, #fff);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradientText 3s linear infinite;
        }
        
        @keyframes gradientText {
            0% { background-position: 0% center; }
            100% { background-position: 200% center; }
        }
        
        /* Neon Glow Effect */
        .neon-glow {
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.8),
                         0 0 20px rgba(255, 255, 255, 0.6),
                         0 0 30px rgba(138, 43, 226, 0.6),
                         0 0 40px rgba(138, 43, 226, 0.4);
            animation: neonFlicker 2s infinite alternate;
        }
        
        @keyframes neonFlicker {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }
        
        /* Card Hover Effect */
        .form-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 50px rgba(138, 43, 226, 0.4);
        }
        
        /* Hide/Show Forms */
        .hidden-form {
            display: none;
        }
        
        /* Loading Spinner */
        .spinner {
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-top: 3px solid white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Responsive */
        @media (max-width: 640px) {
            .glass-effect {
                backdrop-filter: blur(15px);
                -webkit-backdrop-filter: blur(15px);
            }
        }
    </style>
</head>
<body>
    <div class="animated-bg min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <!-- Floating Particles -->
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        
        <!-- Main Container -->
        <div class="w-full max-w-md relative z-10">
            
            <!-- LOGIN FORM -->
            <div id="loginForm" class="form-container glass-effect rounded-3xl p-8 sm:p-10 shadow-2xl" data-aos="fade-up" data-aos-duration="1000">
                <!-- Logo/Icon -->
                <div class="text-center mb-8">
                    <div class="inline-block p-4 bg-white bg-opacity-20 rounded-full mb-4 float-animation">
                        <i class="fas fa-rocket text-5xl text-white neon-glow"></i>
                    </div>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white mb-3 sm:mb-4 text-center sm:text-left gradient-text tracking-tight leading-snug" data-aos="fade-down">
  Selamat Datang! 👋
</h2>
                    <p class="text-white text-opacity-80 text-sm sm:text-base">Masuk untuk melanjutkan perjalananmu</p>
                </div>
                
                <!-- Login Form -->
                <form action="process_login.php" method="POST" class="space-y-6">
                    <!-- Email Input -->
                    <div data-aos="fade-right" data-aos-delay="100">
                        <label class="block text-white text-sm font-medium mb-2">
                            <i class="fas fa-envelope mr-2"></i>Email
                        </label>
                        <input type="email" name="email" required 
                               class="input-field w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl text-white placeholder-white placeholder-opacity-60 focus:outline-none focus:border-white focus:border-opacity-50"
                               placeholder="nama@email.com">
                    </div>
                    
                    <!-- Password Input -->
                    <div data-aos="fade-right" data-aos-delay="200">
                        <label class="block text-white text-sm font-medium mb-2">
                            <i class="fas fa-lock mr-2"></i>Password
                        </label>
                        <input type="password" name="password" required 
                               class="input-field w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl text-white placeholder-white placeholder-opacity-60 focus:outline-none focus:border-white focus:border-opacity-50"
                               placeholder="••••••••">
                    </div>
                    
                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between text-sm" data-aos="fade-up" data-aos-delay="300">
                        <label class="flex items-center text-white cursor-pointer">
                            <input type="checkbox" class="mr-2 rounded">
                            <span>Ingat saya</span>
                        </label>
                        <a href="#" class="text-white hover:text-opacity-80 transition">Lupa password?</a>
                    </div>
                    
                    <!-- Login Button -->
                    <button type="submit" 
                            class="btn-primary w-full py-3 px-6 text-white font-semibold rounded-xl focus:outline-none relative z-10"
                            data-aos="zoom-in" data-aos-delay="400">
                        <span class="relative z-10">Masuk Sekarang <i class="fas fa-arrow-right ml-2"></i></span>
                    </button>
                </form>
                
                <!-- Divider -->
                <div class="relative my-8" data-aos="fade-up" data-aos-delay="500">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-white border-opacity-30"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-transparent text-white text-opacity-80">atau masuk dengan</span>
                    </div>
                </div>
                
                <!-- Social Login -->
                <div class="grid grid-cols-3 gap-4" data-aos="fade-up" data-aos-delay="600">
                    <button class="py-3 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-xl transition transform hover:scale-105 hover:rotate-6">
                        <i class="fab fa-google text-white text-xl"></i>
                    </button>
                    <button class="py-3 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-xl transition transform hover:scale-105 hover:rotate-6">
                        <i class="fab fa-facebook text-white text-xl"></i>
                    </button>
                    <button class="py-3 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-xl transition transform hover:scale-105 hover:rotate-6">
                        <i class="fab fa-github text-white text-xl"></i>
                    </button>
                </div>
                
                <!-- Register Link -->
                <p class="text-center text-white text-sm mt-8" data-aos="fade-up" data-aos-delay="700">
                    Belum punya akun? 
                    <button onclick="switchToRegister()" class="font-semibold hover:text-opacity-80 transition underline">
                        Daftar sekarang <i class="fas fa-user-plus ml-1"></i>
                    </button>
                </p>
            </div>
            
            <!-- REGISTER FORM -->
            <div id="registerForm" class="form-container glass-effect rounded-3xl p-8 sm:p-10 shadow-2xl hidden-form">
                <!-- Logo/Icon -->
                <div class="text-center mb-8">
                    <div class="inline-block p-4 bg-white bg-opacity-20 rounded-full mb-4 float-animation">
                        <i class="fas fa-user-astronaut text-5xl text-white neon-glow"></i>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-bold text-white mb-2 gradient-text">Bergabunglah! 🚀</h2>
                    <p class="text-white text-opacity-80 text-sm sm:text-base">Buat akun dan mulai petualanganmu</p>
                </div>
                
                <!-- Register Form -->
                <form action="process_register.php" method="POST" class="space-y-5">
                    <!-- Name Input -->
                    <div data-aos="fade-left" data-aos-delay="100">
                        <label class="block text-white text-sm font-medium mb-2">
                            <i class="fas fa-user mr-2"></i>Nama Lengkap
                        </label>
                        <input type="text" name="nama" required 
                               class="input-field w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl text-white placeholder-white placeholder-opacity-60 focus:outline-none focus:border-white focus:border-opacity-50"
                               placeholder="Azzam">
                    </div>
                    
                    <!-- Email Input -->
                    <div data-aos="fade-left" data-aos-delay="200">
                        <label class="block text-white text-sm font-medium mb-2">
                            <i class="fas fa-envelope mr-2"></i>Email
                        </label>
                        <input type="email" name="email" required 
                               class="input-field w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl text-white placeholder-white placeholder-opacity-60 focus:outline-none focus:border-white focus:border-opacity-50"
                               placeholder="nama@email.com">
                    </div>
                    
                    <!-- Password Input -->
                    <div data-aos="fade-left" data-aos-delay="300">
                        <label class="block text-white text-sm font-medium mb-2">
                            <i class="fas fa-lock mr-2"></i>Password
                        </label>
                        <input type="password" name="password" required 
                               class="input-field w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl text-white placeholder-white placeholder-opacity-60 focus:outline-none focus:border-white focus:border-opacity-50"
                               placeholder="••••••••">
                    </div>
                    
                    <!-- Confirm Password Input -->
                    <div data-aos="fade-left" data-aos-delay="400">
                        <label class="block text-white text-sm font-medium mb-2">
                            <i class="fas fa-lock mr-2"></i>Konfirmasi Password
                        </label>
                        <input type="password" name="confirm_password" required 
                               class="input-field w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl text-white placeholder-white placeholder-opacity-60 focus:outline-none focus:border-white focus:border-opacity-50"
                               placeholder="••••••••">
                    </div>
                    
                    <!-- Terms & Conditions -->
                    <div class="flex items-start text-sm" data-aos="fade-up" data-aos-delay="500">
                        <input type="checkbox" required class="mt-1 mr-2 rounded">
                        <label class="text-white text-opacity-90">
                            Saya setuju dengan <a href="#" class="underline hover:text-opacity-80">syarat & ketentuan</a> yang berlaku
                        </label>
                    </div>
                    
                    <!-- Register Button -->
                    <button type="submit" 
                            class="btn-primary w-full py-3 px-6 text-white font-semibold rounded-xl focus:outline-none relative z-10"
                            data-aos="zoom-in" data-aos-delay="600">
                        <span class="relative z-10">Daftar Sekarang <i class="fas fa-rocket ml-2"></i></span>
                    </button>
                </form>
                
                <!-- Divider -->
                <div class="relative my-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-white border-opacity-30"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-transparent text-white text-opacity-80">atau daftar dengan</span>
                    </div>
                </div>
                
                <!-- Social Register -->
                <div class="grid grid-cols-3 gap-4" data-aos="fade-up" data-aos-delay="750">
                    <button class="py-3 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-xl transition transform hover:scale-105 hover:rotate-6">
                        <i class="fab fa-google text-white text-xl"></i>
                    </button>
                    <button class="py-3 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-xl transition transform hover:scale-105 hover:rotate-6">
                        <i class="fab fa-facebook text-white text-xl"></i>
                    </button>
                    <button class="py-3 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-xl transition transform hover:scale-105 hover:rotate-6">
                        <i class="fab fa-github text-white text-xl"></i>
                    </button>
                </div>
                
                <!-- Login Link -->
                <p class="text-center text-white text-sm mt-8" data-aos="fade-up" data-aos-delay="800">
                    Sudah punya akun? 
                    <button onclick="switchToLogin()" class="font-semibold hover:text-opacity-80 transition underline hover:scale-110 inline-block">
                        Login sekarang <i class="fas fa-sign-in-alt ml-1"></i>
                    </button>
                </p>
            </div>
            
        </div>
        
        <!-- Footer -->
        <div class="fixed bottom-4 left-0 right-0 text-center z-20">
            <p class="text-white text-opacity-70 text-sm" data-aos="fade-up" data-aos-delay="1000">
                <i class="fas fa-code mr-2"></i>© 2025 Design by <span class="font-bold">AZZAMCODEX</span>
            </p>
        </div>
    </div>
    
    <script>
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
        
        // Add ripple effect on button click
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
                ripple.classList.add('ripple');
                
                this.appendChild(ripple);
                
                setTimeout(() => ripple.remove(), 600);
            });
        });
    </script>
</body>
</html>
