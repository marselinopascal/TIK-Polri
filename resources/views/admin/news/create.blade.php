@extends('layouts.admin')
@section('title', 'Tambah Berita Baru')
@section('content')
<div class="max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow-soft">
    <h1 class="text-2xl font-bold text-slate-800 mb-6">Formulir Berita Baru</h1>
    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div>
          <label for="title" class="block text-sm font-semibold text-slate-700 mb-1">Judul</label>
          <input id="title" name="title" required class="w-full px-3 py-2 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-700" placeholder="Judul berita">
        </div>
        <div class="grid sm:grid-cols-2 gap-4">
          <div>
            <label for="category" class="block text-sm font-semibold text-slate-700 mb-1">Kategori</label>
            <select id="category" name="category" required class="w-full px-3 py-2 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-700">
              <option value="">Pilih Kategori</option>
              <option value="Teknologi">Teknologi</option>
              <option value="Keamanan">Keamanan</option>
              <option value="Sistem">Sistem</option>
              <option value="Pelatihan">Pelatihan</option>
            </select>
          </div>
          <div>
            <label for="status" class="block text-sm font-semibold text-slate-700 mb-1">Status</label>
            <select id="status" name="status" required class="w-full px-3 py-2 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-700">
              <option value="Draft">Draft</option>
              <option value="Published">Published</option>
            </select>
          </div>
        </div>
        <div>
          <label for="summary" class="block text-sm font-semibold text-slate-700 mb-1">Ringkasan</label>
          <textarea id="summary" name="summary" rows="3" class="w-full px-3 py-2 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-700" placeholder="Ringkasan singkat..."></textarea>
        </div>
        <div>
          <label for="image" class="block text-sm font-semibold text-slate-700 mb-1">Gambar (Opsional)</label>
          <input id="image" name="image" type="file" accept="image/*" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
        </div>
        <div>
          <label for="content" class="block text-sm font-semibold text-slate-700 mb-1">Konten</label>
          <textarea id="content" name="content" rows="5" class="w-full px-3 py-2 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-700" placeholder="Konten berita..."></textarea>
        </div>
        <div class="flex justify-end gap-4 pt-4">
            <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 rounded-lg border-2 text-sm font-semibold hover:bg-slate-50">Batal</a>
            <button type="submit" class="px-4 py-2 rounded-lg bg-blue-700 text-white text-sm font-semibold hover:bg-blue-800">Simpan Berita</button>
        </div>
    </form>
</div>
@endsection