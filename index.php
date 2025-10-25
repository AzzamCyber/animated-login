<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register - Modern Design</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="animated-bg min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        
        <div class="w-full max-w-md relative z-10">
            
            <div id="loginForm" class="form-container glass-effect rounded-3xl p-8 sm:p-10 shadow-2xl" data-aos="fade-up" data-aos-duration="1000">
                <div class="text-center mb-8">
                    <div class="inline-block p-4 bg-white bg-opacity-20 rounded-full mb-4 float-animation">
                        <i class="fas fa-rocket text-5xl text-white neon-glow"></i>
                    </div>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white mb-3 sm:mb-4 text-center sm:text-left gradient-text tracking-tight leading-snug" data-aos="fade-down">
                        Selamat Datang! 👋
                    </h2>
                    <p class="text-white text-opacity-80 text-sm sm:text-base">Masuk untuk melanjutkan perjalananmu</p>
                </div>
                
                <form action="process_login.php" method="POST" class="space-y-6">
                    <div data-aos="fade-right" data-aos-delay="100">
                        <label class="block text-white text-sm font-medium mb-2"><i class="fas fa-envelope mr-2"></i>Email</label>
                        <input type="email" name="email" required class="input-field w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl text-white placeholder-white placeholder-opacity-60 focus:outline-none focus:border-white focus:border-opacity-50" placeholder="nama@email.com">
                    </div>
                    
                    <div data-aos="fade-right" data-aos-delay="200">
                        <label class="block text-white text-sm font-medium mb-2"><i class="fas fa-lock mr-2"></i>Password</label>
                        <input type="password" name="password" required class="input-field w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl text-white placeholder-white placeholder-opacity-60 focus:outline-none focus:border-white focus:border-opacity-50" placeholder="••••••••">
                    </div>
                    
                    <div class="flex items-center justify-between text-sm" data-aos="fade-up" data-aos-delay="300">
                        <label class="flex items-center text-white cursor-pointer"><input type="checkbox" class="mr-2 rounded"><span>Ingat saya</span></label>
                        <a href="#" class="text-white hover:text-opacity-80 transition">Lupa password?</a>
                    </div>
                    
                    <button type="submit" class="btn-primary w-full py-3 px-6 text-white font-semibold rounded-xl focus:outline-none relative z-10" data-aos="zoom-in" data-aos-delay="400">
                        <span class="relative z-10">Masuk Sekarang <i class="fas fa-arrow-right ml-2"></i></span>
                    </button>
                </form>
                
                <div class="relative my-8" data-aos="fade-up" data-aos-delay="500">
                    <div class="absolute inset-0 flex items-center"><div class="w-full border-t border-white border-opacity-30"></div></div>
                    <div class="relative flex justify-center text-sm"><span class="px-4 bg-transparent text-white text-opacity-80">atau masuk dengan</span></div>
                </div>
                
                <div class="grid grid-cols-3 gap-4" data-aos="fade-up" data-aos-delay="600">
                    <button class="py-3 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-xl transition transform hover:scale-105 hover:rotate-6"><i class="fab fa-google text-white text-xl"></i></button>
                    <button class="py-3 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-xl transition transform hover:scale-105 hover:rotate-6"><i class="fab fa-facebook text-white text-xl"></i></button>
                    <button class="py-3 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-xl transition transform hover:scale-105 hover:rotate-6"><i class="fab fa-github text-white text-xl"></i></button>
                </div>
                
                <p class="text-center text-white text-sm mt-8" data-aos="fade-up" data-aos-delay="700">
                    Belum punya akun? 
                    <button onclick="switchToRegister()" class="font-semibold hover:text-opacity-80 transition underline">
                        Daftar sekarang <i class="fas fa-user-plus ml-1"></i>
                    </button>
                </p>
            </div>
            
            <div id="registerForm" class="form-container glass-effect rounded-3xl p-8 sm:p-10 shadow-2xl hidden-form">
                <div class="text-center mb-8">
                    <div class="inline-block p-4 bg-white bg-opacity-20 rounded-full mb-4 float-animation">
                        <i class="fas fa-user-astronaut text-5xl text-white neon-glow"></i>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-bold text-white mb-2 gradient-text">Bergabunglah! 🚀</h2>
                    <p class="text-white text-opacity-80 text-sm sm:text-base">Buat akun dan mulai petualanganmu</p>
                </div>
                
                <form action="process_register.php" method="POST" class="space-y-5">
                    <div data-aos="fade-left" data-aos-delay="100">
                        <label class="block text-white text-sm font-medium mb-2"><i class="fas fa-user mr-2"></i>Nama Lengkap</label>
                        <input type="text" name="nama" required class="input-field w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl text-white placeholder-white placeholder-opacity-60 focus:outline-none focus:border-white focus:border-opacity-50" placeholder="Azzam">
                    </div>
                    <div data-aos="fade-left" data-aos-delay="200">
                        <label class="block text-white text-sm font-medium mb-2"><i class="fas fa-envelope mr-2"></i>Email</label>
                        <input type="email" name="email" required class="input-field w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl text-white placeholder-white placeholder-opacity-60 focus:outline-none focus:border-white focus:border-opacity-50" placeholder="nama@email.com">
                    </div>
                    <div data-aos="fade-left" data-aos-delay="300">
                        <label class="block text-white text-sm font-medium mb-2"><i class="fas fa-lock mr-2"></i>Password</label>
                        <input type="password" name="password" required class="input-field w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl text-white placeholder-white placeholder-opacity-60 focus:outline-none focus:border-white focus:border-opacity-50" placeholder="••••••••">
                    </div>
                    <div data-aos="fade-left" data-aos-delay="400">
                        <label class="block text-white text-sm font-medium mb-2"><i class="fas fa-lock mr-2"></i>Konfirmasi Password</label>
                        <input type="password" name="confirm_password" required class="input-field w-full px-4 py-3 bg-white bg-opacity-20 border border-white border-opacity-30 rounded-xl text-white placeholder-white placeholder-opacity-60 focus:outline-none focus:border-white focus:border-opacity-50" placeholder="••••••••">
                    </div>
                    <div class="flex items-start text-sm" data-aos="fade-up" data-aos-delay="500">
                        <input type="checkbox" required class="mt-1 mr-2 rounded">
                        <label class="text-white text-opacity-90">Saya setuju dengan <a href="#" class="underline hover:text-opacity-80">syarat & ketentuan</a> yang berlaku</label>
                    </div>
                    <button type="submit" class="btn-primary w-full py-3 px-6 text-white font-semibold rounded-xl focus:outline-none relative z-10" data-aos="zoom-in" data-aos-delay="600">
                        <span class="relative z-10">Daftar Sekarang <i class="fas fa-rocket ml-2"></i></span>
                    </button>
                </form>
                
                <div class="relative my-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="absolute inset-0 flex items-center"><div class="w-full border-t border-white border-opacity-30"></div></div>
                    <div class="relative flex justify-center text-sm"><span class="px-4 bg-transparent text-white text-opacity-80">atau daftar dengan</span></div>
                </div>
                
                <div class="grid grid-cols-3 gap-4" data-aos="fade-up" data-aos-delay="750">
                    <button class="py-3 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-xl transition transform hover:scale-105 hover:rotate-6"><i class="fab fa-google text-white text-xl"></i></button>
                    <button class="py-3 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-xl transition transform hover:scale-105 hover:rotate-6"><i class="fab fa-facebook text-white text-xl"></i></button>
                    <button class="py-3 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-xl transition transform hover:scale-105 hover:rotate-6"><i class="fab fa-github text-white text-xl"></i></button>
                </div>
                
                <p class="text-center text-white text-sm mt-8" data-aos="fade-up" data-aos-delay="800">
                    Sudah punya akun? 
                    <button onclick="switchToLogin()" class="font-semibold hover:text-opacity-80 transition underline hover:scale-110 inline-block">
                        Login sekarang <i class="fas fa-sign-in-alt ml-1"></i>
                    </button>
                </p>
            </div>
            
        </div>
        
        <div class="fixed bottom-4 left-0 right-0 text-center z-20">
            <p class="text-white text-opacity-70 text-sm" data-aos="fade-up" data-aos-delay="1000">
                <i class="fas fa-code mr-2"></i>© 2025 Design by <span class="font-bold">AZZAMCODEX</span>
            </p>
        </div>
    </div>
    
    <script src="script.js"></script>
</body>
</html>
