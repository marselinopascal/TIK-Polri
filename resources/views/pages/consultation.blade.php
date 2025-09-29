@extends('layouts.app')
@section('title', 'Konsultasi TTE')
@section('content')
<div class="flex-1 overflow-y-auto">
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-gold to-gold-dark text-white py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center mx-auto mb-8 shadow-2xl floating-animation">
                <svg class="w-12 h-12 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
            </div>
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Konsultasi Tanda Tangan Elektronik</h1>
            <p class="text-xl text-yellow-100 max-w-3xl mx-auto mb-8">
                Dapatkan konsultasi profesional untuk implementasi TTE yang aman, terpercaya, dan sesuai dengan standar nasional
            </p>
            <a href="#consultationForm" class="bg-white text-gold-dark px-8 py-4 rounded-2xl font-bold text-lg hover:bg-yellow-50 transform hover:scale-105 transition-all duration-300 shadow-xl">
                Mulai Konsultasi →
            </a>
        </div>
    </section>

    <!-- Consultation Form Section -->
    <section id="consultationForm" class="py-20 bg-slate-50">
        <div class="max-w-4xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-navy-dark mb-4">Formulir Konsultasi TTE</h2>
                <p class="text-gray-600 text-lg">
                    Isi formulir di bawah ini untuk memulai konsultasi TTE dengan tim ahli kami
                </p>
            </div>
            
            {{-- Notifikasi Sukses --}}
            @if(session('success'))
                <div class="mb-6 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg" role="alert">
                    <p class="font-bold">Berhasil!</p>
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 p-8">
                {{-- FORMULIR YANG SUDAH DIPERBAIKI --}}
                <form action="{{ route('consultation.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <!-- Personal Information -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="fullName" class="block text-sm font-semibold text-navy-dark mb-2">Nama Lengkap *</label>
                            <input type="text" id="fullName" name="fullName" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl" placeholder="Masukkan nama lengkap">
                        </div>
                        <div>
                            <label for="position" class="block text-sm font-semibold text-navy-dark mb-2">Jabatan *</label>
                            <input type="text" id="position" name="position" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl" placeholder="Masukkan jabatan">
                        </div>
                    </div>

                    <!-- Institution Information -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="institution" class="block text-sm font-semibold text-navy-dark mb-2">Nama Institusi *</label>
                            <input type="text" id="institution" name="institution" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl" placeholder="Masukkan nama institusi">
                        </div>
                        <div>
                            <label for="institutionType" class="block text-sm font-semibold text-navy-dark mb-2">Jenis Institusi *</label>
                            <select id="institutionType" name="institutionType" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl bg-white">
                                <option value="">Pilih jenis institusi</option>
                                <option value="Pemerintah">Pemerintahan</option>
                                <option value="TNI">TNI</option>
                                <option value="POLRI">POLRI</option>
                                <option value="BUMN">BUMN</option>
                                <option value="Swasta">Swasta</option>
                            </select>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-sm font-semibold text-navy-dark mb-2">Email *</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl" placeholder="nama@institusi.go.id">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-navy-dark mb-2">Nomor Telepon *</label>
                            <input type="tel" id="phone" name="phone" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl" placeholder="08xxxxxxxxxx">
                        </div>
                    </div>

                    <!-- Consultation Details -->
                    <div>
                        <label for="consultationDetails" class="block text-sm font-semibold text-navy-dark mb-2">Detail Kebutuhan Konsultasi *</label>
                        <textarea id="consultationDetails" name="consultationDetails" required rows="5" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl resize-none" placeholder="Jelaskan secara detail kebutuhan konsultasi TTE Anda..."></textarea>
                    </div>
                    
                    <div class="text-center pt-6">
                        <button type="submit" class="bg-gradient-to-r from-gold to-gold-dark text-white px-12 py-4 rounded-2xl font-bold text-lg transform hover:scale-105">
                            Kirim Permohonan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection