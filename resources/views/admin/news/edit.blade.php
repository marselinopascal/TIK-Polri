@extends('layouts.admin')
@section('title', 'Edit Berita')
@section('content')
<div class="max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow-soft">
    <h1 class="text-2xl font-bold text-slate-800 mb-6">Edit Berita</h1>
    <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
          <label for="title" class="block text-sm font-semibold text-slate-700 mb-1">Judul</label>
          <input id="title" name="title" required class="w-full px-3 py-2 border-2 border-slate-200 rounded-lg" value="{{ old('title', $news->title) }}">
        </div>
        <div class="grid sm:grid-cols-2 gap-4">
          <div>
            <label for="category" class="block text-sm font-semibold text-slate-700 mb-1">Kategori</label>
            <select id="category" name="category" required class="w-full px-3 py-2 border-2 border-slate-200 rounded-lg">
              <option value="Teknologi" {{ old('category', $news->category) == 'Teknologi' ? 'selected' : '' }}>Teknologi</option>
              <option value="Keamanan" {{ old('category', $news->category) == 'Keamanan' ? 'selected' : '' }}>Keamanan</option>
              <option value="Sistem" {{ old('category', $news->category) == 'Sistem' ? 'selected' : '' }}>Sistem</option>
              <option value="Pelatihan" {{ old('category', $news->category) == 'Pelatihan' ? 'selected' : '' }}>Pelatihan</option>
            </select>
          </div>
          <div>
            <label for="status" class="block text-sm font-semibold text-slate-700 mb-1">Status</label>
            <select id="status" name="status" required class="w-full px-3 py-2 border-2 border-slate-200 rounded-lg">
              <option value="Draft" {{ old('status', $news->status) == 'Draft' ? 'selected' : '' }}>Draft</option>
              <option value="Published" {{ old('status', $news->status) == 'Published' ? 'selected' : '' }}>Published</option>
            </select>
          </div>
        </div>
        <div>
          <label for="summary" class="block text-sm font-semibold text-slate-700 mb-1">Ringkasan</label>
          <textarea id="summary" name="summary" rows="3" class="w-full px-3 py-2 border-2 border-slate-200 rounded-lg">{{ old('summary', $news->summary) }}</textarea>
        </div>
        <div>
          <label for="image" class="block text-sm font-semibold text-slate-700 mb-1">Ganti Gambar (Opsional)</label>
          <input id="image" name="image" type="file" accept="image/*" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0">
          @if($news->image)
            <p class="text-xs text-slate-500 mt-2">Gambar saat ini: <a href="{{ asset('storage/' . $news->image) }}" target="_blank" class="text-blue-600 hover:underline">Lihat Gambar</a></p>
          @endif
        </div>
        <div>
          <label for="content" class="block text-sm font-semibold text-slate-700 mb-1">Konten</label>
          <textarea id="content" name="content" rows="5" class="w-full px-3 py-2 border-2 border-slate-200 rounded-lg">{{ old('content', $news->content) }}</textarea>
        </div>
        <div class="flex justify-between items-center pt-4">
            <button type="button" class="text-red-600 font-semibold hover:underline" onclick="document.getElementById('delete-form').submit();">Hapus Berita</button>
            <div class="flex gap-4">
                <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 rounded-lg border-2 text-sm font-semibold hover:bg-slate-50">Batal</a>
                <button type="submit" class="px-4 py-2 rounded-lg bg-blue-700 text-white text-sm font-semibold hover:bg-blue-800">Simpan Perubahan</button>
            </div>
        </div>
    </form>
    <form id="delete-form" action="{{ route('admin.news.destroy', $news->id) }}" method="POST" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</div>
@endsection