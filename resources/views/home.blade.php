<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIK POLRI - Teknologi Informasi dan Komunikasi</title>

    {{-- Menghubungkan CSS dan JS Anda melalui Vite --}}
    @vite('resources/css/app.css')

    {{-- Font dari Google --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-50 to-blue-50 tech-pattern tech-grid font-poppins">

    {{-- ====================================================================== --}}
    {{-- SEMUA KONTEN DARI <body> HTML ANDA DISALIN PERSIS DI SINI --}}
    {{-- ====================================================================== --}}

    <!-- Header Navigation -->
    <header class="w-full bg-white/90 backdrop-blur-sm shadow-lg border-b-2 border-gold">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo TIK POLRI -->
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-navy rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-gold" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z"/>
                            <path d="M12 7v5l4-2-4-3z" fill="white"/>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-navy">TIK POLRI</h1>
                        <p class="text-xs text-gray-600">Teknologi Informasi & Komunikasi</p>
                    </div>
                </div>
                
                <!-- Navigation Menu -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-navy hover:text-gold font-semibold transition-colors duration-300 relative group">
                        LOGIN
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#" class="text-navy hover:text-gold font-semibold transition-colors duration-300 relative group">
                        REGISTER
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#" class="text-navy hover:text-gold font-semibold transition-colors duration-300 relative group">
                        BERITA
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#" class="text-navy hover:text-gold font-semibold transition-colors duration-300 relative group">
                        KONSULTASI TTE
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </nav>
                
                <!-- Mobile Menu Button -->
                <button class="md:hidden text-navy">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col items-center justify-center px-4 py-16">
        <!-- Welcome Section -->
        <div class="text-center mb-16 floating-animation">
            <div class="mb-8">
                <div class="w-24 h-24 bg-gradient-to-br from-navy to-navy-dark rounded-full flex items-center justify-center mx-auto mb-6 shadow-2xl">
                    <svg class="w-12 h-12 text-gold" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                    </svg>
                </div>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold text-navy mb-4 leading-tight">
                Selamat Datang di
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-navy to-gold">
                    TIK POLRI
                </span>
            </h1>
            <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Sistem Teknologi Informasi dan Komunikasi Kepolisian Republik Indonesia
            </p>
            
            <!-- Decorative Elements -->
            <div class="flex justify-center mt-8 space-x-4">
                <div class="w-2 h-2 bg-gold rounded-full animate-pulse"></div>
                <div class="w-2 h-2 bg-navy rounded-full animate-pulse" style="animation-delay: 0.2s;"></div>
                <div class="w-2 h-2 bg-gold rounded-full animate-pulse" style="animation-delay: 0.4s;"></div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="grid md:grid-cols-2 gap-8 max-w-4xl w-full">
            <!-- Mulai Janji Temu Button -->
            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8 hover-scale cursor-pointer" onclick="window.location.href='#login'">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-navy to-navy-dark rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 4v10a2 2 0 002 2h4a2 2 0 002-2V11m-6 0h6m-6 0a2 2 0 00-2 2v8a2 2 0 002 2h4a2 2 0 002-2v-8a2 2 0 00-2-2"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-navy mb-4">MULAI JANJI TEMU</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Buat janji temu untuk layanan TIK POLRI dengan mudah dan cepat
                    </p>
                    <div class="bg-gradient-to-r from-navy to-navy-dark text-white px-8 py-3 rounded-full font-semibold hover:from-navy-dark hover:to-navy transition-all duration-300 inline-block">
                        Mulai Sekarang →
                    </div>
                </div>
            </div>

            <!-- Konsultasi TTE Button -->
            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8 hover-scale cursor-pointer" onclick="window.location.href='#konsultasi-tte'">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-gold to-gold-dark rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-navy mb-4">KONSULTASI TTE</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Konsultasi Tanda Tangan Elektronik untuk kebutuhan digital Anda
                    </p>
                    <div class="bg-gradient-to-r from-gold to-gold-dark text-white px-8 py-3 rounded-full font-semibold hover:from-gold-dark hover:to-gold transition-all duration-300 inline-block">
                        Konsultasi →
                    </div>
                </div>
            </div>
        </div>

        <!-- Technology Elements -->
        <div class="mt-16 flex justify-center space-x-8 opacity-30">
            <div class="w-8 h-8 border-2 border-navy rounded rotate-45 animate-spin" style="animation-duration: 8s;"></div>
            <div class="w-6 h-6 bg-gold rounded-full animate-bounce" style="animation-delay: 1s;"></div>
            <div class="w-4 h-4 border-2 border-gold rounded-full animate-pulse" style="animation-delay: 2s;"></div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-navy text-white py-8 mt-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="flex items-center justify-center space-x-3 mb-4">
                <div class="w-8 h-8 bg-gold rounded-full flex items-center justify-center">
                    <svg class="w-5 h-5 text-navy" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z"/>
                    </svg>
                </div>
                <span class="text-gold font-semibold">TIK POLRI</span>
            </div>
            <p class="text-blue-200">© 2024 Teknologi Informasi dan Komunikasi POLRI. Semua hak dilindungi.</p>
        </div>
    </footer>

    <!-- ========================================= -->
    <!-- NEWS PAGE - HALAMAN BERITA -->
    <!-- ========================================= -->
    
    <div id="newsPage" class="fixed inset-0 bg-gradient-to-br from-slate-50 to-blue-50 tech-pattern tech-grid z-50 hidden">
        <header class="w-full bg-white/90 backdrop-blur-sm shadow-lg border-b-2 border-gold">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"><div class="flex justify-between items-center py-4"><div class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-navy rounded-full flex items-center justify-center"><svg class="w-8 h-8 text-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z"/><path d="M12 7v5l4-2-4-3z" fill="white"/></svg></div>
                <div><h1 class="text-xl font-bold text-navy">TIK POLRI</h1><p class="text-xs text-gray-600">Berita & Informasi</p></div></div>
                <button onclick="showHomePage()" class="flex items-center space-x-2 text-navy hover:text-gold font-semibold transition-colors duration-300"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg><span>Kembali</span></button>
            </div></div>
        </header>
        <div class="flex-1 overflow-y-auto"><div class="bg-gradient-to-r from-navy to-navy-dark text-white py-16"><div class="max-w-7xl mx-auto px-4 text-center">
            <div class="w-20 h-20 bg-gold rounded-full flex items-center justify-center mx-auto mb-6"><svg class="w-10 h-10 text-navy" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg></div>
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Berita TIK POLRI</h1><p class="text-xl text-blue-200 max-w-2xl mx-auto">Informasi terkini seputar perkembangan teknologi informasi dan komunikasi di lingkungan Kepolisian RI</p>
        </div></div>
        <div class="max-w-7xl mx-auto px-4 py-8"><div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6 mb-8"><div class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0"><div class="flex flex-wrap gap-2">
            <button onclick="filterNews('all')" class="news-filter-btn active bg-navy text-white px-4 py-2 rounded-lg font-medium transition-all duration-300">Semua</button>
            <button onclick="filterNews('teknologi')" class="news-filter-btn bg-gray-100 text-gray-700 hover:bg-navy hover:text-white px-4 py-2 rounded-lg font-medium transition-all duration-300">Teknologi</button>
            <button onclick="filterNews('keamanan')" class="news-filter-btn bg-gray-100 text-gray-700 hover:bg-navy hover:text-white px-4 py-2 rounded-lg font-medium transition-all duration-300">Keamanan</button>
            <button onclick="filterNews('sistem')" class="news-filter-btn bg-gray-100 text-gray-700 hover:bg-navy hover:text-white px-4 py-2 rounded-lg font-medium transition-all duration-300">Sistem</button>
            <button onclick="filterNews('pelatihan')" class="news-filter-btn bg-gray-100 text-gray-700 hover:bg-navy hover:text-white px-4 py-2 rounded-lg font-medium transition-all duration-300">Pelatihan</button>
        </div><div class="relative"><div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"><svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg></div><input type="text" id="newsSearchInput" placeholder="Cari berita..." class="pl-10 pr-4 py-2 border-2 border-gray-200 rounded-xl focus:border-navy focus:ring-2 focus:ring-navy/20 transition-all duration-300 outline-none w-64" oninput="searchNews()"></div></div></div>
        <div class="mb-12"><h2 class="text-2xl font-bold text-navy mb-6">Berita Utama</h2><div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden hover-scale"><div class="md:flex"><div class="md:w-1/2"><div class="h-64 md:h-full bg-gradient-to-br from-navy to-navy-dark flex items-center justify-center"><svg class="w-24 h-24 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div></div><div class="md:w-1/2 p-8"><div class="flex items-center space-x-2 mb-4"><span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-semibold">BREAKING</span><span class="text-gray-500 text-sm">15 Januari 2024</span></div><h3 class="text-2xl font-bold text-navy mb-4">Peluncuran Sistem Keamanan Siber Terbaru POLRI</h3><p class="text-gray-600 mb-6 leading-relaxed">TIK POLRI meluncurkan sistem keamanan siber generasi terbaru yang mampu mendeteksi dan mencegah serangan cyber dengan tingkat akurasi 99.8%. Sistem ini akan diimplementasikan di seluruh unit kepolisian Indonesia.</p><button class="bg-gradient-to-r from-navy to-navy-dark text-white px-6 py-3 rounded-xl font-semibold hover:from-navy-dark hover:to-navy transition-all duration-300">Baca Selengkapnya →</button></div></div></div></div>
        <div class="mb-8"><h2 class="text-2xl font-bold text-navy mb-6">Berita Terbaru</h2><div id="newsGrid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8"></div></div>
        <div class="text-center"><button class="bg-gradient-to-r from-gold to-gold-dark text-white px-8 py-3 rounded-xl font-semibold hover:from-gold-dark hover:to-gold transition-all duration-300">Muat Lebih Banyak</button></div></div></div>
        <footer class="bg-navy text-white py-8 mt-16"><div class="max-w-7xl mx-auto px-4 text-center"><div class="flex items-center justify-center space-x-3 mb-4">
            <div class="w-8 h-8 bg-gold rounded-full flex items-center justify-center"><svg class="w-5 h-5 text-navy" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z"/></svg></div>
            <span class="text-gold font-semibold">TIK POLRI</span></div><p class="text-blue-200">© 2024 Teknologi Informasi dan Komunikasi POLRI. Semua hak dilindungi.</p>
        </div></footer>
    </div>

    <!-- ========================================= -->
    <!-- LOGIN PAGE - HALAMAN LOGIN -->
    <!-- ========================================= -->
    
    <div id="loginPage" class="fixed inset-0 bg-gradient-to-br from-slate-50 to-blue-50 tech-pattern tech-grid z-50 hidden">
        <header class="w-full bg-white/90 backdrop-blur-sm shadow-lg border-b-2 border-gold"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"><div class="flex justify-between items-center py-4"><div class="flex items-center space-x-3">
            <div class="w-12 h-12 bg-navy rounded-full flex items-center justify-center"><svg class="w-8 h-8 text-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z"/><path d="M12 7v5l4-2-4-3z" fill="white"/></svg></div>
            <div><h1 class="text-xl font-bold text-navy">TIK POLRI</h1><p class="text-xs text-gray-600">Teknologi Informasi & Komunikasi</p></div></div>
            <button onclick="showHomePage()" class="flex items-center space-x-2 text-navy hover:text-gold font-semibold transition-colors duration-300"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg><span>Kembali</span></button>
        </div></div></header>
        <div class="flex-1 flex items-center justify-center px-4 py-16"><div class="max-w-md w-full">
            <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 p-8 floating-animation">
                <div class="text-center mb-8"><div class="w-20 h-20 bg-gradient-to-br from-navy to-navy-dark rounded-full flex items-center justify-center mx-auto mb-6 shadow-xl"><svg class="w-10 h-10 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg></div>
                    <h2 class="text-3xl font-bold text-navy mb-2">Login</h2><p class="text-gray-600">Masuk ke sistem TIK POLRI</p>
                </div>
                <form id="loginForm" class="space-y-6">
                    <div><label for="username" class="block text-sm font-semibold text-navy mb-2">Username</label><div class="relative"><div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"><svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg></div><input type="text" id="username" name="username" required class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-navy focus:ring-2 focus:ring-navy/20 transition-all duration-300 outline-none" placeholder="Masukkan username Anda"></div></div>
                    <div><label for="password" class="block text-sm font-semibold text-navy mb-2">Password</label><div class="relative"><div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"><svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg></div><input type="password" id="password" name="password" required class="w-full pl-10 pr-12 py-3 border-2 border-gray-200 rounded-xl focus:border-navy focus:ring-2 focus:ring-navy/20 transition-all duration-300 outline-none" placeholder="Masukkan password Anda"><button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-navy transition-colors duration-300"><svg id="eyeIcon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg></button></div></div>
                    <div class="flex items-center justify-between"><label class="flex items-center"><input type="checkbox" class="w-4 h-4 text-navy border-gray-300 rounded focus:ring-navy/20"><span class="ml-2 text-sm text-gray-600">Ingat saya</span></label><a href="#" class="text-sm text-navy hover:text-gold transition-colors duration-300">Lupa password?</a></div>
                    <button type="submit" class="w-full bg-gradient-to-r from-navy to-navy-dark text-white py-3 px-6 rounded-xl font-semibold hover:from-navy-dark hover:to-navy transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl"><span class="flex items-center justify-center space-x-2"><span>Login sebagai User</span><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg></span></button>
                    <div class="relative my-6"><div class="absolute inset-0 flex items-center"><div class="w-full border-t border-gray-200"></div></div><div class="relative flex justify-center text-sm"><span class="px-4 bg-white text-gray-500">atau</span></div></div>
                    <div class="text-center"><p class="text-gray-600">Belum memiliki akun? <a href="#" class="text-navy hover:text-gold font-semibold transition-colors duration-300">Daftar sekarang</a></p></div>
                </form>
            </div>
            <div class="mt-6 text-center"><div class="flex items-center justify-center space-x-2 text-sm text-gray-500"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z"/></svg><span>Sistem ini dilindungi dengan keamanan tingkat tinggi</span></div></div>
        </div></div>
    </div>
    
    <!-- ========================================= -->
    <!-- REGISTER PAGE - HALAMAN PENDAFTARAN -->
    <!-- ========================================= -->
    
    <div id="registerPage" class="fixed inset-0 bg-gradient-to-br from-slate-50 to-blue-50 tech-pattern tech-grid z-50 hidden">
        <header class="w-full bg-white/90 backdrop-blur-sm shadow-lg border-b-2 border-gold"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"><div class="flex justify-between items-center py-4"><div class="flex items-center space-x-3">
            <div class="w-12 h-12 bg-navy rounded-full flex items-center justify-center"><svg class="w-8 h-8 text-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z"/><path d="M12 7v5l4-2-4-3z" fill="white"/></svg></div>
            <div><h1 class="text-xl font-bold text-navy">TIK POLRI</h1><p class="text-xs text-gray-600">Teknologi Informasi & Komunikasi</p></div></div>
            <button onclick="showHomePage()" class="flex items-center space-x-2 text-navy hover:text-gold font-semibold transition-colors duration-300"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg><span>Kembali</span></button>
        </div></div></header>
        <div class="flex-1 flex items-center justify-center px-4 py-8 overflow-y-auto"><div class="max-w-lg w-full">
            <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 p-8 floating-animation">
                <div class="text-center mb-8"><div class="w-20 h-20 bg-gradient-to-br from-gold to-gold-dark rounded-full flex items-center justify-center mx-auto mb-6 shadow-xl"><svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg></div>
                    <h2 class="text-3xl font-bold text-navy mb-2">Daftar Akun</h2><p class="text-gray-600">Buat akun baru untuk mengakses sistem TIK POLRI</p>
                </div>
                <form id="registerForm" class="space-y-6">
                    <div><label for="nama" class="block text-sm font-semibold text-navy mb-2">Nama Lengkap</label><div class="relative"><div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"><svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg></div><input type="text" id="nama" name="nama" required class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-navy focus:ring-2 focus:ring-navy/20 transition-all duration-300 outline-none" placeholder="Masukkan nama lengkap Anda"></div></div>
                    <div><label for="instansi" class="block text-sm font-semibold text-navy mb-2">Instansi</label><div class="relative"><div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"><svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></div><select id="instansi" name="instansi" required class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-navy focus:ring-2 focus:ring-navy/20 transition-all duration-300 outline-none appearance-none bg-white"><option value="">Pilih Instansi</option><option value="Pemerintahan">Pemerintahan</option><option value="TNI">TNI</option><option value="Kepolisian">Kepolisian</option></select><div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none"><svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></div></div></div>
                    <div><label for="jabatan" class="block text-sm font-semibold text-navy mb-2">Jabatan</label><div class="relative"><div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"><svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0H8m8 0v2a2 2 0 01-2 2H10a2 2 0 01-2-2V6"/></svg></div><input type="text" id="jabatan" name="jabatan" required class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-navy focus:ring-2 focus:ring-navy/20 transition-all duration-300 outline-none" placeholder="Masukkan jabatan Anda"></div></div>
                    <div><label for="pangkat" class="block text-sm font-semibold text-navy mb-2">Pangkat</label><div class="relative"><div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"><svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg></div><input type="text" id="pangkat" name="pangkat" required class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-navy focus:ring-2 focus:ring-navy/20 transition-all duration-300 outline-none" placeholder="Masukkan pangkat Anda"></div></div>
                    <div><label for="nrp_nik" class="block text-sm font-semibold text-navy mb-2">NRP/NIK</label><div class="relative"><div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"><svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V4a2 2 0 114 0v2m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/></svg></div><input type="text" id="nrp_nik" name="nrp_nik" required class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-navy focus:ring-2 focus:ring-navy/20 transition-all duration-300 outline-none" placeholder="Masukkan NRP/NIK Anda"></div></div>
                    <button type="submit" class="w-full bg-gradient-to-r from-gold to-gold-dark text-white py-3 px-6 rounded-xl font-semibold hover:from-gold-dark hover:to-gold transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl"><span class="flex items-center justify-center space-x-2"><span>Daftar</span><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg></span></button>
                    <div class="relative my-6"><div class="absolute inset-0 flex items-center"><div class="w-full border-t border-gray-200"></div></div><div class="relative flex justify-center text-sm"><span class="px-4 bg-white text-gray-500">atau</span></div></div>
                    <div class="text-center"><p class="text-gray-600">Sudah memiliki akun? <a href="#" onclick="showLoginPage()" class="text-navy hover:text-gold font-semibold transition-colors duration-300">Login sekarang</a></p></div>
                </form>
            </div>
            <div class="mt-6 text-center"><div class="flex items-center justify-center space-x-2 text-sm text-gray-500"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z"/></svg><span>Data Anda akan diverifikasi oleh admin TIK POLRI</span></div></div>
        </div></div>
    </div>
    
    <!-- ========================================= -->
    <!-- APPOINTMENT PAGE - HALAMAN JANJI TEMU -->
    <!-- ========================================= -->
    
    <div id="appointmentPage" class="fixed inset-0 bg-gradient-to-br from-slate-50 to-blue-50 tech-pattern tech-grid z-50 hidden">
        <header class="w-full bg-white/90 backdrop-blur-sm shadow-lg border-b-2 border-gold"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"><div class="flex justify-between items-center py-4"><div class="flex items-center space-x-3">
            <div class="w-12 h-12 bg-navy rounded-full flex items-center justify-center"><svg class="w-8 h-8 text-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z"/><path d="M12 7v5l4-2-4-3z" fill="white"/></svg></div>
            <div><h1 class="text-xl font-bold text-navy">TIK POLRI</h1><p class="text-xs text-gray-600">Manajemen Janji Temu</p></div></div>
            <div class="flex items-center space-x-4"><span class="text-navy font-medium">Selamat datang, User</span><button onclick="showHomePage()" class="flex items-center space-x-2 text-navy hover:text-gold font-semibold transition-colors duration-300"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg><span>Logout</span></button></div>
        </div></div></header>
        <div class="flex-1 p-6 overflow-y-auto"><div class="max-w-7xl mx-auto">
            <div class="mb-8"><h1 class="text-3xl font-bold text-navy mb-2">Manajemen Janji Temu</h1><p class="text-gray-600">Kelola jadwal janji temu dengan TIK POLRI</p></div>
            <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6 mb-6"><div class="flex flex-col sm:flex-row justify-between items-start sm:items-center space-y-4 sm:space-y-0"><div class="flex items-center space-x-4"><button onclick="showAddAppointmentModal()" class="bg-gradient-to-r from-navy to-navy-dark text-white px-6 py-3 rounded-xl font-semibold hover:from-navy-dark hover:to-navy transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl flex items-center space-x-2"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg><span>Tambah Janji Temu</span></button></div>
                <div class="relative"><div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"><svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg></div><input type="text" id="searchInput" placeholder="Cari janji temu..." class="pl-10 pr-4 py-2 border-2 border-gray-200 rounded-xl focus:border-navy focus:ring-2 focus:ring-navy/20 transition-all duration-300 outline-none w-64"></div>
            </div></div>
            <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden"><div class="overflow-x-auto"><table class="w-full">
                <thead class="bg-gradient-to-r from-navy to-navy-dark text-white"><tr>
                    <th class="px-6 py-4 text-left text-sm font-semibold">No</th><th class="px-6 py-4 text-left text-sm font-semibold">Tanggal</th><th class="px-6 py-4 text-left text-sm font-semibold">Nama</th><th class="px-6 py-4 text-left text-sm font-semibold">Keperluan</th><th class="px-6 py-4 text-left text-sm font-semibold">Status</th><th class="px-6 py-4 text-center text-sm font-semibold">Aksi</th>
                </tr></thead>
                <tbody id="appointmentTableBody" class="divide-y divide-gray-200"></tbody>
            </table></div></div>
            <div id="emptyState" class="hidden text-center py-12"><div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6"><svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 4v10a2 2 0 002 2h4a2 2 0 002-2V11m-6 0h6m-6 0a2 2 0 00-2 2v8a2 2 0 002 2h4a2 2 0 002-2v-8a2 2 0 00-2-2"/></svg></div><h3 class="text-xl font-semibold text-gray-600 mb-2">Belum ada janji temu</h3><p class="text-gray-500 mb-6">Mulai dengan menambahkan janji temu pertama Anda</p><button onclick="showAddAppointmentModal()" class="bg-gradient-to-r from-navy to-navy-dark text-white px-6 py-3 rounded-xl font-semibold hover:from-navy-dark hover:to-navy transition-all duration-300">Tambah Janji Temu</button></div>
        </div></div>
    </div>
    
    <!-- ========================================= -->
    <!-- MODAL - TAMBAH/EDIT JANJI TEMU -->
    <!-- ========================================= -->
    
    <div id="appointmentModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-60 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-center mb-6"><h3 id="modalTitle" class="text-2xl font-bold text-navy">Tambah Janji Temu</h3><button onclick="closeAppointmentModal()" class="text-gray-400 hover:text-gray-600 transition-colors"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg></button></div>
                <form id="appointmentForm" class="space-y-4">
                    <input type="hidden" id="appointmentId" name="id">
                    <div><label for="appointmentDate" class="block text-sm font-semibold text-navy mb-2">Tanggal</label><input type="date" id="appointmentDate" name="date" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-navy focus:ring-2 focus:ring-navy/20 transition-all duration-300 outline-none"></div>
                    <div><label for="appointmentName" class="block text-sm font-semibold text-navy mb-2">Nama</label><input type="text" id="appointmentName" name="name" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-navy focus:ring-2 focus:ring-navy/20 transition-all duration-300 outline-none" placeholder="Masukkan nama"></div>
                    <div><label for="appointmentPurpose" class="block text-sm font-semibold text-navy mb-2">Keperluan</label><textarea id="appointmentPurpose" name="purpose" required rows="3" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-navy focus:ring-2 focus:ring-navy/20 transition-all duration-300 outline-none resize-none" placeholder="Jelaskan keperluan Anda"></textarea></div>
                    <div><label for="appointmentStatus" class="block text-sm font-semibold text-navy mb-2">Status</label><select id="appointmentStatus" name="status" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-navy focus:ring-2 focus:ring-navy/20 transition-all duration-300 outline-none appearance-none bg-white"><option value="Menunggu">Menunggu</option><option value="Disetujui">Disetujui</option><option value="Ditolak">Ditolak</option><option value="Selesai">Selesai</option></select></div>
                    <div class="flex space-x-3 pt-4"><button type="button" onclick="closeAppointmentModal()" class="flex-1 bg-gray-200 text-gray-700 py-3 px-6 rounded-xl font-semibold hover:bg-gray-300 transition-all duration-300">Batal</button><button type="submit" class="flex-1 bg-gradient-to-r from-navy to-navy-dark text-white py-3 px-6 rounded-xl font-semibold hover:from-navy-dark hover:to-navy transition-all duration-300">Simpan</button></div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- ========================================= -->
    <!-- JAVASCRIPT - FUNGSI DAN LOGIKA APLIKASI -->
    <!-- ========================================= -->
    
    @vite('resources/js/app.js')
</body>
</html>