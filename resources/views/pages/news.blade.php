@extends('layouts.app')
@section('title', 'Berita')
@section('content')
<div class="flex-1 overflow-y-auto">
    <div class="bg-gradient-to-r from-navy to-navy-dark text-white py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="w-20 h-20 bg-gold rounded-full flex items-center justify-center mx-auto mb-6"><svg class="w-10 h-10 text-navy" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg></div>
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Berita TIK POLRI</h1>
            <p class="text-xl text-blue-200 max-w-2xl mx-auto">Informasi terkini seputar perkembangan teknologi di lingkungan Kepolisian RI.</p>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 py-8">
        @php
            $allNews = \App\Models\News::where('status', 'Published')->latest()->get();
            $featured_news = $allNews->first();
            $latest_news = $allNews->skip(1);
        @endphp

        @if ($featured_news)
        <div class="mb-12">
            <h2 class="text-2xl font-bold text-navy mb-6">Berita Utama</h2>
            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden hover-scale">
                <div class="md:flex">
                    {{-- GAMBAR BERITA UTAMA --}}
                    @if($featured_news->image)
                    <div class="md:w-1/2">
                        <img src="{{ asset('storage/' . $featured_news->image) }}" alt="{{ $featured_news->title }}" class="h-64 w-full object-cover md:h-full">
                    </div>
                    @endif
                    <div class="p-8 {{ $featured_news->image ? 'md:w-1/2' : 'w-full' }}">
                        <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-semibold">TERBARU</span>
                        <h3 class="text-2xl font-bold text-navy my-4">{{ $featured_news->title }}</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed line-clamp-4">{{ $featured_news->summary }}</p>
                        <a href="{{ route('news.show', $featured_news->id) }}" class="bg-gradient-to-r from-navy to-navy-dark text-white px-6 py-3 rounded-xl font-semibold">Baca Selengkapnya →</a>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="mb-8">
            <h2 class="text-2xl font-bold text-navy mb-6">Berita Lainnya</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($latest_news as $news)
                <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden hover-scale flex flex-col">
                    {{-- GAMBAR BERITA LAINNYA --}}
                    @if($news->image)
                    <a href="{{ route('news.show', $news->id) }}">
                        <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="h-48 w-full object-cover">
                    </a>
                    @endif
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex-grow">
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold capitalize">{{ $news->category }}</span>
                            <h3 class="text-lg font-bold text-navy mt-3 mb-3">{{ $news->title }}</h3>
                            <p class="text-gray-600 mb-4 line-clamp-3">{{ $news->summary }}</p>
                        </div>
                        <a href="{{ route('news.show', $news->id) }}" class="text-navy hover:text-gold font-semibold transition-colors duration-300 mt-auto text-left">Baca Selengkapnya →</a>
                    </div>
                </div>
                @empty
                <p class="text-gray-600 col-span-3">Belum ada berita yang dipublikasikan.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection