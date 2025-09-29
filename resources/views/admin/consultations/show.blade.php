@extends('layouts.admin')
@section('title', 'Detail Konsultasi TTE')

{{-- PASTIKAN @section('content') INI ADA DAN TIDAK SALAH KETIK --}}
@section('content')

<div class="max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow-soft">
    <div class="flex justify-between items-start mb-6">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Detail Konsultasi TTE</h1>
            <p class="text-slate-500">Diajukan pada: {{ $consultation->created_at->isoFormat('D MMMM YYYY, HH:mm') }}</p>
        </div>
        <span class="px-3 py-1 text-sm font-semibold rounded-full bg-blue-100 text-blue-700">{{ $consultation->status }}</span>
    </div>

    <div class="space-y-4 border-t pt-6">
        <div class="grid grid-cols-3 gap-4">
            <dt class="text-sm font-medium text-slate-500">Nama Pemohon</dt>
            <dd class="text-sm text-slate-900 col-span-2">{{ $consultation->name }}</dd>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <dt class="text-sm font-medium text-slate-500">Instansi</dt>
            <dd class="text-sm text-slate-900 col-span-2">{{ $consultation->institution }} ({{ $consultation->type }})</dd>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <dt class="text-sm font-medium text-slate-500">Email & Telepon</dt>
            <dd class="text-sm text-slate-900 col-span-2">{{ $consultation->email }} | {{ $consultation->phone }}</dd>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <dt class="text-sm font-medium text-slate-500">Detail Kebutuhan</dt>
            <dd class="text-sm text-slate-900 col-span-2 whitespace-pre-wrap">{{ $consultation->details }}</dd>
        </div>
    </div>

    <form action="{{ route('admin.consultations.update', $consultation->id) }}" method="POST" class="border-t mt-6 pt-6">
        @csrf
        @method('PUT')
        <h2 class="text-lg font-semibold text-slate-800 mb-4">Update Status & Catatan</h2>
        <div class="grid grid-cols-2 gap-6">
            <div>
                <label for="status" class="block text-sm font-medium text-slate-700">Status</label>
                <select name="status" id="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    <option value="Baru" {{ $consultation->status == 'Baru' ? 'selected' : '' }}>Baru</option>
                    <option value="Ditinjau" {{ $consultation->status == 'Ditinjau' ? 'selected' : '' }}>Ditinjau</option>
                    <option value="Dijadwalkan" {{ $consultation->status == 'Dijadwalkan' ? 'selected' : '' }}>Dijadwalkan</option>
                    <option value="Selesai" {{ $consultation->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                    <option value="Ditolak" {{ $consultation->status == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                </select>
            </div>
            <div>
                <label for="internal_notes" class="block text-sm font-medium text-slate-700">Catatan Internal (Opsional)</label>
                <textarea name="internal_notes" id="internal_notes" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">{{ $consultation->internal_notes }}</textarea>
            </div>
        </div>
        <div class="flex justify-end gap-4 mt-6">
            <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 rounded-lg border-2 text-sm font-semibold hover:bg-slate-50">Kembali ke Dashboard</a>
            <button type="submit" class="px-4 py-2 rounded-lg bg-blue-700 text-white text-sm font-semibold hover:bg-blue-800">Simpan Perubahan</button>
        </div>
    </form>
</div>

{{-- PASTIKAN @endsection INI ADA DI PALING AKHIR --}}
@endsection