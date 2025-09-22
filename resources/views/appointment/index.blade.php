@extends('layouts.app')
@section('title', 'Manajemen Janji Temu')
@section('content')
<div class="max-w-7xl mx-auto p-6">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-navy mb-2">Manajemen Janji Temu</h1>
        <p class="text-gray-600">Kelola jadwal janji temu Anda dengan TIK POLRI</p>
    </div>
    
    @if(session('success'))
        <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid lg:grid-cols-3 gap-8">
        <div class="lg:col-span-1">
            <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6 sticky top-28">
                <h3 class="text-xl font-bold text-navy mb-4">Buat Janji Temu Baru</h3>
                <form action="{{ route('appointment.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="date" class="block text-sm font-semibold text-navy mb-2">Tanggal</label>
                        <input type="date" id="date" name="date" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-navy">
                    </div>
                    <div>
                        <label for="purpose" class="block text-sm font-semibold text-navy mb-2">Keperluan</label>
                        <textarea id="purpose" name="purpose" rows="4" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl" placeholder="Jelaskan keperluan Anda"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-gradient-to-r from-navy to-navy-dark text-white py-3 rounded-xl font-semibold">Kirim Permintaan</button>
                </form>
            </div>
        </div>
        
        <div class="lg:col-span-2">
            <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gradient-to-r from-navy to-navy-dark text-white">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-semibold">Tanggal</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold">Keperluan</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold">Status</th>
                                <th class="px-6 py-4 text-center text-sm font-semibold">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @forelse ($appointments as $item)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm">{{ \Carbon\Carbon::parse($item->date)->isoFormat('D MMMM YYYY') }}</td>
                                <td class="px-6 py-4 text-sm max-w-xs truncate">{{ $item->purpose }}</td>
                                <td class="px-6 py-4 text-sm">
                                    <span class="px-3 py-1 text-xs font-semibold rounded-full 
                                        @if($item->status == 'Menunggu') bg-yellow-100 text-yellow-800 @endif
                                        @if($item->status == 'Disetujui') bg-blue-100 text-blue-800 @endif
                                        @if($item->status == 'Ditolak') bg-red-100 text-red-800 @endif
                                        @if($item->status == 'Selesai') bg-green-100 text-green-800 @endif">
                                        {{ $item->status }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <form action="{{ route('appointment.destroy', $item) }}" method="POST" onsubmit="return confirm('Yakin ingin membatalkan janji temu ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800" title="Batalkan">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="px-6 py-12 text-center text-gray-500">
                                    Anda belum memiliki janji temu.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection