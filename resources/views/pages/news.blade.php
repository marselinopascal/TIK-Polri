@extends('layouts.app')
@section('title', 'Berita')
@section('content')
<div class="flex-1 overflow-y-auto">
    {{-- ... (Hero section sama) ... --}}

    <div class="max-w-7xl mx-auto px-4 py-8">
        {{-- Ambil berita terbaru dari database sebagai Berita Utama --}}
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
                    <div class="md:w-1/2 p-8">
                        <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-semibold">TERBARU</span>
                        <h3 class="text-2xl font-bold text-navy my-4">{{ $featured_news->title }}</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">{{ $featured_news->summary }}</p>
                        <a href="#" class="bg-gradient-to-r from-navy to-navy-dark text-white px-6 py-3 rounded-xl font-semibold">Baca Selengkapnya →</a>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="mb-8">
            <h2 class="text-2xl font-bold text-navy mb-6">Berita Lainnya</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($latest_news as $news)
                <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden hover-scale p-6 flex flex-col">
                    <div class="flex-grow">
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold capitalize">{{ $news->category }}</span>
                        <h3 class="text-lg font-bold text-navy mt-3 mb-3">{{ $news->title }}</h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">{{ $news->summary }}</p>
                    </div>
                    <a href="#" class="text-navy hover:text-gold font-semibold transition-colors duration-300 mt-auto text-left">Baca Selengkapnya →</a>
                </div>
                @empty
                <p class="text-gray-600 col-span-3">Belum ada berita yang dipublikasikan.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection