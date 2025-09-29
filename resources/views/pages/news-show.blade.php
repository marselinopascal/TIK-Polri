@extends('layouts.app')
@section('title', $news->title)
@section('content')
<div class="bg-white">
    <div class="max-w-4xl mx-auto px-4 py-8 sm:py-12">
        
        <!-- Judul dan Kategori -->
        <div class="mb-8">
            <p class="text-base text-blue-700 font-bold uppercase">{{ $news->category }}</p>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2">{{ $news->title }}</h1>
            <p class="mt-4 text-slate-500">Dipublikasikan pada {{ $news->created_at->isoFormat('D MMMM YYYY') }}</p>
        </div>

        <!-- Gambar Utama -->
        @if($news->image)
        <div class="mb-8 rounded-2xl overflow-hidden shadow-lg">
            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="w-full h-auto object-cover">
        </div>
        @endif

        <!-- Konten Berita -->
        <article class="prose prose-lg max-w-none text-slate-800">
            {{-- Menggunakan nl2br untuk mengubah baris baru menjadi <br> --}}
            {!! nl2br(e($news->content)) !!}
        </article>

        <!-- Berita Terkait -->
        <div class="border-t mt-12 pt-8">
            <h2 class="text-2xl font-bold text-slate-900 mb-6">Berita Terkait Lainnya</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($relatedNews as $related)
                <div class="bg-slate-50 rounded-xl overflow-hidden hover-lift border">
                    @if($related->image)
                    <a href="{{ route('news.show', $related->id) }}">
                        <img src="{{ asset('storage/' . $related->image) }}" alt="{{ $related->title }}" class="h-40 w-full object-cover">
                    </a>
                    @endif
                    <div class="p-4">
                        <p class="text-sm text-blue-700 font-semibold">{{ $related->category }}</p>
                        <h3 class="font-bold text-slate-800 mt-1 line-clamp-2"><a href="{{ route('news.show', $related->id) }}" class="hover:underline">{{ $related->title }}</a></h3>
                    </div>
                </div>
                @empty
                <p class="text-slate-500">Tidak ada berita terkait.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection