@extends('layouts.app')

@section('title', 'Berita TIK POLRI')

@section('content')
<div class="bg-gradient-to-r from-navy to-navy-dark text-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Berita TIK POLRI</h1>
        <p class="text-xl text-blue-200 max-w-2xl mx-auto">Informasi terkini seputar perkembangan teknologi di lingkungan Kepolisian RI.</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 py-8">
    @if ($featured_news)
    <div class="mb-12">
        <h2 class="text-2xl font-bold text-navy mb-6">Berita Utama</h2>
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden hover-scale">
            <div class="md:flex">
                <div class="md:w-1/2 p-8">
                    <h3 class="text-2xl font-bold text-navy mb-4">{{ $featured_news['title'] }}</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">{{ $featured_news['excerpt'] }}</p>
                    <button class="bg-gradient-to-r from-navy to-navy-dark text-white px-6 py-3 rounded-xl font-semibold">Baca Selengkapnya →</button>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="mb-8">
        <h2 class="text-2xl font-bold text-navy mb-6">Berita Terbaru</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($latest_news as $news)
            <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden hover-scale p-6">
                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold capitalize">{{ $news['category'] }}</span>
                <h3 class="text-lg font-bold text-navy mt-3 mb-3">{{ $news['title'] }}</h3>
                <p class="text-gray-600 mb-4 line-clamp-3">{{ $news['excerpt'] }}</p>
                <button class="text-navy hover:text-gold font-semibold transition-colors duration-300">Baca Selengkapnya →</button>
            </div>
            @empty
            <p class="text-gray-600">Belum ada berita terbaru.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection