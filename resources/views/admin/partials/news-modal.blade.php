<!-- News Modal -->
<div id="newsModal" class="hidden fixed inset-0 bg-black/40 backdrop-blur-sm z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-soft max-w-xl w-full overflow-hidden fade-in max-h-[90vh] flex flex-col">
      <div class="flex items-center justify-between px-6 py-4 border-b border-slate-200 flex-shrink-0">
        <h3 id="newsModalTitle" class="font-extrabold text-lg text-slate-900">Tambah Berita Baru</h3>
        <button id="closeNewsModalBtn" class="text-slate-500 hover:text-slate-700">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/></svg>
        </button>
      </div>
      
      {{-- Arahkan form ke rute yang sudah kita buat --}}
      <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data" id="newsForm" class="px-6 py-5 space-y-4 overflow-y-auto">
        @csrf
        <input type="hidden" id="newsId" name="news_id">
        <div>
          <label for="newsTitle" class="block text-sm font-semibold text-slate-700 mb-1">Judul</label>
          <input id="newsTitle" name="title" required class="w-full px-3 py-2 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-700" placeholder="Judul berita">
        </div>
        <div class="grid sm:grid-cols-2 gap-4">
          <div>
            <label for="newsCategory" class="block text-sm font-semibold text-slate-700 mb-1">Kategori</label>
            <select id="newsCategory" name="category" required class="w-full px-3 py-2 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-700">
              <option value="">Pilih Kategori</option>
              <option value="Teknologi">Teknologi</option>
              <option value="Keamanan">Keamanan</option>
              <option value="Sistem">Sistem</option>
              <option value="Pelatihan">Pelatihan</option>
            </select>
          </div>
          <div>
            <label for="newsStatus" class="block text-sm font-semibold text-slate-700 mb-1">Status</label>
            <select id="newsStatus" name="status" required class="w-full px-3 py-2 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-700">
              <option value="Draft">Draft</option>
              <option value="Published">Published</option>
            </select>
          </div>
        </div>
        <div>
          <label for="newsSummary" class="block text-sm font-semibold text-slate-700 mb-1">Ringkasan</label>
          <textarea id="newsSummary" name="summary" rows="3" class="w-full px-3 py-2 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-700" placeholder="Ringkasan singkat..."></textarea>
        </div>
        <div>
          <label for="newsImage" class="block text-sm font-semibold text-slate-700 mb-1">Gambar (Opsional)</label>
          <input id="newsImage" name="image" type="file" accept="image/*" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
          <p class="text-xs text-slate-500 mt-1">Unggah gambar (maksimal 2MB).</p>
        </div>
        <div>
          <label for="newsContent" class="block text-sm font-semibold text-slate-700 mb-1">Konten</label>
          <textarea id="newsContent" name="content" rows="5" class="w-full px-3 py-2 border-2 border-slate-200 rounded-lg focus:outline-none focus:border-blue-700" placeholder="Konten berita..."></textarea>
        </div>
        <div class="flex items-center justify-end gap-3 pt-2 flex-shrink-0">
          <button type="button" id="cancelNewsModalBtn" class="px-4 py-2 rounded-lg border-2 border-slate-200 text-slate-700 font-semibold hover:bg-slate-50">Batal</button>
          <button type="submit" class="px-4 py-2 rounded-lg bg-blue-700 text-white font-semibold hover:bg-blue-800">Simpan Berita</button>
        </div>
      </form>
    </div>
</div>