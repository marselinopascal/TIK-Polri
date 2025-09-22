@extends('layouts.app')
@section('title', 'Konsultasi TTE')
@section('content')
<div class="flex-1 overflow-y-auto">
    <section class="bg-gradient-to-r from-gold to-gold-dark text-white py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center mx-auto mb-8 shadow-2xl floating-animation"><svg class="w-12 h-12 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div>
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Konsultasi Tanda Tangan Elektronik</h1>
            <p class="text-xl text-yellow-100 max-w-3xl mx-auto mb-8">Dapatkan konsultasi profesional untuk implementasi TTE yang aman dan terpercaya</p>
        </div>
    </section>
    <section id="consultationForm" class="py-20 bg-slate-50">
        <div class="max-w-4xl mx-auto px-4">
            <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 p-8">
                <form id="tteConsultationForm" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div><label for="fullName" class="block text-sm font-semibold text-navy-dark mb-2">Nama Lengkap *</label><input type="text" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl" placeholder="Masukkan nama lengkap"></div>
                        <div><label for="position" class="block text-sm font-semibold text-navy-dark mb-2">Jabatan *</label><input type="text" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl" placeholder="Masukkan jabatan"></div>
                    </div>
                    <div><label for="consultationDetails" class="block text-sm font-semibold text-navy-dark mb-2">Detail Kebutuhan Konsultasi *</label><textarea required rows="5" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl" placeholder="Jelaskan secara detail kebutuhan konsultasi TTE Anda..."></textarea></div>
                    <div class="text-center pt-6">
                        <button type="submit" class="bg-gradient-to-r from-gold to-gold-dark text-white px-12 py-4 rounded-2xl font-bold text-lg transform hover:scale-105">Kirim Permohonan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Success Modal -->
    <div id="successModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-60 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full p-8 text-center">
            <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6"><svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg></div>
            <h3 class="text-2xl font-bold text-navy-dark mb-4">Permohonan Berhasil Dikirim!</h3>
            <p class="text-gray-600 mb-6">Tim kami akan menghubungi Anda dalam 1x24 jam untuk konfirmasi jadwal.</p>
            <button onclick="closeSuccessModal()" class="bg-gradient-to-r from-navy to-navy-dark text-white px-8 py-3 rounded-xl font-semibold">Tutup</button>
        </div>
    </div>
</div>
@endsection