@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="flex-1 flex items-center justify-center px-4 py-16">
    <div class="max-w-md w-full">
        <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 p-8 floating-animation">
            <div class="text-center mb-8">
                <div class="w-20 h-20 bg-gradient-to-br from-navy to-navy-dark rounded-full flex items-center justify-center mx-auto mb-6 shadow-xl"><svg class="w-10 h-10 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg></div>
                <h2 class="text-3xl font-bold text-navy mb-2">Login</h2>
                <p class="text-gray-600">Masuk ke sistem TIK POLRI</p>
            </div>

            @if ($errors->any())
                <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Oops!</strong>
                    <span class="block sm:inline">{{ $errors->first() }}</span>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-semibold text-navy mb-2">Email</label>
                    <div class="relative">
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus class="w-full pl-4 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-navy focus:ring-2 focus:ring-navy/20" placeholder="Masukkan email Anda">
                    </div>
                </div>
                <div>
                    <label for="password" class="block text-sm font-semibold text-navy mb-2">Password</label>
                    <div class="relative">
                        <input type="password" id="password" name="password" required class="w-full pl-4 pr-12 py-3 border-2 border-gray-200 rounded-xl focus:border-navy focus:ring-2 focus:ring-navy/20" placeholder="Masukkan password Anda">
                        <button type="button" id="togglePasswordBtn" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-navy">
                            <svg id="eyeIcon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <label class="flex items-center"><input type="checkbox" name="remember" class="w-4 h-4 text-navy rounded"><span class="ml-2 text-sm text-gray-600">Ingat saya</span></label>
                    <a href="#" class="text-sm text-navy hover:text-gold">Lupa password?</a>
                </div>
                <button type="submit" class="w-full bg-gradient-to-r from-navy to-navy-dark text-white py-3 rounded-xl font-semibold transform hover:scale-105">Login</button>
                <div class="text-center"><p class="text-gray-600">Belum memiliki akun? <a href="{{ route('register') }}" class="text-navy hover:text-gold font-semibold">Daftar sekarang</a></p></div>
            </form>
        </div>
    </div>
</div>
@endsection