{{-- HANYA BERISI KODE HTML HEADER, TANPA @EXTENDS ATAU @SECTION --}}
<header class="w-full bg-white/90 backdrop-blur-sm shadow-lg border-b-2 border-gold sticky top-0 z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <a href="{{ route('home') }}" class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-navy rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8 text-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z"/><path d="M12 7v5l4-2-4-3z" fill="white"/></svg>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-navy">TIK POLRI</h1>
                    <p class="text-xs text-gray-600">Teknologi Informasi & Komunikasi</p>
                </div>
            </a>
            <nav class="hidden md:flex items-center space-x-8">
                @guest
                    <a href="{{ route('login') }}" class="text-navy hover:text-gold font-semibold transition-colors duration-300 relative group">LOGIN<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span></a>
                    <a href="{{ route('register') }}" class="text-navy hover:text-gold font-semibold transition-colors duration-300 relative group">REGISTER<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span></a>
                @endguest
                <a href="{{ route('news') }}" class="text-navy hover:text-gold font-semibold transition-colors duration-300 relative group">BERITA<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span></a>
                <a href="{{ route('consultation') }}" class="text-navy hover:text-gold font-semibold transition-colors duration-300 relative group">KONSULTASI TTE<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span></a>
                @auth
                    <a href="{{ route('appointment.index') }}" class="text-navy hover:text-gold font-semibold transition-colors duration-300 relative group">JANJI TEMU<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span></a>
                    <form method="POST" action="{{ route('logout') }}" class="flex items-center">
                        @csrf
                        <button type="submit" class="text-navy hover:text-gold font-semibold transition-colors duration-300 relative group">LOGOUT<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span></button>
                    </form>
                @endauth
            </nav>
        </div>
    </div>
</header>