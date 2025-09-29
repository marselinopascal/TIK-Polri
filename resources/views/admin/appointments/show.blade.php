@extends('layouts.admin')
@section('title', 'Detail Janji Temu')
@section('content')
<div class="max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow-soft">
    <div class="flex justify-between items-start mb-6">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Detail Janji Temu</h1>
            <p class="text-slate-500">Pemohon: {{ $appointment->name }}</p>
        </div>
        <span class="px-3 py-1 text-sm font-semibold rounded-full bg-yellow-100 text-yellow-700">{{ $appointment->status }}</span>
    </div>

    <div class="space-y-4 border-t pt-6">
        <div class="grid grid-cols-3 gap-4">
            <dt class="text-sm font-medium text-slate-500">Tanggal Janji Temu</dt>
            <dd class="text-sm text-slate-900 col-span-2">{{ \Carbon\Carbon::parse($appointment->date)->isoFormat('dddd, D MMMM YYYY') }}</dd>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <dt class="text-sm font-medium text-slate-500">Keperluan</dt>
            <dd class="text-sm text-slate-900 col-span-2 whitespace-pre-wrap">{{ $appointment->purpose }}</dd>
        </div>
    </div>

    <form action="{{ route('admin.appointments.update', $appointment->id) }}" method="POST" class="border-t mt-6 pt-6">
        @csrf
        @method('PUT')
        <h2 class="text-lg font-semibold text-slate-800 mb-4">Update Status Janji Temu</h2>
        <div>
            <label for="status" class="block text-sm font-medium text-slate-700">Status</label>
            <select name="status" id="status" class="mt-1 block w-full max-w-xs rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                <option value="Menunggu" {{ $appointment->status == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                <option value="Disetujui" {{ $appointment->status == 'Disetujui' ? 'selected' : '' }}>Disetujui</option>
                <option value="Ditolak" {{ $appointment->status == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                <option value="Selesai" {{ $appointment->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
            </select>
        </div>
        <div class="flex justify-end gap-4 mt-6">
            <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 rounded-lg border-2 text-sm font-semibold hover:bg-slate-50">Kembali ke Dashboard</a>
            <button type="submit" class="px-4 py-2 rounded-lg bg-blue-700 text-white text-sm font-semibold hover:bg-blue-800">Simpan Perubahan</button>
        </div>
    </form> 
</div>
@endsection