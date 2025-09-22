@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')

<!-- Tabs -->
<div class="mb-6">
  <div class="inline-flex bg-white rounded-xl p-1 border border-slate-200 shadow-soft">
    <button id="tabNews" class="tab-btn px-4 sm:px-6 py-2 rounded-lg text-sm font-semibold bg-blue-700 text-white">Berita</button>
    <button id="tabTTE" class="tab-btn px-4 sm:px-6 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:bg-slate-100">Konsultasi TTE</button>
    <button id="tabAppt" class="tab-btn px-4 sm:px-6 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:bg-slate-100">Janji Temu</button>
  </div>
</div>

<!-- Stats Row -->
<section class="grid md:grid-cols-3 gap-6 mb-8">
  <div class="bg-white rounded-2xl p-6 shadow-soft hover-lift">
    <div class="text-slate-500 text-sm">Total Berita</div>
    <div class="text-3xl font-extrabold text-slate-900 mt-1">{{ $news->count() }}</div>
  </div>
  <div class="bg-white rounded-2xl p-6 shadow-soft hover-lift">
    <div class="text-slate-500 text-sm">Konsultasi Masuk</div>
    <div class="text-3xl font-extrabold text-slate-900 mt-1">{{ $consultations->count() }}</div>
  </div>
  <div class="bg-white rounded-2xl p-6 shadow-soft hover-lift">
    <div class="text-slate-500 text-sm">Total Janji Temu</div>
    <div class="text-3xl font-extrabold text-slate-900 mt-1">{{ $appointments->count() }}</div>
  </div>
</section>

<!-- Berita Section -->
<section id="newsSection" class="fade-in">
  @if(session('success'))
    <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative" role="alert">
        {{ session('success') }}
    </div>
  @endif
  <div class="bg-white rounded-2xl border border-slate-200 shadow-soft overflow-hidden">
    <div class="p-5 border-b flex justify-between items-center">
        <h2 class="text-lg font-bold text-slate-800">Manajemen Berita</h2>
        <button id="addNewsBtn" class="px-4 py-2 rounded-lg bg-blue-700 text-white text-sm font-semibold hover:bg-blue-800">Tambah Berita Baru</button>
    </div>
    <div class="overflow-x-auto">
      <table class="min-w-full text-sm">
        <thead class="bg-slate-50 text-slate-600">
          <tr>
            <th class="text-left font-semibold px-5 py-3">Judul</th>
            <th class="text-left font-semibold px-5 py-3">Kategori</th>
            <th class="text-left font-semibold px-5 py-3">Status</th>
            <th class="text-left font-semibold px-5 py-3">Dibuat Pada</th>
            <th class="text-right font-semibold px-5 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
          @forelse ($news as $item)
          <tr>
            <td class="px-5 py-3 font-semibold text-slate-800">{{ $item->title }}</td>
            <td class="px-5 py-3">{{ $item->category }}</td>
            <td class="px-5 py-3">
              <span class="px-2 py-1 text-xs font-semibold rounded-full {{ $item->status == 'Published' ? 'bg-emerald-100 text-emerald-700' : 'bg-amber-100 text-amber-700' }}">{{ $item->status }}</span>
            </td>
            <td class="px-5 py-3 text-slate-500">{{ $item->created_at->isoFormat('D MMMM YYYY') }}</td>
            <td class="px-5 py-3 text-right">
              <a href="#" class="font-semibold text-blue-600 hover:underline">Edit</a>
            </td>
          </tr>
          @empty
          <tr><td colspan="5" class="p-8 text-center text-slate-500">Belum ada berita.</td></tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- TTE Section -->
<section id="tteSection" class="hidden fade-in">
  <div class="bg-white rounded-2xl border border-slate-200 shadow-soft overflow-hidden">
    <div class="p-5 border-b"><h2 class="text-lg font-bold text-slate-800">Manajemen Konsultasi TTE</h2></div>
    <div class="overflow-x-auto">
      <table class="min-w-full text-sm">
        <thead class="bg-slate-50 text-slate-600">
          <tr>
            <th class="text-left font-semibold px-5 py-3">Pemohon</th>
            <th class="text-left font-semibold px-5 py-3">Instansi</th>
            <th class="text-left font-semibold px-5 py-3">Diajukan</th>
            <th class="text-left font-semibold px-5 py-3">Status</th>
            <th class="text-right font-semibold px-5 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
          @forelse ($consultations as $item)
          <tr>
            <td class="px-5 py-3"><div class="font-semibold text-slate-800">{{ $item->name }}</div><div class="text-xs text-slate-500">{{ $item->email }}</div></td>
            <td class="px-5 py-3">{{ $item->institution }}</td>
            <td class="px-5 py-3 text-slate-500">{{ $item->created_at->isoFormat('D MMMM YYYY') }}</td>
            <td class="px-5 py-3"><span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-700">{{ $item->status }}</span></td>
            <td class="px-5 py-3 text-right"><a href="#" class="font-semibold text-blue-600 hover:underline">Lihat Detail</a></td>
          </tr>
          @empty
          <tr><td colspan="5" class="p-8 text-center text-slate-500">Belum ada konsultasi TTE.</td></tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- Janji Temu Section -->
<section id="apptSection" class="hidden fade-in">
  <div class="bg-white rounded-2xl border border-slate-200 shadow-soft overflow-hidden">
    <div class="p-5 border-b"><h2 class="text-lg font-bold text-slate-800">Manajemen Janji Temu</h2></div>
    <div class="overflow-x-auto">
      <table class="min-w-full text-sm">
        <thead class="bg-slate-50 text-slate-600">
          <tr>
            <th class="text-left font-semibold px-5 py-3">Pemohon</th>
            <th class="text-left font-semibold px-5 py-3">Tanggal</th>
            <th class="text-left font-semibold px-5 py-3">Keperluan</th>
            <th class="text-left font-semibold px-5 py-3">Status</th>
            <th class="text-right font-semibold px-5 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
          @forelse ($appointments as $item)
          <tr>
            <td class="px-5 py-3 font-semibold text-slate-800">{{ $item->name }}</td>
            <td class="px-5 py-3 text-slate-500">{{ \Carbon\Carbon::parse($item->date)->isoFormat('D MMMM YYYY') }}</td>
            <td class="px-5 py-3 text-slate-500 truncate max-w-xs">{{ $item->purpose }}</td>
            <td class="px-5 py-3"><span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-700">{{ $item->status }}</span></td>
            <td class="px-5 py-3 text-right"><a href="#" class="font-semibold text-blue-600 hover:underline">Lihat Detail</a></td>
          </tr>
          @empty
          <tr><td colspan="5" class="p-8 text-center text-slate-500">Belum ada janji temu.</td></tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</section>

{{-- MENYERTAKAN MODAL DARI FILE TERPISAH --}}
@include('admin.partials.news-modal')

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const tabs = {
        news: { btn: document.getElementById('tabNews'), section: document.getElementById('newsSection') },
        tte: { btn: document.getElementById('tabTTE'), section: document.getElementById('tteSection') },
        appt: { btn: document.getElementById('tabAppt'), section: document.getElementById('apptSection') }
    };

    function switchTab(activeTabKey) {
        Object.keys(tabs).forEach(key => {
            if (tabs[key].btn && tabs[key].section) {
                const isActive = key === activeTabKey;
                tabs[key].btn.classList.toggle('bg-blue-700', isActive);
                tabs[key].btn.classList.toggle('text-white', isActive);
                tabs[key].btn.classList.toggle('text-slate-700', !isActive);
                tabs[key].btn.classList.toggle('hover:bg-slate-100', !isActive);
                tabs[key].section.classList.toggle('hidden', !isActive);
            }
        });
    }

    Object.keys(tabs).forEach(key => {
        if (tabs[key].btn) {
            tabs[key].btn.addEventListener('click', () => switchTab(key));
        }
    });

    // Default to 'news' tab on page load
    switchTab('news');

    // ===== NEWS MODAL LOGIC =====
    const addNewsBtn = document.getElementById('addNewsBtn');
    const newsModal = document.getElementById('newsModal');
    const closeNewsModalBtn = document.getElementById('closeNewsModalBtn');
    const cancelNewsModalBtn = document.getElementById('cancelNewsModalBtn');
    const newsForm = document.getElementById('newsForm');

    if (addNewsBtn) {
        addNewsBtn.addEventListener('click', () => {
            if(newsModal) {
                // Reset form untuk tambah data baru
                newsForm.reset();
                newsModal.querySelector('#newsModalTitle').textContent = 'Tambah Berita Baru';
                newsModal.classList.remove('hidden');
            }
        });
    }

    function closeNewsModal() {
        if(newsModal) newsModal.classList.add('hidden');
    }

    if (closeNewsModalBtn) closeNewsModalBtn.addEventListener('click', closeNewsModal);
    if (cancelNewsModalBtn) cancelNewsModalBtn.addEventListener('click', closeNewsModal);
});
</script>
@endpush