@extends('layouts.app')
@section('title', 'Daftar Akun')
@section('content')
{{-- DIV PEMBUNGKUS INI YANG DIPERBAIKI --}}
<div class="flex-1 flex items-center justify-center px-4 py-8">
    <div class="max-w-lg w-full my-8">
        <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 p-8 floating-animation">
            <div class="text-center mb-8">
                <div class="w-20 h-20 bg-gradient-to-br from-gold to-gold-dark rounded-full flex items-center justify-center mx-auto mb-6 shadow-xl"><svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg></div>
                <h2 class="text-3xl font-bold text-navy mb-2">Daftar Akun</h2>
                <p class="text-gray-600">Buat akun baru untuk mengakses sistem TIK POLRI</p>
            </div>

            @if ($errors->any())
                <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Terjadi kesalahan!</strong>
                    <ul class="mt-2 list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf
                <div>
                    <label for="nama" class="block text-sm font-semibold text-navy mb-2">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-navy focus:ring-2 focus:ring-navy/20" placeholder="Masukkan nama lengkap Anda">
                </div>
                 <div>
                    <label for="email" class="block text-sm font-semibold text-navy mb-2">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-navy focus:ring-2 focus:ring-navy/20" placeholder="Masukkan email Anda">
                </div>
                <div>
                    <label for="instansi" class="block text-sm font-semibold text-navy mb-2">Instansi</label>
                    <input type="text" id="instansi" name="instansi" value="{{ old('instansi') }}" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-navy focus:ring-2 focus:ring-navy/20" placeholder="Contoh: POLDA METRO JAYA">
                </div>
                <div>
                    <label for="jabatan" class="block text-sm font-semibold text-navy mb-2">Jabatan</label>
                    <input type="text" id="jabatan" name="jabatan" value="{{ old('jabatan') }}" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-navy focus:ring-2 focus:ring-navy/20" placeholder="Contoh: Analis Kebijakan">
                </div>
                <div>
                    <label for="pangkat" class="block text-sm font-semibold text-navy mb-2">Pangkat</label>
                    <input type="text" id="pangkat" name="pangkat" value="{{ old('pangkat') }}" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-navy focus:ring-2 focus:ring-navy/20" placeholder="Contoh: BRIPKA">
                </div>
                <div>
                    <label for="nrp_nik" class="block text-sm font-semibold text-navy mb-2">NRP / NIK</label>
                    <input type="text" id="nrp_nik" name="nrp_nik" value="{{ old('nrp_nik') }}" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-navy focus:ring-2 focus:ring-navy/20" placeholder="Masukkan NRP / NIK Anda">
                </div>
                <div>
                    <label for="password" class="block text-sm font-semibold text-navy mb-2">Password</label>
                    <input type="password" id="password" name="password" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-navy focus:ring-2 focus:ring-navy/20" placeholder="Minimal 8 karakter">
                </div>
                <div>
                    <label for="password_confirmation" class="block text-sm font-semibold text-navy mb-2">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-navy focus:ring-2 focus:ring-navy/20" placeholder="Ulangi password">
                </div>
                <button type="submit" class="w-full bg-gradient-to-r from-gold to-gold-dark text-white py-3 rounded-xl font-semibold transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">Daftar</button>
                <div class="text-center pt-4">
                    <p class="text-gray-600">Sudah punya akun? <a href="{{ route('login') }}" class="text-navy hover:text-gold font-semibold">Login sekarang</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection