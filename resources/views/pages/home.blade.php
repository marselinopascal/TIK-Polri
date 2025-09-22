@extends('layouts.app')
@section('title', 'Selamat Datang')
@section('content')
<div class="flex flex-col items-center justify-center px-4 py-16">
    <div class="text-center mb-16 floating-animation">
        <div class="mb-8"><div class="w-24 h-24 bg-gradient-to-br from-navy to-navy-dark rounded-full flex items-center justify-center mx-auto mb-6 shadow-2xl"><svg class="w-12 h-12 text-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg></div></div>
        <h1 class="text-4xl md:text-6xl font-bold text-navy mb-4 leading-tight">Selamat Datang di <span class="text-transparent bg-clip-text bg-gradient-to-r from-navy to-gold">TIK POLRI</span></h1>
        <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">Sistem Teknologi Informasi dan Komunikasi Kepolisian Republik Indonesia</p>
        <div class="flex justify-center mt-8 space-x-4"><div class="w-2 h-2 bg-gold rounded-full animate-pulse"></div><div class="w-2 h-2 bg-navy rounded-full animate-pulse" style="animation-delay: 0.2s;"></div><div class="w-2 h-2 bg-gold rounded-full animate-pulse" style="animation-delay: 0.4s;"></div></div>
    </div>
    <div class="grid md:grid-cols-2 gap-8 max-w-4xl w-full">
        <a href="{{ route('login') }}" class="block bg-white rounded-2xl shadow-xl border border-gray-100 p-8 hover-scale cursor-pointer">
            <div class="text-center"><div class="w-16 h-16 bg-gradient-to-br from-navy to-navy-dark rounded-full flex items-center justify-center mx-auto mb-6"><svg class="w-8 h-8 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 4v10a2 2 0 002 2h4a2 2 0 002-2V11m-6 0h6m-6 0a2 2 0 00-2 2v8a2 2 0 002 2h4a2 2 0 002-2v-8a2 2 0 00-2-2"/></svg></div>
                <h3 class="text-2xl font-bold text-navy mb-4">MULAI JANJI TEMU</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">Buat janji temu untuk layanan TIK POLRI dengan mudah dan cepat</p>
                <div class="bg-gradient-to-r from-navy to-navy-dark text-white px-8 py-3 rounded-full font-semibold hover:from-navy-dark hover:to-navy transition-all duration-300 inline-block">Mulai Sekarang →</div>
            </div>
        </a>
        <a href="{{ route('consultation') }}" class="block bg-white rounded-2xl shadow-xl border border-gray-100 p-8 hover-scale cursor-pointer">
            <div class="text-center"><div class="w-16 h-16 bg-gradient-to-br from-gold to-gold-dark rounded-full flex items-center justify-center mx-auto mb-6"><svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div>
                <h3 class="text-2xl font-bold text-navy mb-4">KONSULTASI TTE</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">Konsultasi Tanda Tangan Elektronik untuk kebutuhan digital Anda</p>
                <div class="bg-gradient-to-r from-gold to-gold-dark text-white px-8 py-3 rounded-full font-semibold hover:from-gold-dark hover:to-gold transition-all duration-300 inline-block">Konsultasi →</div>
            </div>
        </a>
    </div>
    <div class="mt-16 flex justify-center space-x-8 opacity-30"><div class="w-8 h-8 border-2 border-navy rounded rotate-45 animate-spin" style="animation-duration: 8s;"></div><div class="w-6 h-6 bg-gold rounded-full animate-bounce" style="animation-delay: 1s;"></div><div class="w-4 h-4 border-2 border-gold rounded-full animate-pulse" style="animation-delay: 2s;"></div></div>
</div>
@endsection